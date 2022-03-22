# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of item | 
**sku** | **string** | Stock keeping unit of item | 
**quantity** | **int** | Quantity of item. **Important:** If you enabled [cart item flattening](https://docs.talon.one/docs/product/campaigns/campaign-evaluation/#flattened-cart-items), the quantity is always one and the same cart item might receive multiple per-item discounts. Ensure you can process multiple discounts on one cart item correctly. | 
**returnedQuantity** | **int** | Number of returned items, calculated internally based on returns of this item. | [optional] 
**remainingQuantity** | **int** | Remaining quantity of the item, calculated internally based on returns of this item. | [optional] 
**price** | **float** | Price of item | 
**category** | **string** | Type, group or model of the item | [optional] 
**weight** | **float** | Weight of item in grams | [optional] 
**height** | **float** | Height of item in mm | [optional] 
**width** | **float** | Width of item in mm | [optional] 
**length** | **float** | Length of item in mm | [optional] 
**position** | **float** | Position of the Cart Item in the Cart (calculated internally) | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. You can use built-in attributes or create your own. See [Attributes](https://docs.talon.one/docs/dev/concepts/attributes). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


