<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the response payload of the createOffer and updateOffer
 * calls. The offerId field contains the unique identifier for the offer if the
 * offer is successfully created by the createOffer call. The warnings field
 * contains any errors and/or warnings that may have been triggered by the call.
 * Note: The offerId value is only returned with a successful createOffer call.
 * This field will not be returned in the updateOffer response.
 */
class OfferResponse extends AbstractModel
{
    /**
     * The unique identifier of the offer that was just created with a createOffer
     * call. It is not returned if the createOffer call fails to create an offer. This
     * identifier will be needed for many offer-related calls. Note: The offerId value
     * is only returned with a successful createOffer call. This field will not be
     * returned in the updateOffer response.
     *
     * @var string
     */
    public $offerId = null;

    /**
     * This container will contain an array of errors and/or warnings when a call is
     * made, and errors and/or warnings occur.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
