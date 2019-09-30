<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $fields = ['select_filter'];

            foreach ($fields as $item) {
                $table = $modx->getTableName('msOption');
                $sql = "ALTER TABLE $table  ADD $item tinyint(1) NULL;";
                $modx->exec($sql);
                $modx->log(3, "Добавлено поле <b>$item</b> в $table");
            }

            /** @var miniShop2 $miniShop2 */
            if ($miniShop2 = $modx->getService('miniShop2')) {
                $miniShop2->addPlugin('SelectFilters', '{core_path}components/selectfilters/ms2/index.php');
                $modx->log(3, 'Плагин дополнительного поля <b>SelectFilters</b> установлен');
            }
            break;
    }
}
return true;