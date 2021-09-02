<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to update the total &quot;ship-to-home&quot; quantity for one
 * or more inventory items and/or to update the price and/or quantity of one or
 * more specific offers associated with one or more inventory items.
 */
class PriceQuantity extends AbstractModel
{
    /**
     * This container is needed if the seller is updating the price and/or quantity of
     * one or more published offers, and a successful call will actually update the
     * active eBay listing with the revised price and/or available quantity. This call
     * is not designed to work with unpublished offers. For unpublished offers, the
     * seller should use the updateOffer call to update the available quantity and/or
     * price. If the seller is also using the shipToLocationAvailability container and
     * sku field to update the total 'ship-to-home' quantity of the inventory item, the
     * SKU value associated with the corresponding offerId value(s) must be the same as
     * the corresponding sku value that is passed in, or an error will occur. A
     * separate (OfferPriceQuantity) node is required for each offer being updated.
     *
     * @var \Ebay\Sell\Inventory\Model\OfferPriceQuantity[]
     */
    public $offers = null;

    /**
     * This container is needed if the seller is updating the total 'ship-to-home'
     * quantity for the corresponding inventory item (specified in the sku field. A
     * successful call will update the inventory item record associated with the sku
     * value.
     *
     * @var \Ebay\Sell\Inventory\Model\ShipToLocationAvailability
     */
    public $shipToLocationAvailability = null;

    /**
     * This is the seller-defined SKU value of the inventory item whose total
     * 'ship-to-home' quantity will be updated. This field is only required when the
     * seller is updating the total quantity of an inventory item using the
     * shipToLocationAvailability container. If the seller is updating the price and/or
     * quantity of one or more specific offers, one or more offerId values are used
     * instead, and the sku value is not needed. If the seller wants to update the
     * price and/or quantity of one or more offers, and also wants to update the total
     * 'ship-to-home' quantity of the corresponding inventory item, the SKU value
     * associated with the offerId value(s) must be the same as the corresponding sku
     * value that is passed in, or an error will occur. Max Length: 50.
     *
     * @var string
     */
    public $sku = null;
}
