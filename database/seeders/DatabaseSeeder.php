<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Customer::insert(['name' => 'ABC1', 'address' => '1 Kiehn Route']);
        \App\Models\Customer::insert(['name' => 'ABC2', 'address' => '2 Kiehn Route']);
        \App\Models\Customer::insert(['name' => 'ABC3', 'address' => '3 Kiehn Route']);
        \App\Models\Customer::insert(['name' => 'ABC4', 'address' => '4 Kiehn Route']);
        \App\Models\Customer::insert(['name' => 'ABC5', 'address' => '5 Kiehn Route']);

        \App\Models\Employee::insert(['name' => 'Employee1', 'position' => 'Manager']);
        \App\Models\Employee::insert(['name' => 'Employee2', 'position' => 'Supervisor']);
        \App\Models\Employee::insert(['name' => 'Employee3', 'position' => 'Helper']);
        \App\Models\Employee::insert(['name' => 'Employee4', 'position' => 'CTO']);
        \App\Models\Employee::insert(['name' => 'Employee5', 'position' => 'CTO']);

        \App\Models\PowerStation::insert(['name' => 'Employee1', 'location' => 'Manager', 'customer_id' => 1]);
        \App\Models\PowerStation::insert(['name' => 'Employee2', 'location' => 'Supervisor', 'customer_id' => 1]);
        \App\Models\PowerStation::insert(['name' => 'Employee3', 'location' => 'Helper', 'customer_id' => 2]);
        \App\Models\PowerStation::insert(['name' => 'Employee4', 'location' => 'CTO', 'customer_id' => 3]);
        \App\Models\PowerStation::insert(['name' => 'Employee5', 'location' => 'CTO', 'customer_id' => 5]);

        \App\Models\GeneratorUnit::insert(['type' => 'A', 'capacity' => 23.23, 'power_station_id' => 1]);
        \App\Models\GeneratorUnit::insert(['type' => 'A', 'capacity' => 3.234, 'power_station_id' => 2]);
        \App\Models\GeneratorUnit::insert(['type' => 'B', 'capacity' => 234.03, 'power_station_id' => 2]);
        \App\Models\GeneratorUnit::insert(['type' => 'B', 'capacity' => 44.444, 'power_station_id' => 5]);
        \App\Models\GeneratorUnit::insert(['type' => 'C', 'capacity' => 22, 'power_station_id' => 5]);

        \App\Models\Fuel::insert(['type' => 'A', 'cost' => 23.23, 'generator_unit_id' => 1]);
        \App\Models\Fuel::insert(['type' => 'A', 'cost' => 3.234, 'generator_unit_id' => 2]);
        \App\Models\Fuel::insert(['type' => 'B', 'cost' => 234.03, 'generator_unit_id' => 2]);
        \App\Models\Fuel::insert(['type' => 'B', 'cost' => 44.444, 'generator_unit_id' => 5]);
        \App\Models\Fuel::insert(['type' => 'C', 'cost' => 22, 'generator_unit_id' => 5]);

        \App\Models\MaintainenceActivity::insert(['date' => date('Y-m-d'), 'desciption' => 'adsfsdf', 'generator_unit_id' => 1, 'employee_id' => 1]);
        \App\Models\MaintainenceActivity::insert(['date' => date('Y-m-d'), 'desciption' => 'asdf', 'generator_unit_id' => 2, 'employee_id' => 1]);
        \App\Models\MaintainenceActivity::insert(['date' => date('Y-m-d'), 'desciption' => 'asdf', 'generator_unit_id' => 2, 'employee_id' => 3]);
        \App\Models\MaintainenceActivity::insert(['date' => date('Y-m-d'), 'desciption' => 'asdfsd', 'generator_unit_id' => 5, 'employee_id' => 3]);
        \App\Models\MaintainenceActivity::insert(['date' => date('Y-m-d'), 'desciption' => 'asdfsd', 'generator_unit_id' => 5, 'employee_id' => 5]);

        \App\Models\TransmissionLine::insert(['voltage' => 23.234, 'length' => 24.324, 'power_station_id' => 1]);
        \App\Models\TransmissionLine::insert(['voltage' => 234.234, 'length' => 232, 'power_station_id' => 2]);
        \App\Models\TransmissionLine::insert(['voltage' => 234.234, 'length' => 2332, 'power_station_id' => 2]);
        \App\Models\TransmissionLine::insert(['voltage' => 34.234, 'length' => 2323, 'power_station_id' => 5]);
        \App\Models\TransmissionLine::insert(['voltage' => 23.234, 'length' => 45, 'power_station_id' => 5]);

    }
}
