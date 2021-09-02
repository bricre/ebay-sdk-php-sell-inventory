<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to show the version number and instance of the service or API.
 */
class Version extends AbstractModel
{
    /**
     * The instance of the version.
     *
     * @var \Ebay\Sell\Inventory\Model\Version
     */
    public $instance = null;

    /**
     * The version number of the service or API.
     *
     * @var string
     */
    public $version = null;
}
