<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //$this->call('Posts_seeder');

        Model::reguard();
    }
}
class Posts_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->delete();

        DB::table('question')->insert([
            'title' => 'Post 1',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 2',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 3',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 4',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 5',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 6',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 7',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 8',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 9',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 10',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 11',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 12',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 13',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 14',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 15',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 16',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 17',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 18',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 19',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);
        DB::table('question')->insert([
            'title' => 'Post 20',
            'content' => 'hhhhhh',
            'user_id' => '1'
        ]);


    }
}
