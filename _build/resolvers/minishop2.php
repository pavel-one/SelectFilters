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
                $sql = "ALTER TABLE $table  ADD $item int(1) NULL;";
                $modx->exec($sql);
                $modx->log(3, "Добавлено поле <b>$item</b> в $table");
            }
            break;
    }
}
return true;