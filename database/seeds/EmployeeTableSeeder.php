<?php

use Illuminate\Database\Seeder;
use App\Models\Employees;
class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Employees::create([
            'emp_pin'=>'1', 
            'FirstName'=>'kazooba',
            'LastName'=>'Ivan',
            'CurrentAddress'=>'buloba',
            'Gender'=>'male',
            'DateofJoining'=>'2016-10-18',
            'DateofBirth'=>'1993-12-11',
            'MartialStatus'=>'single',
            'LevelofEducation'=>'masters',
           'Department_id'=>'2',
            'Division_id'=>'1'
        ]);
        Employees::create([
            'emp_pin'=>'12', 
            'FirstName'=>'Ayebare',
            'LastName'=>'Ivan',
            'CurrentAddress'=>'bukasa',
            'Gender'=>'male',
            'DateofJoining'=>'2009-10-18',
            'DateofBirth'=>'1987-12-11',
            'MartialStatus'=>'single',
            'LevelofEducation'=>'masters',
           'Department_id'=>'1',
            'Division_id'=>'1'
        ]);
    }
}
