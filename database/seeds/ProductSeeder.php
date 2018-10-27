<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cat tower
        DB::table("products")->insert ([
            "name" => "キャットタワー CTグリーン",
            "price" => 16524,
            "image" => "CTグリーン135㎝16524円.jpg",
            "description" => "135cmのキャットタワーです\n色: グリーン",
        ]);
        DB::table("products")->insert ([
            "name" => "キャットタワー CTネイビー",
            "price" => 11400,
            "image" => "CTネイビー183cm11400円.jpg",
            "description" => "183cmのキャットタワーです\n色: ネイビー",
        ]);
        DB::table("products")->insert ([
            "name" => "キャットタワー CTねこたま",
            "price" => 8640,
            "image" => "CTねこたま101cm8640円.jpg",
            "description" => "101cmのキャットタワーです\n色: ねこたま",
        ]);
        DB::table("products")->insert ([
            "name" => "キャットタワー CTビッコロ",
            "price" => 16740,
            "image" => "CTピッコロ85cm16740円.jpg",
            "description" => "85cmmのキャットタワーです\n色: ビッコロ",
        ]);
        DB::table("products")->insert ([
            "name" => "キャットタワー CTベージュ",
            "price" => 11400,
            "image" => "CTベージュ215cm11400円.jpg",
            "description" => "215mのキャットタワーです\n色: ベージュ",
        ]);DB::table("products")->insert ([
            "name" => "キャットタワー CTレッド",
            "price" => 6480,
            "image" => "CTレッド118cm6480円.jpg",
            "description" => "118cmmのキャットタワーです \n色: レッド",
        
        // cat toilet
        ]);
        DB::table("products")->insert ([
            "name" => "アイリスオーヤマ 上から猫トイレ ホワイト",
            "price" => 2484,
            "image" => "アイリスオーヤマ上から猫トイレホワイト2484円.jpg",
            "description" => "アイリスオーヤマのキャットイレです\n色: ホワイト",
        ]);
        DB::table("products")->insert ([
            "name" => "ファンタジーワールドクリーンコーナートイレ レット",
            "price" => 1944,
            "image" => "ファンタジーワールドクリーンコーナートイレレッド1944円.jpg",
            "description" => "ファンタジーなトイレコーナーです\n色: レッド",
        ]);
        DB::table("products")->insert ([
            "name" => "散らかりにくいネコトイレフ ゙ルー",
            "price" => 3600,
            "image" => "散らかりにくいネコトイレブルー3600円.jpg",
            "description" => "散らかりにくいネコトイレです\n色: ブルー",
        ]);
        DB::table("products")->insert ([
            "name" => "散らかりにくいネコトイレ ホワイトxブラウン",
            "price" => 3600,
            "image" => "散らかりにくいネコトイレホワイト×ブラウン3600円.jpg",
            "description" => "散らかりにくいネコトイレです\n色: ホワイトxブラウン",
        ]);
        DB::table("products")->insert ([
            "name" => "楽ちん猫トイレ オレンジ",
            "price" => 3980,
            "image" => "楽ちん猫トイレオレンジ3980円.jpg",
            "description" => "楽ちん猫トイレです\n色: オレンジ",
        ]);
        DB::table("products")->insert ([
            "name" => "楽ちん猫トイレ グリーン",
            "price" => 3980,
            "image" => "楽ちん猫トイレグリーン3980円.jpg",
            "description" => "楽ちん猫トイレです\n色: グリーン",
        ]);

        // cat food
        DB::table("products")->insert ([
            "name" => "キャットスマック",
            "price" => 745,
            "image" => "キャットスマック2200g745円.jpg",
            "description" => "おいしいキャットフードです\n容量: 2200g",
        ]);
        DB::table("products")->insert ([
            "name" => "キャネットチップ",
            "price" => 808,
            "image" => "キャネットチップ2700g808円.jpg",
            "description" => "おいしいキャットフードです\n容量: 2700g",
        ]);
        DB::table("products")->insert ([
            "name" => "セブンのCF",
            "price" => 365,
            "image" => "セブンのCF1000g365円.jpg",
            "description" => "おいしいキャットフードです\n容量: 1000g",
        ]);
        DB::table("products")->insert ([
            "name" => "ニュートロジャパンナチュラルチョイス 室内猫用 アダルトサーモン",
            "price" => 1025,
            "image" => "ニュートロジャパンナチュラルチョイス室内猫用アダルトサーモン500g1025円.jpg",
            "description" => "おいしいキャットフードです\n容量: 500g",
        ]);
        DB::table("products")->insert ([
            "name" => "ねこ元気毛玉ケア",
            "price" => 507,
            "image" => "ねこ元気毛玉ケア900g507円.jpg",
            "description" => "おいしいキャットフードです\n容量: 900g",
        ]);
        DB::table("products")->insert ([
            "name" => "ヒルズのサイエンスダイエット",
            "price" => 1354,
            "image" => "ヒルズのサイエンスダイエット1800g1354円.jpg",
            "description" => "おいしいキャットフードです\n容量: 1800g",
        ]);

        // cat plate
        DB::table("products")->insert ([
            "name" => "自動給水器 イエロー",
            "price" => 2290,
            "image" => "自動給水器イエロー2290円.jpg",
            "description" => "自動給水器です\n色: イエロー",
        ]);
        DB::table("products")->insert ([
            "name" => "自動給水器 グリーン",
            "price" => 2290,
            "image" => "自動給水器グリーン2290円.jpg",
            "description" => "自動給水器です\n色: グリーン",
        ]);
        DB::table("products")->insert ([
            "name" => "自動給水器 ピンク",
            "price" => 2290,
            "image" => "自動給水器ピンク2290円.jpg",
            "description" => "自動給水器です\n色: ピンク",
        ]);
        DB::table("products")->insert ([
            "name" => "自動給水器 ブルー",
            "price" => 2290,
            "image" => "自動給水器ブルー2290円.jpg",
            "description" => "自動給水器です\n色: ブルー",
        ]);
        DB::table("products")->insert ([
            "name" => "自動給水器 ベージュ",
            "price" => 2290,
            "image" => "自動給水器ベージュ2290円.jpg",
            "description" => "自動給水器です\n色: ベージュ",
        ]);
    }
}
