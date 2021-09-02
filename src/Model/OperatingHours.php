<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express the regular operating hours of a merchant's store
 * during the days of the week.
 */
class OperatingHours extends AbstractModel
{
    /**
     * A dayOfWeekEnum value is required for each day of the week that the store
     * location has regular operating hours. This field is returned if operating hours
     * are defined for the store location. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/api:DayOfWeekEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dayOfWeekEnum = null;

    /**
     * This container is used to define the opening and closing times of a store's
     * working day (defined in the dayOfWeekEnum field). An intervals container is
     * needed for each day of the week that the store location is open. If a store
     * location closes for lunch (or any other period during the day) and then reopens,
     * multiple open and close pairs are needed This container is returned if operating
     * hours are defined for the store location.
     *
     * @var \Ebay\Sell\Inventory\Model\Interval[]
     */
    public $intervals = null;
}
