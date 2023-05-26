<?php

/**
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerAccessMode
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
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerAccessMode Class Doc Comment
 *
 * @category Class

 * @description Fulfillment access mode details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerAccessMode extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'promiseFulfillments_200_response_payload_fulfillmentPlans_inner_fulfillmentModules_inner_fulfillmentGroups_inner_fulfillmentOptions_inner_fulfillments_inner_accessMode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mode' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'mode' => 'mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'mode' => 'setMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'mode' => 'getMode'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('mode', $data ?? [], null);
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
     * Gets mode
     *
     * @return string|null
    
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode Fulfillment access mode type. For example : 'NATIONAL_CARRIER'
     *
     * @return self
    
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }

        $this->container['mode'] = $mode;
        return $this;
    }
}

