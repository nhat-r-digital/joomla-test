<?php
defined('_JEXEC') or die;
class PlgUserSample extends JPlugin
{
    protected $autoloadLanguage = true;
    public function onUserLogin()
    {
        die("1111111");
        JLoader::registerPrefix('HelloWorld', JPATH_LIBRARIES . '/joomla');
    }
}