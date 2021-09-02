<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the getListingFees call to indicate the unpublished
 * offer(s) for which expected listing fees will be retrieved. The user passes in
 * one or more offerId values (a maximum of 250). See the Standard selling fees
 * help page for more information on listing fees.
 */
class OfferKeyWithId extends AbstractModel
{
    /**
     * The unique identifier of an unpublished offer for which expected listing fees
     * will be retrieved. One to 250 offerId values can be passed in to the offers
     * container for one getListingFees call. Errors will occur if offerId values
     * representing published offers are passed in.
     *
     * @var string
     */
    public $offerId = null;
}
