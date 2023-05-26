# #MX\MP\GetReturns200ResponseReturnOrdersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnOrderId** | **string** | Return order identifier of the return order. This is the same as RMA number. | [optional]
**customerEmail** | **string** | Customer email address | [optional]
**customerName** | [**\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerCustomerName**](GetReturns200ResponseReturnOrdersInnerCustomerName.md) |  | [optional]
**customerOrderId** | **string** | A unique ID associated with the sales order for specified customer | [optional]
**returnOrderDate** | **string** | Date for return order date | [optional]
**returnOrderLines** | [**\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner[]**](GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner.md) | A list of order lines in the return order | [optional]
**returnOrderShipments** | [**\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInner[]**](GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInner.md) | The shipments for return orders | [optional]


[[Back to Model list]](../) [[Back to API list]](../../Api/MX/MP) [[Back to README]](../../README.md)