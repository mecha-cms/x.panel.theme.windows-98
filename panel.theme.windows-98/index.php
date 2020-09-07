<?php

Hook::set('get', function() {
    // Remove all style(s) from the default layout
    foreach (g(LOT . DS . 'x' . DS . 'panel' . DS . 'lot' . DS . 'layout' . DS . 'asset' . DS . 'css', 'css', true) as $k => $v) {
        Asset::let($k);
    }
    // Add your style(s) here
    $z = defined('DEBUG') && DEBUG ? '.' : '.min.';
    Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'theme' . $z . 'css', 20.1);
}, 20);
