<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \Kodeine\Acl\Models\Eloquent\Role();

        // Admin
        $didi = factory('App\User')->create([ 'name' => 'Didi', 'email' => 'hidayah@gmail.com' ]);
        $didi->assignRole('administrator');

        // Lecturer
        $lecturers_id = [];
        factory('App\User', 10)->create()->each(function($u) use (&$lecturers_id) {
            $u->assignRole('lecturer');
            array_push($lecturers_id, $u->id);
        });

        // Student
        factory('App\User', 50)->create()->each(function($u) use ($lecturers_id) {
            $u->update(['lecturer_id'=> $lecturers_id[array_rand($lecturers_id)] ]);
            $u->assignRole('student');
        });
    }
}
