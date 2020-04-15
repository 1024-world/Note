<?php

// 引入配置文件，具体路径取决于你的项目
include_once "/usr/src/xhprof/xhprof_lib/utils/xhprof_lib.php";
include_once "/usr/src/xhprof/xhprof_lib/utils/xhprof_runs.php";

// 开启xhprof
xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

// 实际运行代码

$xhprof_data = xhprof_disable();
$xhprof_runs = new XHProfRuns_Default();
// test为source值，后期查找用
$run_id = $xhprof_runs->save_run($xhprof_data, "test");

// xhprof.test.ab为域名，能够访问到你的xhprof项目
header(sprintf("xhprof:http://xhprof.test.ab?run=%s&source=test", $run_id));*/
