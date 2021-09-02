<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type provides details of an offer, and is used by the base request payload
 * of the createOffer and bulkCreateOffer methods.
 */
class EbayOfferDetailsWithKeys extends AbstractModel
{
    /**
     * This integer value sets the quantity of the inventory item (specified by the sku
     * value) that will be available for purchase by buyers shopping on the eBay site
     * specified in the marketplaceId field. Quantity must be set to 1 or more in order
     * for the inventory item to be purchasable, but this field is not necessarily
     * required, even for published offers, if the general quantity of the inventory
     * item has already been set in the inventory item record. For auction listings,
     * this value must be 1.
     *
     * @var int
     */
    public $availableQuantity = null;

    /**
     * The unique identifier of the eBay category that the product will be listed
     * under. This field is not immediately required upon creating an offer, but will
     * be required before publishing the offer. Sellers can use the
     * getCategorySuggestions method of the Taxonomy API to retrieve suggested category
     * ID values. The seller passes in a query string like &quot;iPhone 6&quot;, and
     * category ID values for suggested categories are returned in the response.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * This container is used if the seller wishes to select a charitable organization
     * that will receive a percentage of sale proceeds for each sale generated by the
     * eBay listing. This container consists of the charityId field to identify the
     * charitable organization, and the donationPercentage field that indicates the
     * percentage of the sales proceeds that will be donated to the charitable
     * organization for each sale. Both fields in this container are conditionally
     * required for charitable listings.
     *
     * @var \Ebay\Sell\Inventory\Model\Charity
     */
    public $charity = null;

    /**
     * This field is included and set to true if the seller wishes to create a private
     * listing. Sellers may want to use this option when they believe that a listing's
     * potential bidders/buyers would not want their obfuscated user IDs (and feedback
     * scores) exposed to other users.
     *
     * @var bool
     */
    public $hideBuyerDetails = null;

    /**
     * This field indicates whether or not eBay product catalog details are applied to
     * a listing. A value of true indicates the listing corresponds to the eBay product
     * associated with the provided product identifier. The product identifier is
     * provided in createOrReplaceInventoryItem. Default: true Note: Though the
     * includeCatalogProductDetails parameter is not required to be submitted in the
     * request, the parameter defaults to true if omitted.
     *
     * @var bool
     */
    public $includeCatalogProductDetails = null;

    /**
     * The text in this field is (published offers), or will become (unpublished
     * offers) the description of the eBay listing. This field is not immediately
     * required for an unpublished offer, but will be required before publishing the
     * offer. Note that if the listingDescription field was omitted in the createOffer
     * call for the offer, the offer entity should have picked up the text provided in
     * the product.description field of the inventory item record, or if the inventory
     * item is part of a group, the offer entity should have picked up the text
     * provided in the description field of the inventory item group record. HTML tags
     * and markup can be used in listing descriptions, but each character counts toward
     * the max length limit. Note: To ensure that their short listing description is
     * optimized when viewed on mobile devices, sellers should strongly consider using
     * eBay's View Item description summary feature when listing their items. Keep in
     * mind that the 'short' listing description is what prospective buyers first see
     * when they view the listing on a mobile device. The 'full' listing description is
     * also available to mobile users when they click on the short listing description,
     * but the full description is not automatically optimized for viewing in mobile
     * devices, and many users won't even drill down to the full description. Using
     * HTML div and span tag attributes, this feature allows sellers to customize and
     * fully control the short listing description that is displayed to prospective
     * buyers when viewing the listing on a mobile device. The short listing
     * description on mobile devices is limited to 800 characters, and whenever the
     * full listing description (provided in this field, in UI, or seller tool) exceeds
     * this limit, eBay uses a special algorithm to derive the best possible short
     * listing description within the 800-character limit. However, due to some short
     * listing description content being removed, it is definitely not ideal for the
     * seller, and could lead to a bad buyer experience and possibly to a Significantly
     * not as described (SNAD) case, since the buyer may not get complete details on
     * the item when viewing the short listing description. See the eBay help page for
     * more details on using the HTML div and span tags. Max length: 500000 (which
     * includes HTML markup/tags).
     *
     * @var string
     */
    public $listingDescription = null;

    /**
     * This field indicates the number of days that the listing will be active. For
     * fixed-price listings, this value must be set to GTC, but auction listings
     * support different listing durations. The GTC (Good 'Til Cancelled) listings are
     * automatically renewed each calendar month until the seller decides to end the
     * listing. Note: If the listing duration expires for an auction offer without a
     * winning bidder, the listing then becomes available as a fixed-price offer and
     * listing duration will be GTC. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $listingDuration = null;

    /**
     * This container is used to set the listing policies that will be used to
     * construct the listing. This container consists of the identifiers of the
     * payment, return, and fulfillment listing policies that will be associated with
     * the eBay listing. This container is not initially required upon first creating
     * an offer, but will become required before an offer can be published. It is
     * required that the seller be opted in to Business Policies before being able to
     * create live eBay listings through the Inventory API. Sellers can opt-in to
     * Business Policies through My eBay or by using the Account API's optInToProgram
     * call. Similarly, payment, return, and fulfillment listing policies may be
     * created/managed in My eBay or by using the listing policy calls of the Account
     * API.
     *
     * @var \Ebay\Sell\Inventory\Model\ListingPolicies
     */
    public $listingPolicies = null;

    /**
     * This field can be used if the seller wants to specify a time in the future that
     * the listing will become active on eBay. The timestamp supplied in this field
     * should be in UTC format, and it should be far enough in the future so that the
     * seller will have enought time to publish the listing with the publishOffer
     * method. This field is optional. If this field is not provided, the listing
     * starts immediately after a successful publishOffer method.
     *
     * @var string
     */
    public $listingStartDate = null;

    /**
     * This field is only applicable if the listing is a lot listing. A lot listing is
     * a listing that has multiple quantity of the same item, such as four identical
     * tires being sold as a single offer, or it can be a mixed lot of similar items,
     * such as used clothing items or an assortment of baseball cards. Whether the lot
     * listing involved identical items or a mixed lot, the integer value passed into
     * this field is the total number of items in the lot. Lots can be used for auction
     * and fixed-price listings.
     *
     * @var int
     */
    public $lotSize = null;

    /**
     * This enumeration value is the unique identifier of the eBay site for which the
     * offer will be made available. See MarketplaceEnum for the list of supported
     * enumeration values. This field is required. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The unique identifier of a merchant's inventory location (where the inventory
     * item in the offer is located). A merchantLocationKey value is established when
     * the merchant creates an inventory location using the createInventoryLocation
     * call. To get more information about inventory locations, the
     * getInventoryLocation call can be used. This field is not initially required upon
     * first creating an offer, but will become required before an offer can be
     * published. Max length: 36.
     *
     * @var string
     */
    public $merchantLocationKey = null;

    /**
     * This container shows the listing price for the product offer, and if applicable,
     * the settings for the Minimum Advertised Price and Strikethrough Pricing
     * features. The Minimum Advertised Price feature is only available on the US site.
     * Strikethrough Pricing is available on the US, eBay Motors, UK, Germany, Canada
     * (English and French), France, Italy, and Spain sites. This container is not
     * initially required upon first creating an offer, but the price of the offer will
     * become required before an offer can be published.
     *
     * @var \Ebay\Sell\Inventory\Model\PricingSummary
     */
    public $pricingSummary = null;

    /**
     * This field is only applicable and set if the seller wishes to set a restriction
     * on the purchase quantity per seller. If this field is set by the seller for the
     * offer, then each distinct buyer may purchase up to, but not exceed the quantity
     * specified for this field. So, if this field's value is 5, each buyer may
     * purchase between one to five of these products, and the purchases can occur in
     * one multiple-quantity purchase, or over multiple transactions. If a buyer
     * attempts to purchase one or more of these products, and the cumulative quantity
     * will take the buyer beyond the quantity limit, that buyer will be blocked from
     * that purchase.
     *
     * @var int
     */
    public $quantityLimitPerBuyer = null;

    /**
     * The unique identifier for a secondary category. This field is applicable if the
     * seller decides to list the item under two categories. Sellers can use the
     * getCategorySuggestions method of the Taxonomy API to retrieve suggested category
     * ID values. A fee may be charged when adding a secondary category to a listing.
     * Note: You cannot list US eBay Motors vehicles in two categories. However, you
     * can list Parts &amp; Accessories in two categories.
     *
     * @var string
     */
    public $secondaryCategoryId = null;

    /**
     * This is the seller-defined SKU value of the product that will be listed on the
     * eBay site (specified in the marketplaceId field). Only one offer (in unpublished
     * or published state) may exist for each sku/marketplaceId/format combination.
     * This field is required. Max Length: 50.
     *
     * @var string
     */
    public $sku = null;

    /**
     * This container is used if the seller would like to place the inventory item into
     * one or two eBay store categories that the seller has set up for their eBay
     * store. The string value(s) passed in to this container will be the full path(s)
     * to the eBay store categories, as shown below: &quot;storeCategoryNames&quot;: [
     * &quot;/Fashion/Men/Shirts&quot;,  &quot;/Fashion/Men/Accessories&quot; ],.
     *
     * @var string[]
     */
    public $storeCategoryNames = null;

    /**
     * This container is only applicable and used if a sales tax table, a Value-Added
     * Tax (VAT) rate, or a tax exception category code will be applied to the offer.
     * Only Business Sellers can apply VAT to their listings. It is possible that the
     * applyTax field will be included with a value of true, but a buyer's purchase
     * will not involve sales tax. A sales tax rate must be set up in the seller's
     * sales tax table for the buyer's state/tax jurisdiction in order for that buyer
     * to be subject to sales tax. Sales tax rates for different jurisdictions can be
     * added/modified in the Payment Preferences section of My eBay, or the seller can
     * use the sales tax calls of the Account API. See the Using a tax table help page
     * for more information on setting up and using a sales tax table.
     *
     * @var \Ebay\Sell\Inventory\Model\Tax
     */
    public $tax = null;
}
