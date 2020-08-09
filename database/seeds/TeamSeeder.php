<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('teams')->insert([
            [
                'team_name' => 'Chelsea',
                'team_slug' => \Illuminate\Support\Str::slug('Chelsea'),
                'team_logo' => 'https://upload.wikimedia.org/wikipedia/tr/thumb/2/27/Chelsea_FC_arma.svg/768px-Chelsea_FC_arma.svg.png',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'team_name' => 'Arsenal',
                'team_slug' => \Illuminate\Support\Str::slug('Arsenal'),
                'team_logo' => 'https://upload.wikimedia.org/wikipedia/tr/6/66/Arsenal_FC_125._y%C4%B1l_logosu.png',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'team_name' => 'Manchester City',
                'team_slug' => \Illuminate\Support\Str::slug('Manchester City'),
                'team_logo' => 'https://upload.wikimedia.org/wikipedia/tr/thumb/2/27/Chelsea_FC_arma.svg/768px-Chelsea_FC_arma.svg.png',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'team_name' => 'Liverpool',
                'team_slug' => \Illuminate\Support\Str::slug('Liverpool'),
                'team_logo' => 'https://upload.wikimedia.org/wikipedia/tr/thumb/2/27/Chelsea_FC_arma.svg/768px-Chelsea_FC_arma.svg.png',
                'created_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
