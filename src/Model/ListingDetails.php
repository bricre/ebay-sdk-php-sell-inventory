<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the listing container in the getOffer and getOffers calls
 * to provide the eBay listing ID, the listing status, and quantity sold for the
 * offer. The listing container is only returned for published offers, and is not
 * returned for unpublished offers.
 */
class ListingDetails extends AbstractModel
{
    /**
     * The unique identifier of the eBay listing that is associated with the published
     * offer.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * The enumeration value returned in this field indicates the status of the listing
     * that is associated with the published offer. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $listingStatus = null;

    /**
     * This integer value indicates the quantity of the product that has been sold for
     * the published offer.
     *
     * @var int
     */
    public $soldQuantity = null;
}
