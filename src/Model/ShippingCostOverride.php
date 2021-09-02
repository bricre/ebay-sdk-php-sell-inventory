<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used if the seller wants to override the shipping costs or
 * surcharge associated with a specific domestic or international shipping service
 * option defined in the fulfillment listing policy that is being applied toward
 * the offer. The shipping-related costs that can be overridden include the
 * shipping cost to ship one item, the shipping cost to ship each additional item
 * (if multiple quantity are purchased), and the shipping surcharge applied to the
 * shipping service option.
 */
class ShippingCostOverride extends AbstractModel
{
    /**
     * The dollar value passed into this field will override the additional shipping
     * cost that is currently set for the applicable shipping service option. The
     * &quot;Additional shipping cost&quot; is the cost to ship each additional
     * identical product to the buyer using the corresponding shipping service. The
     * shipping service option in the fulfillment policy to override is controlled by
     * the shippingServiceType and priority values. If using an updateOffer call, and
     * this field is defined for the offer being updated, this field must be supplied
     * again, even if its value is not changing. This field is returned in the getOffer
     * and getOffers calls if defined.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $additionalShippingCost = null;

    /**
     * The integer value input into this field, along with the shippingServiceType
     * value, sets which domestic or international shipping service option in the
     * fulfillment policy will be modified with updated shipping costs. Specifically,
     * the shippingCostOverrides.shippingServiceType value in a createOffer or
     * updateOffer call must match the shippingOptions.optionType value in a
     * fulfillment listing policy, and the shippingCostOverrides.priority value in a
     * createOffer or updateOffer call must match the
     * shippingOptions.shippingServices.sortOrderId value in a fulfillment listing
     * policy. This field is always required when overriding the shipping costs of a
     * shipping service option, and will be always be returned for each shipping
     * service option whose costs are being overridden.
     *
     * @var int
     */
    public $priority = null;

    /**
     * The dollar value passed into this field will override the shipping cost that is
     * currently set for the applicable shipping service option. This value will be the
     * cost to ship one item to the buyer using the corresponding shipping service. The
     * shipping service option in the fulfillment policy to override is controlled by
     * the shippingServiceType and priority values. If using an updateOffer call, and
     * this field is defined for the offer being updated, this field must be supplied
     * again, even if its value is not changing. This field is returned in the getOffer
     * and getOffers calls if defined.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $shippingCost = null;

    /**
     * This enumerated value indicates whether the shipping service specified in the
     * priority field is a domestic or an international shipping service option. To
     * override the shipping costs for a specific domestic shipping service in the
     * fulfillment listing policy, this field should be set to DOMESTIC, and to
     * override the shipping costs for each international shipping service, this field
     * should be set to INTERNATIONAL. This value, along with priority value, sets
     * which domestic or international shipping service option in the fulfillment
     * policy that will be modified with updated shipping costs. Specifically, the
     * shippingCostOverrides.shippingServiceType value in a createOffer or updateOffer
     * call must match the shippingOptions.optionType value in a fulfillment listing
     * policy, and the shippingCostOverrides.priority value in a createOffer or
     * updateOffer call must match the shippingOptions.shippingServices.sortOrderId
     * value in a fulfillment listing policy. This field is always required when
     * overriding the shipping costs of a shipping service option, and will be always
     * be returned for each shipping service option whose costs are being overridden.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ShippingServiceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $shippingServiceType = null;

    /**
     * Note: DO NOT USE THIS FIELD. Shipping surcharges for shipping service options
     * can no longer be set with fulfillment business policies. To set a shipping
     * surcharge for a shipping service option, only the Shipping rate tables tool in
     * My eBay can be used. The dollar value passed into this field will override the
     * shipping surcharge that is currently set for the applicable shipping service
     * option. The shipping service option in the fulfillment policy to override is
     * controlled by the shippingServiceType and priority values. If using an
     * updateOffer call, and this field is defined for the offer being updated, this
     * field must be supplied again, even if its value is not changing. This field is
     * returned in the getOffer and getOffers calls if defined.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $surcharge = null;
}
