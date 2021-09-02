<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify one to five eBay listings that will be migrated to
 * the new Inventory model.
 */
class MigrateListing extends AbstractModel
{
    /**
     * The unique identifier of the eBay listing to migrate to the new Inventory model.
     * In the Trading API, this field is known as the ItemID. Up to five unique eBay
     * listings may be specified here in separate listingId fields. The seller should
     * make sure that each of these listings meet the requirements that are stated at
     * the top of this Call Reference page.
     *
     * @var string
     */
    public $listingId = null;
}
