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
            'name'        => 'Simon Andrew Linge', 
            'title'       => 'Chairman',
            'published'   => Cabon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '2',
            'name'        => 'Seruni Rhea Sianipar', 
            'title'       => 'Executive Director',
            'published'   => Cabon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '3',
            'name'        => 'Henry Setiawan', 
            'title'       => 'Co - Chairman 1',
            'published'   => Cabon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => '4',
            'name'        => 'Handaja Sutanto', 
            'title'       => 'Co -Chairman 2',
            'published'   => Cabon::now()
        ]);
        $model->save();
    }
}
