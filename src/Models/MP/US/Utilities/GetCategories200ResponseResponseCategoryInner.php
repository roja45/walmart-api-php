<?php

/**
 * GetCategories200ResponseResponseCategoryInner
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
 * Utilities Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Utilities;

use Walmart\Model\BaseModel;

/**
 * GetCategories200ResponseResponseCategoryInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetCategories200ResponseResponseCategoryInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getCategories_200_response_response_category_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'categoryName' => 'string',
        'categoryId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'categoryName' => null,
        'categoryId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'categoryName' => false,
        'categoryId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'categoryName' => 'categoryName',
        'categoryId' => 'categoryId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'categoryName' => 'setCategoryName',
        'categoryId' => 'setCategoryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'categoryName' => 'getCategoryName',
        'categoryId' => 'getCategoryId'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('categoryName', $data ?? [], null);
        $this->setIfExists('categoryId', $data ?? [], null);
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
     * Gets categoryName
     *
     * @return string|null
    
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string|null $categoryName The category name for which the top trending items have to be fetched
     *
     * @return self
    
     */
    public function setCategoryName($categoryName)
    {
        if (is_null($categoryName)) {
            throw new \InvalidArgumentException('non-nullable categoryName cannot be null');
        }

        $this->container['categoryName'] = $categoryName;
        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string|null
    
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId The category id for which the top trending items have to be fetched
     *
     * @return self
    
     */
    public function setCategoryId($categoryId)
    {
        if (is_null($categoryId)) {
            throw new \InvalidArgumentException('non-nullable categoryId cannot be null');
        }

        $this->container['categoryId'] = $categoryId;
        return $this;
    }
}

