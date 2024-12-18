<?php
/**
 * ArticledepositDataPostCommand
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * IM.Core.Api.Radix
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 24.39.1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Radix\Model;

use \ArrayAccess;
use \OpenAPI\Client\Radix\ObjectSerializer;

/**
 * ArticledepositDataPostCommand Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ArticledepositDataPostCommand implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArticledepositDataPostCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'minQuantityDeposit' => 'float',
        'maxQuantityDeposit' => 'float',
        'minQuantityStoringposition' => 'float',
        'maxQuantityStoringposition' => 'float',
        'packagingUnit' => 'float',
        'articleId' => 'string',
        'depositId' => 'string',
        'storingPositionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'minQuantityDeposit' => 'double',
        'maxQuantityDeposit' => 'double',
        'minQuantityStoringposition' => 'double',
        'maxQuantityStoringposition' => 'double',
        'packagingUnit' => 'double',
        'articleId' => null,
        'depositId' => null,
        'storingPositionId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'minQuantityDeposit' => true,
        'maxQuantityDeposit' => true,
        'minQuantityStoringposition' => true,
        'maxQuantityStoringposition' => true,
        'packagingUnit' => true,
        'articleId' => true,
        'depositId' => true,
        'storingPositionId' => true
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
        'minQuantityDeposit' => 'minQuantityDeposit',
        'maxQuantityDeposit' => 'maxQuantityDeposit',
        'minQuantityStoringposition' => 'minQuantityStoringposition',
        'maxQuantityStoringposition' => 'maxQuantityStoringposition',
        'packagingUnit' => 'packagingUnit',
        'articleId' => 'articleId',
        'depositId' => 'depositId',
        'storingPositionId' => 'storingPositionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minQuantityDeposit' => 'setMinQuantityDeposit',
        'maxQuantityDeposit' => 'setMaxQuantityDeposit',
        'minQuantityStoringposition' => 'setMinQuantityStoringposition',
        'maxQuantityStoringposition' => 'setMaxQuantityStoringposition',
        'packagingUnit' => 'setPackagingUnit',
        'articleId' => 'setArticleId',
        'depositId' => 'setDepositId',
        'storingPositionId' => 'setStoringPositionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minQuantityDeposit' => 'getMinQuantityDeposit',
        'maxQuantityDeposit' => 'getMaxQuantityDeposit',
        'minQuantityStoringposition' => 'getMinQuantityStoringposition',
        'maxQuantityStoringposition' => 'getMaxQuantityStoringposition',
        'packagingUnit' => 'getPackagingUnit',
        'articleId' => 'getArticleId',
        'depositId' => 'getDepositId',
        'storingPositionId' => 'getStoringPositionId'
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
        $this->setIfExists('minQuantityDeposit', $data ?? [], null);
        $this->setIfExists('maxQuantityDeposit', $data ?? [], null);
        $this->setIfExists('minQuantityStoringposition', $data ?? [], null);
        $this->setIfExists('maxQuantityStoringposition', $data ?? [], null);
        $this->setIfExists('packagingUnit', $data ?? [], null);
        $this->setIfExists('articleId', $data ?? [], null);
        $this->setIfExists('depositId', $data ?? [], null);
        $this->setIfExists('storingPositionId', $data ?? [], null);
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
     * Gets minQuantityDeposit
     *
     * @return float|null
     */
    public function getMinQuantityDeposit()
    {
        return $this->container['minQuantityDeposit'];
    }

    /**
     * Sets minQuantityDeposit
     *
     * @param float|null $minQuantityDeposit minQuantityDeposit
     *
     * @return self
     */
    public function setMinQuantityDeposit($minQuantityDeposit)
    {
        if (is_null($minQuantityDeposit)) {
            array_push($this->openAPINullablesSetToNull, 'minQuantityDeposit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minQuantityDeposit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minQuantityDeposit'] = $minQuantityDeposit;

        return $this;
    }

    /**
     * Gets maxQuantityDeposit
     *
     * @return float|null
     */
    public function getMaxQuantityDeposit()
    {
        return $this->container['maxQuantityDeposit'];
    }

    /**
     * Sets maxQuantityDeposit
     *
     * @param float|null $maxQuantityDeposit maxQuantityDeposit
     *
     * @return self
     */
    public function setMaxQuantityDeposit($maxQuantityDeposit)
    {
        if (is_null($maxQuantityDeposit)) {
            array_push($this->openAPINullablesSetToNull, 'maxQuantityDeposit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maxQuantityDeposit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['maxQuantityDeposit'] = $maxQuantityDeposit;

        return $this;
    }

    /**
     * Gets minQuantityStoringposition
     *
     * @return float|null
     */
    public function getMinQuantityStoringposition()
    {
        return $this->container['minQuantityStoringposition'];
    }

    /**
     * Sets minQuantityStoringposition
     *
     * @param float|null $minQuantityStoringposition minQuantityStoringposition
     *
     * @return self
     */
    public function setMinQuantityStoringposition($minQuantityStoringposition)
    {
        if (is_null($minQuantityStoringposition)) {
            array_push($this->openAPINullablesSetToNull, 'minQuantityStoringposition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minQuantityStoringposition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minQuantityStoringposition'] = $minQuantityStoringposition;

        return $this;
    }

    /**
     * Gets maxQuantityStoringposition
     *
     * @return float|null
     */
    public function getMaxQuantityStoringposition()
    {
        return $this->container['maxQuantityStoringposition'];
    }

    /**
     * Sets maxQuantityStoringposition
     *
     * @param float|null $maxQuantityStoringposition maxQuantityStoringposition
     *
     * @return self
     */
    public function setMaxQuantityStoringposition($maxQuantityStoringposition)
    {
        if (is_null($maxQuantityStoringposition)) {
            array_push($this->openAPINullablesSetToNull, 'maxQuantityStoringposition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maxQuantityStoringposition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['maxQuantityStoringposition'] = $maxQuantityStoringposition;

        return $this;
    }

    /**
     * Gets packagingUnit
     *
     * @return float|null
     */
    public function getPackagingUnit()
    {
        return $this->container['packagingUnit'];
    }

    /**
     * Sets packagingUnit
     *
     * @param float|null $packagingUnit packagingUnit
     *
     * @return self
     */
    public function setPackagingUnit($packagingUnit)
    {
        if (is_null($packagingUnit)) {
            array_push($this->openAPINullablesSetToNull, 'packagingUnit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('packagingUnit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['packagingUnit'] = $packagingUnit;

        return $this;
    }

    /**
     * Gets articleId
     *
     * @return string|null
     */
    public function getArticleId()
    {
        return $this->container['articleId'];
    }

    /**
     * Sets articleId
     *
     * @param string|null $articleId articleId
     *
     * @return self
     */
    public function setArticleId($articleId)
    {
        if (is_null($articleId)) {
            array_push($this->openAPINullablesSetToNull, 'articleId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('articleId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['articleId'] = $articleId;

        return $this;
    }

    /**
     * Gets depositId
     *
     * @return string|null
     */
    public function getDepositId()
    {
        return $this->container['depositId'];
    }

    /**
     * Sets depositId
     *
     * @param string|null $depositId depositId
     *
     * @return self
     */
    public function setDepositId($depositId)
    {
        if (is_null($depositId)) {
            array_push($this->openAPINullablesSetToNull, 'depositId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('depositId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['depositId'] = $depositId;

        return $this;
    }

    /**
     * Gets storingPositionId
     *
     * @return string|null
     */
    public function getStoringPositionId()
    {
        return $this->container['storingPositionId'];
    }

    /**
     * Sets storingPositionId
     *
     * @param string|null $storingPositionId storingPositionId
     *
     * @return self
     */
    public function setStoringPositionId($storingPositionId)
    {
        if (is_null($storingPositionId)) {
            array_push($this->openAPINullablesSetToNull, 'storingPositionId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('storingPositionId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['storingPositionId'] = $storingPositionId;

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


