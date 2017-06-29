<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeamsTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
