<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the response of the bulkCreateOrReplaceInventoryItem method
 * to indicate the success or failure of creating and/or updating each inventory
 * item record. The sku value in this type identifies each inventory item record.
 */
class InventoryItemResponse extends AbstractModel
{
    /**
     * This container will be returned if there were one or more errors associated with
     * the creation or update to the inventory item record.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $errors = null;

    /**
     * This field is for future use only. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $locale = null;

    /**
     * The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller
     * should have a unique SKU value for every product that they sell.
     *
     * @var string
     */
    public $sku = null;

    /**
     * The HTTP status code returned in this field indicates the success or failure of
     * creating or updating the inventory item record for the inventory item indicated
     * in the sku field. See the HTTP status codes table to see which each status code
     * indicates.
     *
     * @var int
     */
    public $statusCode = null;

    /**
     * This container will be returned if there were one or more warnings associated
     * with the creation or update to the inventory item record.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
