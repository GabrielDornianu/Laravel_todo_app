<?php

use Illuminate\Database\Seeder;

class WorktasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Worktasks', 7)->create();
    }
}
