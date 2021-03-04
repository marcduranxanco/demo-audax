<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
            "first_name" => "Artemus",
            "last_name" => "Ruter",
            "email" => "aruter0@gnu.org",
            "phone" => "7363074810",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Maris",
            "last_name" => "Ferrillo",
            "email" => "mferrillo1@aboutads.info",
            "phone" => "8276873409",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Beverlie",
            "last_name" => "Bullocke",
            "email" => "bbullocke2@cnn.com",
            "phone" => "9551760821",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Babs",
            "last_name" => "Pledge",
            "email" => "bpledge3@dell.com",
            "phone" => "2762711766",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Padraig",
            "last_name" => "Romaynes",
            "email" => "promaynes4@newyorker.com",
            "phone" => "6103264563",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Candis",
            "last_name" => "Galle",
            "email" => "cgalle5@naver.com",
            "phone" => "1321128692",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Parke",
            "last_name" => "Looby",
            "email" => "plooby6@amazonaws.com",
            "phone" => "1375579732",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Winnah",
            "last_name" => "Landall",
            "email" => "wlandall7@google.pl",
            "phone" => "7145298615",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Forest",
            "last_name" => "Pizzey",
            "email" => "fpizzey8@nymag.com",
            "phone" => "9095258601",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Wernher",
            "last_name" => "McMurrugh",
            "email" => "wmcmurrugh9@tripadvisor.com",
            "phone" => "5336729220",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Hilly",
            "last_name" => "Dagnan",
            "email" => "hdagnana@unesco.org",
            "phone" => "6356500312",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Leland",
            "last_name" => "Watford",
            "email" => "lwatfordb@youku.com",
            "phone" => "8465917827",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Patten",
            "last_name" => "Ladley",
            "email" => "pladleyc@tiny.cc",
            "phone" => "7975836512",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Allyn",
            "last_name" => "Dornin",
            "email" => "adornind@tuttocitta.it",
            "phone" => "3403065226",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            "first_name" => "Sal",
            "last_name" => "Ashton",
            "email" => "sashtone@arizona.edu",
            "phone" => "5864815581",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
