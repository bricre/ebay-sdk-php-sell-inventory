<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify product aspects for which variations within an
 * inventory item group vary, and the order in which they appear in the listing.
 * For example, t-shirts in an inventory item group may be available in multiple
 * sizes and colors.
 */
class Specification extends AbstractModel
{
    /**
     * This is the name of product variation aspect. Typically, for clothing, typical
     * aspect names are &quot;Size&quot; and &quot;Color&quot;. Product variation
     * aspects are not required immediately upon creating an inventory item group, but
     * these aspects will be required before a multiple-variation listing containing
     * this inventory item group is published. For each product variation aspect that
     * is specified through the specifications container, one name value is required
     * and two or more variations of this aspect are required through the values array.
     * Note: Each member of the inventory item group should have these same aspect
     * names specified through the product.aspects container when the inventory item is
     * created with the createOrReplaceInventoryItem or
     * bulkCreateOrReplaceInventoryItem call. Max Length: 40.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is an array of values pertaining to the corresponding product variation
     * aspect (specified in the name field). Below is a sample of how these values will
     * appear under a specifications container: &quot;specifications&quot;: [{
     * &quot;name&quot;: &quot;Size&quot;,  &quot;values&quot;: [&quot;Small&quot;,
     * &quot;Medium&quot;,  &quot;Large&quot;]  },  {  &quot;name&quot;:
     * &quot;Color&quot;,  &quot;values&quot;: [&quot;Blue&quot;,  &quot;White&quot;,
     * &quot;Red&quot;]  }] Note: Each member of the inventory item group should have
     * these same aspect names, and each individual inventory item should have each
     * variation of the product aspect values specified through the product.aspects
     * container when the inventory item is created with the
     * createOrReplaceInventoryItem or bulkCreateOrReplaceInventoryItem call. Max
     * Length: 50.
     *
     * @var string[]
     */
    public $values = null;
}
