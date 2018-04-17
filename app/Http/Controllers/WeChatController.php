<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use EasyWeChat\kernel\Messages\Text;

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
            switch ($message->MsgType){
                case 'event':
                    //关注消息，新用户关注进入公众号
                    if($message->Event === 'subscribe'){
                        return new Text('你好，欢迎来到华庆作业区');
                    }
                    break;
                default:
                    break;
            }

            return '这是回复消息';
        });

        return $this->app->server->serve();
    }



}
