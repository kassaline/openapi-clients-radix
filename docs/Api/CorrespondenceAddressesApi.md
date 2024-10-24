# OpenAPI\Client\Radix\CorrespondenceAddressesApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1CorrespondenceAddressesCountGet()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesCountGet) | **GET** /api/v1/correspondenceAddresses/count | Returns the count of correspondenceaddresses |
| [**apiV1CorrespondenceAddressesDelete()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesDelete) | **DELETE** /api/v1/correspondenceAddresses | Delete an correspondenceaddress |
| [**apiV1CorrespondenceAddressesGet()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesGet) | **GET** /api/v1/correspondenceAddresses | Returns a list of correspondenceaddresses |
| [**apiV1CorrespondenceAddressesIdIdContactsGet()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesIdIdContactsGet) | **GET** /api/v1/correspondenceAddresses/id/{id}/contacts | Returns a list of contacts with this correspondenceaddress id |
| [**apiV1CorrespondenceAddressesIdIdGet()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesIdIdGet) | **GET** /api/v1/correspondenceAddresses/id/{id} | Returns the correspondenceaddress with this ID |
| [**apiV1CorrespondenceAddressesListGet()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesListGet) | **GET** /api/v1/correspondenceAddresses/list | Returns a list of correspondenceaddresses with minimal data |
| [**apiV1CorrespondenceAddressesPatch()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesPatch) | **PATCH** /api/v1/correspondenceAddresses | Updating an correspondenceaddress |
| [**apiV1CorrespondenceAddressesPost()**](CorrespondenceAddressesApi.md#apiV1CorrespondenceAddressesPost) | **POST** /api/v1/correspondenceAddresses | Creating an correspondenceaddress |


## `apiV1CorrespondenceAddressesCountGet()`

```php
apiV1CorrespondenceAddressesCountGet($id, $ids, $searchText, $email, $createDateFrom, $updateDateFrom): int
```

Returns the count of correspondenceaddresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesCountGet($id, $ids, $searchText, $email, $createDateFrom, $updateDateFrom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |

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

## `apiV1CorrespondenceAddressesDelete()`

```php
apiV1CorrespondenceAddressesDelete($correspondenceAddressDeleteCommand): bool
```

Delete an correspondenceaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$correspondenceAddressDeleteCommand = new \OpenAPI\Client\Radix\Model\CorrespondenceAddressDeleteCommand(); // \OpenAPI\Client\Radix\Model\CorrespondenceAddressDeleteCommand | 

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesDelete($correspondenceAddressDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **correspondenceAddressDeleteCommand** | [**\OpenAPI\Client\Radix\Model\CorrespondenceAddressDeleteCommand**](../Model/CorrespondenceAddressDeleteCommand.md)|  | [optional] |

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

## `apiV1CorrespondenceAddressesGet()`

```php
apiV1CorrespondenceAddressesGet($id, $ids, $searchText, $email, $createDateFrom, $updateDateFrom): \OpenAPI\Client\Radix\Model\CorrespondenceAddressDto[]
```

Returns a list of correspondenceaddresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesGet($id, $ids, $searchText, $email, $createDateFrom, $updateDateFrom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\CorrespondenceAddressDto[]**](../Model/CorrespondenceAddressDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CorrespondenceAddressesIdIdContactsGet()`

```php
apiV1CorrespondenceAddressesIdIdContactsGet($id): \OpenAPI\Client\Radix\Model\ContactDto[]
```

Returns a list of contacts with this correspondenceaddress id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesIdIdContactsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesIdIdContactsGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV1CorrespondenceAddressesIdIdGet()`

```php
apiV1CorrespondenceAddressesIdIdGet($id): \OpenAPI\Client\Radix\Model\CorrespondenceAddressDto
```

Returns the correspondenceaddress with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\CorrespondenceAddressDto**](../Model/CorrespondenceAddressDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CorrespondenceAddressesListGet()`

```php
apiV1CorrespondenceAddressesListGet($id, $ids, $searchText, $email, $createDateFrom, $updateDateFrom): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of correspondenceaddresses with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesListGet($id, $ids, $searchText, $email, $createDateFrom, $updateDateFrom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |

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

## `apiV1CorrespondenceAddressesPatch()`

```php
apiV1CorrespondenceAddressesPatch($correspondenceAddressPatchCommand): string
```

Updating an correspondenceaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$correspondenceAddressPatchCommand = new \OpenAPI\Client\Radix\Model\CorrespondenceAddressPatchCommand(); // \OpenAPI\Client\Radix\Model\CorrespondenceAddressPatchCommand | 

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesPatch($correspondenceAddressPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **correspondenceAddressPatchCommand** | [**\OpenAPI\Client\Radix\Model\CorrespondenceAddressPatchCommand**](../Model/CorrespondenceAddressPatchCommand.md)|  | [optional] |

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

## `apiV1CorrespondenceAddressesPost()`

```php
apiV1CorrespondenceAddressesPost($correspondenceAddressPostCommand): string
```

Creating an correspondenceaddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CorrespondenceAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$correspondenceAddressPostCommand = new \OpenAPI\Client\Radix\Model\CorrespondenceAddressPostCommand(); // \OpenAPI\Client\Radix\Model\CorrespondenceAddressPostCommand | 

try {
    $result = $apiInstance->apiV1CorrespondenceAddressesPost($correspondenceAddressPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrespondenceAddressesApi->apiV1CorrespondenceAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **correspondenceAddressPostCommand** | [**\OpenAPI\Client\Radix\Model\CorrespondenceAddressPostCommand**](../Model/CorrespondenceAddressPostCommand.md)|  | [optional] |

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
