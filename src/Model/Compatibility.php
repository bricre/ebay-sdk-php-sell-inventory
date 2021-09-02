<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the createOrReplaceProductCompatibility call to associate
 * compatible vehicles to an inventory item. This type is also the base response of
 * the getProductCompatibility call.
 */
class Compatibility extends AbstractModel
{
    /**
     * This container consists of an array of motor vehicles (make, model, year, trim,
     * engine) that are compatible with the motor vehicle part or accessory specified
     * by the sku value.
     *
     * @var \Ebay\Sell\Inventory\Model\CompatibleProduct[]
     */
    public $compatibleProducts = null;

    /**
     * This is the seller-defined SKU value of the inventory item that will be
     * associated with the compatible vehicles. This field is not applicable to the
     * createOrReplaceProductCompatibility call, but it is always returned with the
     * getProductCompatibility call. For the createOrReplaceProductCompatibility call,
     * the SKU value for the inventory item is actually passed in as part of the call
     * URI, and not in the request payload.
     *
     * @var string
     */
    public $sku = null;
}
