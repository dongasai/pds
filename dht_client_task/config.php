<?php
$rre =  array(
    'daemonize'       => false,//是否后台守护进程
    'worker_num'      => 2,// 主进程数, 一般为CPU的1至4倍 同时执行任务数量
    'task_worker_num' => Env::get('TASK_WORKER_NUMBER', 10),//task进程的数量 值越大 CPU占用越高
    'server_ip'       => gethostbyname(Env::get('SERVER_IP', '127.0.0.1')) ,//服务端ip
    'server_port'     => Env::get('SERVER_PORT', 31738),//服务端端口
);

if(!is_numeric(substr($rre['server_ip'],0,1))){
    $rre['server_ip'] = gethostbyname($rre['server_ip']);
}

return $rre;