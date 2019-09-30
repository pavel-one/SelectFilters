<?php
/** @var modX $modx */
$eventName = $modx->event->name;
switch ($eventName) {
    case 'msOnManagerCustomCssJs':
        if ($scriptProperties['page'] != 'settings') return;
        $modx->controller->addLastJavascript(MODX_ASSETS_URL . 'components/selectfilters/js/ms2/init.js');
        break;
}