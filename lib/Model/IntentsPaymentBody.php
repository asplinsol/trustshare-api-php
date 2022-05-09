<?php
/**
 * IntentsPaymentBody
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
 * IntentsPaymentBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntentsPaymentBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'intents_payment_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'AllOfintentsPaymentBodyType',
'currency' => 'AllOfintentsPaymentBodyCurrency',
'from' => 'AllOfintentsPaymentBodyFrom',
'project_id' => 'string',
'fee_flat' => 'int',
'fee_percentage' => 'float',
'settlements' => '\Swagger\Client\Model\AllOfintentsPaymentBodySettlementsItems[]',
'metadata' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'currency' => null,
'from' => null,
'project_id' => null,
'fee_flat' => null,
'fee_percentage' => null,
'settlements' => null,
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
        'type' => 'type',
'currency' => 'currency',
'from' => 'from',
'project_id' => 'project_id',
'fee_flat' => 'fee_flat',
'fee_percentage' => 'fee_percentage',
'settlements' => 'settlements',
'metadata' => 'metadata'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'currency' => 'setCurrency',
'from' => 'setFrom',
'project_id' => 'setProjectId',
'fee_flat' => 'setFeeFlat',
'fee_percentage' => 'setFeePercentage',
'settlements' => 'setSettlements',
'metadata' => 'setMetadata'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'currency' => 'getCurrency',
'from' => 'getFrom',
'project_id' => 'getProjectId',
'fee_flat' => 'getFeeFlat',
'fee_percentage' => 'getFeePercentage',
'settlements' => 'getSettlements',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['fee_flat'] = isset($data['fee_flat']) ? $data['fee_flat'] : null;
        $this->container['fee_percentage'] = isset($data['fee_percentage']) ? $data['fee_percentage'] : null;
        $this->container['settlements'] = isset($data['settlements']) ? $data['settlements'] : null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['settlements'] === null) {
            $invalidProperties[] = "'settlements' can't be null";
        }
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
     * Gets type
     *
     * @return AllOfintentsPaymentBodyType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param AllOfintentsPaymentBodyType $type The type of Payment Intent to create.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return AllOfintentsPaymentBodyCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param AllOfintentsPaymentBodyCurrency $currency The currency to collect for the payment. If a `project_id` is provided, this currency must equate to the currency of the project account.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets from
     *
     * @return AllOfintentsPaymentBodyFrom
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param AllOfintentsPaymentBodyFrom $from Optionally provide the buyer Participant to prefill information in the Checkout UI. If no buyer Participant is provided, then the Checkout UI will include a field to collect their email address. Not providing a buyer Participant is best practice when creating a `payment_link` intent where you expect multiple different buyers to interact with the link.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

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
     * @param string $project_id Optionally provide a `project_id` to target the payemnt at an existing project account. If no `project_id` is provided, a new Project will be automatically provisioned for you.
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

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
     * @param int $fee_flat A flat fee to charge the buyer Participant on successfully completing a Checkout.
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
     * @param float $fee_percentage A fee percentage to charge the buyer Participant on successfully completing a Checkout. Fee percentages must be provided as a fraction, ie. 1.5% as 0.015.
     *
     * @return $this
     */
    public function setFeePercentage($fee_percentage)
    {
        $this->container['fee_percentage'] = $fee_percentage;

        return $this;
    }

    /**
     * Gets settlements
     *
     * @return \Swagger\Client\Model\AllOfintentsPaymentBodySettlementsItems[]
     */
    public function getSettlements()
    {
        return $this->container['settlements'];
    }

    /**
     * Sets settlements
     *
     * @param \Swagger\Client\Model\AllOfintentsPaymentBodySettlementsItems[] $settlements A list of settlements that the buyer Participant must fulfill.
     *
     * @return $this
     */
    public function setSettlements($settlements)
    {
        $this->container['settlements'] = $settlements;

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
     * @param object $metadata A free-form metadata object that you can use to store against the intent. This is incredibly useful for storing a correlation ID that relates to an entity on your own system.
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
