# OpenAPI\Client\Radix\DeliveryNotesApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1DeliveryNotesCountGet()**](DeliveryNotesApi.md#apiV1DeliveryNotesCountGet) | **GET** /api/v1/deliveryNotes/count | Returns the count of DeliveryNotes |
| [**apiV1DeliveryNotesGet()**](DeliveryNotesApi.md#apiV1DeliveryNotesGet) | **GET** /api/v1/deliveryNotes | Returns a list of DeliveryNotes |
| [**apiV1DeliveryNotesIdIdGet()**](DeliveryNotesApi.md#apiV1DeliveryNotesIdIdGet) | **GET** /api/v1/deliveryNotes/id/{id} | Returns the deliveryNote with this ID |
| [**apiV1DeliveryNotesListGet()**](DeliveryNotesApi.md#apiV1DeliveryNotesListGet) | **GET** /api/v1/deliveryNotes/list | Returns a list of DeliveryNotes with minimal data |


## `apiV1DeliveryNotesCountGet()`

```php
apiV1DeliveryNotesCountGet($id, $dokId, $from, $until): int
```

Returns the count of DeliveryNotes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dokId = 'dokId_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV1DeliveryNotesCountGet($id, $dokId, $from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->apiV1DeliveryNotesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **dokId** | **string**|  | [optional] |
| **from** | **\DateTime**|  | [optional] |
| **until** | **\DateTime**|  | [optional] |

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

## `apiV1DeliveryNotesGet()`

```php
apiV1DeliveryNotesGet($id, $dokId, $from, $until): \OpenAPI\Client\Radix\Model\DeliveryNoteDto[]
```

Returns a list of DeliveryNotes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dokId = 'dokId_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV1DeliveryNotesGet($id, $dokId, $from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->apiV1DeliveryNotesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **dokId** | **string**|  | [optional] |
| **from** | **\DateTime**|  | [optional] |
| **until** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\DeliveryNoteDto[]**](../Model/DeliveryNoteDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryNotesIdIdGet()`

```php
apiV1DeliveryNotesIdIdGet($id): \OpenAPI\Client\Radix\Model\DeliveryNoteDto
```

Returns the deliveryNote with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1DeliveryNotesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->apiV1DeliveryNotesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\DeliveryNoteDto**](../Model/DeliveryNoteDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DeliveryNotesListGet()`

```php
apiV1DeliveryNotesListGet($id, $dokId, $from, $until): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of DeliveryNotes with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\DeliveryNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dokId = 'dokId_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV1DeliveryNotesListGet($id, $dokId, $from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryNotesApi->apiV1DeliveryNotesListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **dokId** | **string**|  | [optional] |
| **from** | **\DateTime**|  | [optional] |
| **until** | **\DateTime**|  | [optional] |

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
