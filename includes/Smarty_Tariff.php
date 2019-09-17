<?php
require('smarty/libs/Smarty.class.php');

class Smarty_Tariff extends Smarty
{
    /**
     * @var string|null
     */

    function __construct($work_dir=null, $css=null, $js=null)
    {
        parent::__construct();
        if( $work_dir == null )
        {
            $work_dir = str_replace("\\", "/", getcwd()).'/includes/web/';
        }
        $css_path = ( $css == null ) ? 'web/css/' : $css;
        $js_path = ( $js == null ) ? 'web/js/' : $js;

        $this->template_dir = $work_dir . 'templates/';
        $this->compile_dir  = $work_dir . 'templates_c/';
        $this->config_dir   = $work_dir . 'configs/';
        $this->cache_dir    = $work_dir . 'cache/';

        $this->caching = true;
        $this->assign('app_name', 'Tariff Selection');
        $this->assign('css', $css_path);
        $this->assign('js', $js_path);
    }

}