<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jhone Wickramasinghe',
            'email' => 'jhone@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
