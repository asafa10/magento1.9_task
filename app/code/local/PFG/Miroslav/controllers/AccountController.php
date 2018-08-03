<?php

require_once Mage::getModuleDir('controllers', 'Mage_Customer') . DS . 'AccountController.php';

class PFG_Miroslav_AccountController extends Mage_Customer_AccountController {

    public function logoutAction()
    {
        $this->_getSession()->logout()
            ->renewSession();

        $this->_redirect('/');
    }

}
