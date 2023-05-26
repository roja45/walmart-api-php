<?php

/**
 * PromiseResponseOffer
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Model\BaseModel;

/**
 * PromiseResponseOffer Class Doc Comment
 *
 * @category Class

 * @description Offer details indicating available quantity vs required quantify for offer

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseResponseOffer extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PromiseResponseOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'availableQuantity' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadOffersInnerAvailableQuantity',
        'requestedQuantity' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInnerOffersInnerRequestedQuantity',
        'lineId' => 'string',
        'salesUnit' => 'string',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'availableQuantity' => null,
        'requestedQuantity' => null,
        'lineId' => null,
        'salesUnit' => null,
        'sku' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'availableQuantity' => false,
        'requestedQuantity' => false,
        'lineId' => false,
        'salesUnit' => false,
        'sku' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'availableQuantity' => 'availableQuantity',
        'requestedQuantity' => 'requestedQuantity',
        'lineId' => 'lineId',
        'salesUnit' => 'salesUnit',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'availableQuantity' => 'setAvailableQuantity',
        'requestedQuantity' => 'setRequestedQuantity',
        'lineId' => 'setLineId',
        'salesUnit' => 'setSalesUnit',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'availableQuantity' => 'getAvailableQuantity',
        'requestedQuantity' => 'getRequestedQuantity',
        'lineId' => 'getLineId',
        'salesUnit' => 'getSalesUnit',
        'sku' => 'getSku'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('availableQuantity', $data ?? [], null);
        $this->setIfExists('requestedQuantity', $data ?? [], null);
        $this->setIfExists('lineId', $data ?? [], null);
        $this->setIfExists('salesUnit', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }

    /**
     * Gets availableQuantity
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadOffersInnerAvailableQuantity|null
    
     */
    public function getAvailableQuantity()
    {
        return $this->container['availableQuantity'];
    }

    /**
     * Sets availableQuantity
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadOffersInnerAvailableQuantity|null $availableQuantity availableQuantity
     *
     * @return self
    
     */
    public function setAvailableQuantity($availableQuantity)
    {
        if (is_null($availableQuantity)) {
            throw new \InvalidArgumentException('non-nullable availableQuantity cannot be null');
        }

        $this->container['availableQuantity'] = $availableQuantity;
        return $this;
    }

    /**
     * Gets requestedQuantity
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInnerOffersInnerRequestedQuantity|null
    
     */
    public function getRequestedQuantity()
    {
        return $this->container['requestedQuantity'];
    }

    /**
     * Sets requestedQuantity
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInnerOffersInnerRequestedQuantity|null $requestedQuantity requestedQuantity
     *
     * @return self
    
     */
    public function setRequestedQuantity($requestedQuantity)
    {
        if (is_null($requestedQuantity)) {
            throw new \InvalidArgumentException('non-nullable requestedQuantity cannot be null');
        }

        $this->container['requestedQuantity'] = $requestedQuantity;
        return $this;
    }

    /**
     * Gets lineId
     *
     * @return string|null
    
     */
    public function getLineId()
    {
        return $this->container['lineId'];
    }

    /**
     * Sets lineId
     *
     * @param string|null $lineId The identifier (UUID) for each line assigned by seller systems.
     *
     * @return self
    
     */
    public function setLineId($lineId)
    {
        if (is_null($lineId)) {
            throw new \InvalidArgumentException('non-nullable lineId cannot be null');
        }

        $this->container['lineId'] = $lineId;
        return $this;
    }

    /**
     * Gets salesUnit
     *
     * @return string|null
    
     */
    public function getSalesUnit()
    {
        return $this->container['salesUnit'];
    }

    /**
     * Sets salesUnit
     *
     * @param string|null $salesUnit Sales unit type. Currently supported type : 'EACH'
     *
     * @return self
    
     */
    public function setSalesUnit($salesUnit)
    {
        if (is_null($salesUnit)) {
            throw new \InvalidArgumentException('non-nullable salesUnit cannot be null');
        }

        $this->container['salesUnit'] = $salesUnit;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The identifier of the item in seller system (vendor sku).
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }
}

