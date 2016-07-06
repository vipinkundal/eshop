<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product =new \App\Product([
        	'imagePath' => 'images/lcd.jpg',
        	'title' => 'Lcd Display',
        	'description' => 'Very Nice product to see in better quality',
        	'price' => 50
        	]);
        $product ->save();

         $product =new \App\Product([
        	'imagePath' => 'images/cdrom-drive.jpg',
        	'title' => 'CdRom Drive',
        	'description' => 'Run your cd with this cool stuff',
        	'price' => 20
        	]);
        $product ->save();


         $product =new \App\Product([
        	'imagePath' => 'images/charger.jpg',
        	'title' => 'Laptop Charger',
        	'description' => 'Charge your device with this charger and work on a go',
        	'price' => 10
        	]);
        $product ->save();

         $product =new \App\Product([
        	'imagePath' => 'images/hard-drive.jpg',
        	'title' => 'Hard Drive',
        	'description' => 'Save your important data on this drive',
        	'price' => 40
        	]);
        $product ->save();

         $product =new \App\Product([
        	'imagePath' => 'images/mouse.jpg',
        	'title' => 'Mouse',
        	'description' => 'Very cool mouse which work like charm',
        	'price' => 12
        	]);
        $product ->save();

         $product =new \App\Product([
        	'imagePath' => 'images/mobile.jpg',
        	'title' => 'Mobile Phone',
        	'description' => 'Use this mobile phone to get connected and communicate with your friends',
        	'price' => 120
        	]);
        $product ->save();

    }
}
