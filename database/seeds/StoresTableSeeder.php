<?php

use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\City;
use App\Models\District;
use App\Models\Ward;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      Store::truncate();
      $city_id = [1, 48, 79];
      foreach ($city_id as $id) {
        $districts = District::where('city_id', $id)->pluck('id')->toArray();
        $district_id = $faker->randomElement($array = $districts);
        $wards = Ward::where('district_id', $district_id)->pluck('id')->toArray();
        $ward_id = $faker->randomElement($array = $wards);
        Store::create([
          'address'     => '48 Cao Thắng',
          'city_id'     => $id,
          'district_id' => $district_id,
          'ward_id'     => $ward_id,
          'status'      => true
        ]);
        
      }
    }
}
