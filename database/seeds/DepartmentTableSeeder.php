<?php

use Illuminate\Database\Seeder;
use App\Models\Departments;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Departments::create([
            'name'=>'Planning',
            'HeadsofDepartments'=>'DirectorofPlanning',
        ]);
        Departments::create([
            'name'=>'Conservation',
            'HeadsofDepartments'=>'DirectorofConservation',
        ]);
    }
}
