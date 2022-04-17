<?php

defined('_JEXEC') or die('access deny');

use Joomla\CMS\Plugin\CMSPlugin;

class plgContentGsocplugin extends CMSPlugin
{


    function onContentPrepare($content, &$row, &$params, $page=0)
    {
        $text_id = $this->params->get(path: 'my_text', default:'');
        $row->text =  '<h1>' . $text_id. '</h1>' . $row->text ;
    }
}