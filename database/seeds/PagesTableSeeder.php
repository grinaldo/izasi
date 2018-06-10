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
            'description'       => 'Indonesia Zinc-Alumunium Steel Industries (IZASI) is an association established by three coated steel industries in Indonesia, PT. NS Bluescope Indonesia, PT. Saranacentral Bajatama, Tbk, and PT. Sunrise Steel as founders and producers of Aluminium-Zinc Coated Steel Sheet in 2013. The members holds more than 1,200 people directly and indirectly over 24,000 people. The Aluminium-Zinc Coated Steel Sheet can be applied for basic material constructions such as building, construction, household, shipbuilding, automotive, other transportation modes, and etc.',
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
            'image'                 => 'images/milestone_revised.png',
            'title'                 => 'Company Milestone',
            'short_title'           => '-',
            'short_description'     => '-', 
            'description'           => '-',
            'image_ina'             => 'images/milestone_revised.png',
            'title_ina'             => 'Milestone Perusahaan',
            'short_title_ina'       => '-',
            'short_description_ina' => '-', 
            'description_ina'       => '-',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'strategic-static', 
            'image'                 => 'images/pilar_inggris_1.png',
            'title'                 => 'Strategic Image',
            'short_title'           => '-',
            'short_description'     => '-', 
            'description'           => '-',
            'image_ina'             => 'images/pilar_indonesia_1.png',
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

        $model = new Model([
            'name'                  => 'corp-email-static', 
            'image'                 => '',
            'title'                 => 'Corporate Email',
            'short_title'           => 'Corporate Email',
            'short_description'     => 'secretariat@izasi.org', 
            'description'           => 'secretariat@izasi.org',
            'image_ina'             => '',
            'title_ina'             => 'Email Perusahaan',
            'short_title_ina'       => 'Email Perusahaan',
            'short_description_ina' => 'secretariat@izasi.org', 
            'description_ina'       => 'secretariat@izasi.org',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'corp-phone-static', 
            'image'                 => '',
            'title'                 => 'Corporate Phone',
            'short_title'           => 'Corporate Phone',
            'short_description'     => '+62 21 578 54 150', 
            'description'           => '+62 21 578 54 150',
            'image_ina'             => '',
            'title_ina'             => 'Telpon Perusahaan',
            'short_title_ina'       => 'Telpon Perusahaan',
            'short_description_ina' => '+62 21 578 54 150', 
            'description_ina'       => '+62 21 578 54 150',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'corp-fax-static', 
            'image'                 => '',
            'title'                 => 'Corporate Fax',
            'short_title'           => 'Corporate Fax',
            'short_description'     => '+62 21 578 5 145', 
            'description'           => '+62 21 578 5 145',
            'image_ina'             => '',
            'title_ina'             => 'Fax Perusahaan',
            'short_title_ina'       => 'Fax Perusahaan',
            'short_description_ina' => '+62 21 578 5 145', 
            'description_ina'       => '+62 21 578 5 145',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
            'name'                  => 'google-analytic', 
            'image'                 => '',
            'title'                 => 'Google Analytic',
            'short_title'           => 'Google Analytic',
            'short_description'     => 'Google Analytic', 
            'description'           => '
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120628680-1"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag(\'js\', new Date());

                  gtag(\'config\', \'UA-120628680-1\');
                </script>',
            'image_ina'             => '',
            'title_ina'             => 'Google Analyic',
            'short_title_ina'       => 'Google Analyic',
            'short_description_ina' => 'Google Analytic', 
            'description_ina'       => '
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120628680-1"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag(\'js\', new Date());

                  gtag(\'config\', \'UA-120628680-1\');
                </script>',
            'published_at'          => Carbon::now(),
        ]);
        $model->save();

        $model = new Model([
                'name'                  => 'google-tag-manager-id', 
                'image'                 => '',
                'title'                 => 'Google Tag Manager ID',
                'short_title'           => 'Google Tag Manager ID',
                'short_description'     => 'Google Tag Manager ID', 
                'description'           => 'GTM-W65CZW8',
                'image_ina'             => '',
                'title_ina'             => 'Google Tag Manager ID',
                'short_title_ina'       => 'Google Tag Manager ID',
                'short_description_ina' => 'Google Tag Manager ID', 
                'description_ina'       => 'GTM-W65CZW8',
                'published_at'          => Carbon::now(),
            ]);
        $model->save();
    }

}
