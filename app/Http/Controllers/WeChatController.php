<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WeChatController extends Controller
{

    protected $app;

    public function __construct()
    {
        $this->app = app('wechat.official_account');
    }

    public function serve()
    {
        Log::info('request arrived.');

        $this->app->server->push(function ($message){
            return '华庆作业区';
        });

        return $this->app->server->serve();
    }


}
