<?php

use Illuminate\Database\Seeder;

class ReserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [
                'representative' => 'user1',
                'club_name'     => 'club1',
                'check_in'     => '2023-04-01 00:00:00',
                'check_out'     => '2023-04-02 00:00:00',
                'meal'     => '朝,昼,夜',
                'request'     => 'request',
                'start_at'     => '18:00',
                'end_at'     => '10:00',
                'adult_num'     => 2,
                'child_num'     => 5,
                'institution'     => 'スケートリンク,トレーニングルーム,ミーティングルーム',
                'infomation'     => '備考',
                'user_id'     => 1,
            ],

            [
                'representative' => 'user1',
                'club_name'     => 'club1',
                'check_in'     => '2023-05-01 00:00:00',
                'check_out'     => '2023-05-02 00:00:00',
                'meal'     => '朝,昼,夜',
                'request'     => 'request',
                'start_at'     => '19:00',
                'end_at'     => '10:00',
                'adult_num'     => 2,
                'child_num'     => 5,
                'institution'     => 'スケートリンク,トレーニングルーム,ミーティングルーム',
                'infomation'     => '備考',
                'user_id'     => 1,
            ],
        ]);
    }
}
