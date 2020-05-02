<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Faker\Generator as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
  
        
        $users=factory(App\User::class,5)->create();
        $grade=App\Grade::select('id')->first();
        foreach($users as $user)
        {
            $user->assignRole('faculty');
            $user->grades()->attach($grade);
           
        }

        $students=factory(App\Student::class,5)->create();
     
        foreach($students as $user)
        {
            
            $user->assignRole('student');
            $user->grades()->associate($grade);
            $user->save();
           
        }

        
    }
}
