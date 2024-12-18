<?php
/**
 * PricePatchCommand
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
 * PricePatchCommand Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PricePatchCommand implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PricePatchCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'priceKey' => '\OpenAPI\Client\Radix\Model\IdCode',
        'validFrom' => '\DateTime',
        'validUntil' => '\DateTime',
        'amount' => 'float',
        'discount1' => 'float',
        'discount2' => 'float',
        'discount3' => 'float',
        'discount4' => 'float',
        'discount5' => 'float',
        'fromQuantity' => 'float',
        'rounding' => 'float',
        'surchargeDebit' => 'float',
        'unit' => 'int',
        'option1' => 'string',
        'option1Logic' => 'bool',
        'option1Date' => '\DateTime',
        'dependancyType' => '\OpenAPI\Client\Radix\Model\PriceDependancytype',
        'dependancyPriceKey' => '\OpenAPI\Client\Radix\Model\IdCode',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'priceKey' => null,
        'validFrom' => 'date-time',
        'validUntil' => 'date-time',
        'amount' => 'double',
        'discount1' => 'double',
        'discount2' => 'double',
        'discount3' => 'double',
        'discount4' => 'double',
        'discount5' => 'double',
        'fromQuantity' => 'double',
        'rounding' => 'double',
        'surchargeDebit' => 'double',
        'unit' => 'int32',
        'option1' => null,
        'option1Logic' => null,
        'option1Date' => 'date-time',
        'dependancyType' => null,
        'dependancyPriceKey' => null,
        'id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'priceKey' => false,
        'validFrom' => true,
        'validUntil' => true,
        'amount' => true,
        'discount1' => true,
        'discount2' => true,
        'discount3' => true,
        'discount4' => true,
        'discount5' => true,
        'fromQuantity' => true,
        'rounding' => true,
        'surchargeDebit' => true,
        'unit' => true,
        'option1' => true,
        'option1Logic' => true,
        'option1Date' => true,
        'dependancyType' => false,
        'dependancyPriceKey' => false,
        'id' => true
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
        'priceKey' => 'priceKey',
        'validFrom' => 'validFrom',
        'validUntil' => 'validUntil',
        'amount' => 'amount',
        'discount1' => 'discount1',
        'discount2' => 'discount2',
        'discount3' => 'discount3',
        'discount4' => 'discount4',
        'discount5' => 'discount5',
        'fromQuantity' => 'fromQuantity',
        'rounding' => 'rounding',
        'surchargeDebit' => 'surchargeDebit',
        'unit' => 'unit',
        'option1' => 'option1',
        'option1Logic' => 'option1Logic',
        'option1Date' => 'option1Date',
        'dependancyType' => 'dependancyType',
        'dependancyPriceKey' => 'dependancyPriceKey',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'priceKey' => 'setPriceKey',
        'validFrom' => 'setValidFrom',
        'validUntil' => 'setValidUntil',
        'amount' => 'setAmount',
        'discount1' => 'setDiscount1',
        'discount2' => 'setDiscount2',
        'discount3' => 'setDiscount3',
        'discount4' => 'setDiscount4',
        'discount5' => 'setDiscount5',
        'fromQuantity' => 'setFromQuantity',
        'rounding' => 'setRounding',
        'surchargeDebit' => 'setSurchargeDebit',
        'unit' => 'setUnit',
        'option1' => 'setOption1',
        'option1Logic' => 'setOption1Logic',
        'option1Date' => 'setOption1Date',
        'dependancyType' => 'setDependancyType',
        'dependancyPriceKey' => 'setDependancyPriceKey',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'priceKey' => 'getPriceKey',
        'validFrom' => 'getValidFrom',
        'validUntil' => 'getValidUntil',
        'amount' => 'getAmount',
        'discount1' => 'getDiscount1',
        'discount2' => 'getDiscount2',
        'discount3' => 'getDiscount3',
        'discount4' => 'getDiscount4',
        'discount5' => 'getDiscount5',
        'fromQuantity' => 'getFromQuantity',
        'rounding' => 'getRounding',
        'surchargeDebit' => 'getSurchargeDebit',
        'unit' => 'getUnit',
        'option1' => 'getOption1',
        'option1Logic' => 'getOption1Logic',
        'option1Date' => 'getOption1Date',
        'dependancyType' => 'getDependancyType',
        'dependancyPriceKey' => 'getDependancyPriceKey',
        'id' => 'getId'
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
        $this->setIfExists('priceKey', $data ?? [], null);
        $this->setIfExists('validFrom', $data ?? [], null);
        $this->setIfExists('validUntil', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('discount1', $data ?? [], null);
        $this->setIfExists('discount2', $data ?? [], null);
        $this->setIfExists('discount3', $data ?? [], null);
        $this->setIfExists('discount4', $data ?? [], null);
        $this->setIfExists('discount5', $data ?? [], null);
        $this->setIfExists('fromQuantity', $data ?? [], null);
        $this->setIfExists('rounding', $data ?? [], null);
        $this->setIfExists('surchargeDebit', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('option1', $data ?? [], null);
        $this->setIfExists('option1Logic', $data ?? [], null);
        $this->setIfExists('option1Date', $data ?? [], null);
        $this->setIfExists('dependancyType', $data ?? [], null);
        $this->setIfExists('dependancyPriceKey', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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
     * Gets priceKey
     *
     * @return \OpenAPI\Client\Radix\Model\IdCode|null
     */
    public function getPriceKey()
    {
        return $this->container['priceKey'];
    }

    /**
     * Sets priceKey
     *
     * @param \OpenAPI\Client\Radix\Model\IdCode|null $priceKey priceKey
     *
     * @return self
     */
    public function setPriceKey($priceKey)
    {
        if (is_null($priceKey)) {
            throw new \InvalidArgumentException('non-nullable priceKey cannot be null');
        }
        $this->container['priceKey'] = $priceKey;

        return $this;
    }

    /**
     * Gets validFrom
     *
     * @return \DateTime|null
     */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
     * Sets validFrom
     *
     * @param \DateTime|null $validFrom validFrom
     *
     * @return self
     */
    public function setValidFrom($validFrom)
    {
        if (is_null($validFrom)) {
            array_push($this->openAPINullablesSetToNull, 'validFrom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validFrom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * Gets validUntil
     *
     * @return \DateTime|null
     */
    public function getValidUntil()
    {
        return $this->container['validUntil'];
    }

    /**
     * Sets validUntil
     *
     * @param \DateTime|null $validUntil validUntil
     *
     * @return self
     */
    public function setValidUntil($validUntil)
    {
        if (is_null($validUntil)) {
            array_push($this->openAPINullablesSetToNull, 'validUntil');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validUntil', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validUntil'] = $validUntil;

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
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            array_push($this->openAPINullablesSetToNull, 'amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets discount1
     *
     * @return float|null
     */
    public function getDiscount1()
    {
        return $this->container['discount1'];
    }

    /**
     * Sets discount1
     *
     * @param float|null $discount1 discount1
     *
     * @return self
     */
    public function setDiscount1($discount1)
    {
        if (is_null($discount1)) {
            array_push($this->openAPINullablesSetToNull, 'discount1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount1'] = $discount1;

        return $this;
    }

    /**
     * Gets discount2
     *
     * @return float|null
     */
    public function getDiscount2()
    {
        return $this->container['discount2'];
    }

    /**
     * Sets discount2
     *
     * @param float|null $discount2 discount2
     *
     * @return self
     */
    public function setDiscount2($discount2)
    {
        if (is_null($discount2)) {
            array_push($this->openAPINullablesSetToNull, 'discount2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount2'] = $discount2;

        return $this;
    }

    /**
     * Gets discount3
     *
     * @return float|null
     */
    public function getDiscount3()
    {
        return $this->container['discount3'];
    }

    /**
     * Sets discount3
     *
     * @param float|null $discount3 discount3
     *
     * @return self
     */
    public function setDiscount3($discount3)
    {
        if (is_null($discount3)) {
            array_push($this->openAPINullablesSetToNull, 'discount3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount3'] = $discount3;

        return $this;
    }

    /**
     * Gets discount4
     *
     * @return float|null
     */
    public function getDiscount4()
    {
        return $this->container['discount4'];
    }

    /**
     * Sets discount4
     *
     * @param float|null $discount4 discount4
     *
     * @return self
     */
    public function setDiscount4($discount4)
    {
        if (is_null($discount4)) {
            array_push($this->openAPINullablesSetToNull, 'discount4');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount4', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount4'] = $discount4;

        return $this;
    }

    /**
     * Gets discount5
     *
     * @return float|null
     */
    public function getDiscount5()
    {
        return $this->container['discount5'];
    }

    /**
     * Sets discount5
     *
     * @param float|null $discount5 discount5
     *
     * @return self
     */
    public function setDiscount5($discount5)
    {
        if (is_null($discount5)) {
            array_push($this->openAPINullablesSetToNull, 'discount5');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount5', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount5'] = $discount5;

        return $this;
    }

    /**
     * Gets fromQuantity
     *
     * @return float|null
     */
    public function getFromQuantity()
    {
        return $this->container['fromQuantity'];
    }

    /**
     * Sets fromQuantity
     *
     * @param float|null $fromQuantity fromQuantity
     *
     * @return self
     */
    public function setFromQuantity($fromQuantity)
    {
        if (is_null($fromQuantity)) {
            array_push($this->openAPINullablesSetToNull, 'fromQuantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fromQuantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fromQuantity'] = $fromQuantity;

        return $this;
    }

    /**
     * Gets rounding
     *
     * @return float|null
     */
    public function getRounding()
    {
        return $this->container['rounding'];
    }

    /**
     * Sets rounding
     *
     * @param float|null $rounding rounding
     *
     * @return self
     */
    public function setRounding($rounding)
    {
        if (is_null($rounding)) {
            array_push($this->openAPINullablesSetToNull, 'rounding');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rounding', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rounding'] = $rounding;

        return $this;
    }

    /**
     * Gets surchargeDebit
     *
     * @return float|null
     */
    public function getSurchargeDebit()
    {
        return $this->container['surchargeDebit'];
    }

    /**
     * Sets surchargeDebit
     *
     * @param float|null $surchargeDebit surchargeDebit
     *
     * @return self
     */
    public function setSurchargeDebit($surchargeDebit)
    {
        if (is_null($surchargeDebit)) {
            array_push($this->openAPINullablesSetToNull, 'surchargeDebit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('surchargeDebit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['surchargeDebit'] = $surchargeDebit;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return int|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param int|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            array_push($this->openAPINullablesSetToNull, 'unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets option1
     *
     * @return string|null
     */
    public function getOption1()
    {
        return $this->container['option1'];
    }

    /**
     * Sets option1
     *
     * @param string|null $option1 option1
     *
     * @return self
     */
    public function setOption1($option1)
    {
        if (is_null($option1)) {
            array_push($this->openAPINullablesSetToNull, 'option1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('option1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['option1'] = $option1;

        return $this;
    }

    /**
     * Gets option1Logic
     *
     * @return bool|null
     */
    public function getOption1Logic()
    {
        return $this->container['option1Logic'];
    }

    /**
     * Sets option1Logic
     *
     * @param bool|null $option1Logic option1Logic
     *
     * @return self
     */
    public function setOption1Logic($option1Logic)
    {
        if (is_null($option1Logic)) {
            array_push($this->openAPINullablesSetToNull, 'option1Logic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('option1Logic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['option1Logic'] = $option1Logic;

        return $this;
    }

    /**
     * Gets option1Date
     *
     * @return \DateTime|null
     */
    public function getOption1Date()
    {
        return $this->container['option1Date'];
    }

    /**
     * Sets option1Date
     *
     * @param \DateTime|null $option1Date option1Date
     *
     * @return self
     */
    public function setOption1Date($option1Date)
    {
        if (is_null($option1Date)) {
            array_push($this->openAPINullablesSetToNull, 'option1Date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('option1Date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['option1Date'] = $option1Date;

        return $this;
    }

    /**
     * Gets dependancyType
     *
     * @return \OpenAPI\Client\Radix\Model\PriceDependancytype|null
     */
    public function getDependancyType()
    {
        return $this->container['dependancyType'];
    }

    /**
     * Sets dependancyType
     *
     * @param \OpenAPI\Client\Radix\Model\PriceDependancytype|null $dependancyType dependancyType
     *
     * @return self
     */
    public function setDependancyType($dependancyType)
    {
        if (is_null($dependancyType)) {
            throw new \InvalidArgumentException('non-nullable dependancyType cannot be null');
        }
        $this->container['dependancyType'] = $dependancyType;

        return $this;
    }

    /**
     * Gets dependancyPriceKey
     *
     * @return \OpenAPI\Client\Radix\Model\IdCode|null
     */
    public function getDependancyPriceKey()
    {
        return $this->container['dependancyPriceKey'];
    }

    /**
     * Sets dependancyPriceKey
     *
     * @param \OpenAPI\Client\Radix\Model\IdCode|null $dependancyPriceKey dependancyPriceKey
     *
     * @return self
     */
    public function setDependancyPriceKey($dependancyPriceKey)
    {
        if (is_null($dependancyPriceKey)) {
            throw new \InvalidArgumentException('non-nullable dependancyPriceKey cannot be null');
        }
        $this->container['dependancyPriceKey'] = $dependancyPriceKey;

        return $this;
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


