<?php

/**
 * ShippingTemplateSummary
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
 * ShippingTemplateSummary Class Doc Comment
 *
 * @category Class

 * @description Array of Shipping Templates

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingTemplateSummary extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingTemplateSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'status' => 'string',
        'rateModelType' => 'string',
        'createdBy' => 'string',
        'modifiedBy' => 'string',
        'createdDate' => 'float',
        'modifiedDate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'status' => null,
        'rateModelType' => null,
        'createdBy' => null,
        'modifiedBy' => null,
        'createdDate' => null,
        'modifiedDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'type' => false,
        'status' => false,
        'rateModelType' => false,
        'createdBy' => false,
        'modifiedBy' => false,
        'createdDate' => false,
        'modifiedDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'status' => 'status',
        'rateModelType' => 'rateModelType',
        'createdBy' => 'createdBy',
        'modifiedBy' => 'modifiedBy',
        'createdDate' => 'createdDate',
        'modifiedDate' => 'modifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'status' => 'setStatus',
        'rateModelType' => 'setRateModelType',
        'createdBy' => 'setCreatedBy',
        'modifiedBy' => 'setModifiedBy',
        'createdDate' => 'setCreatedDate',
        'modifiedDate' => 'setModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'status' => 'getStatus',
        'rateModelType' => 'getRateModelType',
        'createdBy' => 'getCreatedBy',
        'modifiedBy' => 'getModifiedBy',
        'createdDate' => 'getCreatedDate',
        'modifiedDate' => 'getModifiedDate'
    ];


    public const TYPE__DEFAULT = 'DEFAULT';

    public const TYPE_CUSTOM = 'CUSTOM';

    public const TYPE_DELIVERR = 'DELIVERR';

    public const STATUS_ACTIVE = 'ACTIVE';

    public const STATUS_INACTIVE = 'INACTIVE';

    public const RATE_MODEL_TYPE_TIERED_PRICING = 'TIERED_PRICING';

    public const RATE_MODEL_TYPE_PER_SHIPMENT_PRICING = 'PER_SHIPMENT_PRICING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__DEFAULT,
            self::TYPE_CUSTOM,
            self::TYPE_DELIVERR,
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRateModelTypeAllowableValues()
    {
        return [
            self::RATE_MODEL_TYPE_TIERED_PRICING,
            self::RATE_MODEL_TYPE_PER_SHIPMENT_PRICING,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('rateModelType', $data ?? [], null);
        $this->setIfExists('createdBy', $data ?? [], null);
        $this->setIfExists('modifiedBy', $data ?? [], null);
        $this->setIfExists('createdDate', $data ?? [], null);
        $this->setIfExists('modifiedDate', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRateModelTypeAllowableValues();
        if (!is_null($this->container['rateModelType']) && !in_array($this->container['rateModelType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rateModelType', must be one of '%s'",
                $this->container['rateModelType'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets id
     *
     * @return string|null
    
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Shipping Template ID
     *
     * @return self
    
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;
        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
    
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Shipping Template Name
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
    
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Shipping Template Type
     *
     * @return self
    
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Shipping Template/ Configurations active or inactive status
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
     * Gets rateModelType
     *
     * @return string|null
    
     */
    public function getRateModelType()
    {
        return $this->container['rateModelType'];
    }

    /**
     * Sets rateModelType
     *
     * @param string|null $rateModelType rateModelType
     *
     * @return self
    
     */
    public function setRateModelType($rateModelType)
    {
        if (is_null($rateModelType)) {
            throw new \InvalidArgumentException('non-nullable rateModelType cannot be null');
        }
        $allowedValues = $this->getRateModelTypeAllowableValues();
        if (!in_array($rateModelType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rateModelType', must be one of '%s'",
                    $rateModelType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['rateModelType'] = $rateModelType;
        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string|null
    
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string|null $createdBy createdBy
     *
     * @return self
    
     */
    public function setCreatedBy($createdBy)
    {
        if (is_null($createdBy)) {
            throw new \InvalidArgumentException('non-nullable createdBy cannot be null');
        }

        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return string|null
    
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param string|null $modifiedBy modifiedBy
     *
     * @return self
    
     */
    public function setModifiedBy($modifiedBy)
    {
        if (is_null($modifiedBy)) {
            throw new \InvalidArgumentException('non-nullable modifiedBy cannot be null');
        }

        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return float|null
    
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param float|null $createdDate Template Creation Date
     *
     * @return self
    
     */
    public function setCreatedDate($createdDate)
    {
        if (is_null($createdDate)) {
            throw new \InvalidArgumentException('non-nullable createdDate cannot be null');
        }

        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
     * Gets modifiedDate
     *
     * @return float|null
    
     */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
     * Sets modifiedDate
     *
     * @param float|null $modifiedDate Template Modified Date
     *
     * @return self
    
     */
    public function setModifiedDate($modifiedDate)
    {
        if (is_null($modifiedDate)) {
            throw new \InvalidArgumentException('non-nullable modifiedDate cannot be null');
        }

        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }
}

