<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['categories' => '商品のお届けについて'],
            ['categories' => '商品の交換について'],
            ['categories' => '商品トラブル'],
            ['categories' => 'ショップへのお問い合わせ'],
            ['categories' => 'その他'],
        ];

        DB::table('categories')->insert($categories);

        Contact::factory()->count(35)->create();
    }
}
