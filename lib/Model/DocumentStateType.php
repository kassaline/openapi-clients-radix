<?php
/**
 * DocumentStateType
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
 * DocumentStateType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Radix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentStateType
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const AUTOMATIC = 'Automatic';

    public const BLOCKED = 'Blocked';

    public const DONE = 'Done';

    public const BLOCKED_WITHOUT_RESERVATION = 'BlockedWithoutReservation';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::AUTOMATIC,
            self::BLOCKED,
            self::DONE,
            self::BLOCKED_WITHOUT_RESERVATION
        ];
    }
}


