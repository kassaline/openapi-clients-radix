<?php
/**
 * PartListUsageType
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
 * PartListUsageType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PartListUsageType
{
    /**
     * Possible values of this enum
     */
    public const SALES = 'Sales';

    public const PURCHASE = 'Purchase';

    public const SALES_AND_PURCHASE = 'SalesAndPurchase';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SALES,
            self::PURCHASE,
            self::SALES_AND_PURCHASE
        ];
    }
}


