<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express the Global Positioning System (GPS) latitude and
 * longitude coordinates of an inventory location.
 */
class GeoCoordinates extends AbstractModel
{
    /**
     * The latitude (North-South) component of the geographic coordinate. This field is
     * required if a geoCoordinates container is used. This field is returned if
     * geographical coordinates are set for the inventory location.
     *
     * @var float
     */
    public $latitude = null;

    /**
     * The longitude (East-West) component of the geographic coordinate. This field is
     * required if a geoCoordinates container is used. This field is returned if
     * geographical coordinates are set for the inventory location.
     *
     * @var float
     */
    public $longitude = null;
}
