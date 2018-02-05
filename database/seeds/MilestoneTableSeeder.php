<?php

use Illuminate\Database\Seeder;
use App\Model\Milestone as Model;

use Carbon\Carbon;

class MilestoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'year'        => '1989',
            'name'        => 'BHP Steel Building Product', 
            'name_ina'    => 'BHP Steel Building Product', 
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'year'        => '1994',
            'name'        => 'Metal Coating Line 1 & Painting Line Established in Indonesia', 
            'name_ina'    => 'Metal Coating Line 1 & Painting Line Established in Indonesia', 
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'year'        => '1996',
            'name'        => 'PT SaranaCentral Bajatama. Tbk Established', 
            'name_ina'    => 'PT SaranaCentral Bajatama. Tbk Established', 
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'year'        => '2003',
            'name'        => 'Bluescope Steel Indonesia Established', 
            'name_ina'    => 'Bluescope Steel Indonesia Established', 
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'year'        => '2008',
            'name'        => 'PT Sunrise Steel Established', 
            'name_ina'    => 'PT Sunrise Steel Established', 
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'year'        => '2011',
            'name'        => 'Expanded with Metal Coating line 2', 
            'name_ina'    => 'Expanded with Metal Coating line 2', 
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'year'        => '2017',
            'name'        => 'Expanded with Zinc-Aluminium Line 2', 
            'name_ina'    => 'Expanded with Zinc-Aluminium Line 2', 
            'published'   => Carbon::now()
        ]);
        $model->save();
    }
}
