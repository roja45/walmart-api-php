<?php

/**
 * GetShippingTemplateDetails200ResponseShippingMethodsInner
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Model\BaseModel;

/**
 * GetShippingTemplateDetails200ResponseShippingMethodsInner Class Doc Comment
 *
 * @category Class

 * @description Array of different ship methods of a Shipping Template

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetShippingTemplateDetails200ResponseShippingMethodsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getShippingTemplateDetails_200_response_shippingMethods_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipMethod' => 'string',
        'status' => 'string',
        'configurations' => '\Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipMethod' => null,
        'status' => null,
        'configurations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipMethod' => false,
        'status' => false,
        'configurations' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipMethod' => 'shipMethod',
        'status' => 'status',
        'configurations' => 'configurations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipMethod' => 'setShipMethod',
        'status' => 'setStatus',
        'configurations' => 'setConfigurations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipMethod' => 'getShipMethod',
        'status' => 'getStatus',
        'configurations' => 'getConfigurations'
    ];


    public const SHIP_METHOD_VALUE = 'VALUE';

    public const SHIP_METHOD_STANDARD = 'STANDARD';

    public const SHIP_METHOD_THREE_DAY = 'THREE_DAY';

    public const SHIP_METHOD_TWO_DAY = 'TWO_DAY';

    public const SHIP_METHOD_FREIGHT = 'FREIGHT';

    public const STATUS_ACTIVE = 'ACTIVE';

    public const STATUS_INACTIVE = 'INACTIVE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipMethodAllowableValues()
    {
        return [
            self::SHIP_METHOD_VALUE,
            self::SHIP_METHOD_STANDARD,
            self::SHIP_METHOD_THREE_DAY,
            self::SHIP_METHOD_TWO_DAY,
            self::SHIP_METHOD_FREIGHT,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipMethod', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('configurations', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipMethod'] === null) {
            $invalidProperties[] = "'shipMethod' can't be null";
        }
        $allowedValues = $this->getShipMethodAllowableValues();
        if (!is_null($this->container['shipMethod']) && !in_array($this->container['shipMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipMethod', must be one of '%s'",
                $this->container['shipMethod'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['configurations'] === null) {
            $invalidProperties[] = "'configurations' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets shipMethod
     *
     * @return string
    
     */
    public function getShipMethod()
    {
        return $this->container['shipMethod'];
    }

    /**
     * Sets shipMethod
     *
     * @param string $shipMethod | Attribute | Description | Data Type | | ---- | ----------------- | ------- | | VALUE | All Marketplace Sellers must offer Value shipping to Walmart.com customers for items that can't ship within expected transit times for standard shipping. | string | | STANDARD | You are required to offer standard shipping to Walmart.com customers. | string | | TWO_DAY | If approved for this option, you'll provide free 2-day shipping to customers and your items will be enabled with the TwoDay delivery tag. | string | | FREIGHT | Heavy items which takes 6,7,8,9,10 days. | string |
     *
     * @return self
    
     */
    public function setShipMethod($shipMethod)
    {
        if (is_null($shipMethod)) {
            throw new \InvalidArgumentException('non-nullable shipMethod cannot be null');
        }
        $allowedValues = $this->getShipMethodAllowableValues();
        if (!in_array($shipMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipMethod', must be one of '%s'",
                    $shipMethod,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['shipMethod'] = $shipMethod;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Shipping Method Status, Can be ACTIVE or INACTIVE status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets configurations
     *
     * @return \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInner[]
    
     */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
     * Sets configurations
     *
     * @param \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInner[] $configurations Contains an array of Regions, an array of Address Type, Transit Time and Per shipping charge or array of Tired Shipping Charge
     *
     * @return self
    
     */
    public function setConfigurations($configurations)
    {
        if (is_null($configurations)) {
            throw new \InvalidArgumentException('non-nullable configurations cannot be null');
        }

        $this->container['configurations'] = $configurations;
        return $this;
    }
}

