<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response of the bulkCreateOffer method.
 */
class BulkOfferResponse extends AbstractModel
{
    /**
     * @var \Ebay\Sell\Inventory\Model\OfferSkuResponse[]
     */
    public $responses = null;
}
