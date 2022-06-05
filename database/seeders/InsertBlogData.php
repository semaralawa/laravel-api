<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertBlogData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => 'Blogs',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_user_id' => 1
        ]);
    }
}
