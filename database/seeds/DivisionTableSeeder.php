<?php

use Illuminate\Database\Seeder;
use App\Models\Divisions;
class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Divisions::create([
            'Divisionname'=>'parkPlanning',
            'Position'=>'planningOfficer',
            
            'Department_id'=>'1',
        ]);
        //
        Divisions::create([
            'Divisionname'=>'Veterinary Services',
            'Position'=>'Manager',
            
            'Department_id'=>'1',
        ]);
    }
}
