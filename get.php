<?php
$url ="http://open.douyucdn.cn/api/RoomApi/live/1 ";
$url2 ="http://open.douyucdn.cn/api/RoomApi/room/78622";
$answer= file_get_contents($url2);
echo $answer;