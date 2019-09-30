<?php

/**
 * The home manager controller for SelectFilters.
 *
 */
class SelectFiltersHomeManagerController extends modExtraManagerController
{
    /** @var SelectFilters $SelectFilters */
    public $SelectFilters;


    /**
     *
     */
    public function initialize()
    {
        $this->SelectFilters = $this->modx->getService('SelectFilters', 'SelectFilters', MODX_CORE_PATH . 'components/selectfilters/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['selectfilters:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('selectfilters');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->SelectFilters->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->SelectFilters->config['jsUrl'] . 'mgr/selectfilters.js');
        $this->addJavascript($this->SelectFilters->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->SelectFilters->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->SelectFilters->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->SelectFilters->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->SelectFilters->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->SelectFilters->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        SelectFilters.config = ' . json_encode($this->SelectFilters->config) . ';
        SelectFilters.config.connector_url = "' . $this->SelectFilters->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "selectfilters-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="selectfilters-panel-home-div"></div>';

        return '';
    }
}