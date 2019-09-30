Ext.onReady(function () {
    SelectFilters.config.connector_url = OfficeConfig.actionUrl;

    var grid = new SelectFilters.panel.Home();
    grid.render('office-selectfilters-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});