<?php
return array(
    //'配置项'=>'配置值'
    'TMPL_PARSE_STRING' =>  array(
        '__HP__'        =>  __ROOT__ . '/Public/hplus',
        '__UPLOAD__'    =>  __ROOT__ . '/Public/Uploads',
    ),
    'URL_MODEL'         =>  0,
    'ERROR_MESSAGE'     =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
    'ERROR_PAGE'        =>  '', // 错误定向页面
    'SHOW_ERROR_MSG'    =>  true,    // 显示错误信息
    'LAYOUT_ON'         =>  true,
    'TMPL_CACHE_ON'     =>  false,
);