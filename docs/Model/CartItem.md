# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of item. | 
**sku** | **string** | Stock keeping unit of item. | 
**quantity** | **int** | Quantity of item. **Important:** If you enabled [cart item flattening](https://docs.talon.one/docs/product/campaigns/campaign-evaluation/#flattened-cart-items), the quantity is always one and the same cart item might receive multiple per-item discounts. Ensure you can process multiple discounts on one cart item correctly. | 
**returnedQuantity** | **int** | Number of returned items, calculated internally based on returns of this item. | [optional] 
**remainingQuantity** | **int** | Remaining quantity of the item, calculated internally based on returns of this item. | [optional] 
**price** | **float** | Price of the item in the currency defined by your Application. This field is required if this item is not part of a [catalog](https://docs.talon.one/docs/product/account/dev-tools/managing-cart-item-catalogs/). If it is part of a catalog, setting a price here overrides the price from the catalog. | 
**category** | **string** | Type, group or model of the item. | [optional] 
**weight** | **float** | Weight of item in grams. | [optional] 
**height** | **float** | Height of item in mm. | [optional] 
**width** | **float** | Width of item in mm. | [optional] 
**length** | **float** | Length of item in mm. | [optional] 
**position** | **float** | Position of the Cart Item in the Cart (calculated internally). | [optional] 
**attributes** | [**object**](.md) | Use this property to set a value for the attributes of your choice. [Attributes](https://docs.talon.one/docs/dev/concepts/attributes) represent any information to attach to this cart item.  Custom _cart item_ attributes must be created in the Campaign Manager before you set them with this property. | [optional] 
**additionalCosts** | [**map[string,\TalonOne\Client\Model\AdditionalCost]**](AdditionalCost.md) | Use this property to set a value for the additional costs of this item, such as a shipping cost. They must be created in the Campaign Manager before you set them with this property. See [Managing additional costs](https://docs.talon.one/docs/product/account/dev-tools/managing-additional-costs/). | [optional] 
**catalogItemID** | **int** | The [catalog item ID](https://docs.talon.one/docs/product/account/dev-tools/managing-cart-item-catalogs/#synchronizing-cart-item-catalogs). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


