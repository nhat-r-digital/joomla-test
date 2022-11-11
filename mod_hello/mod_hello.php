<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__).'/HelloWorldHelper.php';
$hellomessage = HelloWorldHelper::getHelloWorldMessage('Test helper');
require JModuleHelper::getLayoutPath('mod_hello');
