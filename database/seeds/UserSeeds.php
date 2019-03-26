<?php

use Illuminate\Database\Seeder;

class UserSeeds extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'emitris',
            'password' => 'crystalplanet',
        ]);
    }

}
