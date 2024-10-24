# OpenAPI\Client\Radix\ContactsApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1ContactsCountGet()**](ContactsApi.md#apiV1ContactsCountGet) | **GET** /api/v1/contacts/count | Returns the count of contacts |
| [**apiV1ContactsDelete()**](ContactsApi.md#apiV1ContactsDelete) | **DELETE** /api/v1/contacts | Delete an contact |
| [**apiV1ContactsGet()**](ContactsApi.md#apiV1ContactsGet) | **GET** /api/v1/contacts | Returns a list of contacts |
| [**apiV1ContactsIdIdGet()**](ContactsApi.md#apiV1ContactsIdIdGet) | **GET** /api/v1/contacts/id/{id} | Returns the contact with this ID |
| [**apiV1ContactsListGet()**](ContactsApi.md#apiV1ContactsListGet) | **GET** /api/v1/contacts/list | Returns a list of contacts with minimal data |
| [**apiV1ContactsPatch()**](ContactsApi.md#apiV1ContactsPatch) | **PATCH** /api/v1/contacts | Updating an contact |
| [**apiV1ContactsPost()**](ContactsApi.md#apiV1ContactsPost) | **POST** /api/v1/contacts | Creating an contact |


## `apiV1ContactsCountGet()`

```php
apiV1ContactsCountGet($id, $ids, $customerId, $correspondenceAddressId, $supplierId, $addressId, $searchText, $email, $createDateFrom, $updateDateFrom, $active, $skip, $take): int
```

Returns the count of contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$customerId = 'customerId_example'; // string
$correspondenceAddressId = 'correspondenceAddressId_example'; // string
$supplierId = 'supplierId_example'; // string
$addressId = 'addressId_example'; // string
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1ContactsCountGet($id, $ids, $customerId, $correspondenceAddressId, $supplierId, $addressId, $searchText, $email, $createDateFrom, $updateDateFrom, $active, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->apiV1ContactsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **customerId** | **string**|  | [optional] |
| **correspondenceAddressId** | **string**|  | [optional] |
| **supplierId** | **string**|  | [optional] |
| **addressId** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
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

## `apiV1ContactsDelete()`

```php
apiV1ContactsDelete($contactDeleteCommand): bool
```

Delete an contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactDeleteCommand = new \OpenAPI\Client\Radix\Model\ContactDeleteCommand(); // \OpenAPI\Client\Radix\Model\ContactDeleteCommand | 

try {
    $result = $apiInstance->apiV1ContactsDelete($contactDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->apiV1ContactsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactDeleteCommand** | [**\OpenAPI\Client\Radix\Model\ContactDeleteCommand**](../Model/ContactDeleteCommand.md)|  | [optional] |

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

## `apiV1ContactsGet()`

```php
apiV1ContactsGet($id, $ids, $customerId, $correspondenceAddressId, $supplierId, $addressId, $searchText, $email, $createDateFrom, $updateDateFrom, $active, $skip, $take): \OpenAPI\Client\Radix\Model\ContactDto[]
```

Returns a list of contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$customerId = 'customerId_example'; // string
$correspondenceAddressId = 'correspondenceAddressId_example'; // string
$supplierId = 'supplierId_example'; // string
$addressId = 'addressId_example'; // string
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1ContactsGet($id, $ids, $customerId, $correspondenceAddressId, $supplierId, $addressId, $searchText, $email, $createDateFrom, $updateDateFrom, $active, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->apiV1ContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **customerId** | **string**|  | [optional] |
| **correspondenceAddressId** | **string**|  | [optional] |
| **supplierId** | **string**|  | [optional] |
| **addressId** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

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

## `apiV1ContactsIdIdGet()`

```php
apiV1ContactsIdIdGet($id): \OpenAPI\Client\Radix\Model\ContactDto
```

Returns the contact with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ContactsIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->apiV1ContactsIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ContactDto**](../Model/ContactDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ContactsListGet()`

```php
apiV1ContactsListGet($id, $ids, $customerId, $correspondenceAddressId, $supplierId, $addressId, $searchText, $email, $createDateFrom, $updateDateFrom, $active, $skip, $take): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of contacts with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$customerId = 'customerId_example'; // string
$correspondenceAddressId = 'correspondenceAddressId_example'; // string
$supplierId = 'supplierId_example'; // string
$addressId = 'addressId_example'; // string
$searchText = 'searchText_example'; // string
$email = 'email_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1ContactsListGet($id, $ids, $customerId, $correspondenceAddressId, $supplierId, $addressId, $searchText, $email, $createDateFrom, $updateDateFrom, $active, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->apiV1ContactsListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **customerId** | **string**|  | [optional] |
| **correspondenceAddressId** | **string**|  | [optional] |
| **supplierId** | **string**|  | [optional] |
| **addressId** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
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

## `apiV1ContactsPatch()`

```php
apiV1ContactsPatch($contactPatchCommand): string
```

Updating an contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactPatchCommand = new \OpenAPI\Client\Radix\Model\ContactPatchCommand(); // \OpenAPI\Client\Radix\Model\ContactPatchCommand | 

try {
    $result = $apiInstance->apiV1ContactsPatch($contactPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->apiV1ContactsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactPatchCommand** | [**\OpenAPI\Client\Radix\Model\ContactPatchCommand**](../Model/ContactPatchCommand.md)|  | [optional] |

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

## `apiV1ContactsPost()`

```php
apiV1ContactsPost($contactPostCommand): string
```

Creating an contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactPostCommand = new \OpenAPI\Client\Radix\Model\ContactPostCommand(); // \OpenAPI\Client\Radix\Model\ContactPostCommand | 

try {
    $result = $apiInstance->apiV1ContactsPost($contactPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->apiV1ContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactPostCommand** | [**\OpenAPI\Client\Radix\Model\ContactPostCommand**](../Model/ContactPostCommand.md)|  | [optional] |

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
