<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the response of the bulkGetInventoryItem method to give the
 * status of each inventory item record that the user tried to retrieve.
 */
class GetInventoryItemResponse extends AbstractModel
{
    /**
     * This container will be returned if there were one or more errors associated with
     * retrieving the inventory item record.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $errors = null;

    /**
     * This container consists of detailed information on the inventory item specified
     * in the sku field.
     *
     * @var \Ebay\Sell\Inventory\Model\InventoryItemWithSkuLocaleGroupKeys
     */
    public $inventoryItem = null;

    /**
     * The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller
     * should have a unique SKU value for every product that they sell.
     *
     * @var string
     */
    public $sku = null;

    /**
     * The HTTP status code returned in this field indicates the success or failure of
     * retrieving the inventory item record for the inventory item specified in the sku
     * field. See the HTTP status codes table to see which each status code indicates.
     *
     * @var int
     */
    public $statusCode = null;

    /**
     * This container will be returned if there were one or more warnings associated
     * with retrieving the inventory item record.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
