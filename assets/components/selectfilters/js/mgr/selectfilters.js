var SelectFilters = function (config) {
    config = config || {};
    SelectFilters.superclass.constructor.call(this, config);
};
Ext.extend(SelectFilters, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('selectfilters', SelectFilters);

SelectFilters = new SelectFilters();