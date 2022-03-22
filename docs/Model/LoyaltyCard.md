# # LoyaltyCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**programID** | **int** | The ID of the loyalty program that owns this entity. | 
**currentBalance** | **float** | Sum of currently active points | 
**pendingBalance** | **float** | Sum of pending points | 
**expiredBalance** | **float** | Sum of expired points | 
**spentBalance** | **float** | Sum of spent points | 
**tentativeCurrentBalance** | **float** | Sum of currently active points, including points added and deducted in open sessions | 
**currentTier** | [**\TalonOne\Client\Model\Tier**](Tier.md) |  | [optional] 
**pointsToNextTier** | **float** | Points required to move up a tier. | [optional] 
**projection** | [**\TalonOne\Client\Model\LoyaltyProjection**](LoyaltyProjection.md) |  | [optional] 
**status** | **string** | Status of the loyalty card. Can be one of: [&#39;active&#39;, &#39;disabled&#39;] | 
**identifier** | **string** | Identifier of the loyalty card. | 
**usersPerCardLimit** | **int** | The max amount of user profiles a card can be shared with. 0 means unlimited. | 
**profiles** | [**\TalonOne\Client\Model\LoyaltyCardProfileRegistration[]**](LoyaltyCardProfileRegistration.md) | Integration IDs of the customers associated with the card. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


