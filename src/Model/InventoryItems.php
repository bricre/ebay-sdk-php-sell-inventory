<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response payload of getInventoryItems call.
 */
class InventoryItems extends AbstractModel
{
    /**
     * This is the URL to the current page of inventory items.
     *
     * @var string
     */
    public $href = null;

    /**
     * This container is an array of one or more inventory items, with detailed
     * information on each inventory item.
     *
     * @var \Ebay\Sell\Inventory\Model\InventoryItemWithSkuLocaleGroupid[]
     */
    public $inventoryItems = null;

    /**
     * This integer value is the number of inventory items that will be displayed on
     * each results page.
     *
     * @var int
     */
    public $limit = null;

    /**
     * This is the URL to the next page of inventory items. This field will only be
     * returned if there are additional inventory items to view.
     *
     * @var string
     */
    public $next = null;

    /**
     * This is the URL to the previous page of inventory items. This field will only be
     * returned if there are previous inventory items to view.
     *
     * @var string
     */
    public $prev = null;

    /**
     * This integer value indicates the total number of pages of results that are
     * available. This number will depend on the total number of inventory items
     * available for viewing, and on the limit value.
     *
     * @var int
     */
    public $size = null;

    /**
     * This integer value is the total number of inventory items that exist for the
     * seller's account. Based on this number and on the limit value, the seller may
     * have to toggle through multiple pages to view all inventory items.
     *
     * @var int
     */
    public $total = null;
}
