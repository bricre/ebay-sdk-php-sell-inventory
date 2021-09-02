<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to specify the listing price for the product and settings for
 * the Minimum Advertised Price and Strikethrough Pricing features. The price field
 * must be supplied before an offer is published, but a seller may create an offer
 * without supplying a price initially. The Minimum Advertised Price feature is
 * only available on the US site. Strikethrough Pricing is available on the US,
 * eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain
 * sites.
 */
class PricingSummary extends AbstractModel
{
    /**
     * This field indicates the lowest price at which the seller is willing to sell an
     * item through an auction listing. Note that setting a Reserve Price will incur a
     * listing fee of $5 or 7.5% of the Reserve Price, whichever is greater. The
     * minimum fee is $5. Important: This fee is charged regardless of whether or not
     * the item is sold.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $auctionReservePrice = null;

    /**
     * This field indicates the minimum bidding price for the auction. The bidding
     * starts at this price. Note: If the auctionReservePrice is also specified, the
     * value of auctionStartPrice must be lower than the value of auctionReservePrice.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $auctionStartPrice = null;

    /**
     * This container is needed if the Minimum Advertised Price (MAP) feature will be
     * used in the offer. Minimum Advertised Price (MAP) is an agreement between
     * suppliers (or manufacturers (OEM)) and the retailers (sellers) stipulating the
     * lowest price an item is allowed to be advertised at. Sellers can only offer
     * prices below this price through the use of other discounts. The MAP feature is
     * only available to eligible US sellers. This field will be ignored if the seller
     * and or the listing is not eligible for the MAP feature. This container will be
     * returned if set for the offer.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $minimumAdvertisedPrice = null;

    /**
     * This field is needed if the Strikethrough Pricing (STP) feature will be used in
     * the offer. This field indicates that the product was sold for the price in the
     * originalRetailPrice field on an eBay site, or sold for that price by a
     * third-party retailer. When using the createOffer or updateOffer calls, the
     * seller will pass in a value of ON_EBAY to indicate that the product was sold for
     * the originalRetailPrice on an eBay site, or the seller will pass in a value of
     * OFF_EBAY to indicate that the product was sold for the originalRetailPrice
     * through a third-party retailer. This field and the originalRetailPrice field are
     * only applicable if the seller and listing are eligible to use the Strikethrough
     * Pricing feature, a feature which is limited to the US (core site and Motors),
     * UK, Germany, Canada (English and French versions), France, Italy, and Spain
     * sites. This field will be returned if set for the offer. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:SoldOnEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $originallySoldForRetailPriceOn = null;

    /**
     * This container is needed if the Strikethrough Pricing (STP) feature will be used
     * in the offer. The dollar value passed into this field indicates the original
     * retail price set by the manufacturer (OEM). eBay does not maintain or validate
     * the value supplied here by the seller. The dollar value in this field should
     * always be more than the dollar value in the price container. This field and the
     * originallySoldForRetailPriceOn field are only applicable if the seller and
     * listing are eligible to use the Strikethrough Pricing feature, a feature which
     * is limited to the US (core site and Motors), UK, Germany, Canada (English and
     * French versions), France, Italy, and Spain sites. Compare the
     * originalRetailPrice and the dollar value in the price field to determine the
     * amount of savings to the buyer. This Original Retail Price will have a
     * strikethrough line through for a marketing affect. This container will be
     * returned if set for the offer.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $originalRetailPrice = null;

    /**
     * This is the listing price of the product. A listing price must be specified
     * before publishing an offer, but it is possible to create an offer without a
     * price. For published offers, this container will always be returned, but for
     * unpublished offers, this container will only be returned if set for the offer.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $price = null;

    /**
     * This field is needed if the Minimum Advertised Price (MAP) feature will be used
     * in the offer. This field is only applicable if an eligible US seller is using
     * the Minimum Advertised Price (MAP) feature and a minimumAdvertisedPrice has been
     * specified. The value set in this field will determine whether the MAP price is
     * shown to a prospective buyer prior to checkout through a pop-up window accessed
     * from the View Item page, or if the MAP price is not shown until the checkout
     * flow after the buyer has already committed to buying the item. To show the MAP
     * price prior to checkout, the seller will set this value to PRE_CHECKOUT. To show
     * the MAP price after the buyer already commits to buy the item, the seller will
     * set this value to DURING_CHECKOUT. This field will be ignored if the seller
     * and/or the listing is not eligible for the MAP feature. This field will be
     * returned if set for the offer. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MinimumAdvertisedPriceHandlingEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $pricingVisibility = null;
}
