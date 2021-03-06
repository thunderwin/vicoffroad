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


namespace Mirasvit\Seo\Service\Cache;

class Clean implements \Mirasvit\Seo\Api\Service\Cache\CleanInterface
{
    /**
     * @var \Magento\Framework\App\Cache\ManagerFactory
     */
    protected $cacheManagerFactor;

    /**
     * @param \Magento\Framework\App\Cache\ManagerFactor
     */
    public function __construct(
        \Magento\Framework\App\Cache\ManagerFactory $cacheManagerFactory
    ) {
        $this->cacheManagerFactory = $cacheManagerFactory;
    }

    /**
     * @return void
     */
    public function cleanAllCache() {
        $cacheManager = $this->cacheManagerFactory->create();
        $types = $cacheManager->getAvailableTypes();
        $cacheManager->clean($types);
    }
}