<?php
$apache_ver = apache_get_version();
$php_ver = phpversion();
$db_link = mysqli_connect("mysql", "docker", "docker", null);
$redis = new Redis();
$redis->connect('redis', 6379);
$redis->auth('50m3_p455');


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>APP Container 1</title>
    </head>
    <body>
        <h1>APP-1 <small>container 1</small></h1>
        <hr>
        <h4>Environment</h4>
        <ul>
            <li>Web Server <?= apache_get_version(); ?></li>
            <li>PHP <?= phpversion(); ?></li>
            <li><?php (mysqli_connect_errno())  ? printf("MySQL connecttion failed: %s", mysqli_connect_error()) : printf("MySQL Server %s", mysqli_get_server_info($db_link)); mysqli_close($db_link);?></li>
            <li>Redis <?= phpversion('redis'); ?></li>
            <li>PING Redis <?= $redis->ping("<b>pong!!!</b>");?></li>
        </ul>
        <hr>
        <ul>
            <li><a href="/phpinfo.php">phpinfo()</a></li>
        </ul>
        <hr>
        <code><?php var_dump($_SERVER)?></code>
    </body>
</html>