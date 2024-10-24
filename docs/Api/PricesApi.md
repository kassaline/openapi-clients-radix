# OpenAPI\Client\Radix\PricesApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1PricesArticleIdArticleIdGet()**](PricesApi.md#apiV1PricesArticleIdArticleIdGet) | **GET** /api/v1/prices/articleId/{articleId} | Returns a list of article prices |
| [**apiV1PricesCountGet()**](PricesApi.md#apiV1PricesCountGet) | **GET** /api/v1/prices/count | Returns the count of prices |
| [**apiV1PricesCustomerIdCustomerIdGet()**](PricesApi.md#apiV1PricesCustomerIdCustomerIdGet) | **GET** /api/v1/prices/customerId/{customerId} | Returns a list of customer prices |
| [**apiV1PricesDelete()**](PricesApi.md#apiV1PricesDelete) | **DELETE** /api/v1/prices | Delete an price |
| [**apiV1PricesGet()**](PricesApi.md#apiV1PricesGet) | **GET** /api/v1/prices | Returns a list of prices |
| [**apiV1PricesIdIdGet()**](PricesApi.md#apiV1PricesIdIdGet) | **GET** /api/v1/prices/id/{id} | Returns the price with this ID |
| [**apiV1PricesListGet()**](PricesApi.md#apiV1PricesListGet) | **GET** /api/v1/prices/list | Returns a list of prices with minimal data |
| [**apiV1PricesPatch()**](PricesApi.md#apiV1PricesPatch) | **PATCH** /api/v1/prices | Updating an price |
| [**apiV1PricesPost()**](PricesApi.md#apiV1PricesPost) | **POST** /api/v1/prices | Creating an price |
| [**apiV1PricesSupplierIdSupplierIdGet()**](PricesApi.md#apiV1PricesSupplierIdSupplierIdGet) | **GET** /api/v1/prices/supplierId/{supplierId} | Returns a list of supplier prices |


## `apiV1PricesArticleIdArticleIdGet()`

```php
apiV1PricesArticleIdArticleIdGet($articleId): \OpenAPI\Client\Radix\Model\PriceDto[]
```

Returns a list of article prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleId = 'articleId_example'; // string | 

try {
    $result = $apiInstance->apiV1PricesArticleIdArticleIdGet($articleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesArticleIdArticleIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleId** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\PriceDto[]**](../Model/PriceDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PricesCountGet()`

```php
apiV1PricesCountGet($id, $artId, $customerId, $supplierId, $promotionId, $shippingAddressId, $quantity): int
```

Returns the count of prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$artId = 'artId_example'; // string
$customerId = 'customerId_example'; // string
$supplierId = 'supplierId_example'; // string
$promotionId = 'promotionId_example'; // string
$shippingAddressId = 'shippingAddressId_example'; // string
$quantity = 3.4; // float

try {
    $result = $apiInstance->apiV1PricesCountGet($id, $artId, $customerId, $supplierId, $promotionId, $shippingAddressId, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **artId** | **string**|  | [optional] |
| **customerId** | **string**|  | [optional] |
| **supplierId** | **string**|  | [optional] |
| **promotionId** | **string**|  | [optional] |
| **shippingAddressId** | **string**|  | [optional] |
| **quantity** | **float**|  | [optional] |

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

## `apiV1PricesCustomerIdCustomerIdGet()`

```php
apiV1PricesCustomerIdCustomerIdGet($customerId): \OpenAPI\Client\Radix\Model\PriceDto[]
```

Returns a list of customer prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | 

try {
    $result = $apiInstance->apiV1PricesCustomerIdCustomerIdGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesCustomerIdCustomerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\PriceDto[]**](../Model/PriceDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PricesDelete()`

```php
apiV1PricesDelete($priceDeleteCommand): bool
```

Delete an price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$priceDeleteCommand = new \OpenAPI\Client\Radix\Model\PriceDeleteCommand(); // \OpenAPI\Client\Radix\Model\PriceDeleteCommand | 

try {
    $result = $apiInstance->apiV1PricesDelete($priceDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **priceDeleteCommand** | [**\OpenAPI\Client\Radix\Model\PriceDeleteCommand**](../Model/PriceDeleteCommand.md)|  | [optional] |

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

## `apiV1PricesGet()`

```php
apiV1PricesGet($id, $artId, $customerId, $supplierId, $promotionId, $shippingAddressId, $quantity): \OpenAPI\Client\Radix\Model\PriceDto[]
```

Returns a list of prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$artId = 'artId_example'; // string
$customerId = 'customerId_example'; // string
$supplierId = 'supplierId_example'; // string
$promotionId = 'promotionId_example'; // string
$shippingAddressId = 'shippingAddressId_example'; // string
$quantity = 3.4; // float

try {
    $result = $apiInstance->apiV1PricesGet($id, $artId, $customerId, $supplierId, $promotionId, $shippingAddressId, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **artId** | **string**|  | [optional] |
| **customerId** | **string**|  | [optional] |
| **supplierId** | **string**|  | [optional] |
| **promotionId** | **string**|  | [optional] |
| **shippingAddressId** | **string**|  | [optional] |
| **quantity** | **float**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\PriceDto[]**](../Model/PriceDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PricesIdIdGet()`

```php
apiV1PricesIdIdGet($id): \OpenAPI\Client\Radix\Model\PriceDto
```

Returns the price with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1PricesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\PriceDto**](../Model/PriceDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PricesListGet()`

```php
apiV1PricesListGet($id, $artId, $customerId, $supplierId, $promotionId, $shippingAddressId, $quantity): \OpenAPI\Client\Radix\Model\IdCodeDecimal[]
```

Returns a list of prices with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$artId = 'artId_example'; // string
$customerId = 'customerId_example'; // string
$supplierId = 'supplierId_example'; // string
$promotionId = 'promotionId_example'; // string
$shippingAddressId = 'shippingAddressId_example'; // string
$quantity = 3.4; // float

try {
    $result = $apiInstance->apiV1PricesListGet($id, $artId, $customerId, $supplierId, $promotionId, $shippingAddressId, $quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **artId** | **string**|  | [optional] |
| **customerId** | **string**|  | [optional] |
| **supplierId** | **string**|  | [optional] |
| **promotionId** | **string**|  | [optional] |
| **shippingAddressId** | **string**|  | [optional] |
| **quantity** | **float**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\IdCodeDecimal[]**](../Model/IdCodeDecimal.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PricesPatch()`

```php
apiV1PricesPatch($pricePatchCommand): string
```

Updating an price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pricePatchCommand = new \OpenAPI\Client\Radix\Model\PricePatchCommand(); // \OpenAPI\Client\Radix\Model\PricePatchCommand | 

try {
    $result = $apiInstance->apiV1PricesPatch($pricePatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pricePatchCommand** | [**\OpenAPI\Client\Radix\Model\PricePatchCommand**](../Model/PricePatchCommand.md)|  | [optional] |

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

## `apiV1PricesPost()`

```php
apiV1PricesPost($pricePostCommand): string
```

Creating an price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pricePostCommand = new \OpenAPI\Client\Radix\Model\PricePostCommand(); // \OpenAPI\Client\Radix\Model\PricePostCommand | 

try {
    $result = $apiInstance->apiV1PricesPost($pricePostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pricePostCommand** | [**\OpenAPI\Client\Radix\Model\PricePostCommand**](../Model/PricePostCommand.md)|  | [optional] |

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

## `apiV1PricesSupplierIdSupplierIdGet()`

```php
apiV1PricesSupplierIdSupplierIdGet($supplierId): \OpenAPI\Client\Radix\Model\PriceDto[]
```

Returns a list of supplier prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierId = 'supplierId_example'; // string | 

try {
    $result = $apiInstance->apiV1PricesSupplierIdSupplierIdGet($supplierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->apiV1PricesSupplierIdSupplierIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierId** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\PriceDto[]**](../Model/PriceDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
