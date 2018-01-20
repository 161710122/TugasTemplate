<?php

use Illuminate\Database\Seeder;

class tableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	    $dd = ["nis"=>"2126","nama"=>"Sensei","tempat_lahir"=>"bandung","tanggal_lahir"=>"2001-06-21","alamat"=>"BMI","cita_cita"=>"haha","hobi"=>"naon sok","foto"=>"kakashi.jpg"];
        DB::table('siswas')->insert($dd);
    
    }
}
