<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response of the bulkPublishOffer method.
 */
class BulkPublishResponse extends AbstractModel
{
    /**
     * A node is returned under the responses container to indicate the success or
     * failure of each offer that the seller was attempting to publish.
     *
     * @var \Ebay\Sell\Inventory\Model\OfferResponseWithListingId[]
     */
    public $responses = null;
}
