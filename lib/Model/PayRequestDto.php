<?php
/**
 * PayRequestDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BVNK API Endpoints
 *
 * The BVNK API is designed to facilitate seamless and secure transactions including payments, channels, and digital wallet transactions.
 *
 * The version of the OpenAPI document: 1.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PayRequestDto Class Doc Comment
 *
 * @category Class
 * @description The request data required to create a payment in or a payment out
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayRequestDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_id' => 'string',
        'amount' => 'float',
        'expiry_minutes' => 'int',
        'currency' => 'string',
        'return_url' => 'string',
        'reference' => 'string',
        'type' => '\OpenAPI\Client\Model\DirectionDto',
        'pay_in_details' => '\OpenAPI\Client\Model\PayInDetailDto',
        'pay_out_details' => '\OpenAPI\Client\Model\PayOutDetailDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_id' => null,
        'amount' => null,
        'expiry_minutes' => null,
        'currency' => null,
        'return_url' => null,
        'reference' => null,
        'type' => null,
        'pay_in_details' => null,
        'pay_out_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchant_id' => false,
		'amount' => false,
		'expiry_minutes' => false,
		'currency' => false,
		'return_url' => false,
		'reference' => false,
		'type' => false,
		'pay_in_details' => false,
		'pay_out_details' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_id' => 'merchantId',
        'amount' => 'amount',
        'expiry_minutes' => 'expiryMinutes',
        'currency' => 'currency',
        'return_url' => 'returnUrl',
        'reference' => 'reference',
        'type' => 'type',
        'pay_in_details' => 'payInDetails',
        'pay_out_details' => 'payOutDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'amount' => 'setAmount',
        'expiry_minutes' => 'setExpiryMinutes',
        'currency' => 'setCurrency',
        'return_url' => 'setReturnUrl',
        'reference' => 'setReference',
        'type' => 'setType',
        'pay_in_details' => 'setPayInDetails',
        'pay_out_details' => 'setPayOutDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'amount' => 'getAmount',
        'expiry_minutes' => 'getExpiryMinutes',
        'currency' => 'getCurrency',
        'return_url' => 'getReturnUrl',
        'reference' => 'getReference',
        'type' => 'getType',
        'pay_in_details' => 'getPayInDetails',
        'pay_out_details' => 'getPayOutDetails'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('merchant_id', $data ?? [], '5C8D8D78-366A-4AFB-B658-A64CE543C5DB');
        $this->setIfExists('amount', $data ?? [], 223.05);
        $this->setIfExists('expiry_minutes', $data ?? [], 20);
        $this->setIfExists('currency', $data ?? [], 'EUR');
        $this->setIfExists('return_url', $data ?? [], 'https://my-shop.com/payment-complete?ref=xyz');
        $this->setIfExists('reference', $data ?? [], 'myUniqueRef333');
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('pay_in_details', $data ?? [], null);
        $this->setIfExists('pay_out_details', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ((mb_strlen($this->container['merchant_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['merchant_id']) < 6)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) > 20)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['currency']) < 2)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ((mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['reference']) < 6)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id Your Merchant ID. You can find it on the Merchant Details page in your account.
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        if (is_null($merchant_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_id cannot be null');
        }
        if ((mb_strlen($merchant_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling PayRequestDto., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($merchant_id) < 6)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling PayRequestDto., must be bigger than or equal to 6.');
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The payment amount.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PayRequestDto., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets expiry_minutes
     *
     * @return int|null
     */
    public function getExpiryMinutes()
    {
        return $this->container['expiry_minutes'];
    }

    /**
     * Sets expiry_minutes
     *
     * @param int|null $expiry_minutes The time period after which payment expires.
     *
     * @return self
     */
    public function setExpiryMinutes($expiry_minutes)
    {
        if (is_null($expiry_minutes)) {
            throw new \InvalidArgumentException('non-nullable expiry_minutes cannot be null');
        }
        $this->container['expiry_minutes'] = $expiry_minutes;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency acronym.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 20)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling PayRequestDto., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($currency) < 2)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling PayRequestDto., must be bigger than or equal to 2.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string|null
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string|null $return_url The URL that the customer will be redirected to if they click 'Back to Merchant' button on the payment web page.
     *
     * @return self
     */
    public function setReturnUrl($return_url)
    {
        if (is_null($return_url)) {
            throw new \InvalidArgumentException('non-nullable return_url cannot be null');
        }
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference The custom payment reference ID to tie the payment to your customer.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling PayRequestDto., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($reference) < 6)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling PayRequestDto., must be bigger than or equal to 6.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\DirectionDto
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\DirectionDto $type type
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
     * Gets pay_in_details
     *
     * @return \OpenAPI\Client\Model\PayInDetailDto|null
     */
    public function getPayInDetails()
    {
        return $this->container['pay_in_details'];
    }

    /**
     * Sets pay_in_details
     *
     * @param \OpenAPI\Client\Model\PayInDetailDto|null $pay_in_details pay_in_details
     *
     * @return self
     */
    public function setPayInDetails($pay_in_details)
    {
        if (is_null($pay_in_details)) {
            throw new \InvalidArgumentException('non-nullable pay_in_details cannot be null');
        }
        $this->container['pay_in_details'] = $pay_in_details;

        return $this;
    }

    /**
     * Gets pay_out_details
     *
     * @return \OpenAPI\Client\Model\PayOutDetailDto|null
     */
    public function getPayOutDetails()
    {
        return $this->container['pay_out_details'];
    }

    /**
     * Sets pay_out_details
     *
     * @param \OpenAPI\Client\Model\PayOutDetailDto|null $pay_out_details pay_out_details
     *
     * @return self
     */
    public function setPayOutDetails($pay_out_details)
    {
        if (is_null($pay_out_details)) {
            throw new \InvalidArgumentException('non-nullable pay_out_details cannot be null');
        }
        $this->container['pay_out_details'] = $pay_out_details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


