Ext.ComponentMgr.onAvailable('minishop2-window-option-update', function () {
    let column = this.fields[0].items[1].items;
    column.push({
        xtype: 'checkbox',
        id: 'select_filter_id',
        name: 'select_filter',
        boxLabel: 'Показывать в фильтрах',
        anchor: '100%'
    });
});