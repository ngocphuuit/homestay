<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('rooms')->insert([
      'name' => 'Phòng đơn',
      'capacity' => 1,
    ]);

    DB::table('rooms')->insert([
      'name' => 'Phòng đôi',
      'capacity' => 2,
    ]);
    DB::table('rooms')->insert([
      'name' => 'Phòng gác mái',
      'capacity' => 4,
    ]);
    DB::table('rooms')->insert([
      'name' => 'Phòng sáu',
      'capacity' => 6,
    ]);
    DB::table('rooms')->insert([
      'name' => 'Phòng tám',
      'capacity' => 8,
    ]);
    DB::table('rooms')->insert([
      'name' => 'Phòng doms',
      'capacity' => 8,
    ]);
  }
}
