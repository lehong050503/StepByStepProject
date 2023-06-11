<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('products')->insert([
            [
            'name'=>'LG1 mobile',
            'price'=>'220',
            'category'=>'mobile',
            'description'=>'Tặng họa',
            'gallery'=>'https://i.pinimg.com/564x/07/1c/e6/071ce6b845c4a0238d58c4a847da9452.jpg'
            ],
            [
                'name'=>'LG2 mobile2',
                'price'=>'500',
                'category'=>'tivi',
                'description'=>'Meme là gì? 300+ meme hài, chất nhất quả đất để bạn comment dạo thả ga',
                'gallery'=>'https://i.pinimg.com/564x/ce/52/b9/ce52b9011e47103aacaff18a2329b3f5.jpg'
            ],
            [
                'name'=>'LG3 mobile3',
                'price'=>'290',
                'category'=>'tivi',
                'description'=>'AAAAAAAAA MAU NIKAH SAMA JAEMIN AAAAAAAA',
                'gallery'=>'https://i.pinimg.com/564x/48/cd/c0/48cdc0dbc5448d64be600ee19203fa1a.jpg'
            ],
            [
                'name'=>'LG4 mobile4',
                'price'=>'400',
                'category'=>'mobile',
                'description'=>'Mẫu Sloe Video - Template',
                'gallery'=>'https://i.pinimg.com/736x/50/a0/90/50a09063538f4133393bbc324204cd6d.jpg'
            ],

        ]);
    }
}
