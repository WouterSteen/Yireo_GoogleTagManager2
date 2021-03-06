<?php
/**
 * GoogleTagManager2 plugin for Magento
 *
 * @package     Yireo_GoogleTagManager2
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

namespace Yireo\GoogleTagManager2\ViewModel;

use Magento\Directory\Model\Currency;

/**
 * Class \Yireo\GoogleTagManager2\ViewModel\Generic
 */
class Generic
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * Generic constructor.
     *
     * @param Currency $currency
     */
    public function __construct(
        Currency $currency
    ) {
        $this->currency = $currency;
    }

    /**
     *
     */
    public function getBaseCurrencyCode()
    {
        return $this->currency->getCurrencySymbol();
    }
}
