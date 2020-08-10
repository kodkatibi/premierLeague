<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    protected $table = 'teams';
    protected $guarded = [];
    use SoftDeletes;

    /**
     * wonGames
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function wonGame()
    {
        return $this->hasMany('App\Models\Match', 'winner_team_id');
    }

    /**
     * allTeams with match details
     * @return \Illuminate\Support\Collection
     */
    public static function allTeams()
    {
        return DB::table('teams')->
        leftJoin('matches', function ($join) {
            $join->on('matches.host_team_id', '=', 'teams.id')->orOn('matches.visitor_team_id', '=', 'teams.id');
        })->
        get();
    }




}
