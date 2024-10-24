# OpenAPI\Client\Radix\CustomersApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1CustomersCountGet()**](CustomersApi.md#apiV1CustomersCountGet) | **GET** /api/v1/customers/count | Returns the count of customers |
| [**apiV1CustomersDelete()**](CustomersApi.md#apiV1CustomersDelete) | **DELETE** /api/v1/customers | Delete an customer |
| [**apiV1CustomersGet()**](CustomersApi.md#apiV1CustomersGet) | **GET** /api/v1/customers | Returns a list of customers |
| [**apiV1CustomersIdIdContactsGet()**](CustomersApi.md#apiV1CustomersIdIdContactsGet) | **GET** /api/v1/customers/id/{id}/contacts | Returns a list of contacts with this customer id |
| [**apiV1CustomersIdIdGet()**](CustomersApi.md#apiV1CustomersIdIdGet) | **GET** /api/v1/customers/id/{id} | Returns the customer with this ID |
| [**apiV1CustomersIdIdShippingAddressesGet()**](CustomersApi.md#apiV1CustomersIdIdShippingAddressesGet) | **GET** /api/v1/customers/id/{id}/shippingAddresses | Returns a list of shippingAddresses with this customer id |
| [**apiV1CustomersListGet()**](CustomersApi.md#apiV1CustomersListGet) | **GET** /api/v1/customers/list | Returns a list of customers with minimal data |
| [**apiV1CustomersPatch()**](CustomersApi.md#apiV1CustomersPatch) | **PATCH** /api/v1/customers | Updating an customer |
| [**apiV1CustomersPost()**](CustomersApi.md#apiV1CustomersPost) | **POST** /api/v1/customers | Creating an customer |


## `apiV1CustomersCountGet()`

```php
apiV1CustomersCountGet($id, $ids, $number, $email, $searchText, $mapLat, $mapLong, $userCode, $userPropertyForFiltering, $isoCode, $vatNumber, $taxNumber, $skip, $take, $createDateFrom, $updateDateFrom, $active, $additionalWhere): int
```

Returns the count of customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$number = 56; // int
$email = 'email_example'; // string
$searchText = 'searchText_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$userCode = 'userCode_example'; // string
$userPropertyForFiltering = 'userPropertyForFiltering_example'; // string
$isoCode = 'isoCode_example'; // string
$vatNumber = 'vatNumber_example'; // string
$taxNumber = 'taxNumber_example'; // string
$skip = 56; // int
$take = 56; // int
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$additionalWhere = 'additionalWhere_example'; // string

try {
    $result = $apiInstance->apiV1CustomersCountGet($id, $ids, $number, $email, $searchText, $mapLat, $mapLong, $userCode, $userPropertyForFiltering, $isoCode, $vatNumber, $taxNumber, $skip, $take, $createDateFrom, $updateDateFrom, $active, $additionalWhere);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **int**|  | [optional] |
| **email** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **mapLat** | **float**|  | [optional] |
| **mapLong** | **float**|  | [optional] |
| **userCode** | **string**|  | [optional] |
| **userPropertyForFiltering** | **string**|  | [optional] |
| **isoCode** | **string**|  | [optional] |
| **vatNumber** | **string**|  | [optional] |
| **taxNumber** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |

### Return type

**int**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersDelete()`

```php
apiV1CustomersDelete($customerDeleteCommand): bool
```

Delete an customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerDeleteCommand = new \OpenAPI\Client\Radix\Model\CustomerDeleteCommand(); // \OpenAPI\Client\Radix\Model\CustomerDeleteCommand | 

try {
    $result = $apiInstance->apiV1CustomersDelete($customerDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerDeleteCommand** | [**\OpenAPI\Client\Radix\Model\CustomerDeleteCommand**](../Model/CustomerDeleteCommand.md)|  | [optional] |

### Return type

**bool**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersGet()`

```php
apiV1CustomersGet($id, $ids, $number, $email, $searchText, $mapLat, $mapLong, $userCode, $userPropertyForFiltering, $isoCode, $vatNumber, $taxNumber, $skip, $take, $createDateFrom, $updateDateFrom, $active, $additionalWhere): \OpenAPI\Client\Radix\Model\CustomerDto[]
```

Returns a list of customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$number = 56; // int
$email = 'email_example'; // string
$searchText = 'searchText_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$userCode = 'userCode_example'; // string
$userPropertyForFiltering = 'userPropertyForFiltering_example'; // string
$isoCode = 'isoCode_example'; // string
$vatNumber = 'vatNumber_example'; // string
$taxNumber = 'taxNumber_example'; // string
$skip = 56; // int
$take = 56; // int
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$additionalWhere = 'additionalWhere_example'; // string

try {
    $result = $apiInstance->apiV1CustomersGet($id, $ids, $number, $email, $searchText, $mapLat, $mapLong, $userCode, $userPropertyForFiltering, $isoCode, $vatNumber, $taxNumber, $skip, $take, $createDateFrom, $updateDateFrom, $active, $additionalWhere);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **int**|  | [optional] |
| **email** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **mapLat** | **float**|  | [optional] |
| **mapLong** | **float**|  | [optional] |
| **userCode** | **string**|  | [optional] |
| **userPropertyForFiltering** | **string**|  | [optional] |
| **isoCode** | **string**|  | [optional] |
| **vatNumber** | **string**|  | [optional] |
| **taxNumber** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\CustomerDto[]**](../Model/CustomerDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersIdIdContactsGet()`

```php
apiV1CustomersIdIdContactsGet($id): \OpenAPI\Client\Radix\Model\ContactDto[]
```

Returns a list of contacts with this customer id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1CustomersIdIdContactsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersIdIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ContactDto[]**](../Model/ContactDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersIdIdGet()`

```php
apiV1CustomersIdIdGet($id): \OpenAPI\Client\Radix\Model\CustomerDto
```

Returns the customer with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1CustomersIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\CustomerDto**](../Model/CustomerDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersIdIdShippingAddressesGet()`

```php
apiV1CustomersIdIdShippingAddressesGet($id): \OpenAPI\Client\Radix\Model\CustomerShippingAddressDto[]
```

Returns a list of shippingAddresses with this customer id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1CustomersIdIdShippingAddressesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersIdIdShippingAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\CustomerShippingAddressDto[]**](../Model/CustomerShippingAddressDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersListGet()`

```php
apiV1CustomersListGet($id, $ids, $number, $email, $searchText, $mapLat, $mapLong, $userCode, $userPropertyForFiltering, $isoCode, $vatNumber, $taxNumber, $skip, $take, $createDateFrom, $updateDateFrom, $active, $additionalWhere): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of customers with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$number = 56; // int
$email = 'email_example'; // string
$searchText = 'searchText_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$userCode = 'userCode_example'; // string
$userPropertyForFiltering = 'userPropertyForFiltering_example'; // string
$isoCode = 'isoCode_example'; // string
$vatNumber = 'vatNumber_example'; // string
$taxNumber = 'taxNumber_example'; // string
$skip = 56; // int
$take = 56; // int
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$additionalWhere = 'additionalWhere_example'; // string

try {
    $result = $apiInstance->apiV1CustomersListGet($id, $ids, $number, $email, $searchText, $mapLat, $mapLong, $userCode, $userPropertyForFiltering, $isoCode, $vatNumber, $taxNumber, $skip, $take, $createDateFrom, $updateDateFrom, $active, $additionalWhere);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **int**|  | [optional] |
| **email** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **mapLat** | **float**|  | [optional] |
| **mapLong** | **float**|  | [optional] |
| **userCode** | **string**|  | [optional] |
| **userPropertyForFiltering** | **string**|  | [optional] |
| **isoCode** | **string**|  | [optional] |
| **vatNumber** | **string**|  | [optional] |
| **taxNumber** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\IdCodeDescription[]**](../Model/IdCodeDescription.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersPatch()`

```php
apiV1CustomersPatch($customerPatchCommand): string
```

Updating an customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerPatchCommand = new \OpenAPI\Client\Radix\Model\CustomerPatchCommand(); // \OpenAPI\Client\Radix\Model\CustomerPatchCommand | 

try {
    $result = $apiInstance->apiV1CustomersPatch($customerPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerPatchCommand** | [**\OpenAPI\Client\Radix\Model\CustomerPatchCommand**](../Model/CustomerPatchCommand.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomersPost()`

```php
apiV1CustomersPost($customerPostCommand): string
```

Creating an customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerPostCommand = new \OpenAPI\Client\Radix\Model\CustomerPostCommand(); // \OpenAPI\Client\Radix\Model\CustomerPostCommand | 

try {
    $result = $apiInstance->apiV1CustomersPost($customerPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->apiV1CustomersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerPostCommand** | [**\OpenAPI\Client\Radix\Model\CustomerPostCommand**](../Model/CustomerPostCommand.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
