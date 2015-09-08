<?php

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
        $roleObj = new \Kodeine\Acl\Models\Eloquent\Role();

        $roles = [
            // Student
            [
                'name' => 'Student',
                'slug' => 'student',
                'description' => 'manage student privileges',
            ],
            // Lecturer
            [
                'name' => 'Lecturer',
                'slug' => 'lecturer',
                'description' => 'manage lecturer privileges'
            ],
            // Administrator
            [
                'name' => 'Administrator',
                'slug' => 'administrator',
                'description' => 'manage administration privileges'
            ]
        ];

        foreach($roles as $role){
            $obj = $roleObj->create($role);
        }

    }
}
