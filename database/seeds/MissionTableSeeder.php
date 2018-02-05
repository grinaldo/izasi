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
            'order'           => '1',
            'name'            => 'Mission 1', 
            'description'     => 'Seek government action to support, strengthen and develop the Indonesia\'s coated steel industry',
            'name_ina'        => 'Misi 1', 
            'description_ina' => 'Bekerja sama dengan pemerintah untuk mendukung, memperkuat dan mengembangkan industri baja lapis yang dilapisi Indonesia.',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => '2',
            'name'            => 'Mission 2', 
            'description'     => 'Educate public about zinc-alumunium steel as a material of choice in construction application and manufacturing to expand markets for steel',
            'name_ina'        => 'Misi 2',
            'description_ina' => 'Mendidik masyarakat tentang baja seng-aluminium sebagai bahan pilihan dalam
aplikasi konstruksi dan manufaktur untuk memperluas pasar baja.',
            'published'       => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'order'           => '3',
            'name'            => 'Mission 3', 
            'description'     => 'Raise awareness about steel producer capability to produce green product that can be recycled, to be able to contribute to reduce world gas emission',
            'name_ina'        => 'Misi 3', 
            'description_ina' => 'Meningkatkan kesadaran akan kemampuan produsen baja untuk menghasilkan produk ramah lingkungan yang dapat didaur ulang, untuk dapat berkontribusi mengurangi emisi gas dunia.',
            'published'       => Carbon::now()
        ]);
        $model->save();
    }
}
