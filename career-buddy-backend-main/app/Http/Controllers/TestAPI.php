<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestAPI extends Controller
{
    function testAPI(){
        return [
            'app'=>'career buddy',
            'api_version'=>'1.0',
            'date started' => '17/12/2022'
        ];
    }
}
