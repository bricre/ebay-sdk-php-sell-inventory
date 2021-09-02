<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to indicate the quantities of the inventory items that are
 * reserved for the different listing formats of the SKU offers.
 */
class FormatAllocation extends AbstractModel
{
    /**
     * This integer value indicates the quantity of the inventory item that is reserved
     * for the published auction format offers of the SKU.
     *
     * @var int
     */
    public $auction = null;

    /**
     * This integer value indicates the quantity of the inventory item that is
     * available for the fixed-price offers of the SKU.
     *
     * @var int
     */
    public $fixedPrice = null;
}
