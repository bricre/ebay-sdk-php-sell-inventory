<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify/indicate the quantity of the inventory item that is
 * available for an In-Store Pickup order at the merchant's physical store
 * (specified by the merchantLocationKey field).
 */
class PickupAtLocationAvailability extends AbstractModel
{
    /**
     * The enumeration value in this field indicates the availability status of the
     * inventory item at the merchant's physical store specified by the
     * pickupAtLocationAvailability.merchantLocationKey field. This field is required
     * if the pickupAtLocationAvailability container is used, and is always returned
     * with the pickupAtLocationAvailability container. See AvailabilityTypeEnum for
     * more information about how/when you use each enumeration value. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $availabilityType = null;

    /**
     * This container is used to indicate how soon an In-Store Pickup order will be
     * available for pickup by the buyer after the order takes place. This container is
     * required if the pickupAtLocationAvailability container is used, and is always
     * returned with the pickupAtLocationAvailability container.
     *
     * @var \Ebay\Sell\Inventory\Model\TimeDuration
     */
    public $fulfillmentTime = null;

    /**
     * The unique identifier of a merchant's store where the In-Store Pickup inventory
     * item is currently located, or where inventory will be sent to. If the merchant's
     * store is currently awaiting for inventory, the availabilityType value should be
     * SHIP_TO_STORE. This field is required if the pickupAtLocationAvailability
     * container is used, and is always returned with the pickupAtLocationAvailability
     * container. Max length: 36.
     *
     * @var string
     */
    public $merchantLocationKey = null;

    /**
     * This integer value indicates the quantity of the inventory item that is
     * available for In-Store Pickup at the store identified by the merchantLocationKey
     * value. The value of quantity should be an integer value greater than 0, unless
     * the inventory item is out of stock. This field is required if the
     * pickupAtLocationAvailability container is used, and is always returned with the
     * pickupAtLocationAvailability container.
     *
     * @var int
     */
    public $quantity = null;
}
