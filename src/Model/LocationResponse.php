<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base response payload for the getInventoryLocations
 * call.
 */
class LocationResponse extends AbstractModel
{
    /**
     * The URI of the current page of results from the result set.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of items returned on a single page from the result set.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The URI for the following page of results. This value is returned only if there
     * is an additional page of results to display from the result set. Max length:
     * 2048.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of results skipped in the result set before listing the first
     * returned result. This value is set in the request with the offset query
     * parameter. Note: The items in a paginated result set use a zero-based list where
     * the first item in the list has an offset of 0.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The URI for the preceding page of results. This value is returned only if there
     * is a previous page of results to display from the result set. Max length: 2048.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The total number of items retrieved in the result set. If no items are found,
     * this field is returned with a value of 0.
     *
     * @var int
     */
    public $total = null;

    /**
     * An array of one or more of the merchant's inventory locations.
     *
     * @var \Ebay\Sell\Inventory\Model\InventoryLocationResponse[]
     */
    public $locations = null;
}
