SelectFilters.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'selectfilters-panel-home',
            renderTo: 'selectfilters-panel-home-div'
        }]
    });
    SelectFilters.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(SelectFilters.page.Home, MODx.Component);
Ext.reg('selectfilters-page-home', SelectFilters.page.Home);