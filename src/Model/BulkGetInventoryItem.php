<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base request of the bulkGetInventoryItem method.
 */
class BulkGetInventoryItem extends AbstractModel
{
    /**
     * The seller passes in multiple SKU values under this container to retrieve
     * multiple inventory item records. Up to 25 inventory item records can be
     * retrieved at one time.
     *
     * @var \Ebay\Sell\Inventory\Model\GetInventoryItem[]
     */
    public $requests = null;
}
