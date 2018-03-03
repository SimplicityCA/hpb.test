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
         $this->call(CertificationTableSeeder::class);
         $this->call(DownloadTableSeeder::class);
         $this->call(HomePicturesTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(SiteTextTableSeeder::class);
    }
}
