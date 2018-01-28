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
            'name'        => 'Vision', 
            'description' => 'A sustainable Indonesia\'s coated steel industry strategically positioned for growth and innovation and as a leader in Indoensia and ASEAN market.',
            'published'   => Carbon::now()
        ]);
        $model->save();
    }
}
