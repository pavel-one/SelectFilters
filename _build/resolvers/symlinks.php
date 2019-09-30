<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/SelectFilters/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/selectfilters')) {
            $cache->deleteTree(
                $dev . 'assets/components/selectfilters/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/selectfilters/', $dev . 'assets/components/selectfilters');
        }
        if (!is_link($dev . 'core/components/selectfilters')) {
            $cache->deleteTree(
                $dev . 'core/components/selectfilters/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/selectfilters/', $dev . 'core/components/selectfilters');
        }
    }
}

return true;