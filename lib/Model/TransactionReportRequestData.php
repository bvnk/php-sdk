<?php
/**
 * TransactionReportRequestData
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
 * The BVNK API is designed to facilitate seamless and secure transactions including payments, channels, anddigital wallet transactions.
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
 * TransactionReportRequestData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionReportRequestData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionReportRequestData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'external_processing' => 'string',
        'wallet_id' => 'int',
        'transaction_type' => 'string',
        'from_date' => 'string',
        'to_date' => 'string',
        'format' => 'string',
        'language_tag' => 'string',
        'category' => 'int',
        'account_name' => 'string',
        'include' => 'string',
        'exclude' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'external_processing' => null,
        'wallet_id' => 'int64',
        'transaction_type' => null,
        'from_date' => null,
        'to_date' => null,
        'format' => null,
        'language_tag' => null,
        'category' => null,
        'account_name' => null,
        'include' => null,
        'exclude' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'external_processing' => false,
		'wallet_id' => false,
		'transaction_type' => false,
		'from_date' => false,
		'to_date' => false,
		'format' => false,
		'language_tag' => false,
		'category' => false,
		'account_name' => false,
		'include' => false,
		'exclude' => false
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
        'type' => 'type',
        'external_processing' => 'externalProcessing',
        'wallet_id' => 'walletId',
        'transaction_type' => 'transactionType',
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'format' => 'format',
        'language_tag' => 'languageTag',
        'category' => 'category',
        'account_name' => 'accountName',
        'include' => 'include',
        'exclude' => 'exclude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'external_processing' => 'setExternalProcessing',
        'wallet_id' => 'setWalletId',
        'transaction_type' => 'setTransactionType',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'format' => 'setFormat',
        'language_tag' => 'setLanguageTag',
        'category' => 'setCategory',
        'account_name' => 'setAccountName',
        'include' => 'setInclude',
        'exclude' => 'setExclude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'external_processing' => 'getExternalProcessing',
        'wallet_id' => 'getWalletId',
        'transaction_type' => 'getTransactionType',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'format' => 'getFormat',
        'language_tag' => 'getLanguageTag',
        'category' => 'getCategory',
        'account_name' => 'getAccountName',
        'include' => 'getInclude',
        'exclude' => 'getExclude'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('external_processing', $data ?? [], null);
        $this->setIfExists('wallet_id', $data ?? [], null);
        $this->setIfExists('transaction_type', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('to_date', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('language_tag', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('include', $data ?? [], null);
        $this->setIfExists('exclude', $data ?? [], null);
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
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
     * Gets external_processing
     *
     * @return string|null
     */
    public function getExternalProcessing()
    {
        return $this->container['external_processing'];
    }

    /**
     * Sets external_processing
     *
     * @param string|null $external_processing external_processing
     *
     * @return self
     */
    public function setExternalProcessing($external_processing)
    {
        if (is_null($external_processing)) {
            throw new \InvalidArgumentException('non-nullable external_processing cannot be null');
        }
        $this->container['external_processing'] = $external_processing;

        return $this;
    }

    /**
     * Gets wallet_id
     *
     * @return int|null
     */
    public function getWalletId()
    {
        return $this->container['wallet_id'];
    }

    /**
     * Sets wallet_id
     *
     * @param int|null $wallet_id wallet_id
     *
     * @return self
     */
    public function setWalletId($wallet_id)
    {
        if (is_null($wallet_id)) {
            throw new \InvalidArgumentException('non-nullable wallet_id cannot be null');
        }
        $this->container['wallet_id'] = $wallet_id;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type transaction_type
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        if (is_null($transaction_type)) {
            throw new \InvalidArgumentException('non-nullable transaction_type cannot be null');
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param string|null $from_date from_date
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return string|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param string|null $to_date to_date
     *
     * @return self
     */
    public function setToDate($to_date)
    {
        if (is_null($to_date)) {
            throw new \InvalidArgumentException('non-nullable to_date cannot be null');
        }
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets language_tag
     *
     * @return string|null
     */
    public function getLanguageTag()
    {
        return $this->container['language_tag'];
    }

    /**
     * Sets language_tag
     *
     * @param string|null $language_tag language_tag
     *
     * @return self
     */
    public function setLanguageTag($language_tag)
    {
        if (is_null($language_tag)) {
            throw new \InvalidArgumentException('non-nullable language_tag cannot be null');
        }
        $this->container['language_tag'] = $language_tag;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name account_name
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            throw new \InvalidArgumentException('non-nullable account_name cannot be null');
        }
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets include
     *
     * @return string|null
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param string|null $include include
     *
     * @return self
     */
    public function setInclude($include)
    {
        if (is_null($include)) {
            throw new \InvalidArgumentException('non-nullable include cannot be null');
        }
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets exclude
     *
     * @return string|null
     */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
     * Sets exclude
     *
     * @param string|null $exclude exclude
     *
     * @return self
     */
    public function setExclude($exclude)
    {
        if (is_null($exclude)) {
            throw new \InvalidArgumentException('non-nullable exclude cannot be null');
        }
        $this->container['exclude'] = $exclude;

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


