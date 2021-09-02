<?php

namespace Ebay\Sell\Inventory\Api;

use Ebay\Sell\Inventory\Model\BaseResponse as BaseResponse;
use Ebay\Sell\Inventory\Model\InventoryItemGroup as InventoryItemGroupModel;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class InventoryItemGroup extends AbstractAPI
{
    /**
     * This call retrieves the inventory item group for a given inventoryItemGroupKey
     * value. The inventoryItemGroupKey value is passed in at the end of the call URI.
     *
     * @param string $inventoryItemGroupKey The unique identifier of an inventory item
     *                                      group. This value is assigned by the seller when an inventory item group is
     *                                      created. The inventoryItemGroupKey value for the inventory item group to
     *                                      retrieve is passed in at the end of the call URI.
     *
     * @return InventoryItemGroupModel
     */
    public function get(string $inventoryItemGroupKey): InventoryItemGroupModel
    {
        return $this->client->request('getInventoryItemGroup', 'GET', "inventory_item_group/{$inventoryItemGroupKey}",
            [
            ]
        );
    }

    /**
     * This call creates a new inventory item group or updates an existing inventory
     * item group. It is up to sellers whether they want to create a complete inventory
     * item group record right from the start, or sellers can provide only some
     * information with the initial createOrReplaceInventoryItemGroup call, and then
     * make one or more additional createOrReplaceInventoryItemGroup calls to complete
     * the inventory item group record. Upon first creating an inventory item group
     * record, the only required elements are the inventoryItemGroupKey identifier in
     * the call URI, and the members of the inventory item group specified through the
     * variantSKUs array in the request payload. In the case of updating/replacing an
     * existing inventory item group, this call does a complete replacement of the
     * existing inventory item group record, so all fields (including the member SKUs)
     * that make up the inventory item group are required, regardless of whether their
     * values changed. So, when replacing/updating an inventory item group record, it
     * is advised that the seller run a getInventoryItemGroup call for that inventory
     * item group to see all of its current values/settings/members before attempting
     * to update the record. And if changes are made to an inventory item group that is
     * part of a live, multiple-variation eBay listing, these changes automatically
     * update the eBay listing. For example, if a SKU value is removed from the
     * inventory item group, the corresponding product variation will be removed from
     * the eBay listing as well. In addition to the required inventory item group
     * identifier and member SKUs, other key information that is set with this call
     * include: Title and description of the inventory item group. The string values
     * provided in these fields will actually become the listing title and listing
     * description of the listing once the first SKU of the inventory item group is
     * published successfully Common aspects that inventory items in the qroup share
     * Product aspects that vary within each product variation Links to images
     * demonstrating the variations of the product, and these images should correspond
     * to the product aspect that is set with the variesBy.aspectsImageVariesBy field
     * In addition to the authorization header, which is required for all eBay REST API
     * calls, the createOrReplaceInventoryItemGroup call also requires the
     * Content-Language header, that sets the natural language that will be used in the
     * field values of the request payload. For US English, the code value passed in
     * this header should be en-US. To view other supported Content-Language values,
     * and to read more about all supported HTTP headers for eBay REST API calls, see
     * the HTTP request headers topic in the Using eBay RESTful APIs document.
     *
     * @param string                  $inventoryItemGroupKey Unique identifier of the inventory item
     *                                                       group. This identifier is supplied by the seller. The inventoryItemGroupKey
     *                                                       value for the inventory item group to create/update is passed in at the end of
     *                                                       the call URI. This value cannot be changed once it is set.
     * @param InventoryItemGroupModel $Model                 Details of the inventory Item Group
     *
     * @return BaseResponse
     */
    public function createOrReplace(string $inventoryItemGroupKey, InventoryItemGroupModel $Model): BaseResponse
    {
        return $this->client->request('createOrReplaceInventoryItemGroup', 'PUT', "inventory_item_group/{$inventoryItemGroupKey}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This call deletes the inventory item group for a given inventoryItemGroupKey
     * value.
     *
     * @param string $inventoryItemGroupKey The unique identifier of an inventory item
     *                                      group. This value is assigned by the seller when an inventory item group is
     *                                      created. The inventoryItemGroupKey value for the inventory item group to delete
     *                                      is passed in at the end of the call URI.
     *
     * @return mixed
     */
    public function delete(string $inventoryItemGroupKey)
    {
        return $this->client->request('deleteInventoryItemGroup', 'DELETE', "inventory_item_group/{$inventoryItemGroupKey}",
            [
            ]
        );
    }
}
