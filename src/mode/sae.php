<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: luofei614 <weibo.com/luofei614>
// +----------------------------------------------------------------------

/**
 * ThinkPHP SAE应用模式定义文件
 */
return [
    // 命名空间
    'namespace' => [
        'think'       => LIB_PATH . 'think' . DS,
        'behavior'    => LIB_PATH . 'behavior' . DS,
        'traits'      => LIB_PATH . 'traits' . DS,
        APP_NAMESPACE => APP_PATH,
    ],

    // 配置文件
    'config'    => array_merge(include THINK_PATH . 'convention' . EXT, [
        /* 数据库设置 */
        'database'         => [
            // 数据库类型
            'type'        => 'mysql',
            'dsn'         => '', //
            // 服务器地址
            'hostname'    => SAE_MYSQL_HOST_M . ',' . SAE_MYSQL_HOST_S,
            // 数据库名
            'database'    => SAE_MYSQL_DB,
            // 用户名
            'username'    => SAE_MYSQL_USER,
            // 密码
            'password'    => SAE_MYSQL_PASS,
            // 端口
            'hostport'    => SAE_MYSQL_PORT,
            // 数据库连接参数
            'params'      => [],
            // 数据库编码默认采用utf8
            'charset'     => 'utf8',
            // 数据库表前缀
            'prefix'      => '',
            // 数据库调试模式
            'debug'       => false,
            // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
            'deploy'      => 1,
            // 数据库读写是否分离 主从式有效
            'rw_separate' => true,
            // 读写分离后 主服务器数量
            'master_num'  => 1,
            // 指定从服务器序号
            'slave_no'    => '',
        ],
        'log'              => [
            'type' => 'Sae',
        ],
        'cache'            => [
            'type'   => 'Sae',
            'path'   => CACHE_PATH,
            'prefix' => '',
            'expire' => 0,
        ],
        'file_upload_type' => 'Sae',
        'compile_type'     => 'Sae',
    ]),

    // 别名定义
    'alias'     => [
        'Think\App'                  => CORE_PATH . 'App' . EXT,
        'Think\Build'                => CORE_PATH . 'Build' . EXT,
        'Think\Cache'                => CORE_PATH . 'Cache' . EXT,
        'Think\Config'               => CORE_PATH . 'Config' . EXT,
        'Think\Controller'           => CORE_PATH . 'Controller' . EXT,
        'Think\Cookie'               => CORE_PATH . 'Cookie' . EXT,
        'Think\Db'                   => CORE_PATH . 'Db' . EXT,
        'Think\Debug'                => CORE_PATH . 'Debug' . EXT,
        'Think\Error'                => CORE_PATH . 'Error' . EXT,
        'Think\Exception'            => CORE_PATH . 'Exception' . EXT,
        'Think\Hook'                 => CORE_PATH . 'Hook' . EXT,
        'Think\Input'                => CORE_PATH . 'Input' . EXT,
        'Think\Lang'                 => CORE_PATH . 'Lang' . EXT,
        'Think\Log'                  => CORE_PATH . 'Log' . EXT,
        'Think\Model'                => CORE_PATH . 'Model' . EXT,
        'Think\Response'             => CORE_PATH . 'Response' . EXT,
        'Think\Route'                => CORE_PATH . 'Route' . EXT,
        'Think\Session'              => CORE_PATH . 'Session' . EXT,
        'Think\Template'             => CORE_PATH . 'Template' . EXT,
        'Think\Url'                  => CORE_PATH . 'Url' . EXT,
        'Think\View'                 => CORE_PATH . 'View' . EXT,
        'Think\db\Driver'            => CORE_PATH . 'db' . DS . 'Driver' . EXT,
        'Think\view\driver\Think'    => CORE_PATH . 'view' . DS . 'driver' . DS . 'Think' . EXT,
        'Think\template\driver\File' => CORE_PATH . 'template' . DS . 'driver' . DS . 'File' . EXT,
        'Think\log\driver\File'      => CORE_PATH . 'log' . DS . 'driver' . DS . 'File' . EXT,
        'Think\cache\driver\File'    => CORE_PATH . 'cache' . DS . 'driver' . DS . 'File' . EXT,
        'Think\log\driver\Sae'       => CORE_PATH . 'log' . DS . 'driver' . DS . 'Sae' . EXT,
        'Think\cache\driver\Sae'     => CORE_PATH . 'cache' . DS . 'driver' . DS . 'Sae' . EXT,
        'Think\template\driver\Sae'  => CORE_PATH . 'template' . DS . 'driver' . DS . 'Sae' . EXT,
    ],

];