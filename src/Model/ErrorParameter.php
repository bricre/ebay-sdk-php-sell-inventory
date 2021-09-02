<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to indicate the parameter field/value that caused an issue
 * with the call request.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * This type contains the name and value of an input parameter that contributed to
     * a specific error or warning condition.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is the actual value that was passed in for the element specified in the
     * name field.
     *
     * @var string
     */
    public $value = null;
}
