<?php
/**
 * Origintype
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
 * Origintype Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Origintype
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const INLAND = 'Inland';

    public const EU_FOREIGN_COUNTRIES = 'EUForeignCountries';

    public const THIRD_COUNTRIES = 'ThirdCountries';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::INLAND,
            self::EU_FOREIGN_COUNTRIES,
            self::THIRD_COUNTRIES
        ];
    }
}

