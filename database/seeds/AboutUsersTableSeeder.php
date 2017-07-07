<?php

use Illuminate\Database\Seeder;

class AboutUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AboutUsers::create([
		/**	'link_id' => 2,
            'link_url' => 'https://Google.com',
			'visitor_id' => 1,
            'ip' => '127.0.0.1',
            'visitor_token' => '6gYxaB3VHiznHyZm0UkO',
            'visitor_ua' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0'*/
		]);
		AboutUsers::create([
		/**	'link_id' => 2,
            'link_url' => 'https://Google.com',
			'visitor_id' => 1,
            'ip' => '127.0.0.1',
            'visitor_token' => '6gYxaB3VHiznHyZm0UkO',
            'visitor_ua' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0'*/
		]);
    }
}
