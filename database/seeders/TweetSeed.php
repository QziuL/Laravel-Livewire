<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TweetSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // criar 3 tweets e vincular a 3 users
        Tweet::factory(3)->state(new Sequence(
                            ['user_id' => 1],
                            ['user_id' => 2],
                            ['user_id' => 3],
                        ))
                        ->create();
    }
}
