<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * "Quick Order" link
 */
namespace Magento\QuickOrder\Block;

/**
 * Class Link
 */
class Link extends \Magento\Framework\View\Element\Html\Link
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        $this->_customerHelper = $customerHelper;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->getUrl('quickorder');
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getLabel()
    {
        return __('Quick Order');
    }
}
