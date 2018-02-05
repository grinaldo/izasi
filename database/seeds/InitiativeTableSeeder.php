<?php

use Illuminate\Database\Seeder;
use App\Model\Initiative as Model;

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
            'order'           => 1,
            'name'            => 'Advocacy', 
            'description'     => 'Support to advocate the government policy to steel industry, especially that create impact and issues to the coated steel industry.',
            'name_ina'        => 'Advokasi', 
            'description_ina' => 'Mendukung untuk mengadvokasi kebijakan pemerintah terhadap industri baja, terutama yang menciptakan dampak dan permasalahan pada industri baja lapis.',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => 2,
            'name'            => 'Education', 
            'description'     => 'Educate all stakeholders in the importance of in-country coated steel industry in order to strengthen the national and economic growth.',
            'name_ina'        => 'Education', 
            'description_ina' => 'Mendidik semua pemangku kepentingan mengenai pentingnya industri baja lapis baja dalam negeri untuk memperkuat pertumbuhan ekonomi dan nasional.',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => 3,
            'name'            => 'Green Industry', 
            'description'     => 'Improve the green industry standard in regarding coated steel operations; i.e. energy efficiency and environmental management.',
            'name_ina'        => 'Industri Hijau', 
            'description_ina' => 'Memperbaiki standar industri hijau dalam hal operasi baja lapis; yaitu efisiensi energi, dan pengelolaan lingkungan.',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => 4,
            'name'            => 'Promotion', 
            'description'     => 'Promote the competitive use of coated steel in Indonesia and the technological advances in which create health and safety of its workspace and environment.',
            'name_ina'        => 'Promosi', 
            'description_ina' => 'Mempromosikan penggunaan baja lapis yang kompetitif di Indonesia dan kemajuan teknologi yang menciptakan kesehatan dan keselamatan kerja dan lingkungannya.',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => 5,
            'name'            => 'Networking', 
            'description'     => 'Link to other industry associations, both national and regional.',
            'name_ina'        => 'Jaringan', 
            'description_ina' => 'Menjadi jaringan ke asosiasi industri lainnya, baik nasional maupun regional.',
            'published'       => Carbon::now()
        ]);
        $model->save();
    }
}
