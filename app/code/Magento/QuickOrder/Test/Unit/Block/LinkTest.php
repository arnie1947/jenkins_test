<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\QuickOrder\Test\Unit\Block;

class LinkTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\Framework\TestFramework\Unit\Helper\ObjectManager
     */
    protected $_objectManagerHelper;

    protected function setUp()
    {
        $this->_objectManagerHelper = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
    }

    public function testGetHref()
    {
        $path = 'quickorder';
        $url = 'http://example.com/';

        $urlBuilder = $this->getMockForAbstractClass(\Magento\Framework\UrlInterface::class);
        $urlBuilder->expects($this->once())->method('getUrl')->with($path)->will($this->returnValue($url . $path));

        $context = $this->_objectManagerHelper->getObject(
            \Magento\Framework\View\Element\Template\Context::class,
            ['urlBuilder' => $urlBuilder]
        );
        $link = $this->_objectManagerHelper->getObject(\Magento\QuickOrder\Block\Link::class, ['context' => $context]);
        $this->assertEquals($url . $path, $link->getHref());
    }
}
