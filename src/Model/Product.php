<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to define the product details, such as a title, a product
 * description, product aspects/item specifics, and links to images for the
 * product. Optionally, in a createOrReplaceInventoryItem call, a seller can pass
 * in an eBay Product Identifier (ePID) or a Global Trade Item Number (GTIN) value,
 * such as an EAN, an ISBN, a UPC, to identify a product to be matched with a
 * product in the eBay Catalog. The information in this type is also returned in
 * the getInventoryItem, getInventoryItems, and bulkGetInventoryItem calls if
 * defined.
 */
class Product extends AbstractModel
{
    /**
     * This is an array of item specific pairs that provide more information about the
     * product and might make it easier for buyers to find. To view
     * required/recommended product aspects/item specifics names (and corresponding
     * values) for a specific eBay category, sellers can use the GetCategorySpecifics
     * call of the Trading API. Alternatively, sellers can view similar items on
     * eBay.com in the same category to get an idea of what other sellers are using for
     * product aspects/item specifics. Sellers also have the option of specifying an
     * eBay Product ID (ePID) or optionally, a Global Trade Item Number (GTIN) through
     * the corresponding fields in the product container in an attempt to find a
     * product match in the eBay Catalog. If a match is found based on the ePID or GTIN
     * value, the product aspects that are defined for the eBay Catalog product will
     * automatically get picked up by the newly created/updated inventory item. Below
     * is an example of the proper JSON syntax to use when manually inputting item
     * specifics: &quot;aspects&quot;: {  &quot;Brand&quot;: [&quot;GoPro&quot;],
     * &quot;Storage Type&quot;: [&quot;Removable&quot;]  } Note that inventory items
     * that will become part of an inventory item group and multiple-variation listing
     * should have the same attributes that are defined for the inventory item group.
     * This container will be returned if one or more item specific pairs are defined
     * for the inventory item. Max Length for Aspect Name: 40 Max Length for Aspect
     * Value: 50.
     *
     * @var string[]
     */
    public $aspects = null;

    /**
     * The brand of the product. This field is often paired with the mpn field to
     * identify a specific product by Manufacture Part Number. This field is
     * conditionally required if the eBay category requires a Manufacturer Part Number
     * (MPN) value. If eBay is able to find a product match in the eBay Catalog when an
     * eBay Product ID (ePID) or GTIN value (UPC, ISBN, or EAN) is supplied, all
     * product details of that eBay Catalog product is picked up by the inventory item
     * record (including brand) if the createOrReplaceInventoryItem call is successful.
     * This field is returned if defined for an inventory item. If a brand was passed
     * in as an item specific name-value pair through the aspects array in a
     * createOrReplaceInventoryItem call, this value is also picked up by the brand
     * field. Max Length: 65.
     *
     * @var string
     */
    public $brand = null;

    /**
     * The European Article Number/International Article Number (EAN) for the product.
     * Although an ePID value is preferred when trying to find a product match in the
     * eBay Catalog, this field can also be used in an attempt to find a product match
     * in the eBay Catalog. If a product match is found in the eBay Catalog, the
     * inventory item is automatically populated with available product details such as
     * a title, a product description, product aspects (including the specified EAN
     * value), and a link to any stock image that exists for the catalog product. This
     * field is returned if defined for an inventory item. If an EAN was passed in as
     * an item specific name-value pair through the aspects array in a
     * createOrReplaceInventoryItem call, this value is also picked up by the ean
     * field.
     *
     * @var string[]
     */
    public $ean = null;

    /**
     * The eBay Product Identifier (ePID) for the product. This field can be used to
     * directly identify an eBay Catalog product. Based on its specified ePID value,
     * eBay will search for the product in the eBay Catalog, and if a match is found,
     * the inventory item is automatically populated with available product details
     * such as product title, product description, product aspects, and a link to any
     * stock image that exists for the catalog product. In an attempt to find a eBay
     * Catalog product match, an ePID value is always preferred over the other product
     * identifiers, since it is possible that one GTIN value can be associated with
     * multiple eBay Catalog products, and if multiple products are found, product
     * details will not be picked up by the Inventory Item object. This field is
     * returned if defined for an inventory item.
     *
     * @var string
     */
    public $epid = null;

    /**
     * An array of one or more links to images for the product. URLs must use the
     * &quot;HTTPS&quot; protocol. Images can be self-hosted by the seller, or sellers
     * can use the UploadSiteHostedPictures call of the Trading API to upload images to
     * an eBay Picture Server. If successful, the response of the
     * UploadSiteHostedPictures call will contain a full URL to the image on an eBay
     * Picture Server. This is the URL that will be passed in through the imageUrls
     * array. Before an offer can be published, at least one image must exist for the
     * inventory item. Most eBay sites support up to 12 pictures free of charge, and
     * eBay Motors listings can have up to 24 pictures. A link to a stock image for a
     * product may automatically be populated for an inventory item if the seller
     * specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and
     * eBay is able to find a matching product in the eBay Catalog. This container will
     * always be returned for an inventory item that is part of a published offer since
     * a published offer will always have at least one picture, but this container will
     * only be returned if defined for inventory items that are not a part of a
     * published offer.
     *
     * @var string[]
     */
    public $imageUrls = null;

    /**
     * The International Standard Book Number (ISBN) value for the product. Although an
     * ePID value is preferred when trying to find a product match in the eBay Catalog,
     * this field can also be used in an attempt to find a product match in the eBay
     * Catalog. If a product match is found in the eBay Catalog, the inventory item is
     * automatically populated with available product details such as a title, a
     * product description, product aspects (including the specified ISBN value), and a
     * link to any stock image that exists for the catalog product. This field is
     * returned if defined for an inventory item. If an ISBN was passed in as an item
     * specific name-value pair through the aspects array in a
     * createOrReplaceInventoryItem call, this value is also picked up by the isbn
     * field.
     *
     * @var string[]
     */
    public $isbn = null;

    /**
     * The Manufacturer Part Number (MPN) of a product. This field is paired with the
     * brand field to identify a product. Some eBay categories require MPN values. The
     * GetCategorySpecifics call of the Trading API can be used to see if a category
     * requires an MPN. The MPN value for a product may automatically be populated for
     * an inventory item if the seller specifies an eBay Product ID (ePID) or a Global
     * Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay
     * Catalog. This field is returned if defined for an inventory item. If an MPN was
     * passed in as an item specific name-value pair through the aspects array in a
     * createOrReplaceInventoryItem call, this value is also picked up by the mpn
     * field. Max Length: 65.
     *
     * @var string
     */
    public $mpn = null;

    /**
     * A subtitle is an optional listing feature that allows the seller to provide more
     * information about the product, possibly including keywords that may assist with
     * search results. An additional listing fee will be charged to the seller if a
     * subtitle is used. For more information on using listing subtitles on the US
     * site, see the Adding a subtitle to your listings help page. The subtitle of an
     * existing inventory item can added, modified, or removed with a
     * createOrReplaceInventoryItem call. Note that the same subtitle text should be
     * used for each inventory item that will be part of an inventory item group, and
     * ultimately become one product variation within a multiple-variation listing.
     * This field will only be returned if set for an inventory item. Max Length: 55.
     *
     * @var string
     */
    public $subtitle = null;

    /**
     * The Universal Product Code (UPC) value for the product. Although an ePID value
     * is preferred when trying to find a product match in the eBay Catalog, this field
     * can also be used in an attempt to find a product match in the eBay Catalog. If a
     * product match is found in the eBay Catalog, the inventory item is automatically
     * populated with available product details such as a title, a product description,
     * product aspects (including the specified UPC value), and a link to any stock
     * image that exists for the catalog product. This field is returned if defined for
     * an inventory item. If a UPC was passed in as an item specific name-value pair
     * through the aspects array in a createOrReplaceInventoryItem call, this value is
     * also picked up by the upc field.
     *
     * @var string[]
     */
    public $upc = null;

    /**
     * An array of one or more VideoId values for the product. A VideoId is a unique
     * identifier that is automatically created by eBay when a seller successfully
     * uploads a video to eBay using the uploadVideo method of the Media API. For
     * information on supported marketplaces and platforms, as well as other
     * requirements and limitations of video support, please refer to Managing videos.
     *
     * @var string[]
     */
    public $videoIds = null;
}
