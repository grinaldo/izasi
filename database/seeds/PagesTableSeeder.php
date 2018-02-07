<?php

use Illuminate\Database\Seeder;
use App\Model\Page as Model;
use Carbon\Carbon;

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
            'description'       => 'In 2013, IZASI association was built on the initiative of three coated steel industries. PT. NS Bluescope Indonesia, PT. Sarana Central Bajatama, Tbk, and PT. Sunrise Steel are both as founder and producer of Galvalum-Coated Sheet. The total labor in the country is more than 1,200 people directly and indirectly over 24,000 people. IZASI is producer of coated steel through coating process with zinc and aluminum. It can be applied for basic material constructions in most aspects of life such as railways, oil &amp; gas trans, building, automotive, ship, construction, household, etc.',
            'title_ina'             => 'Tentang Kami',
            'short_title_ina'       => 'Industri Zinc - Auluminium Coated Steel Indonesia',
            'short_description_ina' => '-', 
            'description_ina'       => 'Pada tahun 2013, asosiasi IZASI dibangun atas inisiatif tiga industri baja lapis yaitu PT. NS BlueScope Indonesia, PT. Sarana Central Bajatama, Tbk, dan PT. Sunrise Steel. Keduanya merupakan pendiri dan produsen lembaran baja dilapisi galvalume. Total tenaga kerja dari tiga perusahaan di negara ini kurang-lebih dari 1.200 orang dan yang tidak langsung kurang-lebih dari 24.000 orang. IZASI adalah produsen baja lapis yang melalui proses pelapisan kumparan dingin dengan menggunakan seng dan aluminium. Hal ini dapat diterapkan untuk konstruksi bahan dasar di sebagian besar aspek kehidupan seperti kereta api, trans minyak &amp; gas, bangunan, otomotif, kapal, konstruksi, rumah tangga, dan lainnya.',
            'published_at'          => Carbon::now(),

        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'address-static', 
            'title'                 => 'Company Address',
            'short_title'           => 'BRI II Building 9th Floor Suite 902. Jl Jendral Sudirman Kav 44-46, Jakarta 10210 - Indonesia',
            'short_description'     => '-', 
            'description'           => '<p>BRI II Building 9th Floor Suite 902. <br> Jl Jendral Sudirman Kav 44-46, Jakarta 10210 - Indonesia </p>',
            'title_ina'             => 'Company Address',
            'short_title_ina'       => 'BRI II Building 9th Floor Suite 902. Jl Jendral Sudirman Kav 44-46, Jakarta 10210 - Indonesia',
            'short_description_ina' => '-', 
            'description_ina'       => '<p>BRI II Building 9th Floor Suite 902. <br> Jl Jendral Sudirman Kav 44-46, Jakarta 10210 - Indonesia </p>',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'members-static', 
            'image'                 => 'images/new-board.png',
            'title'                 => 'Members Structure',
            'short_title'           => '-',
            'short_description'     => '-', 
            'description'           => '-',
            'image_ina'             => 'images/new-board.png',
            'title_ina'             => 'Struktur Keanggotaan',
            'short_title_ina'       => '-',
            'short_description_ina' => '-', 
            'description_ina'       => '-',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'milestone-static', 
            'image'                 => 'images/milestone_rev.png',
            'title'                 => 'Company Milestone',
            'short_title'           => '-',
            'short_description'     => '-', 
            'description'           => '-',
            'image_ina'             => 'images/milestone_rev.png',
            'title_ina'             => 'Milestone Perusahaan',
            'short_title_ina'       => '-',
            'short_description_ina' => '-', 
            'description_ina'       => '-',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'strategic-static', 
            'image'                 => 'images/pillar-big.png',
            'title'                 => 'Strategic Image',
            'short_title'           => '-',
            'short_description'     => '-', 
            'description'           => '-',
            'image_ina'             => 'images/strategic_ina.png',
            'title_ina'             => 'Gambar Strategic',
            'short_title_ina'       => '-',
            'short_description_ina' => '-', 
            'description_ina'       => '-',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'map-static', 
            'image'                 => '',
            'title'                 => 'Google Coordinate',
            'short_title'           => '-',
            'short_description'     => '-6.217279,106.813875', 
            'description'           => '-6.217279,106.813875',
            'image_ina'             => '',
            'title_ina'             => 'Koordinat Google',
            'short_title_ina'       => '-',
            'short_description_ina' => '-6.217279,106.813875', 
            'description_ina'       => '-6.217279,106.813875',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();
    }
}
