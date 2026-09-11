# # CheckLoyaltyBalanceBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this block. | [optional] [readonly] 
**type** | **string** | Identifies the block variant and determines which additional properties are present in it. | 
**tags** | **string[]** | Semantic labels attached to this block. | [optional] [readonly] 
**operator** | **string** | An indicator of how the block compares the balance to the value. | 
**program** | [**\TalonOne\Client\Model\CheckLoyaltyBalanceBlockProgram**](CheckLoyaltyBalanceBlockProgram.md) |  | 
**subledger** | **string** | The name of the subledger to check the balance of. Can be empty if this block checks the loyalty program&#39;s main ledger balance instead of a subledger. | 
**balance** | **string** | The type of balance to check:  - &#x60;current&#x60; is the sum of currently active points  - &#x60;pending&#x60; is the sum of pending points.  - &#x60;negative&#x60; is the sum of negative points.  - &#x60;tentativeCurrent&#x60; is the tentative points balance within the current open customer session. | 
**value** | **float** | The numeric value to compare the balance against. | 
**onFailure** | **object[]** | Promotion blocks evaluated when this block fails or returns false. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


