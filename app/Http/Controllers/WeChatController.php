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

        $this->initialMenu();

        return $this->app->server->serve();
    }

    public function initialMenu()
    {
        $buttons = [
            [
                'type' => 'view',
                'name' => '培训首页',
                'url' => route('pages.training')
            ],
            [
                'type' => 'view',
                'name' => '华庆互动',
                'url' => route('pages.interaction')
            ],
            [
                'type' => 'view',
                'name' => '考勤成绩',
                'url' => route('pages.punchcard')
            ]
        ];

        $this->app->menu->create($buttons);
    }
}
