<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketPlaceManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('market_place_managers')->delete();

        DB::table('market_place_managers')->truncate();

        DB::table('market_place_managers')->insert(
            [
                [
                    'email' => 'Admin@gmail.com',
                    'so_dien_thoai' => '0123456789',
                    'password' => bcrypt('123456'),
                ]
            ]

        );
    }
}
