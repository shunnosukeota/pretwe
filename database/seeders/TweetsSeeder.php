<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tweet;
use App\Models\Image;

class TweetsSeeder extends Seeder
{
    
    public function run()
    {
        Tweet::factory()->count(30)->create();
    }
}
