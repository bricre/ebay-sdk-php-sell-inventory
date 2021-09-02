<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express a dollar value and the applicable currency.
 */
class Amount extends AbstractModel
{
    /**
     * A three-digit string value respresenting the type of currency being used. Both
     * the value and currency fields are required/always returned when expressing
     * prices. See the CurrencyCodeEnum type for the full list of currencies and their
     * corresponding three-digit string values.
     *
     * @var string
     */
    public $currency = null;

    /**
     * A string representation of a dollar value expressed in the currency specified in
     * the currency field. Both the value and currency fields are required/always
     * returned when expressing prices.
     *
     * @var string
     */
    public $value = null;
}
