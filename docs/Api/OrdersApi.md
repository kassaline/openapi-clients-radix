# OpenAPI\Client\Radix\OrdersApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1OrdersCountGet()**](OrdersApi.md#apiV1OrdersCountGet) | **GET** /api/v1/orders/count | Returns the count of orders |
| [**apiV1OrdersDelete()**](OrdersApi.md#apiV1OrdersDelete) | **DELETE** /api/v1/orders | Delete an Order |
| [**apiV1OrdersGet()**](OrdersApi.md#apiV1OrdersGet) | **GET** /api/v1/orders | Returns a list of orders |
| [**apiV1OrdersIdIdGet()**](OrdersApi.md#apiV1OrdersIdIdGet) | **GET** /api/v1/orders/id/{id} | Returns the order with this ID |
| [**apiV1OrdersListGet()**](OrdersApi.md#apiV1OrdersListGet) | **GET** /api/v1/orders/list | Returns a list of orders with minimal data |
| [**apiV1OrdersMovementDelete()**](OrdersApi.md#apiV1OrdersMovementDelete) | **DELETE** /api/v1/orders/movement | Delete an Order |
| [**apiV1OrdersMovementPatch()**](OrdersApi.md#apiV1OrdersMovementPatch) | **PATCH** /api/v1/orders/movement | Updating an Order |
| [**apiV1OrdersMovementPost()**](OrdersApi.md#apiV1OrdersMovementPost) | **POST** /api/v1/orders/movement | Creating an Order |
| [**apiV1OrdersPatch()**](OrdersApi.md#apiV1OrdersPatch) | **PATCH** /api/v1/orders | Updating an Order |
| [**apiV1OrdersPost()**](OrdersApi.md#apiV1OrdersPost) | **POST** /api/v1/orders | Creating an Order |


## `apiV1OrdersCountGet()`

```php
apiV1OrdersCountGet($id, $dokId, $from, $until, $deliveryFrom, $deliveryUntil, $state): int
```

Returns the count of orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dokId = 'dokId_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$deliveryFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$deliveryUntil = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$state = new \OpenAPI\Client\Radix\Model\OrderStateForRequest(); // OrderStateForRequest

try {
    $result = $apiInstance->apiV1OrdersCountGet($id, $dokId, $from, $until, $deliveryFrom, $deliveryUntil, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **dokId** | **string**|  | [optional] |
| **from** | **\DateTime**|  | [optional] |
| **until** | **\DateTime**|  | [optional] |
| **deliveryFrom** | **\DateTime**|  | [optional] |
| **deliveryUntil** | **\DateTime**|  | [optional] |
| **state** | [**OrderStateForRequest**](../Model/.md)|  | [optional] |

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

## `apiV1OrdersDelete()`

```php
apiV1OrdersDelete($orderDeleteCommand): bool
```

Delete an Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderDeleteCommand = new \OpenAPI\Client\Radix\Model\OrderDeleteCommand(); // \OpenAPI\Client\Radix\Model\OrderDeleteCommand | 

try {
    $result = $apiInstance->apiV1OrdersDelete($orderDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderDeleteCommand** | [**\OpenAPI\Client\Radix\Model\OrderDeleteCommand**](../Model/OrderDeleteCommand.md)|  | [optional] |

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

## `apiV1OrdersGet()`

```php
apiV1OrdersGet($id, $dokId, $from, $until, $deliveryFrom, $deliveryUntil, $state): \OpenAPI\Client\Radix\Model\OrderDto[]
```

Returns a list of orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dokId = 'dokId_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$deliveryFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$deliveryUntil = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$state = new \OpenAPI\Client\Radix\Model\OrderStateForRequest(); // OrderStateForRequest

try {
    $result = $apiInstance->apiV1OrdersGet($id, $dokId, $from, $until, $deliveryFrom, $deliveryUntil, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **dokId** | **string**|  | [optional] |
| **from** | **\DateTime**|  | [optional] |
| **until** | **\DateTime**|  | [optional] |
| **deliveryFrom** | **\DateTime**|  | [optional] |
| **deliveryUntil** | **\DateTime**|  | [optional] |
| **state** | [**OrderStateForRequest**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\OrderDto[]**](../Model/OrderDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OrdersIdIdGet()`

```php
apiV1OrdersIdIdGet($id): \OpenAPI\Client\Radix\Model\OrderDto
```

Returns the order with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1OrdersIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\OrderDto**](../Model/OrderDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OrdersListGet()`

```php
apiV1OrdersListGet($id, $dokId, $from, $until, $deliveryFrom, $deliveryUntil, $state): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of orders with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dokId = 'dokId_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$deliveryFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$deliveryUntil = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$state = new \OpenAPI\Client\Radix\Model\OrderStateForRequest(); // OrderStateForRequest

try {
    $result = $apiInstance->apiV1OrdersListGet($id, $dokId, $from, $until, $deliveryFrom, $deliveryUntil, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **dokId** | **string**|  | [optional] |
| **from** | **\DateTime**|  | [optional] |
| **until** | **\DateTime**|  | [optional] |
| **deliveryFrom** | **\DateTime**|  | [optional] |
| **deliveryUntil** | **\DateTime**|  | [optional] |
| **state** | [**OrderStateForRequest**](../Model/.md)|  | [optional] |

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

## `apiV1OrdersMovementDelete()`

```php
apiV1OrdersMovementDelete($orderMovementDeleteCommand): bool
```

Delete an Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderMovementDeleteCommand = new \OpenAPI\Client\Radix\Model\OrderMovementDeleteCommand(); // \OpenAPI\Client\Radix\Model\OrderMovementDeleteCommand | 

try {
    $result = $apiInstance->apiV1OrdersMovementDelete($orderMovementDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersMovementDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderMovementDeleteCommand** | [**\OpenAPI\Client\Radix\Model\OrderMovementDeleteCommand**](../Model/OrderMovementDeleteCommand.md)|  | [optional] |

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

## `apiV1OrdersMovementPatch()`

```php
apiV1OrdersMovementPatch($orderMovementPatchCommand): \OpenAPI\Client\Radix\Model\OrderMovementResponse
```

Updating an Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderMovementPatchCommand = new \OpenAPI\Client\Radix\Model\OrderMovementPatchCommand(); // \OpenAPI\Client\Radix\Model\OrderMovementPatchCommand | 

try {
    $result = $apiInstance->apiV1OrdersMovementPatch($orderMovementPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersMovementPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderMovementPatchCommand** | [**\OpenAPI\Client\Radix\Model\OrderMovementPatchCommand**](../Model/OrderMovementPatchCommand.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\OrderMovementResponse**](../Model/OrderMovementResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OrdersMovementPost()`

```php
apiV1OrdersMovementPost($orderMovementPostCommand): \OpenAPI\Client\Radix\Model\OrderMovementResponse
```

Creating an Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderMovementPostCommand = new \OpenAPI\Client\Radix\Model\OrderMovementPostCommand(); // \OpenAPI\Client\Radix\Model\OrderMovementPostCommand | 

try {
    $result = $apiInstance->apiV1OrdersMovementPost($orderMovementPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersMovementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderMovementPostCommand** | [**\OpenAPI\Client\Radix\Model\OrderMovementPostCommand**](../Model/OrderMovementPostCommand.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\OrderMovementResponse**](../Model/OrderMovementResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OrdersPatch()`

```php
apiV1OrdersPatch($orderPatchCommand): \OpenAPI\Client\Radix\Model\OrderResponse
```

Updating an Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderPatchCommand = new \OpenAPI\Client\Radix\Model\OrderPatchCommand(); // \OpenAPI\Client\Radix\Model\OrderPatchCommand | 

try {
    $result = $apiInstance->apiV1OrdersPatch($orderPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderPatchCommand** | [**\OpenAPI\Client\Radix\Model\OrderPatchCommand**](../Model/OrderPatchCommand.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OrdersPost()`

```php
apiV1OrdersPost($orderPostCommand): \OpenAPI\Client\Radix\Model\OrderResponse
```

Creating an Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderPostCommand = new \OpenAPI\Client\Radix\Model\OrderPostCommand(); // \OpenAPI\Client\Radix\Model\OrderPostCommand | 

try {
    $result = $apiInstance->apiV1OrdersPost($orderPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderPostCommand** | [**\OpenAPI\Client\Radix\Model\OrderPostCommand**](../Model/OrderPostCommand.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
