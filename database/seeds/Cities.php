<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class Cities extends Seeder
{
    public function run()
    {
        DB::table('tests')->insert([
            'name' => 'Adelaide',
            'phone_no' => '1234567890',
            'comments' => 'The city of churches',
        ]);

        DB::table('tests')->insert([
            'name' => 'Sydney',
            'phone_no' => '2345678901',
            'comments' => 'The harbour city',
        ]);

        DB::table('tests')->insert([
            'name' => 'New York',
            'phone_no' => '31547899',
            'comments' => 'The big apple',
        ]);
    }
}
