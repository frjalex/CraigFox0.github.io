<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '187719420:AAGFC_Fbt5ysYp1CRZSPTVd9YD-QsboAEkY');

$bot = new PollBot(BOT_TOKEN, 'Nomicsbot');
$bot->runLongpoll();
