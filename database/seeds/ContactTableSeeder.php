<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'name' => 'Facebook',
            'description' => 'Mig Mikael',
            'url' => 'https://www.facebook.com/mig.mikael',
            'image' => '../images/Facebook_logo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('contact')->insert([
            'name' => 'Twitter',
            'description' => '@ChanachaiPuttar',
            'url' => 'https://twitter.com/ChanachaiPuttar',
            'image' => '../images/Twitter_logo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('contact')->insert([
            'name' => 'Github',
            'description' => 'Mig Mikael',
            'url' => 'https://github.com/MigMikael',
            'image' => '../images/Github_logo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('contact')->insert([
            'name' => 'Linkedin',
            'description' => 'Mig Mikael',
            'url' => 'https://th.linkedin.com/in/chanachai-puttaruksa-27a577110',
            'image' => '../images/Linkedin_logo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('contact')->insert([
            'name' => 'Line',
            'description' => 'Mig Mikael',
            'url' => 'https://drive.google.com/open?id=0B11RpUQF9bMHb0s4RC05MnhvenM',
            'image' => '../images/Line_logo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
