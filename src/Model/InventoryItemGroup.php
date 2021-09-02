<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the base request payload of the
 * createOrReplaceInventoryItemGroup call and the base response payload of the
 * getInventoryItemGroup call.
 */
class InventoryItemGroup extends AbstractModel
{
    /**
     * This container consists of an array of aspects that are shared by all product
     * variations within the inventory item group. Common aspects for the inventory
     * item group are not immediately required upon creating an inventory item group,
     * but these aspects will be required before the first offer of the group is
     * published. Common aspects for a men's t-shirt might be pattern and sleeve
     * length. See the example below to get an idea of the JSON syntax that is used to
     * specify common aspects: &quot;aspects&quot;: {  &quot;pattern&quot;:
     * [&quot;solid&quot;],  &quot;sleeves&quot;: [&quot;short&quot;]  }This container
     * is always returned if one or more offers associated with the inventory item
     * group have been published, and is only returned if set for an inventory item
     * group if that group has yet to have any offers published.
     *
     * @var string[]
     */
    public $aspects = null;

    /**
     * An array of one or more links to images for the inventory item group. URLs must
     * use the &quot;HTTPS&quot; protocol. Images can be self-hosted by the seller, or
     * sellers can use the UploadSiteHostedPictures call of the Trading API to upload
     * images to an eBay Picture Server. If successful, the response of the
     * UploadSiteHostedPictures call will contain a full URL to the image on an eBay
     * Picture Server. This is the URL that will be passed in through the imageUrls
     * array. Before any offer can be published, at least one image must exist for the
     * offer. Links to images can either be passed in through this imageUrls container,
     * or they can be passed in through the product.imageUrls container when creating
     * each inventory item in the group. If the variesBy.aspectsImageVariesBy field is
     * used to specify the main product aspect where the variations vary, the links to
     * the images must be passed in through this imageUrls container, and there should
     * be a picture for each variation. So, if the variesBy.aspectsImageVariesBy field
     * is set to Color, a link should be included to an image demonstrating each
     * available color in the group. Most eBay sites support up to 12 pictures free of
     * charge, and eBay Motors listings can have up to 24 pictures. This container will
     * always be returned for an inventory item group that has at least one published
     * offer since a published offer will always have at least one picture, but this
     * container will only be returned if defined for inventory item groups that have
     * yet to have any published offers.
     *
     * @var string[]
     */
    public $imageUrls = null;

    /**
     * This is the unique identifier of the inventory item group. This identifier is
     * created by the seller when an inventory item group is created. This field is
     * only applicable to the getInventoryItemGroup call and not to the
     * createOrReplaceInventoryItemGroup call. In the createOrReplaceInventoryItemGroup
     * call, the inventoryItemGroupKey value is passed into the end of the call URI
     * instead.
     *
     * @var string
     */
    public $inventoryItemGroupKey = null;

    /**
     * A subtitle is an optional listing feature that allows the seller to provide more
     * information about the product, possibly including keywords that may assist with
     * search results. An additional listing fee will be charged to the seller if a
     * subtitle is used. For more information on using listing subtitles on the US
     * site, see the Adding a subtitle to your listings help page. Note: Since this
     * subtitle will ultimately become the subtitle in a multiple-variation listing,
     * the seller should not include the subtitle field when creating the inventory
     * items that are members of the group. If they do include the subtitle field in an
     * inventory item record, the text in that field will overwrite the text provided
     * in this subtitle field for each inventory item in the group that is published.
     * This field will only be returned if set for an inventory item. Max Length: 55.
     *
     * @var string
     */
    public $subtitle = null;

    /**
     * This required container is used to assign individual inventory items to the
     * inventory item group. Multiple SKU values are passed in to this container. If
     * updating an existing inventory item group, the seller should make sure that all
     * member SKU values are passed in, as long as the seller wants that SKU to remain
     * in the group. It is also possible to add or remove SKUs with a
     * createOrReplaceInventoryItemGroup call. If the seller wants to remove a SKU from
     * the group, that seller will just omit that SKU value from this container to
     * remove that inventory item/SKU from the inventory item group and any published,
     * multiple-variation listing. However, a variation cannot be removed from the
     * group if that variation has one or more sales for that listing. A workaround for
     * this is to set that variation's quantity to 0 and it will be 'grayed out' in the
     * View Item page. This container is always returned.
     *
     * @var string[]
     */
    public $variantSKUs = null;

    /**
     * This container is used to specify product aspects for which variations within an
     * inventory item group vary, and a complete list of all those variances. For
     * example, t-shirts in an inventory item group may be available in multiple sizes
     * and colors. If this is the case, Color and Size would both be values in the
     * specifications.name fields, and the available colors and sizes would be values
     * under the corresponding specifications.values array. If the seller will be
     * including multiple images in the listing that will demonstrate how each
     * variation differs, that seller will also include the aspectsImageVariesBy field,
     * and call out the product aspect where the listing images differ. In the t-shirts
     * example, this product aspect would be Color, and the seller could either include
     * URLs to images of the t-shirt (in available colors) through the inventory item
     * group entity, or the seller could also included URLs to images of the t-shirt
     * through the individual inventory item entities of the group. This container is
     * not initially required when first creating an inventory item group, but the
     * variesBy.specifications container will be required before the first offer of the
     * group is published. This container is always returned if one or more offers
     * associated with the inventory item group have been published, and is only
     * returned if set for an inventory item group if that group has yet to have any
     * offers published.
     *
     * @var \Ebay\Sell\Inventory\Model\VariesBy
     */
    public $variesBy = null;

    /**
     * An array of one or more VideoId values for the inventory item group. A VideoId
     * is a unique identifier that is automatically created by eBay when a seller
     * successfully uploads a video to eBay using the uploadVideo method of the Media
     * API. For information on supported marketplaces and platforms, as well as other
     * requirements and limitations of video support, please refer to Managing videos.
     *
     * @var string[]
     */
    public $videoIds = null;
}
