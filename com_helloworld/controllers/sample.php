<?php

defined('_JEXEC') or die('Restricted access');

class HelloWorldControllerSample extends JControllerLegacy{

    public function getSaveClient()
    {
        $model = $this->getModel('Sample','HelloWorldModel');
        $input = JFactory::getApplication()->input->getString('input-data');
        $model->getSaveClient($input);
    }
}
