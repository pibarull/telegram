<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 14.09.2017
 * Time: 0:55
 */
$output = json_decode(file_get_contents('php://input'), true);
file_put_contents('logs.txt', $output );
