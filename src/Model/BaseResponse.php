<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This is the base response of the createOrReplaceInventoryItem,
 * createOrReplaceInventoryItemGroup, and createOrReplaceProductCompatibility
 * calls. A response payload will only be returned for these three calls if one or
 * more errors or warnings occur with the call.
 */
class BaseResponse extends AbstractModel
{
    /**
     * This container will be returned in a call response payload if one or more
     * warnings or errors are triggered when an Inventory API call is made. This
     * container will contain detailed information about the error or warning.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
