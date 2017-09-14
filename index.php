<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 14.09.2017
 * Time: 0:55
 */
$output = json_decode(file_get_contents('php://input'), true);
$id = $output['message']['chat']['id'];
file_get_contents('https://api.telegram.org/bot448065005:AAGM8sP7sKzRK24VspHbU1JoKcGzHhO4THU/sendMessage?chat_id=".$id."&text=Hi! It is my first message to you, human!"');
file_put_contents('logs.txt', $id );
