<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to identify a motor vehicle that is compatible with the
 * corresponding inventory item (the SKU that is passed in as part of the call
 * URI). The motor vehicle can be identified through an eBay Product ID or a K-Type
 * value. The gtin field (for inputting Global Trade Item Numbers) is for future
 * use only. If a motor vehicle is found in the eBay product catalog, the motor
 * vehicle properties (engine, make, model, trim, and year) will automatically get
 * picked up for that motor vehicle. Note: Currently, parts compatibility is only
 * applicable for motor vehicles, but it is possible that the Product Compatibility
 * feature is expanded to other (non-vehicle) products in the future.
 */
class ProductIdentifier extends AbstractModel
{
    /**
     * This field can be used if the seller already knows the eBay catalog product ID
     * (ePID) associated with the motor vehicle that is to be added to the compatible
     * product list. If this eBay catalog product ID is found in the eBay product
     * catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim)
     * will automatically get picked up for that motor vehicle.
     *
     * @var string
     */
    public $epid = null;

    /**
     * This field can be used if the seller knows the Global Trade Item Number for the
     * motor vehicle that is to be added to the compatible product list. If this GTIN
     * value is found in the eBay product catalog, the motor vehicle properties (e.g.
     * make, model, year, engine, and trim will automatically get picked up for that
     * motor vehicle. Note: This field is for future use.
     *
     * @var string
     */
    public $gtin = null;

    /**
     * This field can be used if the seller knows the K Type Number for the motor
     * vehicle that is to be added to the compatible product list. If this K Type value
     * is found in the eBay product catalog, the motor vehicle properties (e.g. make,
     * model, year, engine, and trim) will automatically get picked up for that motor
     * vehicle. Only the DE, UK, and AU sites support the use of K Type Numbers.
     *
     * @var string
     */
    public $ktype = null;
}
