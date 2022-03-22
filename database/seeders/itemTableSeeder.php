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
        //

        $item = new item([
            'img' => 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quod.',
            'cost_price' => 10,
            'sell_price' => 15
        ]);
        $item->save();

        $item = new item([
            'img' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 10,
            'sell_price' => 15
        ]);
        $item->save();

        $item = new item([
            'img' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 10,
            'sell_price' => 15
        ]);
        $item->save();

        $item = new item([
            'img' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 10,
            'sell_price' => 15
        ]);
        $item->save();

        $item = new item([
            'img' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 10,
            'sell_price' => 15
        ]);
        $item->save();

        $item = new item([
            'img' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 10,
            'sell_price' => 15
        ]);
        $item->save();
    }

}
