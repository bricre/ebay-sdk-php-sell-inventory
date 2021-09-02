<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to indicate the status of each offer that the user attempted
 * to publish. If an offer is successfully published, an eBay listing ID (also
 * known as an Item ID) is returned. If there is an issue publishing the offer and
 * creating the new eBay listing, the information about why the listing failed
 * should be returned in the errors and/or warnings containers.
 */
class OfferResponseWithListingId extends AbstractModel
{
    /**
     * This container will be returned if there were one or more errors associated with
     * publishing the offer.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $errors = null;

    /**
     * The unique identifier of the newly-created eBay listing. This field is only
     * returned if the seller successfully published the offer and created the new eBay
     * listing.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * The unique identifier of the offer that the seller published (or attempted to
     * publish).
     *
     * @var string
     */
    public $offerId = null;

    /**
     * The HTTP status code returned in this field indicates the success or failure of
     * publishing the offer specified in the offerId field. See the HTTP status codes
     * table to see which each status code indicates.
     *
     * @var int
     */
    public $statusCode = null;

    /**
     * This container will be returned if there were one or more warnings associated
     * with publishing the offer.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
