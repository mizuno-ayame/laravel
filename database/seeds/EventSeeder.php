<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'event_name' => 'event1',
            'sports'     => 'sports1',
            'detail'     => 'event1event1event1',
            'image1'     => 'test.jpg',
        ]);
    }
}
