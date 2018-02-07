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
            'image'           => 'images/banner-1.jpg',
            'order'           => 2,
            'name'            => 'BROUGHT TOGETHER', 
            'description'     => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'name'            => 'MEMPERTEMUKAN', 
            'description'     => 'Industri Baja Lapis Alumunium Seng di Indonesia',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'           => 'images/banner-3.jpg',
            'order'           => 1,
            'name'            => 'BROUGHT TOGETHER', 
            'description'     => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'name_ina'        => 'MENGHADIRKAN', 
            'description_ina' => 'Industri Zinc - Alumunium Coated Steel Industries di Indonesia',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'           => 'images/banner-4.jpg',
            'order'           => 3,
            'name'            => 'BROUGHT TOGETHER', 
            'description'     => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'name_ina'        => 'MENGHADIRKAN', 
            'description_ina' => 'Industri Zinc - Alumunium Coated Steel Industries di Indonesia',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'           => 'images/banner-6.jpg',
            'order'           => 4,
            'name'            => 'BROUGHT TOGETHER', 
            'description'     => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'name_ina'        => 'MENGHADIRKAN', 
            'description_ina' => 'Industri Zinc - Alumunium Coated Steel Industries di Indonesia',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'image'           => 'images/banner-9.jpg',
            'name'            => 'BROUGHT TOGETHER', 
            'order'           => 5,
            'description'     => 'The Zinc - Alumunium Coated Steel Industries in Indonesia',
            'name_ina'        => 'MENGHADIRKAN', 
            'description_ina' => 'Industri Zinc - Alumunium Coated Steel Industries di Indonesia',
            'published'       => Carbon::now()
        ]);
        $model->save();
    }
}
