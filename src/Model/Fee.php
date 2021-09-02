<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express expected listing fees that the seller may incur for
 * one or more unpublished offers, as well as any eBay-related promotional
 * discounts being applied toward a specific fee. These fees are the expected
 * cumulative fees per eBay marketplace (which is indicated in the marketplaceId
 * field).
 */
class Fee extends AbstractModel
{
    /**
     * This dollar value in this container is the actual dollar value of the listing
     * fee type specified in the feeType field.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $amount = null;

    /**
     * The value returned in this field indicates the type of listing fee that the
     * seller may incur if one or more unpublished offers (offers are specified in the
     * call request) are published on the marketplace specified in the marketplaceId
     * field. Applicable listing fees will often include things such as InsertionFee or
     * SubtitleFee, but many fee types will get returned even when they are 0.0. See
     * the Standard selling fees help page for more information on listing fees.
     *
     * @var string
     */
    public $feeType = null;

    /**
     * The dollar value in this container indicates any eBay promotional discount
     * applied toward the listing fee type specified in the feeType field. If there was
     * no discount applied toward the fee, this container is still returned but its
     * value is 0.0.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $promotionalDiscount = null;
}
