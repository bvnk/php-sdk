<?php
/**
 * GatewayTransactionDto
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
 * GatewayTransactionDto Class Doc Comment
 *
 * @category Class
 * @description The specific details about transactions,  onchain or offchain, linked to the payment.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GatewayTransactionDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GatewayTransactionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_created' => 'int',
        'date_confirmed' => 'int',
        'hash' => 'string',
        'amount' => 'float',
        'risk' => 'object',
        'network_fee_currency' => 'string',
        'network_fee_amount' => 'float',
        'sources' => 'string[]',
        'display_rate' => '\OpenAPI\Client\Model\ExchangeRateDto',
        'exchange_rate' => '\OpenAPI\Client\Model\ExchangeRateDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_created' => 'int64',
        'date_confirmed' => 'int64',
        'hash' => null,
        'amount' => null,
        'risk' => null,
        'network_fee_currency' => null,
        'network_fee_amount' => null,
        'sources' => null,
        'display_rate' => null,
        'exchange_rate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date_created' => false,
		'date_confirmed' => false,
		'hash' => false,
		'amount' => false,
		'risk' => false,
		'network_fee_currency' => false,
		'network_fee_amount' => false,
		'sources' => false,
		'display_rate' => false,
		'exchange_rate' => false
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
        'date_created' => 'dateCreated',
        'date_confirmed' => 'dateConfirmed',
        'hash' => 'hash',
        'amount' => 'amount',
        'risk' => 'risk',
        'network_fee_currency' => 'networkFeeCurrency',
        'network_fee_amount' => 'networkFeeAmount',
        'sources' => 'sources',
        'display_rate' => 'displayRate',
        'exchange_rate' => 'exchangeRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_created' => 'setDateCreated',
        'date_confirmed' => 'setDateConfirmed',
        'hash' => 'setHash',
        'amount' => 'setAmount',
        'risk' => 'setRisk',
        'network_fee_currency' => 'setNetworkFeeCurrency',
        'network_fee_amount' => 'setNetworkFeeAmount',
        'sources' => 'setSources',
        'display_rate' => 'setDisplayRate',
        'exchange_rate' => 'setExchangeRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_created' => 'getDateCreated',
        'date_confirmed' => 'getDateConfirmed',
        'hash' => 'getHash',
        'amount' => 'getAmount',
        'risk' => 'getRisk',
        'network_fee_currency' => 'getNetworkFeeCurrency',
        'network_fee_amount' => 'getNetworkFeeAmount',
        'sources' => 'getSources',
        'display_rate' => 'getDisplayRate',
        'exchange_rate' => 'getExchangeRate'
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
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('date_confirmed', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('risk', $data ?? [], null);
        $this->setIfExists('network_fee_currency', $data ?? [], null);
        $this->setIfExists('network_fee_amount', $data ?? [], null);
        $this->setIfExists('sources', $data ?? [], null);
        $this->setIfExists('display_rate', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
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
     * Gets date_created
     *
     * @return int|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param int|null $date_created The date and time, encoded into UNIX epoch timestamps.
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_confirmed
     *
     * @return int|null
     */
    public function getDateConfirmed()
    {
        return $this->container['date_confirmed'];
    }

    /**
     * Sets date_confirmed
     *
     * @param int|null $date_confirmed The date and time, encoded into UNIX epoch timestamps.
     *
     * @return self
     */
    public function setDateConfirmed($date_confirmed)
    {
        if (is_null($date_confirmed)) {
            throw new \InvalidArgumentException('non-nullable date_confirmed cannot be null');
        }
        $this->container['date_confirmed'] = $date_confirmed;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash Transaction hash.
     *
     * @return self
     */
    public function setHash($hash)
    {
        if (is_null($hash)) {
            throw new \InvalidArgumentException('non-nullable hash cannot be null');
        }
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The payment amount.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets risk
     *
     * @return object|null
     */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
     * Sets risk
     *
     * @param object|null $risk risk
     *
     * @return self
     */
    public function setRisk($risk)
    {
        if (is_null($risk)) {
            throw new \InvalidArgumentException('non-nullable risk cannot be null');
        }
        $this->container['risk'] = $risk;

        return $this;
    }

    /**
     * Gets network_fee_currency
     *
     * @return string|null
     */
    public function getNetworkFeeCurrency()
    {
        return $this->container['network_fee_currency'];
    }

    /**
     * Sets network_fee_currency
     *
     * @param string|null $network_fee_currency The currency acronym.
     *
     * @return self
     */
    public function setNetworkFeeCurrency($network_fee_currency)
    {
        if (is_null($network_fee_currency)) {
            throw new \InvalidArgumentException('non-nullable network_fee_currency cannot be null');
        }
        $this->container['network_fee_currency'] = $network_fee_currency;

        return $this;
    }

    /**
     * Gets network_fee_amount
     *
     * @return float|null
     */
    public function getNetworkFeeAmount()
    {
        return $this->container['network_fee_amount'];
    }

    /**
     * Sets network_fee_amount
     *
     * @param float|null $network_fee_amount The network fee amount.
     *
     * @return self
     */
    public function setNetworkFeeAmount($network_fee_amount)
    {
        if (is_null($network_fee_amount)) {
            throw new \InvalidArgumentException('non-nullable network_fee_amount cannot be null');
        }
        $this->container['network_fee_amount'] = $network_fee_amount;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return string[]|null
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param string[]|null $sources The list of source addresses, only applicable if payment in.
     *
     * @return self
     */
    public function setSources($sources)
    {
        if (is_null($sources)) {
            throw new \InvalidArgumentException('non-nullable sources cannot be null');
        }
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets display_rate
     *
     * @return \OpenAPI\Client\Model\ExchangeRateDto|null
     */
    public function getDisplayRate()
    {
        return $this->container['display_rate'];
    }

    /**
     * Sets display_rate
     *
     * @param \OpenAPI\Client\Model\ExchangeRateDto|null $display_rate display_rate
     *
     * @return self
     */
    public function setDisplayRate($display_rate)
    {
        if (is_null($display_rate)) {
            throw new \InvalidArgumentException('non-nullable display_rate cannot be null');
        }
        $this->container['display_rate'] = $display_rate;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return \OpenAPI\Client\Model\ExchangeRateDto|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param \OpenAPI\Client\Model\ExchangeRateDto|null $exchange_rate exchange_rate
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        if (is_null($exchange_rate)) {
            throw new \InvalidArgumentException('non-nullable exchange_rate cannot be null');
        }
        $this->container['exchange_rate'] = $exchange_rate;

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


