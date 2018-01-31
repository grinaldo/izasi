<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(VisionTableSeeder::class);
        $this->call(MissionTableSeeder::class);
        $this->call(InitiativeTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(MilestoneTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
    }
}
