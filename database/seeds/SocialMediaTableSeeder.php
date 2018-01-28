<?php

use Illuminate\Database\Seeder;
use App\Model\SocialMedia as Model;

use Carbon\Carbon;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'name'  => 'facebook',
            'image' => 'images/icon-fb.png',
            'url'   => 'https://facebook.com/your-url',
            'published_at' => Carbon::now()
        ]);
        $model->save();
        
        $model = new Model([
            'name'  => 'instagram',
            'image' => 'images/icon-ig.png',
            'url'   => 'https://instagram.com/your-url',
            'published_at' => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'name' => 'twitter',
            'image' => 'images/icon-twitter.png',
            'url'  => 'https://twitter.com/your-url',
            'published_at' => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'name' => 'google plus',
            'image' => 'images/icon-gplus.png',
            'url'  => 'https://plus.google.com/your-url',
            'published_at' => Carbon::now()
        ]);
        $model->save();

        $model = new Model([
            'name' => 'youtube',
            'image' => 'images/icon-youtube.png',
            'url'  => 'https://youtube.com/your-url',
            'published_at' => Carbon::now()
        ]);
        $model->save();
    }
}
