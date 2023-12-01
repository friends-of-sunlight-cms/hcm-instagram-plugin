<?php

return function (int $lastRunTime, int $delay) {
    if(empty($this->getConfig()['token'])) {
        return;
    }
    $response = file_get_contents("https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=" . $this->getConfig()['token']);
};
