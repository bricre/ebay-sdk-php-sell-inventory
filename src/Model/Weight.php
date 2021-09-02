<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify the weight (and the unit used to measure that
 * weight) of a shipping package. The weight container is conditionally required if
 * the seller will be offering calculated shipping rates to determine shipping
 * cost, or is using flat-rate costs, but charging a weight surcharge. See the
 * Calculated shipping help page for more information on calculated shipping.
 */
class Weight extends AbstractModel
{
    /**
     * The unit of measurement used to specify the weight of a shipping package. Both
     * the unit and value fields are required if the weight container is used. If the
     * English system of measurement is being used, the applicable values for weight
     * units are POUND and OUNCE. If the metric system of measurement is being used,
     * the applicable values for weight units are KILOGRAM and GRAM. The metric system
     * is used by most countries outside of the US. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:WeightUnitOfMeasureEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $unit = null;

    /**
     * The actual weight (in the measurement unit specified in the unit field) of the
     * shipping package. Both the unit and value fields are required if the weight
     * container is used. If a shipping package weighed 20.5 ounces, the container
     * would look as follows: &quot;weight&quot;: {  &quot;value&quot;: 20.5,
     * &quot;unit&quot;: &quot;OUNCE&quot;  }.
     *
     * @var float
     */
    public $value = null;
}
