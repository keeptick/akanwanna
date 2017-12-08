<?php

use Illuminate\Database\Seeder;

class departmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            ['department'=>'Akanwanna'],
            ['department'=>'Youth Wing'],
            ['department'=>'Women\'s Wing'],
            ['department'=>'Admin Secretaries'],
            ['department'=>'Matron']];
        DB::table('departments')->insert($department);
    }
}
