<?php

namespace Ebay\Sell\Inventory\Api;

use Ebay\Sell\Inventory\Model\InventoryLocation as InventoryLocation;
use Ebay\Sell\Inventory\Model\InventoryLocationFull as InventoryLocationFull;
use Ebay\Sell\Inventory\Model\InventoryLocationResponse as InventoryLocationResponse;
use Ebay\Sell\Inventory\Model\LocationResponse as LocationResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Location extends AbstractAPI
{
    /**
     * This call retrieves all defined details of the inventory location that is
     * specified by the merchantLocationKey path parameter. The authorization HTTP
     * header is the only required request header for this call. A successful call will
     * return an HTTP status value of 200 OK.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in at the end of the call URI to
     *                                    specify the inventory location to retrieve. Max length: 36
     *
     * @return InventoryLocationResponse
     */
    public function getInventory(string $merchantLocationKey): InventoryLocationResponse
    {
        return $this->client->request('getInventoryLocation', 'GET', "location/{$merchantLocationKey}",
            [
            ]
        );
    }

    /**
     * Use this call to create a new inventory location. In order to create and publish
     * an offer (and create an eBay listing), a seller must have at least one inventory
     * location, as every offer must be associated with a location. Upon first creating
     * an inventory location, only a seller-defined location identifier and a physical
     * location is required, and once set, these values can not be changed. The unique
     * identifier value (merchantLocationKey) is passed in at the end of the call URI.
     * This merchantLocationKey value will be used in other Inventory Location calls to
     * identify the inventory location to perform an action against. At this time,
     * location types are either warehouse or store. Warehouse locations are used for
     * traditional shipping, and store locations are generally used by US merchants
     * selling products through the In-Store Pickup program, or used by UK, Australian,
     * and German merchants selling products through the Click and Collect program. A
     * full address is required for store inventory locations. However, for warehouse
     * inventory locations, a full street address is not needed, but the city,
     * state/province, and country of the location must be provided. Note that all
     * inventory locations are &quot;enabled&quot; by default when they are created,
     * and you must specifically disable them (by passing in a value of DISABLED in the
     * merchantLocationStatus field) if you want them to be set to the disabled state.
     * The seller's inventory cannot be loaded to inventory locations in the disabled
     * state. In addition to the authorization header, which is required for all eBay
     * REST API calls, the following table includes another request header that is
     * mandatory for the createInventoryLocation call, and two other request headers
     * that are optional: Header Description Required? Applicable Values Accept
     * Describes the response encoding, as required by the caller. Currently, the
     * interfaces require payloads formatted in JSON, and JSON is the default. No
     * application/json Content-Language Use this header to control the language that
     * is used for any returned errors or warnings in the call response. No en-US
     * Content-Type The MIME type of the body of the request. Must be JSON. Yes
     * application/json Unless one or more errors and/or warnings occur with the call,
     * there is no response payload for this call. A successful call will return an
     * HTTP status value of 204 No Content.
     *
     * @param string                $merchantLocationKey A unique, merchant-defined key (ID) for an
     *                                                   inventory location. This unique identifier, or key, is used in other Inventory
     *                                                   API calls to identify an inventory location. Max length: 36
     * @param InventoryLocationFull $Model               Inventory Location details
     *
     * @return mixed
     */
    public function createInventory(string $merchantLocationKey, InventoryLocationFull $Model)
    {
        return $this->client->request('createInventoryLocation', 'POST', "location/{$merchantLocationKey}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This call deletes the inventory location that is specified in the
     * merchantLocationKey path parameter. Note that deleting a location will not
     * affect any active eBay listings associated with the deleted location, but the
     * seller will not be able modify the offers associated with the inventory location
     * once it is deleted. The authorization HTTP header is the only required request
     * header for this call. Unless one or more errors and/or warnings occur with the
     * call, there is no response payload for this call. A successful call will return
     * an HTTP status value of 200 OK.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in at the end of the call URI to
     *                                    indicate the inventory location to be deleted. Max length: 36
     *
     * @return mixed
     */
    public function deleteInventory(string $merchantLocationKey)
    {
        return $this->client->request('deleteInventoryLocation', 'DELETE', "location/{$merchantLocationKey}",
            [
            ]
        );
    }

    /**
     * This call disables the inventory location that is specified in the
     * merchantLocationKey path parameter. Sellers can not load/modify inventory to
     * disabled inventory locations. Note that disabling an inventory location will not
     * affect any active eBay listings associated with the disabled location, but the
     * seller will not be able modify the offers associated with a disabled inventory
     * location. The authorization HTTP header is the only required request header for
     * this call. A successful call will return an HTTP status value of 200 OK.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in through the call URI to disable the
     *                                    specified inventory location. Max length: 36
     *
     * @return object
     */
    public function disableInventory(string $merchantLocationKey): object
    {
        return $this->client->request('disableInventoryLocation', 'POST', "location/{$merchantLocationKey}/disable",
            [
            ]
        );
    }

    /**
     * This call enables a disabled inventory location that is specified in the
     * merchantLocationKey path parameter. Once a disabled inventory location is
     * enabled, sellers can start loading/modifying inventory to that inventory
     * location. The authorization HTTP header is the only required request header for
     * this call. A successful call will return an HTTP status value of 200 OK.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in through the call URI to specify the
     *                                    disabled inventory location to enable. Max length: 36
     *
     * @return object
     */
    public function enableInventory(string $merchantLocationKey): object
    {
        return $this->client->request('enableInventoryLocation', 'POST', "location/{$merchantLocationKey}/enable",
            [
            ]
        );
    }

    /**
     * This call retrieves all defined details for every inventory location associated
     * with the seller's account. There are no required parameters for this call and no
     * request payload. However, there are two optional query parameters, limit and
     * offset. The limit query parameter sets the maximum number of inventory locations
     * returned on one page of data, and the offset query parameter specifies the page
     * of data to return. These query parameters are discussed more in the URI
     * parameters table below. The authorization HTTP header is the only required
     * request header for this call. A successful call will return an HTTP status value
     * of 200 OK.
     *
     * @param array $queries options:
     *                       'limit'	string	The value passed in this query parameter sets the maximum number
     *                       of records to return per page of data. Although this field is a string, the
     *                       value passed in this field should be a positive integer value. If this query
     *                       parameter is not set, up to 100 records will be returned on each page of
     *                       results. Min: 1
     *                       'offset'	string	Specifies the number of locations to skip in the result set
     *                       before returning the first location in the paginated response. Combine offset
     *                       with the limit query parameter to control the items returned in the response.
     *                       For example, if you supply an offset of 0 and a limit of 10, the first page of
     *                       the response contains the first 10 items from the complete list of items
     *                       retrieved by the call. If offset is 10 and limit is 20, the first page of the
     *                       response contains items 11-30 from the complete result set. Default: 0
     *
     * @return LocationResponse
     */
    public function getInventorys(array $queries = []): LocationResponse
    {
        return $this->client->request('getInventoryLocations', 'GET', 'location',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Use this call to update non-physical location details for an existing inventory
     * location. Specify the inventory location you want to update using the
     * merchantLocationKey path parameter. You can update the following text-based
     * fields: name, phone, locationWebUrl, locationInstructions and
     * locationAdditionalInformation. Whatever text is passed in for these fields in an
     * updateInventoryLocation call will replace the current text strings defined for
     * these fields. For store inventory locations, the operating hours and/or the
     * special hours can also be updated. The merchant location key, the physical
     * location of the store, and its geo-location coordinates can not be updated with
     * an updateInventoryLocation call In addition to the authorization header, which
     * is required for all eBay REST API calls, the following table includes another
     * request header that is mandatory for the updateInventoryLocation call, and two
     * other request headers that are optional: Header Description Required? Applicable
     * Values Accept Describes the response encoding, as required by the caller.
     * Currently, the interfaces require payloads formatted in JSON, and JSON is the
     * default. No application/json Content-Language Use this header to control the
     * language that is used for any returned errors or warnings in the call response.
     * No en-US Content-Type The MIME type of the body of the request. Must be JSON.
     * Yes application/json Unless one or more errors and/or warnings occurs with the
     * call, there is no response payload for this call. A successful call will return
     * an HTTP status value of 204 No Content.
     *
     * @param string            $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                               inventory location. This value is passed in the call URI to indicate the
     *                                               inventory location to be updated. Max length: 36
     * @param InventoryLocation $Model               the inventory location details to be updated
     *                                               (other than the address and geo co-ordinates)
     *
     * @return mixed
     */
    public function updateInventory(string $merchantLocationKey, InventoryLocation $Model)
    {
        return $this->client->request('updateInventoryLocation', 'POST', "location/{$merchantLocationKey}/update_location_details",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
