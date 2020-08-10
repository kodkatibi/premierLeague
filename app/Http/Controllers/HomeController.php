<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Season;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        session(['season_id' => 0]);

        if (session('season_id') == null) {
            $season = Season::where('s_start_at', '<', Carbon::now())->where('s_end_at', '>', Carbon::now())->first();
            if ($season != null) {
                session()->forget('season_id');
                session(['season_id' => $season->id]);
            }

        }

        if (Match::whereNull('winner_team_id')->first() == null) {

            $teams = Team::all('id')->toArray();
            $totalMatch = Match::all()->count() % 4;

            Match::create([

                'host_team_id' => $teams[$totalMatch]['id'],
                'visitor_team_id' => $teams[$totalMatch + 1]['id'],
                'season_id' => session('season_id'),


            ]);
            Match::create([
                'host_team_id' => $teams[$totalMatch + 2]['id'],
                'visitor_team_id' => $teams[$totalMatch + 3]['id'],
                'season_id' => session('season_id')
            ]);


        }


    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index()
    {

        $data = array(
            'teams' => Team::all(),
            'match' => Match::whereNull('winner_team_id')->orderBy('id', 'desc')->take(2)->get()
        );

        return view('index', $data);
    }
}
