<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class ViewController extends Controller
{
    public function index()
    {
    		// playersテーブルのデータを全件取得
    		// useしてるDiaryのallメソッドを実施
    		// all()はテーブルのデータを全て取得するメソッド
    		$players = Player::all();
    		
        return view('w1gp.index', ['players' => $players]);
    }
}
