<?php

namespace Database\Seeders;
use App\Models\item;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class itemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Item([

            'img_Path' => 'https://i.insider.com/5c799c56eb3ce834ad57b632?width=750&format=jpeg&auto=webp',
            
            'title' => 'Harry Potter',
            
            'description' => 'Lorem ipsum dolor sit amet,
            consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. ',
            
            'cost_price' => 10,
            
            'sell_price' => 15,

            'discontinued' => 1,
            
            'category_id' => 1,
            
        ]);
            $item->save();
    }

}
