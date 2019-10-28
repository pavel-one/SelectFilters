<?php
/** @var modX $modx */
/** @var array $default */
/** @var pdoFetch $pdo */
$pdo = $modx->getService('pdoFetch');
$pdo->setConfig([
    'class' => 'msOption',
    'return' => 'data',
    'sortby' => 'id',
    'select' => 'key',
    'limit' => 0,
    'where' => [
        'select_filter' => 1,
    ]
]);
$outArr = [];
$options = $pdo->run();
foreach ($options as $option) {
    $outArr[] = 'msoption|' . $option['key'];
}
$outArr = array_merge($default, $outArr);

return join(',', $outArr);