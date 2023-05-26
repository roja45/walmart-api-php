# Walmart\Api\CA\MPInventoryApi  
All URIs are relative to https://marketplace.walmartapis.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInventory()**](InventoryApi.md#getInventory) | **GET** /v3/ca/inventory | Inventory |
| [**updateBulkInventory()**](InventoryApi.md#updateBulkInventory) | **POST** /v3/ca/feeds | Bulk update |
| [**updateInventoryForAnItemCA()**](InventoryApi.md#updateInventoryForAnItemCA) | **PUT** /v3/ca/inventory | Update inventory |


## `getInventory()`

```php
getInventory($sku): \Walmart\Models\MP\CA\Inventory\GetInventory200Response
```
Inventory

You can use this API to get the inventory for a given item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\InventoryApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$sku = 'sku_example'; // string | An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item.

try {
    $result = $apiInstance->getInventory($sku);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling InventoryApi->getInventory: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item. | |


### Return type

[**\Walmart\Models\MP\CA\Inventory\GetInventory200Response**](../Model/GetInventory200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBulkInventory()`

```php
updateBulkInventory($feedType, $file): \Walmart\Models\MP\CA\Inventory\UpdateBulkInventory200Response
```
Bulk update

Updates inventory for items in bulk. Refer to the throttling limits before uploading the Feed files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\InventoryApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$feedType = 'inventory'; // string | Includes details of each entity in the feed. Do not set this parameter to true.
$file = "/path/to/file.txt"; // \SplFileObject | Feed file to upload

try {
    $result = $apiInstance->updateBulkInventory($feedType, $file);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling InventoryApi->updateBulkInventory: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedType** | **string**| Includes details of each entity in the feed. Do not set this parameter to true. | [default to 'inventory'] |
| **file** | **\SplFileObject****\SplFileObject**| Feed file to upload | |


### Return type

[**\Walmart\Models\MP\CA\Inventory\UpdateBulkInventory200Response**](../Model/UpdateBulkInventory200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInventoryForAnItemCA()`

```php
updateInventoryForAnItemCA($sku, $updateInventoryForAnItemCARequest): \Walmart\Models\MP\CA\Inventory\GetInventory200Response
```
Update inventory

Updates the inventory for a given item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\InventoryApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$sku = 'sku_example'; // string | An arbitrary alphanumeric unique ID, specified by the seller, identifying each item.
$updateInventoryForAnItemCARequest = <?xml version="1.0" encoding="UTF-8"?>
<inventory xmlns="http://walmart.com/">
    <sku>1068155</sku>
    <quantity>
        <unit>EACH</unit>
        <amount>3</amount>
    </quantity>
    <fulfillmentLagTime>1</fulfillmentLagTime>
</inventory>; // \Walmart\Models\MP\CA\Inventory\UpdateInventoryForAnItemCARequest | File fields

try {
    $result = $apiInstance->updateInventoryForAnItemCA($sku, $updateInventoryForAnItemCARequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling InventoryApi->updateInventoryForAnItemCA: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| An arbitrary alphanumeric unique ID, specified by the seller, identifying each item. | |
| **updateInventoryForAnItemCARequest** | [**\Walmart\Models\MP\CA\Inventory\UpdateInventoryForAnItemCARequest**](../Model/UpdateInventoryForAnItemCARequest.md)| File fields | |


### Return type

[**\Walmart\Models\MP\CA\Inventory\GetInventory200Response**](../Model/GetInventory200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)