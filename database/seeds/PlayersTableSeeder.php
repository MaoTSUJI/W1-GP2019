<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            [
                'name' => '辻　真緒',
                'furigana'  => 'ツジ　マオ',
                'sex'  => '女',
                'birthdate'  => '1992_03_06',
                'email'  => 'tsuji@gmail.com',
                'code'  => '0000000',
                'address'  => '兵庫県神戸市北区1-1-1',
                'phone_num'  => '09012345678',
                'history'  => '10',
                'teacher'  => '高浦猛',
                'team'  => '乾坤拳社',
            ],
        ];

        foreach ($players as $player) {

            DB::table('players')->insert([
                'name' => $player['name'],
                'furigana' => $player['furigana'],
                'sex' => $player['sex'],
                'birthdate' => $player['birthdate'],
                'email' => $player['email'],
                'code' => $player['code'],
                'address' => $player['address'],
                'phone_num' => $player['phone_num'],
                'history' => $player['history'],
                'teacher' => $player['teacher'],
                'team' => $player['team'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
