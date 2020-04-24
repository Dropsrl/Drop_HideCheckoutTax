<?php

namespace Drop\HideCheckoutTax\Plugin\Checkout;

use Magento\Checkout\Block\Checkout\TotalsProcessor;

class TotalsProcessorPlugin
{
    /**
     * @var \Drop\HideCheckoutTax\Helper\Data
     */
    private $helper;

    /**
     * TotalsProcessorPlugin constructor.
     * @param \Drop\HideCheckoutTax\Helper\Data $helper
     */
    public function __construct(
        \Drop\HideCheckoutTax\Helper\Data $helper
    )
    {
        $this->helper = $helper;
    }

    /**
     * @param \Magento\Checkout\Block\Checkout\TotalsProcessor $processor
     * @param array $jsLayout
     * @return array
     */
	public function afterProcess(TotalsProcessor $processor, array $jsLayout){
        if(!$this->helper->displayTax()){
			$jsLayout['components']['checkout']['children']['sidebar']['children']['summary']['children']['totals']['children']['tax']['config']['componentDisabled'] = true;
		}

		return $jsLayout;
	}
}
