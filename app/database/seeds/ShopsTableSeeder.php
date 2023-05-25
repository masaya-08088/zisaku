<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name' => '渋谷店',
            'address' => '東京都渋谷区',
            'image' => '投稿画像',
            'comment' => 'ここのお店は美味しい',
            'longitude' => '緯度',
            'atitude' =>'経度',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
    }
}
