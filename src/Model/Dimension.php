<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify the dimensions (and the unit used to measure those
 * dimensions) of a shipping package. The dimensions container is conditionally
 * required if the seller will be offering calculated shipping rates to determine
 * shipping cost. See the Calculated shipping help page for more information on
 * calculated shipping.
 */
class Dimension extends AbstractModel
{
    /**
     * The actual height (in the measurement unit specified in the unit field) of the
     * shipping package. All fields of the dimensions container are required if package
     * dimensions are specified. If a shipping package measured 21.5 inches in length,
     * 15.0 inches in width, and 12.0 inches in height, the dimensions container would
     * look as follows: &quot;dimensions&quot;: {  &quot;length&quot;: 21.5,
     * &quot;width&quot;: 15.0,  &quot;height&quot;: 12.0,  &quot;unit&quot;:
     * &quot;INCH&quot;  }.
     *
     * @var float
     */
    public $height = null;

    /**
     * The actual length (in the measurement unit specified in the unit field) of the
     * shipping package. All fields of the dimensions container are required if package
     * dimensions are specified. If a shipping package measured 21.5 inches in length,
     * 15.0 inches in width, and 12.0 inches in height, the dimensions container would
     * look as follows: &quot;dimensions&quot;: {  &quot;length&quot;: 21.5,
     * &quot;width&quot;: 15.0,  &quot;height&quot;: 12.0,  &quot;unit&quot;:
     * &quot;INCH&quot;  }.
     *
     * @var float
     */
    public $length = null;

    /**
     * The unit of measurement used to specify the dimensions of a shipping package.
     * All fields of the dimensions container are required if package dimensions are
     * specified. If the English system of measurement is being used, the applicable
     * values for dimension units are FEET and INCH. If the metric system of
     * measurement is being used, the applicable values for weight units are METER and
     * CENTIMETER. The metric system is used by most countries outside of the US. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LengthUnitOfMeasureEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $unit = null;

    /**
     * The actual width (in the measurement unit specified in the unit field) of the
     * shipping package. All fields of the dimensions container are required if package
     * dimensions are specified. If a shipping package measured 21.5 inches in length,
     * 15.0 inches in width, and 12.0 inches in height, the dimensions container would
     * look as follows: &quot;dimensions&quot;: {  &quot;length&quot;: 21.5,
     * &quot;width&quot;: 15.0,  &quot;height&quot;: 12.0,  &quot;unit&quot;:
     * &quot;INCH&quot;  }.
     *
     * @var float
     */
    public $width = null;
}
