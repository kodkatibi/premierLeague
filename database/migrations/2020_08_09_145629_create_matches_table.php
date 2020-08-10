<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('host_team_id');
            $table->bigInteger('visitor_team_id');
            $table->bigInteger('season_id');
            $table->timestamp('match_date')->nullable();
            $table->integer('host_total_goal')->nullable();
            $table->integer('visitor_total_goal')->nullable();
            $table->bigInteger('winner_team_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
