<?php
/**
 * Copyright: Copyright (c) 2018 https://www.xingchenw.cn All rights reserved.
 * Author Tan 349508017@qq.com
 */

namespace app\index\controller;


use compass\cores\Controller;
use compass\cores\Log;

class Index extends Controller
{
    public function index(){
        Log::cache('one');
        Log::cache('woo');
        return $this->fetch('',[
            'variable'=>'Compass',
        ]);
    }
}