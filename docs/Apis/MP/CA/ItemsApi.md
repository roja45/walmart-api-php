# Walmart\Api\CA\MPItemsApi  
All URIs are relative to https://marketplace.walmartapis.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkItemSetupCA()**](ItemsApi.md#bulkItemSetupCA) | **POST** /v3/ca/feeds | Bulk upload |
| [**getAllItems()**](ItemsApi.md#getAllItems) | **GET** /v3/ca/items | Get all items |
| [**getAnItem()**](ItemsApi.md#getAnItem) | **GET** /v3/ca/items/{sku} | Get an item |
| [**retireAnItem()**](ItemsApi.md#retireAnItem) | **DELETE** /v3/ca/items/{SKU} | Retire an item |


## `bulkItemSetupCA()`

```php
bulkItemSetupCA($feedType, $file): \Walmart\Models\MP\CA\Items\BulkItemSetupCA200Response
```
Bulk upload

You can upload items in bulk. If the items are successfully uploaded, it returns a feed ID. Use the returned feed ID to retrieve a feed status. You can use the Bulk Item Setup API for any of the following item spec versions, just specify the corresponding feed type as a query parameter. Please ensure the WFS onboarding is complete before using WFS Specs or converting items to WFS *   Item spec feed type: item *   WFS Item spec feed type: OMNI_WFSSETUP  * Item spec feed type for 4.x spec: MP_ITEM_INTL  *   Convert an existing item to WFS feed type : OMNI_WFSCONVERT

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\ItemsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$feedType = 'feedType_example'; // string | The feed Type
$file = "/path/to/file.txt"; // \SplFileObject | Feed file to upload

try {
    $result = $apiInstance->bulkItemSetupCA($feedType, $file);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ItemsApi->bulkItemSetupCA: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedType** | **string**| The feed Type | |
| **file** | **\SplFileObject****\SplFileObject**| Feed file to upload | |


### Return type

[**\Walmart\Models\MP\CA\Items\BulkItemSetupCA200Response**](../Model/BulkItemSetupCA200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllItems()`

```php
getAllItems($nextCursor, $sku, $offset, $limit): \Walmart\Models\MP\CA\Items\GetAllItems200Response
```
Get all items

Displays a list of all items by using either nextCursor or offset and limit query parameters.   There are two ways of pagination for this API  * Using nextCursor query parameter First call will have the value of nextCursor as '*'. If a call to the endpoint results in a large number of items being returned, the results are sent back in pages. The element nextCursor which is returned in the response is required for pagination.   The nextCursor element contains the string that should be send as a query parameter to the subsequent GET call to get the next page of results.   A missing or empty nextCursor element in the response means that there are no more items left to retrieve. The totalCount returns the total number of available items. Therefore, analysis of the totalCount provides the number of pages to be retrieved to get the whole list of items.  * Using offset and limit query parameter First call to the API using offset=0 will return the first page of the list of items. The full list can be retrieved by subsequent requests to the same API with successively larger values of offset.  If a SKU is included, this request is semantically identical to Get an Item request. It will return only one item and hence pagination is not required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\ItemsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$nextCursor = '*'; // string | Used for pagination when more than 200 items are retrieved.
$sku = 'sku_example'; // string | An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item.
$offset = '0'; // string | The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true.
$limit = '20'; // string | The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true.

try {
    $result = $apiInstance->getAllItems($nextCursor, $sku, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ItemsApi->getAllItems: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nextCursor** | **string**| Used for pagination when more than 200 items are retrieved. | [optional] [default to '*'] |
| **sku** | **string**| An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item. | [optional] |
| **offset** | **string**| The object response to start with, where 0 is the first entity that can be requested. It can only be used when includeDetails is set to true. | [optional] [default to '0'] |
| **limit** | **string**| The number of entities to be returned. It cannot be more than 50 entities. Use it only when the includeDetails is set to true. | [optional] [default to '20'] |


### Return type

[**\Walmart\Models\MP\CA\Items\GetAllItems200Response**](../Model/GetAllItems200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnItem()`

```php
getAnItem($sku): \Walmart\Models\MP\CA\Items\GetAnItem200Response
```
Get an item

Retrieves an item and displays the item details shown in the response sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\ItemsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$sku = 'sku_example'; // string | An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item.

try {
    $result = $apiInstance->getAnItem($sku);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ItemsApi->getAnItem: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item. | |


### Return type

[**\Walmart\Models\MP\CA\Items\GetAnItem200Response**](../Model/GetAnItem200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retireAnItem()`

```php
retireAnItem($sKU): \Walmart\Models\MP\CA\Items\RetireAnItem200Response
```
Retire an item

Completely deactivates and unpublishes an item from the site.  Retired items are not displayed on Walmart.com, but their content stays intact in our system. You can republish an item by providing future discontinue date for the item.  --- **Note**  You can't reuse the SKU or Product ID from a retired item. If you need to change the SKU or Product ID, see Product ID & SKU section.  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\ItemsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$sKU = 'sKU_example'; // string | SKU

try {
    $result = $apiInstance->retireAnItem($sKU);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ItemsApi->retireAnItem: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sKU** | **string**| SKU | |


### Return type

[**\Walmart\Models\MP\CA\Items\RetireAnItem200Response**](../Model/RetireAnItem200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)