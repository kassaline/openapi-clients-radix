<?php
/**
 * AdditionalfieldFieldType
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
 * AdditionalfieldFieldType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalfieldFieldType
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const TEXT = 'Text';

    public const NUMERIC = 'Numeric';

    public const DATE = 'Date';

    public const BOOLEAN = 'Boolean';

    public const FOREIGN_KEY = 'ForeignKey';

    public const TEXT_HTML = 'TextHTML';

    public const TEXT_RTF = 'TextRTF';

    public const SELECTION = 'Selection';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::TEXT,
            self::NUMERIC,
            self::DATE,
            self::BOOLEAN,
            self::FOREIGN_KEY,
            self::TEXT_HTML,
            self::TEXT_RTF,
            self::SELECTION
        ];
    }
}


