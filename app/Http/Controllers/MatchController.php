<?php

namespace App\Http\Controllers;

use App\Models\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function playGame()
    {
        $lastMatches = Match::whereNull('winner_team_id')->orderBy('id', 'desc')->take(2)->get();

        foreach ($lastMatches as $match) {
            $var=Match::find($match->id)->update(['host_total_goal' => rand(0, 10), 'visitor_total_goal' => rand(0, 10)]);
          dd($var->visitor_total_goal);
        }
    }
}
