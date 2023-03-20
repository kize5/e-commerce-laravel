<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke(): array
    {
        return [
            'success'=> true,
            'message' => __('message.welcome'),
            'data'=> [
                'service'=> 'Kize API',
                'version'=>'1.0',
                'language'=>app()->getLocale(),
                'support'=> 'meparlepas@pasletemps.com'
            ]
        ];
    }
}
