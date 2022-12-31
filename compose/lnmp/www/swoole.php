<?php
// docker exec -it php php D:\VM\Docker\lnmp\www\swoole.php
Swoole\Timer::tick(2000, function () {
    echo 'after 2000ms.' . PHP_EOL;
    echo date('Y-m-d H:i:s') . PHP_EOL;
});