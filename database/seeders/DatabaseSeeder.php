<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(CityRoomSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(LikeableSeeder::class);
//        $this->call(AddressSeeder::class);
    }
}
