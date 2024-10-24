<?php
/**
 * ArticledepositDataDto
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
 * ArticledepositDataDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ArticledepositDataDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArticledepositDataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'companyId' => 'string',
        'articleId' => 'string',
        'deposit' => '\OpenAPI\Client\Radix\Model\DepositDto',
        'stockposition' => '\OpenAPI\Client\Radix\Model\StockpositionDto',
        'minQuantityDeposit' => 'float',
        'maxQuantityDeposit' => 'float',
        'minQuantityStoringposition' => 'float',
        'maxQuantityStoringposition' => 'float',
        'packagingUnit' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'companyId' => null,
        'articleId' => null,
        'deposit' => null,
        'stockposition' => null,
        'minQuantityDeposit' => 'double',
        'maxQuantityDeposit' => 'double',
        'minQuantityStoringposition' => 'double',
        'maxQuantityStoringposition' => 'double',
        'packagingUnit' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'companyId' => true,
        'articleId' => true,
        'deposit' => false,
        'stockposition' => false,
        'minQuantityDeposit' => false,
        'maxQuantityDeposit' => false,
        'minQuantityStoringposition' => false,
        'maxQuantityStoringposition' => false,
        'packagingUnit' => false
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
        'id' => 'id',
        'companyId' => 'companyId',
        'articleId' => 'articleId',
        'deposit' => 'deposit',
        'stockposition' => 'stockposition',
        'minQuantityDeposit' => 'minQuantityDeposit',
        'maxQuantityDeposit' => 'maxQuantityDeposit',
        'minQuantityStoringposition' => 'minQuantityStoringposition',
        'maxQuantityStoringposition' => 'maxQuantityStoringposition',
        'packagingUnit' => 'packagingUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'companyId' => 'setCompanyId',
        'articleId' => 'setArticleId',
        'deposit' => 'setDeposit',
        'stockposition' => 'setStockposition',
        'minQuantityDeposit' => 'setMinQuantityDeposit',
        'maxQuantityDeposit' => 'setMaxQuantityDeposit',
        'minQuantityStoringposition' => 'setMinQuantityStoringposition',
        'maxQuantityStoringposition' => 'setMaxQuantityStoringposition',
        'packagingUnit' => 'setPackagingUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'companyId' => 'getCompanyId',
        'articleId' => 'getArticleId',
        'deposit' => 'getDeposit',
        'stockposition' => 'getStockposition',
        'minQuantityDeposit' => 'getMinQuantityDeposit',
        'maxQuantityDeposit' => 'getMaxQuantityDeposit',
        'minQuantityStoringposition' => 'getMinQuantityStoringposition',
        'maxQuantityStoringposition' => 'getMaxQuantityStoringposition',
        'packagingUnit' => 'getPackagingUnit'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('companyId', $data ?? [], null);
        $this->setIfExists('articleId', $data ?? [], null);
        $this->setIfExists('deposit', $data ?? [], null);
        $this->setIfExists('stockposition', $data ?? [], null);
        $this->setIfExists('minQuantityDeposit', $data ?? [], null);
        $this->setIfExists('maxQuantityDeposit', $data ?? [], null);
        $this->setIfExists('minQuantityStoringposition', $data ?? [], null);
        $this->setIfExists('maxQuantityStoringposition', $data ?? [], null);
        $this->setIfExists('packagingUnit', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets companyId
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['companyId'];
    }

    /**
     * Sets companyId
     *
     * @param string|null $companyId companyId
     *
     * @return self
     */
    public function setCompanyId($companyId)
    {
        if (is_null($companyId)) {
            array_push($this->openAPINullablesSetToNull, 'companyId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('companyId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['companyId'] = $companyId;

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
     * Gets deposit
     *
     * @return \OpenAPI\Client\Radix\Model\DepositDto|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param \OpenAPI\Client\Radix\Model\DepositDto|null $deposit deposit
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        if (is_null($deposit)) {
            throw new \InvalidArgumentException('non-nullable deposit cannot be null');
        }
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets stockposition
     *
     * @return \OpenAPI\Client\Radix\Model\StockpositionDto|null
     */
    public function getStockposition()
    {
        return $this->container['stockposition'];
    }

    /**
     * Sets stockposition
     *
     * @param \OpenAPI\Client\Radix\Model\StockpositionDto|null $stockposition stockposition
     *
     * @return self
     */
    public function setStockposition($stockposition)
    {
        if (is_null($stockposition)) {
            throw new \InvalidArgumentException('non-nullable stockposition cannot be null');
        }
        $this->container['stockposition'] = $stockposition;

        return $this;
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
            throw new \InvalidArgumentException('non-nullable minQuantityDeposit cannot be null');
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
            throw new \InvalidArgumentException('non-nullable maxQuantityDeposit cannot be null');
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
            throw new \InvalidArgumentException('non-nullable minQuantityStoringposition cannot be null');
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
            throw new \InvalidArgumentException('non-nullable maxQuantityStoringposition cannot be null');
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
            throw new \InvalidArgumentException('non-nullable packagingUnit cannot be null');
        }
        $this->container['packagingUnit'] = $packagingUnit;

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


