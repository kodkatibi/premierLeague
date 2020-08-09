<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchTeam extends Model
{
    protected $table = 'match_teams';
    protected $guarded = [];
    use SoftDeletes;
}
