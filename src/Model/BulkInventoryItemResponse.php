<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response of the bulkCreateOrReplaceInventoryItem
 * method.
 */
class BulkInventoryItemResponse extends AbstractModel
{
    /**
     * This is the base container of the bulkCreateOrReplaceInventoryItem response. The
     * results of each attempted inventory item creation/update is captured under this
     * container.
     *
     * @var \Ebay\Sell\Inventory\Model\InventoryItemResponse[]
     */
    public $responses = null;
}
