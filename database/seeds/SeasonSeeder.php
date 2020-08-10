<?php

use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('seasons')->insert(
            [
                's_name' => 'Big Season',
                's_start_at' => \Carbon\Carbon::parse(\Carbon\Carbon::now()->year . '-01-01'),
                's_end_at' => \Carbon\Carbon::parse(\Carbon\Carbon::now()->year . '-12-31 23:59:59'),
                'created_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
