<?php

use Illuminate\Database\Seeder;
use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<8;$i++){
        $grade=Grade::create([
            'branch'=>'Computer Science',
            'semester'=> $i,

        ]);
        $grade=Grade::create([
            'branch'=>'Civil Engineering',
            'semester'=> $i,

        ]);
    }
    }
}
