<?php

/**
 * Copyright © 2016 Magestore. All rights reserved.
 * See COPYING.txt for license details.
 *
 */
namespace Magestore\Sociallogin\Block\Adminhtml\System\Config;

class Aolredirecturl
    extends \Magestore\Sociallogin\Block\Adminhtml\System\Container
{
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $storeId = (int)$this->getRequest()->getParam('store', 0);
        $redirectUrl = $this->_storeManager->getStore($storeId)->getUrl('sociallogin/sociallogin/allogin', array('_secure' => true));
        $html = "<input style='width: 100%;'  readonly id='sociallogin_Allogin_redirecturl' class='input-text' value='" . $redirectUrl . "'>";
        return $html;
    }

}