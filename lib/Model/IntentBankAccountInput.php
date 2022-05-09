<?php
/**
 * IntentBankAccountInput
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
 * IntentBankAccountInput Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntentBankAccountInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntentBankAccountInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'country' => 'AllOfIntentBankAccountInputCountry',
'currency' => 'AllOfIntentBankAccountInputCurrency',
'account_number' => 'string',
'iban' => 'string',
'aba' => 'string',
'bank_code' => 'string',
'bic_swift' => 'string',
'branch_code' => 'string',
'bsb_code' => 'string',
'clabe' => 'string',
'cnaps' => 'string',
'ifsc' => 'string',
'sort_code' => 'string',
'bank_name' => 'string',
'bank_address' => 'string',
'identification' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'country' => null,
'currency' => null,
'account_number' => null,
'iban' => null,
'aba' => null,
'bank_code' => null,
'bic_swift' => null,
'branch_code' => null,
'bsb_code' => null,
'clabe' => null,
'cnaps' => null,
'ifsc' => null,
'sort_code' => null,
'bank_name' => null,
'bank_address' => null,
'identification' => null    ];

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
'country' => 'country',
'currency' => 'currency',
'account_number' => 'account_number',
'iban' => 'iban',
'aba' => 'aba',
'bank_code' => 'bank_code',
'bic_swift' => 'bic_swift',
'branch_code' => 'branch_code',
'bsb_code' => 'bsb_code',
'clabe' => 'clabe',
'cnaps' => 'cnaps',
'ifsc' => 'ifsc',
'sort_code' => 'sort_code',
'bank_name' => 'bank_name',
'bank_address' => 'bank_address',
'identification' => 'identification'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'country' => 'setCountry',
'currency' => 'setCurrency',
'account_number' => 'setAccountNumber',
'iban' => 'setIban',
'aba' => 'setAba',
'bank_code' => 'setBankCode',
'bic_swift' => 'setBicSwift',
'branch_code' => 'setBranchCode',
'bsb_code' => 'setBsbCode',
'clabe' => 'setClabe',
'cnaps' => 'setCnaps',
'ifsc' => 'setIfsc',
'sort_code' => 'setSortCode',
'bank_name' => 'setBankName',
'bank_address' => 'setBankAddress',
'identification' => 'setIdentification'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'country' => 'getCountry',
'currency' => 'getCurrency',
'account_number' => 'getAccountNumber',
'iban' => 'getIban',
'aba' => 'getAba',
'bank_code' => 'getBankCode',
'bic_swift' => 'getBicSwift',
'branch_code' => 'getBranchCode',
'bsb_code' => 'getBsbCode',
'clabe' => 'getClabe',
'cnaps' => 'getCnaps',
'ifsc' => 'getIfsc',
'sort_code' => 'getSortCode',
'bank_name' => 'getBankName',
'bank_address' => 'getBankAddress',
'identification' => 'getIdentification'    ];

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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['aba'] = isset($data['aba']) ? $data['aba'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['bic_swift'] = isset($data['bic_swift']) ? $data['bic_swift'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['bsb_code'] = isset($data['bsb_code']) ? $data['bsb_code'] : null;
        $this->container['clabe'] = isset($data['clabe']) ? $data['clabe'] : null;
        $this->container['cnaps'] = isset($data['cnaps']) ? $data['cnaps'] : null;
        $this->container['ifsc'] = isset($data['ifsc']) ? $data['ifsc'] : null;
        $this->container['sort_code'] = isset($data['sort_code']) ? $data['sort_code'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_address'] = isset($data['bank_address']) ? $data['bank_address'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
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
     * @param string $id A unique ID of a bank account to target for this intent.  A string in the format: `bank_account_[0-9a-z]`.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets country
     *
     * @return AllOfIntentBankAccountInputCountry
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param AllOfIntentBankAccountInputCountry $country The country the bank account is held in.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return AllOfIntentBankAccountInputCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param AllOfIntentBankAccountInputCurrency $currency The currency the bank account is held in.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number The account number of the bank account.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban The IBAN of the bank account.
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets aba
     *
     * @return string
     */
    public function getAba()
    {
        return $this->container['aba'];
    }

    /**
     * Sets aba
     *
     * @param string $aba The ABA routing code of the bank account (US only).
     *
     * @return $this
     */
    public function setAba($aba)
    {
        $this->container['aba'] = $aba;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string $bank_code The Bank Code of the bank account.
     *
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets bic_swift
     *
     * @return string
     */
    public function getBicSwift()
    {
        return $this->container['bic_swift'];
    }

    /**
     * Sets bic_swift
     *
     * @param string $bic_swift The Bank Identifier Code of the bank account on the SWIFT network.
     *
     * @return $this
     */
    public function setBicSwift($bic_swift)
    {
        $this->container['bic_swift'] = $bic_swift;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string $branch_code The Branch Code of the bank account.
     *
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets bsb_code
     *
     * @return string
     */
    public function getBsbCode()
    {
        return $this->container['bsb_code'];
    }

    /**
     * Sets bsb_code
     *
     * @param string $bsb_code The BSB code of the bank account (AU only).
     *
     * @return $this
     */
    public function setBsbCode($bsb_code)
    {
        $this->container['bsb_code'] = $bsb_code;

        return $this;
    }

    /**
     * Gets clabe
     *
     * @return string
     */
    public function getClabe()
    {
        return $this->container['clabe'];
    }

    /**
     * Sets clabe
     *
     * @param string $clabe The CLABE of the bank account (MX only).
     *
     * @return $this
     */
    public function setClabe($clabe)
    {
        $this->container['clabe'] = $clabe;

        return $this;
    }

    /**
     * Gets cnaps
     *
     * @return string
     */
    public function getCnaps()
    {
        return $this->container['cnaps'];
    }

    /**
     * Sets cnaps
     *
     * @param string $cnaps The CNAPS of the bank account (CN only).
     *
     * @return $this
     */
    public function setCnaps($cnaps)
    {
        $this->container['cnaps'] = $cnaps;

        return $this;
    }

    /**
     * Gets ifsc
     *
     * @return string
     */
    public function getIfsc()
    {
        return $this->container['ifsc'];
    }

    /**
     * Sets ifsc
     *
     * @param string $ifsc The IFSC of the bank account (IN only).
     *
     * @return $this
     */
    public function setIfsc($ifsc)
    {
        $this->container['ifsc'] = $ifsc;

        return $this;
    }

    /**
     * Gets sort_code
     *
     * @return string
     */
    public function getSortCode()
    {
        return $this->container['sort_code'];
    }

    /**
     * Sets sort_code
     *
     * @param string $sort_code The Sort Code of the bank account (UK only).
     *
     * @return $this
     */
    public function setSortCode($sort_code)
    {
        $this->container['sort_code'] = $sort_code;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string $bank_name The Bank Name of the bank account.
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_address
     *
     * @return string
     */
    public function getBankAddress()
    {
        return $this->container['bank_address'];
    }

    /**
     * Sets bank_address
     *
     * @param string $bank_address The Bank Address of the bank account.
     *
     * @return $this
     */
    public function setBankAddress($bank_address)
    {
        $this->container['bank_address'] = $bank_address;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return string
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param string $identification The identification type of the bank account (MX only).
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

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
