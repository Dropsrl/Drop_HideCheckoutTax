<?php

namespace Drop\HideCheckoutTax\Plugin\Cart;

use Magento\Checkout\Block\Cart\CartTotalsProcessor;

class CartTotalsProcessorPlugin
{
    /**
     * @var \Drop\HideCheckoutTax\Helper\Data
     */
    private $helper;

    /**
     * CartTotalsProcessorPlugin constructor.
     * @param \Drop\HideCheckoutTax\Helper\Data $helper
     */
    public function __construct(
        \Drop\HideCheckoutTax\Helper\Data $helper
    )
    {
        $this->helper = $helper;
    }

    /**
     * @param \Magento\Checkout\Block\Cart\CartTotalsProcessor $processor
     * @param array $jsLayout
     * @return array
     */
	public function afterProcess(CartTotalsProcessor $processor, array $jsLayout){
        if(!$this->helper->displayTax()){
			$jsLayout['components']['block-totals']['children']['tax']['config']['componentDisabled'] = true;
		}

		return $jsLayout;
	}
}
