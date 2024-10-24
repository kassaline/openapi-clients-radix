# OpenAPI\Client\Radix\SupplierShippingAddressesApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1SupplierShippingAddressesCountGet()**](SupplierShippingAddressesApi.md#apiV1SupplierShippingAddressesCountGet) | **GET** /api/v1/supplierShippingAddresses/count | Returns the count of supplier-shippingaddresses |
| [**apiV1SupplierShippingAddressesDelete()**](SupplierShippingAddressesApi.md#apiV1SupplierShippingAddressesDelete) | **DELETE** /api/v1/supplierShippingAddresses | Delete an supplier-shippingaddress |
| [**apiV1SupplierShippingAddressesGet()**](SupplierShippingAddressesApi.md#apiV1SupplierShippingAddressesGet) | **GET** /api/v1/supplierShippingAddresses | Returns a list of supplier-shippingaddresses |
| [**apiV1SupplierShippingAddressesIdIdGet()**](SupplierShippingAddressesApi.md#apiV1SupplierShippingAddressesIdIdGet) | **GET** /api/v1/supplierShippingAddresses/id/{id} | Returns the supplier-shippingaddress with this ID |
| [**apiV1SupplierShippingAddressesListGet()**](SupplierShippingAddressesApi.md#apiV1SupplierShippingAddressesListGet) | **GET** /api/v1/supplierShippingAddresses/list | Returns a list of supplier-shippingaddresses with minimal data |
| [**apiV1SupplierShippingAddressesPatch()**](SupplierShippingAddressesApi.md#apiV1SupplierShippingAddressesPatch) | **PATCH** /api/v1/supplierShippingAddresses | Updating an supplier-shippingaddress |
| [**apiV1SupplierShippingAddressesPost()**](SupplierShippingAddressesApi.md#apiV1SupplierShippingAddressesPost) | **POST** /api/v1/supplierShippingAddresses | Creating an supplier-shippingaddress |


## `apiV1SupplierShippingAddressesCountGet()`

```php
apiV1SupplierShippingAddressesCountGet($supplierId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take): int
```

Returns the count of supplier-shippingaddresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SupplierShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierId = 'supplierId_example'; // string
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1SupplierShippingAddressesCountGet($supplierId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierShippingAddressesApi->apiV1SupplierShippingAddressesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierId** | **string**|  | [optional] |
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

## `apiV1SupplierShippingAddressesDelete()`

```php
apiV1SupplierShippingAddressesDelete($supplierShippingAddressDeleteCommand): bool
```

Delete an supplier-shippingaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SupplierShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierShippingAddressDeleteCommand = new \OpenAPI\Client\Radix\Model\SupplierShippingAddressDeleteCommand(); // \OpenAPI\Client\Radix\Model\SupplierShippingAddressDeleteCommand | 

try {
    $result = $apiInstance->apiV1SupplierShippingAddressesDelete($supplierShippingAddressDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierShippingAddressesApi->apiV1SupplierShippingAddressesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierShippingAddressDeleteCommand** | [**\OpenAPI\Client\Radix\Model\SupplierShippingAddressDeleteCommand**](../Model/SupplierShippingAddressDeleteCommand.md)|  | [optional] |

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

## `apiV1SupplierShippingAddressesGet()`

```php
apiV1SupplierShippingAddressesGet($supplierId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take): \OpenAPI\Client\Radix\Model\SupplierShippingAddressDto[]
```

Returns a list of supplier-shippingaddresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SupplierShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierId = 'supplierId_example'; // string
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1SupplierShippingAddressesGet($supplierId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierShippingAddressesApi->apiV1SupplierShippingAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierId** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **mapLat** | **float**|  | [optional] |
| **mapLong** | **float**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\SupplierShippingAddressDto[]**](../Model/SupplierShippingAddressDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierShippingAddressesIdIdGet()`

```php
apiV1SupplierShippingAddressesIdIdGet($id): \OpenAPI\Client\Radix\Model\SupplierShippingAddressDto
```

Returns the supplier-shippingaddress with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SupplierShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1SupplierShippingAddressesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierShippingAddressesApi->apiV1SupplierShippingAddressesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\SupplierShippingAddressDto**](../Model/SupplierShippingAddressDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierShippingAddressesListGet()`

```php
apiV1SupplierShippingAddressesListGet($supplierId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of supplier-shippingaddresses with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SupplierShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierId = 'supplierId_example'; // string
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$mapLat = 3.4; // float
$mapLong = 3.4; // float
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1SupplierShippingAddressesListGet($supplierId, $id, $ids, $searchText, $email, $mapLat, $mapLong, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierShippingAddressesApi->apiV1SupplierShippingAddressesListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierId** | **string**|  | [optional] |
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

## `apiV1SupplierShippingAddressesPatch()`

```php
apiV1SupplierShippingAddressesPatch($supplierShippingAddressPatchCommand): string
```

Updating an supplier-shippingaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SupplierShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierShippingAddressPatchCommand = new \OpenAPI\Client\Radix\Model\SupplierShippingAddressPatchCommand(); // \OpenAPI\Client\Radix\Model\SupplierShippingAddressPatchCommand | 

try {
    $result = $apiInstance->apiV1SupplierShippingAddressesPatch($supplierShippingAddressPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierShippingAddressesApi->apiV1SupplierShippingAddressesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierShippingAddressPatchCommand** | [**\OpenAPI\Client\Radix\Model\SupplierShippingAddressPatchCommand**](../Model/SupplierShippingAddressPatchCommand.md)|  | [optional] |

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

## `apiV1SupplierShippingAddressesPost()`

```php
apiV1SupplierShippingAddressesPost($supplierShippingAddressPostCommand): string
```

Creating an supplier-shippingaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SupplierShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierShippingAddressPostCommand = new \OpenAPI\Client\Radix\Model\SupplierShippingAddressPostCommand(); // \OpenAPI\Client\Radix\Model\SupplierShippingAddressPostCommand | 

try {
    $result = $apiInstance->apiV1SupplierShippingAddressesPost($supplierShippingAddressPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierShippingAddressesApi->apiV1SupplierShippingAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierShippingAddressPostCommand** | [**\OpenAPI\Client\Radix\Model\SupplierShippingAddressPostCommand**](../Model/SupplierShippingAddressPostCommand.md)|  | [optional] |

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
