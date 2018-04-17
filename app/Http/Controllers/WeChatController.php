<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;

class WeChatController extends Controller
{
    public function serve()
    {
        Log::info('request arrived.');
        $app = app('wechat.official_account');
        $app->server->push(function ($message){
            return '华庆作业区';
        });

        return $app->server->serve();
    }
}
