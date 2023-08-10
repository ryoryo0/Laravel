<?php

namespace App\Http\Controllers\Tweet\update;

use App\Http\Controllers\Controller; // ここでControllerクラスをインポートする
use App\Models\Tweet;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)//Requestは特定の何かを取得する流れであり、具体的に何を取得するのかは中に記載する
    {
        $tweetId = (int) $request->route('tweetId');
        $tweet = Tweet::where('id',$tweetId)->firstOrFail();
        return view('tweet.update')->with('tweet',$tweet);
    }
}
