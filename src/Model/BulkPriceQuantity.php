<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base request payload of the bulkUpdatePriceQuantity
 * call. The bulkUpdatePriceQuantity call allows the seller to update the total
 * 'ship-to-home' quantity of one or more inventory items (up to 25) and/or to
 * update the price and/or quantity of one or more specific published offers.
 */
class BulkPriceQuantity extends AbstractModel
{
    /**
     * This container is used by the seller to update the total 'ship-to-home' quantity
     * of one or more inventory items (up to 25) and/or to update the price and/or
     * quantity of one or more specific published offers.
     *
     * @var \Ebay\Sell\Inventory\Model\PriceQuantity[]
     */
    public $requests = null;
}
