<?php

// Remove all style(s) from the default layout
foreach (g(LOT . DS . 'x' . DS . 'panel' . DS . 'lot' . DS . 'layout' . DS . 'asset' . DS . 'css', 'css', true) as $k => $v) {
    Asset::let($k);
}

// Add your style(s) here
$z = defined('DEBUG') && DEBUG ? '.' : '.min.';
Asset::set(__DIR__ . DS . '..' . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'windows-98' . $z . 'css', 20.1);
