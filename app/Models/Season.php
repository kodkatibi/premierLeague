<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Season extends Model
{
    protected $table = 'seasons';
    protected $guarded = [];
    use SoftDeletes;
}
