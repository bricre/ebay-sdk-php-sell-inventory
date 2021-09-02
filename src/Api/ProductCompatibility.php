<?php

namespace Ebay\Sell\Inventory\Api;

use Ebay\Sell\Inventory\Model\BaseResponse as BaseResponse;
use Ebay\Sell\Inventory\Model\Compatibility as Compatibility;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ProductCompatibility extends AbstractAPI
{
    /**
     * This call is used by the seller to retrieve the list of products that are
     * compatible with the inventory item. The SKU value for the inventory item is
     * passed into the call URI, and a successful call with return the compatible
     * vehicle list associated with this inventory item. Product compatibility is
     * currently only applicable to motor vehicle parts and accessory categories, but
     * more categories may be supported in the future.
     *
     * @param string $sku A SKU (stock keeping unit) is an unique identifier defined by
     *                    a seller for a product
     *
     * @return Compatibility
     */
    public function get(string $sku): Compatibility
    {
        return $this->client->request('getProductCompatibility', 'GET', "inventory_item/{$sku}/product_compatibility",
            [
            ]
        );
    }

    /**
     * This call is used by the seller to create or replace a list of products that are
     * compatible with the inventory item. The inventory item is identified with a SKU
     * value in the URI. Product compatibility is currently only applicable to motor
     * vehicle parts and accessory categories, but more categories may be supported in
     * the future. In addition to the authorization header, which is required for all
     * eBay REST API calls, the createOrReplaceProductCompatibility call also requires
     * the Content-Language header, that sets the natural language that will be used in
     * the field values of the request payload. For US English, the code value passed
     * in this header should be en-US. To view other supported Content-Language values,
     * and to read more about all supported HTTP headers for eBay REST API calls, see
     * the HTTP request headers topic in the Using eBay RESTful APIs document.
     *
     * @param string        $sku   A SKU (stock keeping unit) is an unique identifier defined by
     *                             a seller for a product
     * @param Compatibility $Model Details of the compatibility
     *
     * @return BaseResponse
     */
    public function createOrReplace(string $sku, Compatibility $Model): BaseResponse
    {
        return $this->client->request('createOrReplaceProductCompatibility', 'PUT', "inventory_item/{$sku}/product_compatibility",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This call is used by the seller to delete the list of products that are
     * compatible with the inventory item that is associated with the compatible
     * product list. The inventory item is identified with a SKU value in the URI.
     * Product compatibility is currently only applicable to motor vehicle parts and
     * accessory categories, but more categories may be supported in the future.
     *
     * @param string $sku A SKU (stock keeping unit) is an unique identifier defined by
     *                    a seller for a product
     *
     * @return mixed
     */
    public function delete(string $sku)
    {
        return $this->client->request('deleteProductCompatibility', 'DELETE', "inventory_item/{$sku}/product_compatibility",
            [
            ]
        );
    }
}
