# # UpdateReward

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the reward. | 
**description** | **string** | A description of the reward. | [optional] 
**status** | **string** | The status of the reward. | 
**eligibilityConditions** | [**\TalonOne\Client\Model\Rule**](Rule.md) |  | [optional] 
**rule** | [**\TalonOne\Client\Model\Rule**](Rule.md) |  | [optional] 
**bindings** | [**\TalonOne\Client\Model\Binding[]**](Binding.md) | A list of named variables created before the reward&#39;s rules are evaluated.  Each binding pairs a name with a talang expression. The expression is evaluated once  and its result is available by name in any rule condition or effect. Bindings must be defined outside of individual rules. | [optional] 
**pointsRequired** | [**\TalonOne\Client\Model\RewardPointsRequired[]**](RewardPointsRequired.md) | The loyalty points required to activate the reward. Each object defines the specific loyalty program and subledger from which points are deducted when activating the reward.  **Note:** - Objects with an &#x60;id&#x60; are updated. - Objects without an &#x60;id&#x60; are created. - Existing objects omitted from the payload are deleted. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


