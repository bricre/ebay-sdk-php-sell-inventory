<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that is used to provide the physical address of a location, and
 * it geo-coordinates.
 */
class Location extends AbstractModel
{
    /**
     * The address container is always returned in
     * getInventoryLocation/getInventoryLocations calls. Except in the case of an
     * inventory location that supports In-Store Pickup inventory, a full address is
     * not a requirement when setting up an inventory location.
     *
     * @var \Ebay\Sell\Inventory\Model\Address
     */
    public $address = null;

    /**
     * This container displays the Global Positioning System (GPS) latitude and
     * longitude coordinates for the inventory location. This container is only
     * returned if the geo-coordinates are set for an inventory location.
     *
     * @var \Ebay\Sell\Inventory\Model\GeoCoordinates
     */
    public $geoCoordinates = null;

    /**
     * A unique eBay-assigned ID for the location. Note: This field should not be
     * confused with the seller-defined merchantLocationKey value. It is the
     * merchantLocationKey value which is used to identify an inventory location when
     * working with inventory location API calls. The locationId value is only used
     * internally by eBay.
     *
     * @var string
     */
    public $locationId = null;
}
