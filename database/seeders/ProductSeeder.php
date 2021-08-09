<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('products')->insert([
    
          [
            'name' => 'Apple iphone 11 pro',
            'price'=>'24000',
            'discription'=>'Apple iPhone 11 Pro is powered by the Apple A13 Bionic processor. The smartphone comes with a 5.8 inches Super Retina XDR OLED capacitive touchscreen and 1125 x 2436 pixels resolution.',
            'category'=>'Smart phone',
            'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2019/09/Apple-iPhone-11-Pro.jpg',

            
          ],
          [
            'name' => 'Instax Mini 11 Instant Photo Camera',
            'price'=>'20000',
            'discription'=>'Selfies & Close-Ups Never Looked Better! Simply pull out the lens to instantly switch to Selfie Mode. Use Selfie mode to shoot a subject 30 to 50cm away so you can get a clear close-up shot every time.',
            'category'=>'Camera',
            'gallery'=>'https://www.noelleeming.co.nz/shop/content/images/products/189/189758.jpg',

            
          ],
          [
            'name' => '16 inch Macbook pro',
            'price'=>'32000',
            'discription'=>'2.6GHz 6-core 9th-generation Intel Core i7 processor
            Turbo Boost up to 4.5GHz
            AMD Radeon Pro 5300M with 4GB of GDDR6 memory',
            'category'=>'Laptop',
            'gallery'=>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp16touch-space-select-201911?wid=904&hei=840&fmt=jpeg&qlt=80&.v=1572825197207',

            
          ],
          [
            'name' => 'Sony bravia KDL',
            'price'=>'320000',
            'discription'=>'43 inch.Full HD',
            'category'=>'Smart Tv',
            'gallery'=>'https://cdn.alzashop.com/ImgW.ashx?fd=f16&cd=WS1018j',

            
          ],
          [
            'name' => 'LG 668 LITER SIDE BY SIDE REFRIGERATOR MATT BLACK',
            'price'=>'850000',
            'discription'=>'InstaView Door-in-Door™
                      Inverter Linear Compressor
                      Door Cooling+
                      Hygiene FRESH+™',
            'category'=>'Refridgeretor',
            'gallery'=>'https://www.butterflygroupbd.com/media/catalog/product/cache/65c39cc83905c3b1d2d2bf926bb9de08/g/s/gs-x6010mc-side-by-side-refrigerators-z2_1.jpg'

            
          ]
        ]);
    }
}
