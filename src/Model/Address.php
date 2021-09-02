<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to define the physical address of an inventory location.
 */
class Address extends AbstractModel
{
    /**
     * The first line of a street address. This field is required for store inventory
     * locations that will be holding In-Store Pickup inventory. A street address is
     * not required if the inventory location is not holding In-Store Pickup Inventory.
     * This field will be returned if defined for an inventory location. Max length:
     * 128.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of a street address. This field can be used for additional
     * address information, such as a suite or apartment number. A street address is
     * not required if the inventory location is not holding In-Store Pickup Inventory.
     * This field will be returned if defined for an inventory location. Max length:
     * 128.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city in which the inventory location resides. This field is required for
     * store inventory locations that will be holding In-Store Pickup inventory. For
     * warehouse locations, this field is technically optional, as a postalCode can be
     * used instead of city/stateOrProvince pair, and then the city is just derived
     * from this postal/zip code. This field is returned if defined for an inventory
     * location. Max length: 128.
     *
     * @var string
     */
    public $city = null;

    /**
     * The country in which the address resides, represented as two-letter ISO 3166
     * country code. For example, US represents the United States, and DE represents
     * Germany. Max length: 2 For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/CountryCodeEnum"'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county in which the address resides. This field is returned if defined for
     * an inventory location.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal/zip code of the address. eBay uses postal codes to surface In-Store
     * Pickup items within the vicinity of a buyer's location, and it also user postal
     * codes (origin and destination) to estimate shipping costs when the seller uses
     * calculated shipping. A city/stateOrProvince pair can be used instead of a
     * postalCode value, and then the postal code is just derived from the city and
     * state/province. This field is returned if defined for an inventory location. Max
     * length: 16.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state/province in which the inventory location resides. This field is
     * required for store inventory locations that will be holding In-Store Pickup
     * inventory. For warehouse locations, this field is technically optional, as a
     * postalCode can be used instead of city/stateOrProvince pair, and then the state
     * or province is just derived from this postal/zip code. Max length: 128.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
