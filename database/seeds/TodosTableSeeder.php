<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('todos')->truncate();
        DB::table('todos')->insert([
        [
            'title'     =>'Laravel Lessonを終わらせる',
            'created_at'=>Carbon::create(2018, 1, 1),
            'updated_at'=>Carbon::create(2018, 1, 4),
            'user_id' => Carbon::create(1),
        ],
        [
            'title'     =>'レビューに向けて理解を深める',
            'created_at'=>Carbon::create(2018, 2, 1),
            'upsdate_at'=>Carbon::create(2018, 2, 5),
            'user_id' => Carbon::create(1),
        ],
        ]);
    }
}
