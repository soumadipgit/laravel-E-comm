<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            [
            'name' => 'Iphone-15 pro max',
            'price' => '200001741',
            'category' => 'mobile',
            'description'=>"smart phone",
            'gallery'=>'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-14-pro-model-select-202209-6-7inch?wid=2560&hei=1440&fmt=jpeg&qlt=95&.v=1660754175027'
            ],
            [
                'name' => 'Iphone-16 pro max',
                'price' => '20575000',
                'category' => 'mobile',
                'description'=>"smart phone",
                'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-79729978,imgsize-200,width-1200/79729978.jpg'
            ],
            [
                'name' => 'Iphone-17 pro max',
                'price' => '5000000',
                'category' => 'mobile',
                'description'=>"smart phone",
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqRWeHp5zqJ-ONyv3REWeHaNJrgH-bxafAXw&usqp=CAU'
            ]
        ]);
    }
}
