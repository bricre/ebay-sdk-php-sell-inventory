<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify/indicate the motor vehicles that are compatible
 * with the corresponding inventory item.
 */
class CompatibleProduct extends AbstractModel
{
    /**
     * This container consists of an array of motor vehicles that are compatible with
     * the motor vehicle part or accessory specified by the SKU value in the call URI.
     * Each motor vehicle is defined through a separate set of name/value pairs. In the
     * name field, the vehicle aspect (such as 'make', 'model', 'year', 'trim', or
     * 'engine') will be identified, and the value field will be used to identify the
     * value of each aspect. The getCompatibilityProperties method of the Taxonomy API
     * can be used to retrieve applicable vehicle aspect names for a specified
     * category, and the getCompatibilityPropertyValues method of the Taxonomy API can
     * be used to retrieve possible values for these same vehicle aspect names. Below
     * is an example of identifying one motor vehicle using the compatibilityProperties
     * container: &quot;compatibilityProperties&quot; : [ &nbsp;&nbsp;{
     * &nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;make&quot;,
     * &nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Subaru&quot; &nbsp;&nbsp;},
     * &nbsp;&nbsp;{ &nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;model&quot;,
     * &nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;GL&quot; &nbsp;&nbsp;},
     * &nbsp;&nbsp;{ &nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;year&quot;,
     * &nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1983&quot; &nbsp;&nbsp;},
     * &nbsp;&nbsp;{ &nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;trim&quot;,
     * &nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Base Wagon 4-Door&quot;
     * &nbsp;&nbsp;}, &nbsp;&nbsp;{ &nbsp;&nbsp;&nbsp;&quot;name&quot; :
     * &quot;engine&quot;, &nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1.8L
     * Turbocharged&quot; &nbsp;&nbsp;} ] Typically, the make, model, and year of the
     * motor vehicle are always required, with the trim and engine being necessary
     * sometimes, but it will be dependent on the part or accessory, and on the vehicle
     * class. Note: The productFamilyProperties container is in the process of being
     * deprecated and will no longer be supported in February of 2021, so if you are a
     * new user of createOrReplaceProductCompatibility, you should use the
     * compatibilityProperties container instead, and if you are already integrated and
     * using the productFamilyProperties container, you should make plans to migrate to
     * compatibilityProperties. The productFamilyProperties and compatibilityProperties
     * containers may not be used together or the call will fail.
     *
     * @var \Ebay\Sell\Inventory\Model\NameValueList[]
     */
    public $compatibilityProperties = null;

    /**
     * This field is optionally used by the seller to input any notes pertaining to the
     * compatible vehicle list being defined. The seller might use this field to
     * specify the placement of the part on a vehicle or other applicable information.
     * This field will only be returned if specified by the seller. Max Length: 500.
     *
     * @var string
     */
    public $notes = null;

    /**
     * This container consists of an array of motor vehicles that are compatible with
     * the motor vehicle part or accessory specified by the SKU value in the call URI.
     * These motor vehicles are identified by properties such as make, model, year,
     * trim, and engine type. A separate productFamilyProperties node is needed to
     * specify each compatible motor vehicle. Typically, the make, model, and year of
     * the motor vehicle are always required, with the trim and engine being necessary
     * sometimes, but it will be dependent on the part or accessory, and on the vehicle
     * class. Note: The productFamilyProperties container is in the process of being
     * deprecated and will no longer be supported in February of 2021, so if you are a
     * new user of createOrReplaceProductCompatibility, you should use the newer
     * compatibilityProperties container instead, and if you are already integrated and
     * using the productFamilyProperties container, you should make plans to migrate to
     * compatibilityProperties. The productFamilyProperties and compatibilityProperties
     * containers may not be used together or the call will fail.
     *
     * @var \Ebay\Sell\Inventory\Model\ProductFamilyProperties
     */
    public $productFamilyProperties = null;

    /**
     * This container is used in a createOrReplaceProductCompatibility call to identify
     * a motor vehicle that is compatible with the inventory item. The user specifies
     * either an eBay Product ID (ePID) or K-Type value to identify a vehicle, and if
     * the motor vehicle is found in the eBay product catalog, the motor vehicle
     * properties (make, model, year, trim, engine) will automatically be populated for
     * the vehicle. If the vehicle cannot be found using these identifiers, the vehicle
     * will not be added to the compatible vehicle list. Note that this container will
     * not be returned in the getProductCompatibility call.
     *
     * @var \Ebay\Sell\Inventory\Model\ProductIdentifier
     */
    public $productIdentifier = null;
}
