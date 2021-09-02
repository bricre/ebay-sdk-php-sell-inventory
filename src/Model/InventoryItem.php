<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to provide detailed information about an inventory item.
 */
class InventoryItem extends AbstractModel
{
    /**
     * This container is used to specify the quantity of the inventory item that are
     * available for purchase. This container is optional up until the seller is ready
     * to publish an offer with the SKU, at which time it becomes required.
     * Availability data must also be passed if an inventory item is being updated and
     * availability data already exists for that inventory item. Since an inventory
     * item must have specified quantity before being published in an offer, this
     * container is always returned in the 'Get' calls for SKUs that are part of a
     * published offer. If a SKU is not part of a published offer, this container will
     * only be returned if set for the inventory item.
     *
     * @var \Ebay\Sell\Inventory\Model\Availability
     */
    public $availability = null;

    /**
     * This enumeration value indicates the condition of the item. Supported item
     * condition values will vary by eBay site and category. To see which item
     * condition values that a particular eBay category supports, use the
     * getItemConditionPolicies method of the Metadata API. This method returns
     * condition ID values that map to the enumeration values defined in the
     * ConditionEnum type. The Item condition ID and name values topic in the Selling
     * Integration Guide has a table that maps condition ID values to ConditionEnum
     * values. The getItemConditionPolicies call reference page has more information. A
     * condition value is optional up until the seller is ready to publish an offer
     * with the SKU, at which time it becomes required for most eBay categories. Note:
     * The 'Manufacturer Refurbished' item condition is no longer a valid item
     * condition on any eBay marketplace, and to reflect this change, the
     * MANUFACTURER_REFURBISHED value is no longer applicable, and should not be used.
     * With Version 1.13.0, the CERTIFIED_REFURBISHED enumeration value has been
     * introduced, and CR-eligible sellers should make a note to start using
     * CERTIFIED_REFURBISHED from this point forward. For the time being, if the
     * MANUFACTURER_REFURBISHED enum is used in a createOrReplaceInventoryItem method,
     * it will be accepted but automatically converted by eBay to
     * CERTIFIED_REFURBISHED. In the future, the MANUFACTURER_REFURBISHED may start
     * triggering an error if used. To list an item as 'Certified Refurbished', a
     * seller must be pre-qualified by eBay for this feature. Any seller who is not
     * eligible for this feature will be blocked if they try to create a new listing or
     * revise an existing listing with this item condition. Any seller that is
     * interested in eligibility requirements to list with 'Certified Refurbished'
     * should see the Certified refurbished program page in Seller Center. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $condition = null;

    /**
     * This string field is used by the seller to more clearly describe the condition
     * of a used inventory item, or an inventory item whose condition value is not NEW,
     * LIKE_NEW, NEW_OTHER, or NEW_WITH_DEFECTS. The conditionDescription field is
     * available for all eBay categories. If the conditionDescription field is used
     * with an item in one of the new conditions (mentioned in previous paragraph),
     * eBay will simply ignore this field if included, and eBay will return a warning
     * message to the user. This field should only be used to further clarify the
     * condition of the used item. It should not be used for branding, promotions,
     * shipping, returns, payment or other information unrelated to the condition of
     * the used item. Make sure that the condition value, condition description,
     * listing description, and the item's pictures do not contradict one another. This
     * field is not always required, but is required if an inventory item is being
     * updated and a condition description already exists for that inventory item. This
     * field is returned in the getInventoryItem and getInventoryItems calls if a
     * condition description was provided for a used inventory item. Max Length: 1000.
     *
     * @var string
     */
    public $conditionDescription = null;

    /**
     * This container is used if the seller is offering one or more calculated shipping
     * options for the inventory item, or if the seller is offering flat-rate shipping
     * but is including a shipping surcharge based on the item's weight. This container
     * is used to specify the dimensions and weight of a shipping package. This
     * container is not always required, but is required if an inventory item is being
     * updated and shipping package data already exists for that inventory item. This
     * container is returned in the getInventoryItem and getInventoryItems calls if
     * package type, package weight, and/or package dimensions are specified for an
     * inventory item. See the Calculated shipping help page for more information on
     * calculated shipping.
     *
     * @var \Ebay\Sell\Inventory\Model\PackageWeightAndSize
     */
    public $packageWeightAndSize = null;

    /**
     * This container is used to define the product details, such as product title,
     * product description, product identifiers (eBay Product ID, GTIN, or Brand/MPN
     * pair), product aspects/item specifics, and product images. Note that an eBay
     * Product ID (ePID) or a Global Trade Item Number (GTIN) value can be used in an
     * attempt to find a matching product in the eBay Catalog. If a product match is
     * found, the inventory item record will automatically pick up all product details
     * associated with the eBay Catalog product. Many eBay categories will require at
     * least one product identifier (a GTIN or a Brand/MPN pair). To discover which
     * product identifier(s) that an eBay category might require or support, use the
     * getItemAspectsForCategory method in the Taxonomy API. In the
     * getItemAspectsForCategory response, look for product identifier names (brand,
     * mpn, upc, ean, isbn) in the localizedAspectName fields, and then look for the
     * correspondinng aspectRequired boolean fields as well as the corresponding
     * aspectUsage field, which will indicate if the aspect is required, recommended,
     * or optional. In some cases, a product identifier type may be required, but not
     * known/applicable for a product. If this is the case, the seller must still
     * include the corresponding field in the inventory item record, but pass in a
     * default text string. This text string can vary by site, so the seller should use
     * the GeteBayDetails call of the Trading API to get this string value. In the
     * GeteBayDetails call, the seller should include a DetailName field with its value
     * set to ProductDetails. In the response of the call, the seller can see the
     * default string value in the ProductDetails.ProductIdentifierUnavailableText
     * field. The seller will use this value in one or more of the product identifier
     * fields (ean, isbn, upc, or mpn) if a product ID isn't known or applicable. This
     * container is not initially required, but it is required before an inventory item
     * can be published as an offer, and/or if an inventory item is being updated and
     * product data already exists for that inventory item. This container is always
     * returned for published offers in the getInventoryItem, bulkGetInventoryItem, and
     * getInventoryItems calls since product data must be defined for published offers,
     * but for unpublished inventory items, this container will only be returned if
     * product details have been defined for the inventory item.
     *
     * @var \Ebay\Sell\Inventory\Model\Product
     */
    public $product = null;
}
