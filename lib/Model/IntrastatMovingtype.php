<?php
/**
 * IntrastatMovingtype
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
use \OpenAPI\Client\Radix\ObjectSerializer;

/**
 * IntrastatMovingtype Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntrastatMovingtype
{
    /**
     * Possible values of this enum
     */
    public const FROM_CLASS_OF_GOODS = 'FromClassOfGoods';

    public const PRODUCTS = 'Products';

    public const SERVICE = 'Service';

    public const NO_INTRA = 'NoIntra';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FROM_CLASS_OF_GOODS,
            self::PRODUCTS,
            self::SERVICE,
            self::NO_INTRA
        ];
    }
}

