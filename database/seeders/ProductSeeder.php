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
        DB::table('products')->insert([
            [
                'name'=>'Redmi Note 10',
                'price'=>'2500000',
                'description'=>'hp Redmi',
                'category'=>'smartphone',
                'gallery'=>"https://www.tokohapedia.co.id/storage/media/RDZHeUkuyiFESQN9cVpF7HfpD7jXr6nAaMdHMzmV.jpeg"
            ],
            [
                'name'=>'Oppo Reno 6',
                'price'=>'5500000',
                'description'=>'hp oppo',
                'category'=>'smartphone',
                'gallery'=>"https://www.begawei.com/wp-content/uploads/2021/05/Oppo-Reno-6-5G.png"
            ],
            [
                'name'=>'Poco F3',
                'price'=>'5000000',
                'description'=>'hp Poco',
                'category'=>'smartphone',
                'gallery'=>"https://i01.appmifile.com/webfile/globalimg/id/cms/0A2E65E9-79CD-0C36-0248-D4856F41FB25.jpg"
            ],
            [
                'name'=>'Samsung S20 FE',
                'price'=>'6500000',
                'description'=>'hp samsung',
                'category'=>'smartphone',
                'gallery'=>"https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//91/MTA-10514934/samsung_samsung_galaxy_s20_fe_8-128gb_-_cloud_white_full01_ccrqycz6.jpg"
            ],
            
        ]);
    }
}
