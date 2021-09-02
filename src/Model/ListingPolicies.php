<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to identify the payment, return, and fulfillment listing
 * policies that will be, or are associated with the listing. Every published offer
 * must have a payment, return, and fulfillment listing policy associated with it.
 * This type is also used to override the shipping costs of one or more shipping
 * service options that are associated with the fulfillment policy, to enable eBay
 * Plus eligibility for a listing, or to enable the Best Offer feature on the
 * listing.
 */
class ListingPolicies extends AbstractModel
{
    /**
     * This container is used if the seller would like to support the Best Offer
     * feature on their listing. To enable the Best Offer feature, the seller will have
     * to set the bestOfferEnabled field to true, and the seller also has the option of
     * setting 'auto-accept' and 'auto-decline' price thresholds. This container is
     * only returned if Best Offer is enabled on listing.
     *
     * @var \Ebay\Sell\Inventory\Model\BestOffer
     */
    public $bestOfferTerms = null;

    /**
     * This field is included in an offer and set to true if a Top-Rated seller is
     * opted in to the eBay Plus program. With the eBay Plus program, qualified sellers
     * must commit to next-day delivery of the item, and the buyers must have an eBay
     * Plus subscription to be eligible to receive the benefits of this program, which
     * are free, next-day delivery, as well as free returns. Currently, this program is
     * only available on the Germany and Australian sites. This field will be returned
     * in the getOffer and getOffers calls if set for the offer.
     *
     * @var bool
     */
    public $eBayPlusIfEligible = null;

    /**
     * This unique identifier indicates the fulfillment listing policy that will be
     * used once an offer is published and converted to an eBay listing. This
     * fulfillment listing policy will set all fulfillment-related settings for the
     * eBay listing. Listing policies are not immediately required for offers, but are
     * required before an offer can be published. The seller should review the
     * fulfillment listing policy before assigning it to the offer to make sure it is
     * compatible with the inventory item and the offer settings. The seller may also
     * want to review the shipping service costs in the fulfillment policy, and that
     * seller might decide to override the shipping costs for one or more shipping
     * service options by using the shippingCostOverrides container. Listing policies
     * can be created and managed in My eBay or with the Account API. To get a list of
     * all return policies associated with a seller's account on a specific eBay
     * Marketplace, use the Account API's getFulfillmentPolicies call. There are also
     * calls in the Account API to retrieve a fulfillment policy by policy ID or policy
     * name. This field will be returned in the getOffer and getOffers calls if set for
     * the offer.
     *
     * @var string
     */
    public $fulfillmentPolicyId = null;

    /**
     * This unique identifier indicates the payment listing policy that will be used
     * once an offer is published and converted to an eBay listing. This payment
     * listing policy will set all payment-related settings for the eBay listing.
     * Listing policies are not immediately required for offers, but are required
     * before an offer can be published. The seller should review the payment listing
     * policy before assigning it to the offer, as the following must be true for the
     * payment listing policy to be compatible with the offer: The marketplaceId value
     * should reflect where the offer is being published The immediatePay field value
     * must be set to true since Inventory API offers only support immediate payment
     * The only specified payment method should be 'PayPal', since immediate payment
     * requires 'PayPal'Listing policies can be created and managed in My eBay or with
     * the Account API. To get a list of all payment policies associated with a
     * seller's account on a specific eBay Marketplace, use the Account API's
     * getPaymentPolicies call. There are also calls in the Account API to retrieve a
     * payment policy by policy ID or policy name. This field will be returned in the
     * getOffer and getOffers calls if set for the offer.
     *
     * @var string
     */
    public $paymentPolicyId = null;

    /**
     * This unique identifier indicates the return listing policy that will be used
     * once an offer is published and converted to an eBay listing. This return listing
     * policy will set all return policy settings for the eBay listing. Listing
     * policies are not immediately required for offers, but are required before an
     * offer can be published. The seller should review the return listing policy
     * before assigning it to the offer to make sure it is compatible with the
     * inventory item and the offer settings. Listing policies can be created and
     * managed in My eBay or with the Account API. To get a list of all return policies
     * associated with a seller's account on a specific eBay Marketplace, use the
     * Account API's getReturnPolicies call. There are also calls in the Account API to
     * retrieve a return policy by policy ID or policy name. This field will be
     * returned in the getOffer and getOffers calls if set for the offer.
     *
     * @var string
     */
    public $returnPolicyId = null;

    /**
     * This container is used if the seller wishes to override the shipping costs or
     * surcharge for one or more domestic or international shipping service options
     * defined in the fulfillment listing policy. To override the costs of a specific
     * domestic or international shipping service option, the seller must know the
     * priority/order of that shipping service in the fulfillment listing policy. The
     * name of a shipping service option can be found in the
     * shippingOptions.shippingServices.shippingServiceCode field of the fulfillment
     * policy, and the priority/order of that shipping service option is found in the
     * shippingOptions.shippingServices.sortOrderId field. Both of these values can be
     * retrieved by searching for that fulfillment policy with the
     * getFulfillmentPolicies or getFulfillmentPolicyByName calls of the Account API.
     * The shippingCostOverrides.priority value should match the
     * shippingOptions.shippingServices.sortOrderId in order to override the shipping
     * costs for that shipping service option. The seller must also ensure that the
     * shippingServiceType value is set to DOMESTIC to override a domestic shipping
     * service option, or to INTERNATIONAL to override an international shipping
     * service option. A separate ShippingCostOverrides node is needed for each
     * shipping service option whose costs are being overridden. All defined fields of
     * the shippingCostOverrides container should be included, even if the shipping
     * costs and surcharge values are not changing. The shippingCostOverrides container
     * is returned in the getOffer and getOffers calls if one or more shipping cost
     * overrides are being applied to the fulfillment policy.
     *
     * @var \Ebay\Sell\Inventory\Model\ShippingCostOverride[]
     */
    public $shippingCostOverrides = null;
}
