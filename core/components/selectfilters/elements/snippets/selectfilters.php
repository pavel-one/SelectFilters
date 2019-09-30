<?php
/** @var modX $modx */
/** @var array $default */
/** @var pdoFetch $pdo */
$pdo = $modx->getService('pdoFetch');
$pdo->setConfig([
    'class' => 'msOption',
    'return' => 'data',
    'sortby' => 'id',
    'select' => 'key'
]);
$outArr = [];
$options = $pdo->run();
foreach ($options as $option) {
    $outArr[] = 'msoption|' . $option['key'];
}
$outArr = array_merge($outArr, $default);

return join(',', $outArr);