<?php

return function () {
    if(empty($this->getConfig()['token'])) {
        Sunlight\Logger::warning("hcm", _lang('hcm-instagram.error.token'));
        return;
    }
    
    $output = "<span id=\"instafeed\"></span>\n";
    $output .= "<script src='" . $this->getAssetPath('public/js/instafeed.min.js') . "'></script>\n";
    $output .= "<script>\n";
    $output .= "var userFeed = new Instafeed({\n";
    $output .= "accessToken: '" . $this->getConfig()['token'] . "',\n";
    $output .= "limit: " . $this->getConfig()['limit'] . ",\n";
    $output .= "template: '<a href=\"{{link}}\" target=\"_blank\" ><img src=\"{{image}}\" width=\"" . $this->getConfig()['width'] . "\" height=\"" . $this->getConfig()['height'] . "\" alt=\"{{caption}}\" title=\"{{caption}}\"></a> '\n";
    $output .= "});\n";
    $output .= "userFeed.run();\n";
    $output .= "</script>\n";
    
    return $output;
};
