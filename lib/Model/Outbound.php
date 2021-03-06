<?php
/**
 * Outbound
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
 * Outbound Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Outbound implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Outbound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'created_at' => 'string',
'updated_at' => 'string',
'project_id' => 'string',
'settlement_id' => 'string',
'type' => 'AllOfOutboundType',
'status' => 'AllOfOutboundStatus',
'amount' => 'int',
'to' => 'AllOfOutboundTo',
'transfers' => '\Swagger\Client\Model\AllOfOutboundTransfersItems[]',
'conversion' => 'AllOfOutboundConversion',
'paused_reason' => 'AllOfOutboundPausedReason',
'metadata' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'created_at' => null,
'updated_at' => null,
'project_id' => null,
'settlement_id' => null,
'type' => null,
'status' => null,
'amount' => null,
'to' => null,
'transfers' => null,
'conversion' => null,
'paused_reason' => null,
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
        'id' => 'id',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'project_id' => 'project_id',
'settlement_id' => 'settlement_id',
'type' => 'type',
'status' => 'status',
'amount' => 'amount',
'to' => 'to',
'transfers' => 'transfers',
'conversion' => 'conversion',
'paused_reason' => 'paused_reason',
'metadata' => 'metadata'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'project_id' => 'setProjectId',
'settlement_id' => 'setSettlementId',
'type' => 'setType',
'status' => 'setStatus',
'amount' => 'setAmount',
'to' => 'setTo',
'transfers' => 'setTransfers',
'conversion' => 'setConversion',
'paused_reason' => 'setPausedReason',
'metadata' => 'setMetadata'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'project_id' => 'getProjectId',
'settlement_id' => 'getSettlementId',
'type' => 'getType',
'status' => 'getStatus',
'amount' => 'getAmount',
'to' => 'getTo',
'transfers' => 'getTransfers',
'conversion' => 'getConversion',
'paused_reason' => 'getPausedReason',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['settlement_id'] = isset($data['settlement_id']) ? $data['settlement_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['transfers'] = isset($data['transfers']) ? $data['transfers'] : null;
        $this->container['conversion'] = isset($data['conversion']) ? $data['conversion'] : null;
        $this->container['paused_reason'] = isset($data['paused_reason']) ? $data['paused_reason'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id A unique ID for the outbound.  A string in the format `outbound_[0-9a-z]`.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at The date the outbound was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at The date the outbound was last updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param string $project_id The project ID the outbound was created against.
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
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
     * @param string $settlement_id The settlement ID the outbound was created against. In the event funds were released directly from a project, this value will be null.
     *
     * @return $this
     */
    public function setSettlementId($settlement_id)
    {
        $this->container['settlement_id'] = $settlement_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return AllOfOutboundType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param AllOfOutboundType $type The type of the outbound.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return AllOfOutboundStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param AllOfOutboundStatus $status The status of the outbound.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param int $amount The amount of the outbound.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets to
     *
     * @return AllOfOutboundTo
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param AllOfOutboundTo $to An object describing the beneficiary Participant for the outbound payment.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets transfers
     *
     * @return \Swagger\Client\Model\AllOfOutboundTransfersItems[]
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \Swagger\Client\Model\AllOfOutboundTransfersItems[] $transfers A list of any transfers created as the result of the outbound.
     *
     * @return $this
     */
    public function setTransfers($transfers)
    {
        $this->container['transfers'] = $transfers;

        return $this;
    }

    /**
     * Gets conversion
     *
     * @return AllOfOutboundConversion
     */
    public function getConversion()
    {
        return $this->container['conversion'];
    }

    /**
     * Sets conversion
     *
     * @param AllOfOutboundConversion $conversion An object describing a potential currency conversion to achieve the outbound.
     *
     * @return $this
     */
    public function setConversion($conversion)
    {
        $this->container['conversion'] = $conversion;

        return $this;
    }

    /**
     * Gets paused_reason
     *
     * @return AllOfOutboundPausedReason
     */
    public function getPausedReason()
    {
        return $this->container['paused_reason'];
    }

    /**
     * Sets paused_reason
     *
     * @param AllOfOutboundPausedReason $paused_reason The reason why the outbound is currently in a `paused` status.
     *
     * @return $this
     */
    public function setPausedReason($paused_reason)
    {
        $this->container['paused_reason'] = $paused_reason;

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
     * @param object $metadata The metadata that was provided at the creation of the release or refund.
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
