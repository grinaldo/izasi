<?php

use Illuminate\Database\Seeder;
use App\Model\Member as Model;

use Carbon\Carbon;

class InitiativeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'order'       => 1,
            'name'        => 'Advocacy', 
            'description' => 'Support to advocate the government policy to steel industry, especially that create impact and issues to the coated steel industry.',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => 2,
            'name'        => 'Education', 
            'description' => 'Educate all stakeholders in the importance of in-country coated steel industry in order to strengthen the national and economic growth.',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => 3,
            'name'        => 'Green Industry', 
            'description' => 'Improve the green industry standard in regarding coated steel operations; i.e. energy efficiency and environmental management.',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => 4,
            'name'        => 'Promotion', 
            'description' => 'Promote the competitive use of coated steel in Indonesia and the technological advances in which create health and safety of its workspace and environment.',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'       => 5,
            'name'        => 'Networking', 
            'description' => 'Link to other industry associations, both national and regional.',
            'published'   => Carbon::now()
        ]);
        $model->save();
    }
}
