<?php

use Illuminate\Database\Seeder;
use App\Model\User as Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Model([
            'name'     => 'admin',
            'role'     => '1',
            'username' => 'admin',
            'email'    => 'admin@admin.com',
            'password' => 'admin',
        ]);
        $model->save();

        $model = new Model([
            'name'     => 'user',
            'role'     => '9',
            'username' => 'user',
            'email'    => 'user@user.com',
            'password' => \Hash::make('password'),
        ]);
        $model->save();
    }
}
