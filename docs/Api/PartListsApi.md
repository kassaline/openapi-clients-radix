# OpenAPI\Client\Radix\PartListsApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1PartListsCountGet()**](PartListsApi.md#apiV1PartListsCountGet) | **GET** /api/v1/partLists/count | Returns the count of partlists |
| [**apiV1PartListsDetailDelete()**](PartListsApi.md#apiV1PartListsDetailDelete) | **DELETE** /api/v1/partLists/detail | Delete an partlist-detail |
| [**apiV1PartListsDetailPatch()**](PartListsApi.md#apiV1PartListsDetailPatch) | **PATCH** /api/v1/partLists/detail | Updating an partlist-detail |
| [**apiV1PartListsDetailPost()**](PartListsApi.md#apiV1PartListsDetailPost) | **POST** /api/v1/partLists/detail | Creating an partlist-detail |
| [**apiV1PartListsGet()**](PartListsApi.md#apiV1PartListsGet) | **GET** /api/v1/partLists | Returns a list of partlists |
| [**apiV1PartListsIdIdGet()**](PartListsApi.md#apiV1PartListsIdIdGet) | **GET** /api/v1/partLists/id/{id} | Returns the partlist with this ID |
| [**apiV1PartListsListGet()**](PartListsApi.md#apiV1PartListsListGet) | **GET** /api/v1/partLists/list | Returns a list of partlists with minimal data |
| [**apiV1PartListsPost()**](PartListsApi.md#apiV1PartListsPost) | **POST** /api/v1/partLists | Creating an partlist |


## `apiV1PartListsCountGet()`

```php
apiV1PartListsCountGet($searchText): int
```

Returns the count of partlists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchText = 'searchText_example'; // string

try {
    $result = $apiInstance->apiV1PartListsCountGet($searchText);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsCountGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV1PartListsDetailDelete()`

```php
apiV1PartListsDetailDelete($partListDetailDeleteCommand): bool
```

Delete an partlist-detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partListDetailDeleteCommand = new \OpenAPI\Client\Radix\Model\PartListDetailDeleteCommand(); // \OpenAPI\Client\Radix\Model\PartListDetailDeleteCommand | 

try {
    $result = $apiInstance->apiV1PartListsDetailDelete($partListDetailDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsDetailDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partListDetailDeleteCommand** | [**\OpenAPI\Client\Radix\Model\PartListDetailDeleteCommand**](../Model/PartListDetailDeleteCommand.md)|  | [optional] |

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

## `apiV1PartListsDetailPatch()`

```php
apiV1PartListsDetailPatch($partListDetailPatchCommand): string
```

Updating an partlist-detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partListDetailPatchCommand = new \OpenAPI\Client\Radix\Model\PartListDetailPatchCommand(); // \OpenAPI\Client\Radix\Model\PartListDetailPatchCommand | 

try {
    $result = $apiInstance->apiV1PartListsDetailPatch($partListDetailPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsDetailPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partListDetailPatchCommand** | [**\OpenAPI\Client\Radix\Model\PartListDetailPatchCommand**](../Model/PartListDetailPatchCommand.md)|  | [optional] |

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

## `apiV1PartListsDetailPost()`

```php
apiV1PartListsDetailPost($partListDetailPostCommand): string
```

Creating an partlist-detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partListDetailPostCommand = new \OpenAPI\Client\Radix\Model\PartListDetailPostCommand(); // \OpenAPI\Client\Radix\Model\PartListDetailPostCommand | 

try {
    $result = $apiInstance->apiV1PartListsDetailPost($partListDetailPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partListDetailPostCommand** | [**\OpenAPI\Client\Radix\Model\PartListDetailPostCommand**](../Model/PartListDetailPostCommand.md)|  | [optional] |

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

## `apiV1PartListsGet()`

```php
apiV1PartListsGet($id, $articleCode, $variant, $searchText, $skip, $take): \OpenAPI\Client\Radix\Model\PartListDto[]
```

Returns a list of partlists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$articleCode = 'articleCode_example'; // string
$variant = 56; // int
$searchText = 'searchText_example'; // string
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1PartListsGet($id, $articleCode, $variant, $searchText, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **articleCode** | **string**|  | [optional] |
| **variant** | **int**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\PartListDto[]**](../Model/PartListDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PartListsIdIdGet()`

```php
apiV1PartListsIdIdGet($id): \OpenAPI\Client\Radix\Model\PartListDto
```

Returns the partlist with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1PartListsIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\PartListDto**](../Model/PartListDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PartListsListGet()`

```php
apiV1PartListsListGet($searchText, $skip, $take): \OpenAPI\Client\Radix\Model\PartListListDto[]
```

Returns a list of partlists with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchText = 'searchText_example'; // string
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1PartListsListGet($searchText, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **searchText** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\PartListListDto[]**](../Model/PartListListDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PartListsPost()`

```php
apiV1PartListsPost($partListPostCommand): string
```

Creating an partlist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\PartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partListPostCommand = new \OpenAPI\Client\Radix\Model\PartListPostCommand(); // \OpenAPI\Client\Radix\Model\PartListPostCommand | 

try {
    $result = $apiInstance->apiV1PartListsPost($partListPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartListsApi->apiV1PartListsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partListPostCommand** | [**\OpenAPI\Client\Radix\Model\PartListPostCommand**](../Model/PartListPostCommand.md)|  | [optional] |

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
