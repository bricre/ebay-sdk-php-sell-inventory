<?php

namespace Ebay\Sell\Inventory;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'bulkCreateOrReplaceInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkInventoryItemResponse',
        ],
        'bulkGetInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkGetInventoryItemResponse',
        ],
        'bulkUpdatePriceQuantity' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkPriceQuantityResponse',
        ],
        'getInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryItemWithSkuLocaleGroupid',
        ],
        'createOrReplaceInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
        ],
        'getInventoryItems' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryItems',
        ],
        'getProductCompatibility' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\Compatibility',
        ],
        'createOrReplaceProductCompatibility' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
        ],
        'getInventoryItemGroup' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryItemGroup',
        ],
        'createOrReplaceInventoryItemGroup' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
        ],
        'bulkMigrateListing' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkMigrateListingResponse',
        ],
        'bulkCreateOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkOfferResponse',
        ],
        'bulkPublishOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkPublishResponse',
        ],
        'getOffers' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\Offers',
        ],
        'createOffer' => [
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\OfferResponse',
        ],
        'getOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\EbayOfferDetailsWithAll',
        ],
        'updateOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\OfferResponse',
        ],
        'getListingFees' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\FeesSummaryResponse',
        ],
        'publishOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\PublishResponse',
        ],
        'publishOfferByInventoryItemGroup' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\PublishResponse',
        ],
        'withdrawOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\WithdrawResponse',
        ],
        'getInventoryLocation' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryLocationResponse',
        ],
        'disableInventoryLocation' => [
            '200.' => null,
        ],
        'enableInventoryLocation' => [
            '200.' => null,
        ],
        'getInventoryLocations' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\LocationResponse',
        ],
    ];
}
