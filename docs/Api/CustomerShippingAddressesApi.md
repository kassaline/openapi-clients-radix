# OpenAPI\Client\Radix\CustomerShippingAddressesApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1CustomerShippingAddressesCountGet()**](CustomerShippingAddressesApi.md#apiV1CustomerShippingAddressesCountGet) | **GET** /api/v1/customerShippingAddresses/count | Returns the count of customer-shippingaddresses |
| [**apiV1CustomerShippingAddressesDelete()**](CustomerShippingAddressesApi.md#apiV1CustomerShippingAddressesDelete) | **DELETE** /api/v1/customerShippingAddresses | Delete an customer-shippingaddress |
| [**apiV1CustomerShippingAddressesGet()**](CustomerShippingAddressesApi.md#apiV1CustomerShippingAddressesGet) | **GET** /api/v1/customerShippingAddresses | Returns a list of customer-shippingaddresses |
| [**apiV1CustomerShippingAddressesIdIdGet()**](CustomerShippingAddressesApi.md#apiV1CustomerShippingAddressesIdIdGet) | **GET** /api/v1/customerShippingAddresses/id/{id} | Returns the customer-shippingaddress with this ID |
| [**apiV1CustomerShippingAddressesListGet()**](CustomerShippingAddressesApi.md#apiV1CustomerShippingAddressesListGet) | **GET** /api/v1/customerShippingAddresses/list | Returns a list of customer-shippingaddresses with minimal data |
| [**apiV1CustomerShippingAddressesPatch()**](CustomerShippingAddressesApi.md#apiV1CustomerShippingAddressesPatch) | **PATCH** /api/v1/customerShippingAddresses | Updating an customer-shippingaddress |
| [**apiV1CustomerShippingAddressesPost()**](CustomerShippingAddressesApi.md#apiV1CustomerShippingAddressesPost) | **POST** /api/v1/customerShippingAddresses | Creating an customer-shippingaddress |


## `apiV1CustomerShippingAddressesCountGet()`

```php
apiV1CustomerShippingAddressesCountGet($customerId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take): int
```

Returns the count of customer-shippingaddresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomerShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1CustomerShippingAddressesCountGet($customerId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressesApi->apiV1CustomerShippingAddressesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **mapLat** | **float**|  | [optional] |
| **mapLong** | **float**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

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

## `apiV1CustomerShippingAddressesDelete()`

```php
apiV1CustomerShippingAddressesDelete($customerShippingAddressDeleteCommand): bool
```

Delete an customer-shippingaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomerShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerShippingAddressDeleteCommand = new \OpenAPI\Client\Radix\Model\CustomerShippingAddressDeleteCommand(); // \OpenAPI\Client\Radix\Model\CustomerShippingAddressDeleteCommand | 

try {
    $result = $apiInstance->apiV1CustomerShippingAddressesDelete($customerShippingAddressDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressesApi->apiV1CustomerShippingAddressesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerShippingAddressDeleteCommand** | [**\OpenAPI\Client\Radix\Model\CustomerShippingAddressDeleteCommand**](../Model/CustomerShippingAddressDeleteCommand.md)|  | [optional] |

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

## `apiV1CustomerShippingAddressesGet()`

```php
apiV1CustomerShippingAddressesGet($customerId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take): \OpenAPI\Client\Radix\Model\CustomerShippingAddressDto[]
```

Returns a list of customer-shippingaddresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomerShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1CustomerShippingAddressesGet($customerId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressesApi->apiV1CustomerShippingAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **mapLat** | **float**|  | [optional] |
| **mapLong** | **float**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

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

## `apiV1CustomerShippingAddressesIdIdGet()`

```php
apiV1CustomerShippingAddressesIdIdGet($id): \OpenAPI\Client\Radix\Model\CustomerShippingAddressDto
```

Returns the customer-shippingaddress with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomerShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1CustomerShippingAddressesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressesApi->apiV1CustomerShippingAddressesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\CustomerShippingAddressDto**](../Model/CustomerShippingAddressDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CustomerShippingAddressesListGet()`

```php
apiV1CustomerShippingAddressesListGet($customerId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of customer-shippingaddresses with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomerShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1CustomerShippingAddressesListGet($customerId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressesApi->apiV1CustomerShippingAddressesListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **mapLat** | **float**|  | [optional] |
| **mapLong** | **float**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

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

## `apiV1CustomerShippingAddressesPatch()`

```php
apiV1CustomerShippingAddressesPatch($customerShippingAddressPatchCommand): string
```

Updating an customer-shippingaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomerShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerShippingAddressPatchCommand = new \OpenAPI\Client\Radix\Model\CustomerShippingAddressPatchCommand(); // \OpenAPI\Client\Radix\Model\CustomerShippingAddressPatchCommand | 

try {
    $result = $apiInstance->apiV1CustomerShippingAddressesPatch($customerShippingAddressPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressesApi->apiV1CustomerShippingAddressesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerShippingAddressPatchCommand** | [**\OpenAPI\Client\Radix\Model\CustomerShippingAddressPatchCommand**](../Model/CustomerShippingAddressPatchCommand.md)|  | [optional] |

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

## `apiV1CustomerShippingAddressesPost()`

```php
apiV1CustomerShippingAddressesPost($customerShippingAddressPostCommand): string
```

Creating an customer-shippingaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CustomerShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerShippingAddressPostCommand = new \OpenAPI\Client\Radix\Model\CustomerShippingAddressPostCommand(); // \OpenAPI\Client\Radix\Model\CustomerShippingAddressPostCommand | 

try {
    $result = $apiInstance->apiV1CustomerShippingAddressesPost($customerShippingAddressPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressesApi->apiV1CustomerShippingAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerShippingAddressPostCommand** | [**\OpenAPI\Client\Radix\Model\CustomerShippingAddressPostCommand**](../Model/CustomerShippingAddressPostCommand.md)|  | [optional] |

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
