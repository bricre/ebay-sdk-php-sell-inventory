<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is use by the base response payload of the bulkUpdatePriceQuantity
 * call. The bulkUpdatePriceQuantity call response will return an HTTP status code,
 * offer ID, and SKU value for each offer/inventory item being updated, as well as
 * an errors and/or warnings container if any errors or warnings are triggered
 * while trying to update those offers/inventory items.
 */
class BulkPriceQuantityResponse extends AbstractModel
{
    /**
     * This container will return an HTTP status code, offer ID, and SKU value for each
     * offer/inventory item being updated, as well as an errors and/or warnings
     * container if any errors or warnings are triggered while trying to update those
     * offers/inventory items.
     *
     * @var \Ebay\Sell\Inventory\Model\PriceQuantityResponse[]
     */
    public $responses = null;
}
