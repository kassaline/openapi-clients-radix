# # ArticleDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**companyId** | **string** |  | [optional]
**code** | **string** |  | [optional]
**searchText** | **string** |  | [optional]
**barcode** | **string** |  | [optional]
**measurementUnit** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**model** | **string** |  | [optional]
**isSerialNumberActive** | **bool** |  | [optional]
**isSerialNumberOnlyForHistory** | **bool** |  | [optional]
**isLottoSerialNumber** | **bool** |  | [optional]
**createSerialNumberType** | [**\OpenAPI\Client\Radix\Model\CreateSntype**](CreateSntype.md) |  | [optional]
**serialNumberPrefix** | **string** |  | [optional]
**articleType** | [**\OpenAPI\Client\Radix\Model\Articletype**](Articletype.md) |  | [optional]
**producer** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**inactive** | **bool** |  | [optional]
**blocked** | **\DateTime** |  | [optional]
**isDiscontinued** | **bool** |  | [optional]
**isStockMovementActive** | **bool** |  | [optional]
**warrantyCustomer** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**warrantyProducer** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**minimumOrderQuantitySales** | **float** |  | [optional]
**intrastatTypeOfMovement** | [**\OpenAPI\Client\Radix\Model\IntrastatMovingtype**](IntrastatMovingtype.md) |  | [optional]
**intrastatOriginCountry** | **string** |  | [optional]
**intrastatGroup** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**intrastatConversion** | **float** |  | [optional]
**descriptionNumberOffer** | **int** |  | [optional]
**descriptionNumberOrder** | **int** |  | [optional]
**descriptionNumberDeliveryNote** | **int** |  | [optional]
**descriptionNumberInvoice** | **int** |  | [optional]
**descriptionNumberArticle** | **int** |  | [optional]
**descriptionNumberPurchaseOrder** | **int** |  | [optional]
**descriptionNumberCatalog** | **int** |  | [optional]
**availabilityControl** | [**\OpenAPI\Client\Radix\Model\AvailabilityControlType**](AvailabilityControlType.md) |  | [optional]
**descriptions** | [**\OpenAPI\Client\Radix\Model\Description[]**](Description.md) |  | [optional]
**additionalfields** | [**\OpenAPI\Client\Radix\Model\AdditionalFieldDto[]**](AdditionalFieldDto.md) |  | [optional]
**classifications** | [**\OpenAPI\Client\Radix\Model\ClassificationDto[]**](ClassificationDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
