<?php

/**
 * GatewayError
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Orders;

use Walmart\Model\BaseModel;

/**
 * GatewayError Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GatewayError extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GatewayError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'code' => 'string',
        'field' => 'string',
        'description' => 'string',
        'info' => 'string',
        'severity' => 'string',
        'category' => 'string',
        'causes' => '\Walmart\Models\MP\US\Orders\GetAllOrders200ResponseListErrorsInnerCausesInner[]',
        'errorIdentifiers' => 'array<string,object>',
        'component' => 'string',
        'type' => 'string',
        'serviceName' => 'string',
        'gatewayErrorCategory' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'code' => null,
        'field' => null,
        'description' => null,
        'info' => null,
        'severity' => null,
        'category' => null,
        'causes' => null,
        'errorIdentifiers' => null,
        'component' => null,
        'type' => null,
        'serviceName' => null,
        'gatewayErrorCategory' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
        'field' => false,
        'description' => false,
        'info' => false,
        'severity' => false,
        'category' => false,
        'causes' => false,
        'errorIdentifiers' => false,
        'component' => false,
        'type' => false,
        'serviceName' => false,
        'gatewayErrorCategory' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'code' => 'code',
        'field' => 'field',
        'description' => 'description',
        'info' => 'info',
        'severity' => 'severity',
        'category' => 'category',
        'causes' => 'causes',
        'errorIdentifiers' => 'errorIdentifiers',
        'component' => 'component',
        'type' => 'type',
        'serviceName' => 'serviceName',
        'gatewayErrorCategory' => 'gatewayErrorCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'code' => 'setCode',
        'field' => 'setField',
        'description' => 'setDescription',
        'info' => 'setInfo',
        'severity' => 'setSeverity',
        'category' => 'setCategory',
        'causes' => 'setCauses',
        'errorIdentifiers' => 'setErrorIdentifiers',
        'component' => 'setComponent',
        'type' => 'setType',
        'serviceName' => 'setServiceName',
        'gatewayErrorCategory' => 'setGatewayErrorCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'code' => 'getCode',
        'field' => 'getField',
        'description' => 'getDescription',
        'info' => 'getInfo',
        'severity' => 'getSeverity',
        'category' => 'getCategory',
        'causes' => 'getCauses',
        'errorIdentifiers' => 'getErrorIdentifiers',
        'component' => 'getComponent',
        'type' => 'getType',
        'serviceName' => 'getServiceName',
        'gatewayErrorCategory' => 'getGatewayErrorCategory'
    ];


    public const SEVERITY_INFO = 'INFO';

    public const SEVERITY_WARN = 'WARN';

    public const SEVERITY_ERROR = 'ERROR';

    public const CATEGORY_APPLICATION = 'APPLICATION';

    public const CATEGORY_SYSTEM = 'SYSTEM';

    public const CATEGORY_REQUEST = 'REQUEST';

    public const CATEGORY_DATA = 'DATA';

    public const GATEWAY_ERROR_CATEGORY_INTERNAL_DATA_ERROR = 'INTERNAL_DATA_ERROR';

    public const GATEWAY_ERROR_CATEGORY_EXTERNAL_DATA_ERROR = 'EXTERNAL_DATA_ERROR';

    public const GATEWAY_ERROR_CATEGORY_SYSTEM_ERROR = 'SYSTEM_ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_INFO,
            self::SEVERITY_WARN,
            self::SEVERITY_ERROR,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_APPLICATION,
            self::CATEGORY_SYSTEM,
            self::CATEGORY_REQUEST,
            self::CATEGORY_DATA,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGatewayErrorCategoryAllowableValues()
    {
        return [
            self::GATEWAY_ERROR_CATEGORY_INTERNAL_DATA_ERROR,
            self::GATEWAY_ERROR_CATEGORY_EXTERNAL_DATA_ERROR,
            self::GATEWAY_ERROR_CATEGORY_SYSTEM_ERROR,
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('causes', $data ?? [], null);
        $this->setIfExists('errorIdentifiers', $data ?? [], null);
        $this->setIfExists('component', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('serviceName', $data ?? [], null);
        $this->setIfExists('gatewayErrorCategory', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'severity', must be one of '%s'",
                $this->container['severity'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'category', must be one of '%s'",
                $this->container['category'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGatewayErrorCategoryAllowableValues();
        if (!is_null($this->container['gatewayErrorCategory']) && !in_array($this->container['gatewayErrorCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gatewayErrorCategory', must be one of '%s'",
                $this->container['gatewayErrorCategory'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets code
     *
     * @return string
    
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return self
    
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        $this->container['code'] = $code;
        return $this;
    }

    /**
     * Gets field
     *
     * @return string|null
    
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string|null $field field
     *
     * @return self
    
     */
    public function setField($field)
    {
        if (is_null($field)) {
            throw new \InvalidArgumentException('non-nullable field cannot be null');
        }

        $this->container['field'] = $field;
        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
    
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
    
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets info
     *
     * @return string|null
    
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param string|null $info info
     *
     * @return self
    
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }

        $this->container['info'] = $info;
        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
    
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
    
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!in_array($severity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'severity', must be one of '%s'",
                    $severity,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['severity'] = $severity;
        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'category', must be one of '%s'",
                    $category,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets causes
     *
     * @return \Walmart\Models\MP\US\Orders\GetAllOrders200ResponseListErrorsInnerCausesInner[]|null
    
     */
    public function getCauses()
    {
        return $this->container['causes'];
    }

    /**
     * Sets causes
     *
     * @param \Walmart\Models\MP\US\Orders\GetAllOrders200ResponseListErrorsInnerCausesInner[]|null $causes causes
     *
     * @return self
    
     */
    public function setCauses($causes)
    {
        if (is_null($causes)) {
            throw new \InvalidArgumentException('non-nullable causes cannot be null');
        }

        $this->container['causes'] = $causes;
        return $this;
    }

    /**
     * Gets errorIdentifiers
     *
     * @return array<string,object>|null
    
     */
    public function getErrorIdentifiers()
    {
        return $this->container['errorIdentifiers'];
    }

    /**
     * Sets errorIdentifiers
     *
     * @param array<string,object>|null $errorIdentifiers errorIdentifiers
     *
     * @return self
    
     */
    public function setErrorIdentifiers($errorIdentifiers)
    {
        if (is_null($errorIdentifiers)) {
            throw new \InvalidArgumentException('non-nullable errorIdentifiers cannot be null');
        }

        $this->container['errorIdentifiers'] = $errorIdentifiers;
        return $this;
    }

    /**
     * Gets component
     *
     * @return string|null
    
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     *
     * @param string|null $component component
     *
     * @return self
    
     */
    public function setComponent($component)
    {
        if (is_null($component)) {
            throw new \InvalidArgumentException('non-nullable component cannot be null');
        }

        $this->container['component'] = $component;
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
     * @param string|null $type type
     *
     * @return self
    
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;
        return $this;
    }

    /**
     * Gets serviceName
     *
     * @return string|null
    
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     *
     * @param string|null $serviceName serviceName
     *
     * @return self
    
     */
    public function setServiceName($serviceName)
    {
        if (is_null($serviceName)) {
            throw new \InvalidArgumentException('non-nullable serviceName cannot be null');
        }

        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
     * Gets gatewayErrorCategory
     *
     * @return string|null
    
     */
    public function getGatewayErrorCategory()
    {
        return $this->container['gatewayErrorCategory'];
    }

    /**
     * Sets gatewayErrorCategory
     *
     * @param string|null $gatewayErrorCategory gatewayErrorCategory
     *
     * @return self
    
     */
    public function setGatewayErrorCategory($gatewayErrorCategory)
    {
        if (is_null($gatewayErrorCategory)) {
            throw new \InvalidArgumentException('non-nullable gatewayErrorCategory cannot be null');
        }
        $allowedValues = $this->getGatewayErrorCategoryAllowableValues();
        if (!in_array($gatewayErrorCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gatewayErrorCategory', must be one of '%s'",
                    $gatewayErrorCategory,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['gatewayErrorCategory'] = $gatewayErrorCategory;
        return $this;
    }
}

