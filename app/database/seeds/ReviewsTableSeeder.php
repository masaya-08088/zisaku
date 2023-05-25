<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
        'user_id' => 1,
        'shop_id' => 1,
        'title' => 'タイトル作成',
        'image' => '画像',
        'points' => '5',
        'episode' =>'ここの商品はとても良い',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ]);
    }
}
