<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var SelectFilters $SelectFilters */
$SelectFilters = $modx->getService('SelectFilters', 'SelectFilters', MODX_CORE_PATH . 'components/selectfilters/model/');
$modx->lexicon->load('selectfilters:default');

// handle request
$corePath = $modx->getOption('selectfilters_core_path', null, $modx->getOption('core_path') . 'components/selectfilters/');
$path = $modx->getOption('processorsPath', $SelectFilters->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);