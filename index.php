<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

define('WEB_ROOT', __DIR__ . '/');



define('WEB_URL', 'http://' . $_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'], '/')+1));


// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

<<<<<<< HEAD
// 亲^_^ 后面不需要任何代码了 就是如此简单222
// // 亲^_^ 后面不需要任何代码了 就是如此简单222
=======
// 亲^_^ 后面不需要任何代码了 就是如此简单22211111111112222222333333333333
>>>>>>> 4c7465b7ff1999327ee27542e23dcd5d9cc9ce3d
//dsdadasd a