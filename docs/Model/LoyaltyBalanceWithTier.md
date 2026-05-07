# # LoyaltyBalanceWithTier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activePoints** | **float** | Total amount of points awarded to this customer and available to spend. | [optional] 
**pendingPoints** | **float** | Total amount of points awarded to this customer but not available until their start date. | [optional] 
**spentPoints** | **float** | Total amount of points already spent by this customer. | [optional] 
**expiredPoints** | **float** | Total amount of points awarded but never redeemed. They cannot be used anymore. | [optional] 
**negativePoints** | **float** | Total amount of negative points. This implies that &#x60;activePoints&#x60; is &#x60;0&#x60;. | [optional] 
**currentTier** | [**\TalonOne\Client\Model\Tier**](Tier.md) |  | [optional] 
**projectedTier** | [**\TalonOne\Client\Model\ProjectedTier**](ProjectedTier.md) |  | [optional] 
**pointsToNextTier** | **float** | The number of points required to move up a tier. | [optional] 
**nextTierName** | **string** | The name of the next higher tier level in the loyalty program.  **Note**: - Returns &#x60;null&#x60; if the customer has reached the highest available tier. - Returns the lowest level tier name if the customer is not currently assigned to any tier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


