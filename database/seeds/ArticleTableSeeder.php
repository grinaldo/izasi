<?php

use Illuminate\Database\Seeder;
use App\Model\Article as Model;

use Carbon\Carbon;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Model::class, 100)
            ->create([
                'published_at' => Carbon::now()
            ]);
    }
}
