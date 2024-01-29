<?php
/**
 * CashbackDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cashfree Payment Gateway APIs
 *
 * Cashfree's Payment Gateway APIs provide developers with a streamlined pathway to integrate advanced payment processing capabilities into their applications, platforms and websites.
 *
 * The version of the OpenAPI document: 2023-08-01
 * Contact: developers@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cashfree\Model;

use \ArrayAccess;
use \Cashfree\ObjectSerializer;

/**
 * CashbackDetails Class Doc Comment
 *
 * @category Class
 * @description Cashback detail boject
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashbackDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashbackDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cashback_type' => 'string',
        'cashback_value' => 'float',
        'max_cashback_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cashback_type' => null,
        'cashback_value' => 'float64',
        'max_cashback_amount' => 'float64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'cashback_type' => false,
		'cashback_value' => false,
		'max_cashback_amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'cashback_type' => 'cashback_type',
        'cashback_value' => 'cashback_value',
        'max_cashback_amount' => 'max_cashback_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashback_type' => 'setCashbackType',
        'cashback_value' => 'setCashbackValue',
        'max_cashback_amount' => 'setMaxCashbackAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashback_type' => 'getCashbackType',
        'cashback_value' => 'getCashbackValue',
        'max_cashback_amount' => 'getMaxCashbackAmount'
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

    public const CASHBACK_TYPE_FLAT = 'flat';
    public const CASHBACK_TYPE_PERCENTAGE = 'percentage';
    public const CASHBACK_TYPE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCashbackTypeAllowableValues()
    {
        return [
            self::CASHBACK_TYPE_FLAT,
            self::CASHBACK_TYPE_PERCENTAGE,
            self::CASHBACK_TYPE_UNKNOWN_DEFAULT_OPEN_API,
        ];
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
        $this->setIfExists('cashback_type', $data ?? [], null);
        $this->setIfExists('cashback_value', $data ?? [], null);
        $this->setIfExists('max_cashback_amount', $data ?? [], null);
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

        if ($this->container['cashback_type'] === null) {
            $invalidProperties[] = "'cashback_type' can't be null";
        }
        $allowedValues = $this->getCashbackTypeAllowableValues();
        if (!is_null($this->container['cashback_type']) && !in_array($this->container['cashback_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cashback_type', must be one of '%s'",
                $this->container['cashback_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['cashback_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'cashback_type', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['cashback_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'cashback_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['cashback_value'] === null) {
            $invalidProperties[] = "'cashback_value' can't be null";
        }
        if ($this->container['max_cashback_amount'] === null) {
            $invalidProperties[] = "'max_cashback_amount' can't be null";
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
     * Gets cashback_type
     *
     * @return string
     */
    public function getCashbackType()
    {
        return $this->container['cashback_type'];
    }

    /**
     * Sets cashback_type
     *
     * @param string $cashback_type Type of discount
     *
     * @return self
     */
    public function setCashbackType($cashback_type)
    {
        if (is_null($cashback_type)) {
            throw new \InvalidArgumentException('non-nullable cashback_type cannot be null');
        }
        $allowedValues = $this->getCashbackTypeAllowableValues();
        if (!in_array($cashback_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cashback_type', must be one of '%s'",
                    $cashback_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($cashback_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $cashback_type when calling CashbackDetails., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($cashback_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cashback_type when calling CashbackDetails., must be bigger than or equal to 1.');
        }

        $this->container['cashback_type'] = $cashback_type;

        return $this;
    }

    /**
     * Gets cashback_value
     *
     * @return float
     */
    public function getCashbackValue()
    {
        return $this->container['cashback_value'];
    }

    /**
     * Sets cashback_value
     *
     * @param float $cashback_value Value of Discount.
     *
     * @return self
     */
    public function setCashbackValue($cashback_value)
    {
        if (is_null($cashback_value)) {
            throw new \InvalidArgumentException('non-nullable cashback_value cannot be null');
        }
        $this->container['cashback_value'] = $cashback_value;

        return $this;
    }

    /**
     * Gets max_cashback_amount
     *
     * @return float
     */
    public function getMaxCashbackAmount()
    {
        return $this->container['max_cashback_amount'];
    }

    /**
     * Sets max_cashback_amount
     *
     * @param float $max_cashback_amount Maximum Value of Cashback allowed.
     *
     * @return self
     */
    public function setMaxCashbackAmount($max_cashback_amount)
    {
        if (is_null($max_cashback_amount)) {
            throw new \InvalidArgumentException('non-nullable max_cashback_amount cannot be null');
        }
        $this->container['max_cashback_amount'] = $max_cashback_amount;

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


