    <?php

use Illuminate\Database\Seeder;
use App\Model\Vision as Model;

use Carbon\Carbon;

class VisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'name'            => 'Vision', 
            'description'     => 'A sustainable Indonesia\'s coated steel industry strategically positioned for growth and innovation and as a leader in Indoensia and ASEAN market.',
            'name_ina'        => 'Visi',
            'description_ina' => 'Industri baja lapis Indonesia yang strategis yang diposisikan secara strategis untuk pertumbuhan dan inovasi, serta sebagai pemimpin di pasar Indonesia dan ASEAN.',
            'published'       => Carbon::now()
        ]);
        $model->save();
    }
}
