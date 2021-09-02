<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The base response of the withdrawOffer call.
 */
class WithdrawResponse extends AbstractModel
{
    /**
     * The unique identifier of the eBay listing associated with the offer that was
     * withdrawn. This field will not be returned if the eBay listing was not
     * successfully ended.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * This container will be returned if there were one or more warnings associated
     * with the attempt to withdraw the offer.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
