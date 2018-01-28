<?php

use Illuminate\Database\Seeder;
use App\Model\Mission as Model;

use Carbon\Carbon;

class MissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'order'       => '1',
            'name'        => 'Vision 1', 
            'description' => 'Seek government action to support, strengthen and develop the Indonesia\'s coated steel industry',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '2',
            'name'        => 'Vision 2', 
            'description' => 'Educate public about zinc-alumunium steel as a material of choice in construction application and manufacturing to expand markets for steel',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '3',
            'name'        => 'Vision 3', 
            'description' => 'Raise awareness about steel producer capability to produce green product that can be recycled, to be able to contribute to reduce world gas emission',
            'published'   => Carbon::now()
        ]);
        $model->save();
    }
}
