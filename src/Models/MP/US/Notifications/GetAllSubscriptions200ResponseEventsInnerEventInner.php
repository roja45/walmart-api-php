<?php

/**
 * GetAllSubscriptions200ResponseEventsInnerEventInner
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
 * Notifications Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Notifications;

use Walmart\Model\BaseModel;

/**
 * GetAllSubscriptions200ResponseEventsInnerEventInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllSubscriptions200ResponseEventsInnerEventInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllSubscriptions_200_response_events_inner_event_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'eventType' => 'string',
        'subscriptionId' => 'string',
        'partnerId' => 'string',
        'eventVersion' => 'string',
        'resourceName' => 'string',
        'status' => 'string',
        'eventUrl' => 'string',
        'authDetails' => '\Walmart\Models\MP\US\Notifications\TestNotificationRequestAuthDetails',
        'headers' => '\Walmart\Models\MP\US\Notifications\TestNotificationRequestHeaders'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'eventType' => null,
        'subscriptionId' => null,
        'partnerId' => null,
        'eventVersion' => null,
        'resourceName' => null,
        'status' => null,
        'eventUrl' => null,
        'authDetails' => null,
        'headers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eventType' => false,
        'subscriptionId' => false,
        'partnerId' => false,
        'eventVersion' => false,
        'resourceName' => false,
        'status' => false,
        'eventUrl' => false,
        'authDetails' => false,
        'headers' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'eventType' => 'eventType',
        'subscriptionId' => 'subscriptionId',
        'partnerId' => 'partnerId',
        'eventVersion' => 'eventVersion',
        'resourceName' => 'resourceName',
        'status' => 'status',
        'eventUrl' => 'eventUrl',
        'authDetails' => 'authDetails',
        'headers' => 'headers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'eventType' => 'setEventType',
        'subscriptionId' => 'setSubscriptionId',
        'partnerId' => 'setPartnerId',
        'eventVersion' => 'setEventVersion',
        'resourceName' => 'setResourceName',
        'status' => 'setStatus',
        'eventUrl' => 'setEventUrl',
        'authDetails' => 'setAuthDetails',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'eventType' => 'getEventType',
        'subscriptionId' => 'getSubscriptionId',
        'partnerId' => 'getPartnerId',
        'eventVersion' => 'getEventVersion',
        'resourceName' => 'getResourceName',
        'status' => 'getStatus',
        'eventUrl' => 'getEventUrl',
        'authDetails' => 'getAuthDetails',
        'headers' => 'getHeaders'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('eventType', $data ?? [], null);
        $this->setIfExists('subscriptionId', $data ?? [], null);
        $this->setIfExists('partnerId', $data ?? [], null);
        $this->setIfExists('eventVersion', $data ?? [], null);
        $this->setIfExists('resourceName', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('eventUrl', $data ?? [], null);
        $this->setIfExists('authDetails', $data ?? [], null);
        $this->setIfExists('headers', $data ?? [], null);
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
     * Gets eventType
     *
     * @return string|null
    
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string|null $eventType Event for which the subscription is created
     *
     * @return self
    
     */
    public function setEventType($eventType)
    {
        if (is_null($eventType)) {
            throw new \InvalidArgumentException('non-nullable eventType cannot be null');
        }

        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
     * Gets subscriptionId
     *
     * @return string|null
    
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     *
     * @param string|null $subscriptionId Unique ID for the subscription that can be used for fetching details, editing or deleting the subscription
     *
     * @return self
    
     */
    public function setSubscriptionId($subscriptionId)
    {
        if (is_null($subscriptionId)) {
            throw new \InvalidArgumentException('non-nullable subscriptionId cannot be null');
        }

        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
    
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId Partner ID of the seller who created the subscription
     *
     * @return self
    
     */
    public function setPartnerId($partnerId)
    {
        if (is_null($partnerId)) {
            throw new \InvalidArgumentException('non-nullable partnerId cannot be null');
        }

        $this->container['partnerId'] = $partnerId;
        return $this;
    }

    /**
     * Gets eventVersion
     *
     * @return string|null
    
     */
    public function getEventVersion()
    {
        return $this->container['eventVersion'];
    }

    /**
     * Sets eventVersion
     *
     * @param string|null $eventVersion Version of the event type for which the subscription is created
     *
     * @return self
    
     */
    public function setEventVersion($eventVersion)
    {
        if (is_null($eventVersion)) {
            throw new \InvalidArgumentException('non-nullable eventVersion cannot be null');
        }

        $this->container['eventVersion'] = $eventVersion;
        return $this;
    }

    /**
     * Gets resourceName
     *
     * @return string|null
    
     */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
     * Sets resourceName
     *
     * @param string|null $resourceName Delegated access scope that event type is mapped to.
     *
     * @return self
    
     */
    public function setResourceName($resourceName)
    {
        if (is_null($resourceName)) {
            throw new \InvalidArgumentException('non-nullable resourceName cannot be null');
        }

        $this->container['resourceName'] = $resourceName;
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
     * @param string|null $status ACTIVE or INACTIVE status of the subscription
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets eventUrl
     *
     * @return string|null
    
     */
    public function getEventUrl()
    {
        return $this->container['eventUrl'];
    }

    /**
     * Sets eventUrl
     *
     * @param string|null $eventUrl Destination URL where notification will be received by seller
     *
     * @return self
    
     */
    public function setEventUrl($eventUrl)
    {
        if (is_null($eventUrl)) {
            throw new \InvalidArgumentException('non-nullable eventUrl cannot be null');
        }

        $this->container['eventUrl'] = $eventUrl;
        return $this;
    }

    /**
     * Gets authDetails
     *
     * @return \Walmart\Models\MP\US\Notifications\TestNotificationRequestAuthDetails|null
    
     */
    public function getAuthDetails()
    {
        return $this->container['authDetails'];
    }

    /**
     * Sets authDetails
     *
     * @param \Walmart\Models\MP\US\Notifications\TestNotificationRequestAuthDetails|null $authDetails authDetails
     *
     * @return self
    
     */
    public function setAuthDetails($authDetails)
    {
        if (is_null($authDetails)) {
            throw new \InvalidArgumentException('non-nullable authDetails cannot be null');
        }

        $this->container['authDetails'] = $authDetails;
        return $this;
    }

    /**
     * Gets headers
     *
     * @return \Walmart\Models\MP\US\Notifications\TestNotificationRequestHeaders|null
    
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \Walmart\Models\MP\US\Notifications\TestNotificationRequestHeaders|null $headers headers
     *
     * @return self
    
     */
    public function setHeaders($headers)
    {
        if (is_null($headers)) {
            throw new \InvalidArgumentException('non-nullable headers cannot be null');
        }

        $this->container['headers'] = $headers;
        return $this;
    }
}

