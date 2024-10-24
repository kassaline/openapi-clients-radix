<?php
/**
 * InvoiceEUType
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
 * InvoiceEUType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceEUType
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const IC_DELIVERY = 'ICDelivery';

    public const IG_SERVICE_UNTIL2010 = 'IGServiceUntil2010';

    public const INTERNATIONAL_SERVICE_UNTIL2010 = 'InternationalServiceUntil2010';

    public const INTERNATIONAL_SERVICE = 'InternationalService';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::IC_DELIVERY,
            self::IG_SERVICE_UNTIL2010,
            self::INTERNATIONAL_SERVICE_UNTIL2010,
            self::INTERNATIONAL_SERVICE
        ];
    }
}

