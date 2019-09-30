SelectFilters.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'selectfilters-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('selectfilters') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('selectfilters_items'),
                layout: 'anchor',
                items: [{
                    html: _('selectfilters_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'selectfilters-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    SelectFilters.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(SelectFilters.panel.Home, MODx.Panel);
Ext.reg('selectfilters-panel-home', SelectFilters.panel.Home);
