<?php

use Illuminate\Database\Seeder;

class HomestaysTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('homestays')->insert([
      'name'    => 'Cỏ Homestay',
      'address' => 'District 1',
      'phone'   => '0975667043'
    ]);
  }
}
