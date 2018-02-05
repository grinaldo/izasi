<?php

use Illuminate\Database\Seeder;
use App\Model\Member as Model;

use Carbon\Carbon;

class MemberTableSeeder extends Seeder
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
            'name'        => 'Chariman', 
            'title'       => '',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '2',
            'name'        => 'Executive Director', 
            'title'       => '',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '3',
            'name'        => 'Co - Chairman 1', 
            'title'       => '',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '4',
            'name'        => 'Co - Chairman 2', 
            'title'       => '',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '5',
            'name'        => 'Government & Policy', 
            'title'       => '',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '6',
            'name'        => 'Technical & Development', 
            'title'       => '',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '7',
            'name'        => 'Communication & Media', 
            'title'       => '',
            'published'   => Carbon::now()
        ]);
        $model->save();
    }
}
