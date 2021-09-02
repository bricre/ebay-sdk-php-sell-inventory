<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The seller-defined Stock-Keeping Unit (SKU) of each inventory item that the user
 * wants to retrieve is passed in the request of the bulkGetInventoryItem method.
 */
class GetInventoryItem extends AbstractModel
{
    /**
     * An array of SKU values are passed in under the sku container to retrieve up to
     * 25 inventory item records.
     *
     * @var string
     */
    public $sku = null;
}
