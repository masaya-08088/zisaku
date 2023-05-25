<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ViolationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('violations')->insert([
            'user_id' => 1,
            'review_id' => 1,
            'text' => 'コメント内容',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
    }
}
