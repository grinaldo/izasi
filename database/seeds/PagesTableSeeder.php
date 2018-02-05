<?php

use Illuminate\Database\Seeder;
use App\Model\Page as Model;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'name'              => 'about-static', 
            'title'             => 'About Us',
            'short_title'       => 'The Zinc - Auluminium Coated Steel Industries in Indonesia',
            'short_description' => '-', 
            'description'       => 'In 2013, IZASI association was built on the initiative of three coated steel industries, PT. NS Bluescope Indonesia, PT. Sarana Central Bajatama, Tbk, and PT. Sunrise Steel are as founders and producers of Zinc - Aluminium - Coated Sheet. Total labor in the country is more than 1,200 people directly and indirectly over 24,000 people. There are more than 500 Roll Former (RF) spread throughout Indonesia with employment upwards of more than 12,000 people. We process good quality cold rolled coil through coating process with zinc and aluminium to be finished product which is Zinc Aluminium coated-sheet. It can be applied for basic material construction in most aspects of life such as railways, oil & gas trans, building automotive, ship, construction, household, etc.',
        ]);
        $model->save();

        $model = new Model([
            'name'              => 'address-static', 
            'title'             => 'Company Address',
            'short_title'       => 'BRI II Building 9th Floor Suite 902. Jl Jendral Sudirman Kav 44-46, Jakarta 10210 - Indonesia',
            'short_description' => '-', 
            'description'       => '<p>BRI II Building 9th Floor Suite 902. <br> Jl Jendral Sudirman Kav 44-46, Jakarta 10210 - Indonesia </p>',
        ]);
        $model->save();

        $model = new Model([
            'name'              => 'members-static', 
            'title'             => 'Members Image',
            'image'             => 'images/new-board.png',
            'short_title'       => '-',
            'short_description' => '-', 
            'description'       => '-',
        ]);
        $model->save();

        $model = new Model([
            'name'              => 'milestone-static', 
            'title'             => 'Milestone Image',
            'image'             => 'images/milestone.png',
            'short_title'       => '-',
            'short_description' => '-', 
            'description'       => '-',
        ]);
        $model->save();

        $model = new Model([
            'name'              => 'strategic-static', 
            'title'             => 'Strategic Image',
            'image'             => 'images/pillar-big.png',
            'short_title'       => '-',
            'short_description' => '-', 
            'description'       => '-',
        ]);
        $model->save();

        $model = new Model([
            'name'              => 'map-static', 
            'title'             => 'Google Coordinate',
            'image'             => '',
            'short_title'       => '-',
            'short_description' => '-6.217279,106.813875', 
            'description'       => '-6.217279,106.813875',
        ]);
        $model->save();
    }
}
