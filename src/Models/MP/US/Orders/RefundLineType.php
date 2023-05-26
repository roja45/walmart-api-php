<?php

/**
 * RefundLineType
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
 * RefundLineType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RefundLineType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RefundLineType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'lineNumber' => 'string',
        'isFullRefund' => 'bool',
        'refunds' => '\Walmart\Models\MP\US\Orders\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInnerRefunds'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lineNumber' => null,
        'isFullRefund' => null,
        'refunds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lineNumber' => false,
        'isFullRefund' => false,
        'refunds' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'lineNumber' => 'lineNumber',
        'isFullRefund' => 'isFullRefund',
        'refunds' => 'refunds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'lineNumber' => 'setLineNumber',
        'isFullRefund' => 'setIsFullRefund',
        'refunds' => 'setRefunds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'lineNumber' => 'getLineNumber',
        'isFullRefund' => 'getIsFullRefund',
        'refunds' => 'getRefunds'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('lineNumber', $data ?? [], null);
        $this->setIfExists('isFullRefund', $data ?? [], false);
        $this->setIfExists('refunds', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lineNumber'] === null) {
            $invalidProperties[] = "'lineNumber' can't be null";
        }
        if ($this->container['refunds'] === null) {
            $invalidProperties[] = "'refunds' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets lineNumber
     *
     * @return string
    
     */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
     * Sets lineNumber
     *
     * @param string $lineNumber lineNumber
     *
     * @return self
    
     */
    public function setLineNumber($lineNumber)
    {
        if (is_null($lineNumber)) {
            throw new \InvalidArgumentException('non-nullable lineNumber cannot be null');
        }

        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Gets isFullRefund
     *
     * @return bool|null
    
     */
    public function getIsFullRefund()
    {
        return $this->container['isFullRefund'];
    }

    /**
     * Sets isFullRefund
     *
     * @param bool|null $isFullRefund Specifies that a full Refund is required to be set as true to do a full refund including all the applicable charges like tax and shipping. If full refund is set as false and full item price is entered in the charge amount field, applicable charges like tax and shipping will also be refunded to perform a full refund. In case of request containing multiple order lines, all order lines should either be of full refund scenario or partial refund but not both. Allowed values are true and false.
     *
     * @return self
    
     */
    public function setIsFullRefund($isFullRefund)
    {
        if (is_null($isFullRefund)) {
            throw new \InvalidArgumentException('non-nullable isFullRefund cannot be null');
        }

        $this->container['isFullRefund'] = $isFullRefund;
        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Walmart\Models\MP\US\Orders\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInnerRefunds
    
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Walmart\Models\MP\US\Orders\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInnerRefunds $refunds refunds
     *
     * @return self
    
     */
    public function setRefunds($refunds)
    {
        if (is_null($refunds)) {
            throw new \InvalidArgumentException('non-nullable refunds cannot be null');
        }

        $this->container['refunds'] = $refunds;
        return $this;
    }
}

