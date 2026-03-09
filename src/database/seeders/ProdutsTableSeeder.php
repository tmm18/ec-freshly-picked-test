<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products =[
            [
            'name' => 'キウイ',
            'price' => 800,
            'image' => 'img/kiwi.png',
            'description' => 'キウイは甘みと酸味のバランスが絶妙なフルーツです。'
        ], 
            [
            'name' => 'ストロベリー',
            'price' => 1200,
            'image' => 'img/strawberry.png',
            'description' => '大人から子供まで大人気のストロベリー'
        ],
            [
                'name' => 'オレンジ',
                'price' => 850,
                'image' => 'img/orange.png',
                'description' => '当店では酸味と甘みのバランスが抜群のネーブルオレンジを使用しています'
            ],
            [
                'name' => 'スイカ',
                'price' => 700,
                'image' => 'img/watermelon.png',
                'description' => '甘くてシャリシャリ食感が魅力のスイカ。'
            ],
            [
                'name' => 'ピーチ',
                'price' => 1000,
                'image' => 'img/peach.png',
                'description' => '豊潤な香りととろけるような甘さが魅力のピーチ。'
            ],
            [
                'name' => 'シャインマスカット',
                'price' => 1400,
                'image' => 'img/muscat.png',
                'description' => '爽やかな香りと上品な甘みが特長的なシャインマスカット'
            ],
            [
                'name' => 'パイナップル',
                'price' => 800,
                'image' => 'img/pineapple.png',
                'description' => '甘酸っぱさとトロピカルな香りが特徴のパイナップル。'
            ],
            [
                'name' => 'ブドウ',
                'price' => 1100,
                'image' => 'img/grapes.png',
                'description' => 'ブドウの中でも人気の高い国産の「巨峰」を使用しています。'
            ],
            [
                'name' => 'バナナ',
                'price' => 600,
                'image' => 'img/banana.png',
                'description' => '低カロリーでありながら栄養満点のため、ダイエット中の方にもおすすめの商品です。'
            ],
            [
                'name' => 'メロン',
                'price' => 900,
                'image' => 'img/melon.png',
                'description' => '香りがよくジューシーで品のある甘さが人気のメロンスムージー。'
            ]
        ];

        DB::table('products')->insert($products);

    }
}
