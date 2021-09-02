<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response payload of the publishOffer and
 * publishOfferByInventoryItemGroup calls.
 */
class PublishResponse extends AbstractModel
{
    /**
     * The unique identifier of the newly created eBay listing. This field is returned
     * if the single offer (if publishOffer call was used) or group of offers in an
     * inventory item group (if publishOfferByInventoryItemGroup call was used) was
     * successfully converted into an eBay listing.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * This container will contain an array of errors and/or warnings if any occur when
     * a publishOffer or publishOfferByInventoryItemGroup call is made.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
