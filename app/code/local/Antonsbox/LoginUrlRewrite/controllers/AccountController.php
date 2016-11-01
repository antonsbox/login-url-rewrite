<?php

require_once 'Mage/Customer/controllers/AccountController.php';

class Antonsbox_LoginUrlRewrite_AccountController extends Mage_Customer_AccountController
{
    public function loginAction()
    {
        $currentUrl = Mage::helper('core/url')->getCurrentUrl();
        $url = Mage::getSingleton('core/url')->parseUrl($currentUrl);
        $path = $url->getPath();

        if ((strpos($path, 'referer') > -1)) {
            $this->_redirect('customer/account/login/');

        }
        $this->loadLayout();
        $this->renderLayout();

    }
}