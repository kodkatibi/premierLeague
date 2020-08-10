<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Match extends Model
{
    protected $table = 'matches';
    protected $guarded = [];
    use SoftDeletes;


    /**
     * @param int $id
     * @return mixed
     */
    public static function allMathesbyTeam(int $id)
    {
        return Match::where('host_team_id', $id)->orWhere('visitor_team_id', $id)->get();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public static function lostGame(int $id)
    {
        return Match::where('host_team_id', $id)->orWhere('visitor_team_id', $id)->where('winner_team_id', '!=', 0)->get()->count();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public static function drawGame(int $id)
    {
        return Match::where('host_team_id', $id)->orWhere('visitor_team_id', $id)->where('winner_team_id', '==', 0)->get()->count();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public static function totalGame(int $id)
    {
        return Match::where('host_team_id', $id)->orWhere('visitor_team_id', $id)->get()->count();
    }



}
