<?php

use Illuminate\Database\Seeder;
use App\Subject;
class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subjects=factory(App\Subject::class,5)->create();
        $grade=App\Grade::find(1);
        foreach($subjects as $subject)
        {
            $subject->grades()->attach($grade);
            
        }
       
    }
}
