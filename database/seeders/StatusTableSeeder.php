<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'status_active' => 'Active',
            'status_inactive' => 'Inactive',
            'status_unknown' => 'Unknown',
        ]);
    }
}
