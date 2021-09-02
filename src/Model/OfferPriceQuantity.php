<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the offers container in a Bulk Update Price and Quantity
 * call to update the current price and/or quantity of one or more offers
 * associated with a specific inventory item.
 */
class OfferPriceQuantity extends AbstractModel
{
    /**
     * This field is used if the seller wants to modify the current quantity of the
     * inventory item that will be available for purchase in the offer (identified by
     * the corresponding offerId value). Either the availableQuantity field or the
     * price container is required, but not necessarily both.
     *
     * @var int
     */
    public $availableQuantity = null;

    /**
     * This field is the unique identifier of the offer. If an offers container is used
     * to update one or more offers associated to a specific inventory item, the
     * offerId value is required in order to identify the offer to update with a
     * modified price and/or quantity. The seller can run a getOffers call (passing in
     * the correct SKU value as a query parameter) to retrieve offerId values for
     * offers associated with the SKU.
     *
     * @var string
     */
    public $offerId = null;

    /**
     * This container is used if the seller wants to modify the current price of the
     * inventory item. The dollar value set here will be the new price of the inventory
     * item in the offer (identified by the corresponding offerId value). Either the
     * availableQuantity field or the price container is required, but not necessarily
     * both.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $price = null;
}
