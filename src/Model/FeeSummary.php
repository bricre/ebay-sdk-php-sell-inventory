<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to display the expected listing fees for each unpublished
 * offer specified in the request of the getListingFees call.
 */
class FeeSummary extends AbstractModel
{
    /**
     * This container is an array of listing fees that can be expected to be applied to
     * an offer on the specified eBay marketplace (marketplaceId value). Many fee types
     * will get returned even when they are 0.0. See the Standard selling fees help
     * page for more information on listing fees.
     *
     * @var \Ebay\Sell\Inventory\Model\Fee[]
     */
    public $fees = null;

    /**
     * This is the unique identifier of the eBay site for which listing fees for the
     * offer are applicable. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * This container will contain an array of errors and/or warnings when a call is
     * made, and errors and/or warnings occur.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
