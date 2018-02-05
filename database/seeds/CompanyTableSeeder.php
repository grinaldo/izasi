<?php

use Illuminate\Database\Seeder;
use App\Model\Company as Model;

use Carbon\Carbon;

class CompanyTableSeeder extends Seeder
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
            'name'            => 'PT. NS Bluescope Indonesia', 
            'image'           => 'images/company-bluescope.png',
            'link'            => 'http://www.bluescope.co.id/about/our-company-id/ ',
            'description'     => 'BlueScope Steel Indonesia (BSI) owned by Bluescope Steel Limited which was established in 1994. The Company established a metal coating line 1 and painting line facility in Cilegon. The machinery capacity was for 120,000 Ton.  To bring access to new technologies and assist in expanding the reach of wider customers outside of Australia Because of the increase demand of coated steel, then BSI expanded with additional machinery capacity which was metal coating line 2 for 180,000 Ton. In 2013 BlueScope Indonesia had joint venture with Nippon Steel Sumitomo & Metal Corporation. Mr. Simon Andrew Linge as Chairman in IZASI is currently as President Indonesia & Senior Vice President Operation in PT. NS BlueScope Indonesia. PT. NS BlueScope Indonesia is now the leading local zinc / aluminum coatings manufacturing. Zincalume (coated steel) and Colorbond (painted steel) are company’s product which have the gold standard for corrosion resistance and long life.',
            'description_ina' => 'Pada tahun 2013, asosiasi IZASI dibangun atas inisiatif tiga industri baja lapis yaitu PT. NS BlueScope Indonesia, PT. Sarana Central Bajatama, Tbk, dan PT. Sunrise Steel. Keduanya merupakan pendiri dan produsen lembaran baja dilapisi galvalume. Total tenaga kerja dari tiga perusahaan di negara ini kurang-lebih dari 1.200 orang dan yang tidak langsung kurang-lebih dari 24.000 orang. IZASI adalah produsen baja lapis yang melalui proses pelapisan kumparan dingin dengan menggunakan seng dan aluminium. Hal ini dapat diterapkan untuk konstruksi bahan dasar di sebagian besar aspek kehidupan seperti kereta api, trans minyak &amp; gas, bangunan, otomotif, kapal, konstruksi, rumah tangga, dan lainnya.',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => 2,
            'name'            => 'PT. Saranacentral Bajatama, Tbk', 
            'image'           => 'images/company-bajatama.png',
            'link'            => 'http://www.saranacentral.com',
            'description'     => 'PT. Saranacentral Bajatama (SCB), established in 1996, it belongs to Sarana Steel Group, which was set up in 1970 and has built up its strong reputation in the worldwide steel industry. The machinery capacity was for 150,000 Ton. Mr. Hendaja Sutanto as Treasures in IZASI is currenly as CEO in PT. Saranacentral Bajatama Tbk. For the first, its product provide customers with best quality galvanized steel sheet/coil. Then, because of advance technology of coated steel production using zinc alumunium, they also produced Zinc-Alumunium named Saranalum, and also have in color coated steel named Saranacolor. These for customers use; i.e. Building, Electrical, Motor Automotive, Equipment, etc.',
            'description_ina' => 'PT. Saranacentral Bajatama (SCB) didirikan pada tahun 1996. Perusahaan milik Sarana Steel Group ini didirikan pada tahun 1970 dan telah membangun reputasinya yang kuat di industri baja di seluruh dunia. Kapasitas mesinnya mencapai 150.000 Ton. Bapak Handaja Sutanto sebagai Bendahara di IZASI saat ini menjabat sebagai CEO di PT. Saranacentral Bajatama Tbk. Sarana adalah salah satu pelopor dalam memproduksi lembaran baja galvanis berkualitas terbaik. Kemudian, karena perkembangan teknologi, Sarana juga memproduksi baja lapis seng-aluminium, mereka juga memproduksi lembaran dilapisi galvalume yang diberi nama Saranalum, dan juga memiliki baja berlapis warna yang diberi nama Saranacolor.',
            'published'   => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => 3,
            'name'            => 'PT. Sunrise Steel', 
            'image'           => 'images/company-sunrise.png',
            'link'            => 'http://www.sunrise-steel.com',
            'description'     => 'PT. Sunrise Steel is private company. Sunrise Steel was founded in 2008. The machinery capacity was for 120,000 Ton. Then revamping Zinc-Alumunium line 1 with machinery capacity for 260,000 Ton. Because of the increase demand of coated steel, in 2017 Sunrise Steel expanded with additional machinery capacity which was metal coating line 2 for 140,000 Ton Mr. Henry Setiawan as Secretary in IZASI is currently as President Director in Sunrise Steel. The company\'s line of business includes the manufacturing of abrasive products. Zinium is one of the company’s product which manufactured use the latest technology in metallic coated steel industry, supported by technologies for world\'s industrial equipment makers, such as AJAX (USA), Siemens (Germany)',
            'description_ina' => 'PT. Sunrise Steel adalah perusahaan swasta. Sunrise Steel didirikan pada tahun 2008. Galvalum line 1, kapasitas mesinnya adalah 120.000 Ton. Kemudian mereka meningkatkan kapasitas mesin menjadi 260.000 Ton. Karena kenaikan permintaan baja lapis, pada tahun 2017 Sunrise Steel diperluas dengan kapasitas mesin tambahan yaitu galvalume line 2 seharga 140.000 Ton. Jadi, total kapasitas mereka sekitar 400.000 Ton. Bapak Henry Setiawan selaku Sekretaris IZASI saat ini menjabat sebagai Presiden Direktur Sunrise Steel. Zinium adalah salah satu produk perusahaan yang diproduksi menggunakan teknologi terbaru dalam industri baja lapis baja, didukung oleh teknologi untuk pembuat peralatan industri dunia.',
            'published'   => Carbon::now()
        ]);
        $model->save();
    }
}
