<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at https://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   mirasvit/module-seo
 * @version   1.0.38
 * @copyright Copyright (C) 2016 Mirasvit (https://mirasvit.com/)
 */



namespace Mirasvit\SeoAutolink\Controller\Adminhtml\Link;

/**
 * @magentoAppArea adminhtml
 */
class IndexTest extends \Magento\TestFramework\TestCase\AbstractBackendController
{
    /**
     * setUp.
     */
    public function setUp()
    {
        $this->resource = 'Mirasvit_SeoAutolink::seoautolink_link';
        $this->uri = 'backend/seoautolink/link/index';
        parent::setUp();
    }

    /**
     * @covers  Mirasvit\SeoAutolink\Controller\Adminhtml\Link\Index::execute
     */
    public function testIndexAction()
    {
        $this->dispatch('backend/seoautolink/link/index');
        $body = $this->getResponse()->getBody();
        $this->assertContains('<h1 class="page-title">Link Manager</h1>', $body);
    }
}
