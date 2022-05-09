<?php
/**
 * ReleaseInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * trustshare API
 *
 * Welcome to the trustshare API Reference documentation. Here you can find detailed information about the endpoints we provide as well as the shape of entities within the system.  # Getting Started It only takes a few minutes to begin using our __Sandbox__ environment straight away. Let's begin... 1. __Create an Organisation__ — Head over to the [dashboard](https://dashboard.trustshare.io)   to login and being creating your Organisation. You can provide your logo and your brand's   accent colour to customise the Checkout UI which is instantiated from the [Client SDK](/guides/client-sdk). 1. __Generate an API Key__ — Head to the developers section of the [dashboard](https://dashboard.trustshare.io/developers/api-keys)   and generate a new key pair. The _private key_ is used to interact with the trustshare API,   where-as the _public key_ is used to instantiate the [Client SDK](/guides/client-sdk).  # Environments The trustshare API has two environments, __Sandbox__ and __Live__. Both environments are available under the same endpoint however API Keys and client secrets are prefixed with the environment name. - A __Sandbox__ API Key will be in the format: `sandbox_api_[0-9a-z]`. - A __Live__ API Key will be in the format: `live_api_[0-9a-z]`.  ## Sandbox Our __Sandbox__ environment endeavours to be as close to the __Live__ environment as possible, however, there are a couple of limitations and features which should be noted. - Card payments take around 7 days to settle into accounts. In __Live__ this is generally closer to 2 days. - Manual inbound payments can only be \"faked\" in __Sandbox__ when they are less-than or equal-to `250,000.00`. - Open Banking in __Sandbox__ will always use a \"Mock Bank\" UI to accept the payment.  # Webhooks Payments are, by their very nature, asynchronous. As such methods of payment, including the receipt and release of funds can take an arbitrary amount of time to settle or execute. It is therefore advised to integrate with our _Webhook Events_ to be notified of changes to payments in real-time. For more information about our _Webhooks_, please visit our [Webhook Events](/guide/webhooks) guide.  # Authentication Every API call must include an `Authorization` header containing your API Key.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@trustshare.co
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ReleaseInput Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'settlement_id' => 'string',
'project_id' => 'string',
'amount' => 'int',
'fee_flat' => 'int',
'fee_percentage' => 'float',
'to' => 'AllOfReleaseInputTo',
'metadata' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'settlement_id' => null,
'project_id' => null,
'amount' => null,
'fee_flat' => null,
'fee_percentage' => null,
'to' => null,
'metadata' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'settlement_id' => 'settlement_id',
'project_id' => 'project_id',
'amount' => 'amount',
'fee_flat' => 'fee_flat',
'fee_percentage' => 'fee_percentage',
'to' => 'to',
'metadata' => 'metadata'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'settlement_id' => 'setSettlementId',
'project_id' => 'setProjectId',
'amount' => 'setAmount',
'fee_flat' => 'setFeeFlat',
'fee_percentage' => 'setFeePercentage',
'to' => 'setTo',
'metadata' => 'setMetadata'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'settlement_id' => 'getSettlementId',
'project_id' => 'getProjectId',
'amount' => 'getAmount',
'fee_flat' => 'getFeeFlat',
'fee_percentage' => 'getFeePercentage',
'to' => 'getTo',
'metadata' => 'getMetadata'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['settlement_id'] = isset($data['settlement_id']) ? $data['settlement_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['fee_flat'] = isset($data['fee_flat']) ? $data['fee_flat'] : null;
        $this->container['fee_percentage'] = isset($data['fee_percentage']) ? $data['fee_percentage'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets settlement_id
     *
     * @return string
     */
    public function getSettlementId()
    {
        return $this->container['settlement_id'];
    }

    /**
     * Sets settlement_id
     *
     * @param string $settlement_id A unique ID of the settlement to release funds from.  A string in the format: `settlement_[0-9a-z]`.
     *
     * @return $this
     */
    public function setSettlementId($settlement_id)
    {
        $this->container['settlement_id'] = $settlement_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id A unique ID of the project to release funds from.  A string in the format: `project_[0-9a-z]`.
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The amount to release in the currencys lowest denomination.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets fee_flat
     *
     * @return int
     */
    public function getFeeFlat()
    {
        return $this->container['fee_flat'];
    }

    /**
     * Sets fee_flat
     *
     * @param int $fee_flat A flat fee to charge the beneficiary Participant on successfully releasing funds.
     *
     * @return $this
     */
    public function setFeeFlat($fee_flat)
    {
        $this->container['fee_flat'] = $fee_flat;

        return $this;
    }

    /**
     * Gets fee_percentage
     *
     * @return float
     */
    public function getFeePercentage()
    {
        return $this->container['fee_percentage'];
    }

    /**
     * Sets fee_percentage
     *
     * @param float $fee_percentage The fee percentage to charge the beneficiary Participant on successfully releasing funds.
     *
     * @return $this
     */
    public function setFeePercentage($fee_percentage)
    {
        $this->container['fee_percentage'] = $fee_percentage;

        return $this;
    }

    /**
     * Gets to
     *
     * @return AllOfReleaseInputTo
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param AllOfReleaseInputTo $to An object describing the beneficiary participant to release to.  You can only provide a participant at release when the settlement is of type `funded` or you are releasing directly from a project.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata A free-form metadata object that you can use to store against the outbound. This is incredibly useful for storing a correlation ID that relates to an entity on your own system.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
