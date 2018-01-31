<?php

use Illuminate\Database\Seeder;
use App\Model\Banner as Model;
use Carbon\Carbon;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'image'       => 'images/banner-1.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'       => 'images/banner-2.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'       => 'images/banner-3.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'       => 'images/banner-4.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'       => 'images/banner-5.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'       => 'images/banner-6.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'       => 'images/banner-7.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'       => 'images/banner-8.jpg',
            'name'        => 'BROUGHT TOGETHER', 
            'description' => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'published'   => Carbon::now()
        ]);
        $model->save();
    }
}
