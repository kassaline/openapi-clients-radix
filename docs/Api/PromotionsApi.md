# OpenAPI\Client\Radix\PromotionsApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1PromotionsCountGet()**](PromotionsApi.md#apiV1PromotionsCountGet) | **GET** /api/v1/promotions/count | Returns the count of promotions |
| [**apiV1PromotionsDelete()**](PromotionsApi.md#apiV1PromotionsDelete) | **DELETE** /api/v1/promotions | Delete an promotion |
| [**apiV1PromotionsGet()**](PromotionsApi.md#apiV1PromotionsGet) | **GET** /api/v1/promotions | Returns a list of promotions |
| [**apiV1PromotionsIdIdGet()**](PromotionsApi.md#apiV1PromotionsIdIdGet) | **GET** /api/v1/promotions/id/{id} | Returns a list of promotions with minimal data |
| [**apiV1PromotionsIdIdPricesGet()**](PromotionsApi.md#apiV1PromotionsIdIdPricesGet) | **GET** /api/v1/promotions/id/{id}/prices | Returns a list of prices with this promotion id |
| [**apiV1PromotionsListGet()**](PromotionsApi.md#apiV1PromotionsListGet) | **GET** /api/v1/promotions/list | Returns the promotion with this ID |
| [**apiV1PromotionsPatch()**](PromotionsApi.md#apiV1PromotionsPatch) | **PATCH** /api/v1/promotions | Updating an promotion |
| [**apiV1PromotionsPost()**](PromotionsApi.md#apiV1PromotionsPost) | **POST** /api/v1/promotions | Creating an promotion |


## `apiV1PromotionsCountGet()`

```php
apiV1PromotionsCountGet($searchText): int
```

Returns the count of promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchText = 'searchText_example'; // string

try {
    $result = $apiInstance->apiV1PromotionsCountGet($searchText);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **searchText** | **string**|  | [optional] |

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

## `apiV1PromotionsDelete()`

```php
apiV1PromotionsDelete($promotionDeleteCommand): bool
```

Delete an promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionDeleteCommand = new \OpenAPI\Client\Radix\Model\PromotionDeleteCommand(); // \OpenAPI\Client\Radix\Model\PromotionDeleteCommand | 

try {
    $result = $apiInstance->apiV1PromotionsDelete($promotionDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionDeleteCommand** | [**\OpenAPI\Client\Radix\Model\PromotionDeleteCommand**](../Model/PromotionDeleteCommand.md)|  | [optional] |

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

## `apiV1PromotionsGet()`

```php
apiV1PromotionsGet($id, $searchText, $skip, $take): \OpenAPI\Client\Radix\Model\PromotionDto[]
```

Returns a list of promotions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$searchText = 'searchText_example'; // string
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1PromotionsGet($id, $searchText, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\PromotionDto[]**](../Model/PromotionDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PromotionsIdIdGet()`

```php
apiV1PromotionsIdIdGet($id): \OpenAPI\Client\Radix\Model\PromotionDto
```

Returns a list of promotions with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1PromotionsIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\PromotionDto**](../Model/PromotionDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PromotionsIdIdPricesGet()`

```php
apiV1PromotionsIdIdPricesGet($id): \OpenAPI\Client\Radix\Model\PriceDto[]
```

Returns a list of prices with this promotion id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1PromotionsIdIdPricesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsIdIdPricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `apiV1PromotionsListGet()`

```php
apiV1PromotionsListGet($searchText, $skip, $take): \OpenAPI\Client\Radix\Model\PromotionListDto[]
```

Returns the promotion with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchText = 'searchText_example'; // string
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1PromotionsListGet($searchText, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **searchText** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\PromotionListDto[]**](../Model/PromotionListDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PromotionsPatch()`

```php
apiV1PromotionsPatch($promotionPatchCommand): string
```

Updating an promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionPatchCommand = new \OpenAPI\Client\Radix\Model\PromotionPatchCommand(); // \OpenAPI\Client\Radix\Model\PromotionPatchCommand | 

try {
    $result = $apiInstance->apiV1PromotionsPatch($promotionPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionPatchCommand** | [**\OpenAPI\Client\Radix\Model\PromotionPatchCommand**](../Model/PromotionPatchCommand.md)|  | [optional] |

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

## `apiV1PromotionsPost()`

```php
apiV1PromotionsPost($promotionPostCommand): string
```

Creating an promotion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionPostCommand = new \OpenAPI\Client\Radix\Model\PromotionPostCommand(); // \OpenAPI\Client\Radix\Model\PromotionPostCommand | 

try {
    $result = $apiInstance->apiV1PromotionsPost($promotionPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->apiV1PromotionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionPostCommand** | [**\OpenAPI\Client\Radix\Model\PromotionPostCommand**](../Model/PromotionPostCommand.md)|  | [optional] |

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
