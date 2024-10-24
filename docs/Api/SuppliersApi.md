# OpenAPI\Client\Radix\SuppliersApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1SuppliersCountGet()**](SuppliersApi.md#apiV1SuppliersCountGet) | **GET** /api/v1/suppliers/count | Returns the count of Suppliers |
| [**apiV1SuppliersDelete()**](SuppliersApi.md#apiV1SuppliersDelete) | **DELETE** /api/v1/suppliers | Delete an Supplier |
| [**apiV1SuppliersGet()**](SuppliersApi.md#apiV1SuppliersGet) | **GET** /api/v1/suppliers | Returns a list of Suppliers |
| [**apiV1SuppliersIdIdContactsGet()**](SuppliersApi.md#apiV1SuppliersIdIdContactsGet) | **GET** /api/v1/suppliers/id/{id}/contacts | Returns a list of contacts with this Supplier id |
| [**apiV1SuppliersIdIdGet()**](SuppliersApi.md#apiV1SuppliersIdIdGet) | **GET** /api/v1/suppliers/id/{id} | Returns the Supplier with this ID |
| [**apiV1SuppliersIdIdShippingAddressesGet()**](SuppliersApi.md#apiV1SuppliersIdIdShippingAddressesGet) | **GET** /api/v1/suppliers/id/{id}/shippingAddresses | Returns a list of shippingAddresses with this Supplier id |
| [**apiV1SuppliersListGet()**](SuppliersApi.md#apiV1SuppliersListGet) | **GET** /api/v1/suppliers/list | Returns a list of Suppliers with minimal data |
| [**apiV1SuppliersPatch()**](SuppliersApi.md#apiV1SuppliersPatch) | **PATCH** /api/v1/suppliers | Updating an Supplier |
| [**apiV1SuppliersPost()**](SuppliersApi.md#apiV1SuppliersPost) | **POST** /api/v1/suppliers | Creating an Supplier |


## `apiV1SuppliersCountGet()`

```php
apiV1SuppliersCountGet($id, $ids, $number, $isoVatNumberIsocode, $isoVatNumberVatNumber, $taxNumber, $searchText, $createDateFrom, $createDateTo, $updateDateFrom, $updateDateTo, $active, $additionalWhere, $skip, $take): int
```

Returns the count of Suppliers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$number = 56; // int
$isoVatNumberIsocode = 'isoVatNumberIsocode_example'; // string
$isoVatNumberVatNumber = 'isoVatNumberVatNumber_example'; // string
$taxNumber = 'taxNumber_example'; // string
$searchText = 'searchText_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$additionalWhere = 'additionalWhere_example'; // string
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1SuppliersCountGet($id, $ids, $number, $isoVatNumberIsocode, $isoVatNumberVatNumber, $taxNumber, $searchText, $createDateFrom, $createDateTo, $updateDateFrom, $updateDateTo, $active, $additionalWhere, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **int**|  | [optional] |
| **isoVatNumberIsocode** | **string**|  | [optional] |
| **isoVatNumberVatNumber** | **string**|  | [optional] |
| **taxNumber** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **createDateTo** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **updateDateTo** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |
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

## `apiV1SuppliersDelete()`

```php
apiV1SuppliersDelete($supplierDeleteCommand): bool
```

Delete an Supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierDeleteCommand = new \OpenAPI\Client\Radix\Model\SupplierDeleteCommand(); // \OpenAPI\Client\Radix\Model\SupplierDeleteCommand | 

try {
    $result = $apiInstance->apiV1SuppliersDelete($supplierDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierDeleteCommand** | [**\OpenAPI\Client\Radix\Model\SupplierDeleteCommand**](../Model/SupplierDeleteCommand.md)|  | [optional] |

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

## `apiV1SuppliersGet()`

```php
apiV1SuppliersGet($id, $ids, $number, $isoVatNumberIsocode, $isoVatNumberVatNumber, $taxNumber, $searchText, $createDateFrom, $createDateTo, $updateDateFrom, $updateDateTo, $active, $additionalWhere, $skip, $take): \OpenAPI\Client\Radix\Model\SupplierDto[]
```

Returns a list of Suppliers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$number = 56; // int
$isoVatNumberIsocode = 'isoVatNumberIsocode_example'; // string
$isoVatNumberVatNumber = 'isoVatNumberVatNumber_example'; // string
$taxNumber = 'taxNumber_example'; // string
$searchText = 'searchText_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$additionalWhere = 'additionalWhere_example'; // string
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1SuppliersGet($id, $ids, $number, $isoVatNumberIsocode, $isoVatNumberVatNumber, $taxNumber, $searchText, $createDateFrom, $createDateTo, $updateDateFrom, $updateDateTo, $active, $additionalWhere, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **int**|  | [optional] |
| **isoVatNumberIsocode** | **string**|  | [optional] |
| **isoVatNumberVatNumber** | **string**|  | [optional] |
| **taxNumber** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **createDateTo** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **updateDateTo** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\SupplierDto[]**](../Model/SupplierDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SuppliersIdIdContactsGet()`

```php
apiV1SuppliersIdIdContactsGet($id): \OpenAPI\Client\Radix\Model\ContactDto[]
```

Returns a list of contacts with this Supplier id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1SuppliersIdIdContactsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersIdIdContactsGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV1SuppliersIdIdGet()`

```php
apiV1SuppliersIdIdGet($id): \OpenAPI\Client\Radix\Model\SupplierDto
```

Returns the Supplier with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1SuppliersIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\SupplierDto**](../Model/SupplierDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SuppliersIdIdShippingAddressesGet()`

```php
apiV1SuppliersIdIdShippingAddressesGet($id): \OpenAPI\Client\Radix\Model\SupplierShippingAddressDto[]
```

Returns a list of shippingAddresses with this Supplier id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1SuppliersIdIdShippingAddressesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersIdIdShippingAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `apiV1SuppliersListGet()`

```php
apiV1SuppliersListGet($id, $ids, $number, $isoVatNumberIsocode, $isoVatNumberVatNumber, $taxNumber, $searchText, $createDateFrom, $createDateTo, $updateDateFrom, $updateDateTo, $active, $additionalWhere, $skip, $take): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of Suppliers with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ids = array('ids_example'); // string[]
$number = 56; // int
$isoVatNumberIsocode = 'isoVatNumberIsocode_example'; // string
$isoVatNumberVatNumber = 'isoVatNumberVatNumber_example'; // string
$taxNumber = 'taxNumber_example'; // string
$searchText = 'searchText_example'; // string
$createDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$active = True; // bool
$additionalWhere = 'additionalWhere_example'; // string
$skip = 56; // int
$take = 56; // int

try {
    $result = $apiInstance->apiV1SuppliersListGet($id, $ids, $number, $isoVatNumberIsocode, $isoVatNumberVatNumber, $taxNumber, $searchText, $createDateFrom, $createDateTo, $updateDateFrom, $updateDateTo, $active, $additionalWhere, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **int**|  | [optional] |
| **isoVatNumberIsocode** | **string**|  | [optional] |
| **isoVatNumberVatNumber** | **string**|  | [optional] |
| **taxNumber** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **createDateFrom** | **\DateTime**|  | [optional] |
| **createDateTo** | **\DateTime**|  | [optional] |
| **updateDateFrom** | **\DateTime**|  | [optional] |
| **updateDateTo** | **\DateTime**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |
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

## `apiV1SuppliersPatch()`

```php
apiV1SuppliersPatch($supplierPatchCommand): string
```

Updating an Supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierPatchCommand = new \OpenAPI\Client\Radix\Model\SupplierPatchCommand(); // \OpenAPI\Client\Radix\Model\SupplierPatchCommand | 

try {
    $result = $apiInstance->apiV1SuppliersPatch($supplierPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierPatchCommand** | [**\OpenAPI\Client\Radix\Model\SupplierPatchCommand**](../Model/SupplierPatchCommand.md)|  | [optional] |

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

## `apiV1SuppliersPost()`

```php
apiV1SuppliersPost($supplierPostCommand): string
```

Creating an Supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplierPostCommand = new \OpenAPI\Client\Radix\Model\SupplierPostCommand(); // \OpenAPI\Client\Radix\Model\SupplierPostCommand | 

try {
    $result = $apiInstance->apiV1SuppliersPost($supplierPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->apiV1SuppliersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplierPostCommand** | [**\OpenAPI\Client\Radix\Model\SupplierPostCommand**](../Model/SupplierPostCommand.md)|  | [optional] |

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
