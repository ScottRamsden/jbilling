<?php

class IndexController extends Zend_Controller_Action
{
    public function init()
    {

		$this->view->actionName = $this->_getParam('action');

    }

    public function indexAction()
    {
        // action body
    }
}

