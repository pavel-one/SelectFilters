<?php

/**
 * @var string $input
 */

$query = $modx->newQuery('msOption', [
    'key' => $input
]);
$query->select('caption, key');

/** @var msOption $obj */
$obj = $modx->getObject('msOption', $query);

if ($obj) {
    return $obj->get('caption');
} else {
//    return $modx->lexicon("mse2_filter_{$table}_{$input}");
}