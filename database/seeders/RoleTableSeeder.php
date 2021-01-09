<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(RoleTableSeeder::class);
        $kestariRole = Spatie\Permission\Models\Role::create([
            'name'         => 'kestari'
        ]);

        $tryoutRole = Spatie\Permission\Models\Role::create([
            'name'         => 'tryout'
        ]);
        $sertifikatRole = Spatie\Permission\Models\Role::create([
            'name'         => 'sertifikat'
        ]);

        
    }
}
