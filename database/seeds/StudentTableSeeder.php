<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() == 0) {
        	DB::table('students')->insert([
        		[
        			'id' =>1,
        			'name' => 'yen',
        			'address'=>'HN',
        			'university'=>'fpt',
        			'class_id'=>'1',
        		],
        		[
        			'id' =>2,
        			'name' => 'yen',
        			'address'=>'BG',
        			'university'=>'fpt',
        			'class_id'=>'2',
        		],
        		[
        			'id' =>3,
        			'name' => 'yen',
        			'address'=>'BG',
        			'university'=>'fpt',
        			'class_id'=>'3',
        		],
        	]);
        }
    }
}
