<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    const TOPIC_NUMBER = [
        'morning' => '01',
        'mist' => '02',
        'star' => '03'
    ];

    const TITLE = [
        's' => 'S級玩家現身！你在哪一級？',
        'a' => '30秒內你能拿到A級嗎？',
        'b' => '我得到B級，換你來挑戰~'
    ];

    public function share($topic, $scoreLevel)
    {
        $scoreLevel = strtolower($scoreLevel);
        $topicNumber = self::TOPIC_NUMBER[$topic];
        $title = self::TITLE[$scoreLevel];

        return view('share', [
            'title' => $title,
            'topicNumber' => $topicNumber,
            'scoreLevel' => $scoreLevel
        ]);
    }
}
