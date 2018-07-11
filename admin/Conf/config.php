<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
	'__PUBLIC__'=>__ROOT__.'/admin/Common/',
	),
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'qdm161234405.my3w.com', // 服务器地址
    'DB_NAME'   => 'qdm161234405_db', // 数据库名
    'DB_USER'   => 'qdm161234405', // 用户名
    'DB_PWD'    => 'qinchaobin6310', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀 
    'SHOW_ERROR_MSG'=>true,//开启错误调试
    'APP_STATUS' => 'test', //应用调试模式状态
    'URL_CASE_INSENSITIVE' =>true,


	
);
?>