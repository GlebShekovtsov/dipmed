<?php
require 'vendor/autoload.php';

class Smarty_Config extends Smarty
{

    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('template_engine/template/dir');
        $this->setConfigDir('template_engine/config/dir');
        $this->setCompileDir('template_engine/compile/dir');
        $this->setCacheDir('template_engine/cache/dir');
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->allow_php_templates = true;

    }
}