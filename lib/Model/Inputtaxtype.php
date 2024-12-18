<?php
/**
 * Inputtaxtype
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
 * Inputtaxtype Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Inputtaxtype
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const RIT_D_ACCONTO = 'RitDAcconto';

    public const RIT_D_IMPOSTA = 'RitDImposta';

    public const CONVENZ_INTERNAZ = 'ConvenzInternaz';

    public const NON_SOGGETTO = 'NonSoggetto';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::RIT_D_ACCONTO,
            self::RIT_D_IMPOSTA,
            self::CONVENZ_INTERNAZ,
            self::NON_SOGGETTO
        ];
    }
}


