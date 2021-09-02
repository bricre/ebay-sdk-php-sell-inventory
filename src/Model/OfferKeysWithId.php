<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base request payload of the getListingFees call.
 */
class OfferKeysWithId extends AbstractModel
{
    /**
     * This container is used to identify one or more (up to 250)unpublished offers for
     * which expected listing fees will be retrieved. The user passes one or more
     * offerId values (maximum of 250) in to this container to identify the unpublished
     * offers in which to retrieve expected listing fees. This call is only applicable
     * for offers in the unpublished state. The call response gives aggregate fee
     * amounts per eBay marketplace, and does not give fee information at the
     * individual offer level.
     *
     * @var \Ebay\Sell\Inventory\Model\OfferKeyWithId[]
     */
    public $offers = null;
}
