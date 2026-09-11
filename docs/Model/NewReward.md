# # NewReward

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the reward. | 
**apiName** | **string** | A unique identifier used to reference the reward in API integrations. | 
**description** | **string** | A description of the reward. | [optional] 
**applicationIds** | **int[]** | The IDs of the Applications this reward is connected to.   **Note**: Currently, a reward can only be connected to one Application. | 
**sandbox** | **bool** | Indicates if this is a live or sandbox reward. Rewards of a given type can only be connected to Applications of the same type. | 
**eligibilityConditions** | [**\TalonOne\Client\Model\Rule**](Rule.md) |  | [optional] 
**rule** | [**\TalonOne\Client\Model\Rule**](Rule.md) |  | [optional] 
**bindings** | [**\TalonOne\Client\Model\Binding[]**](Binding.md) | A list of named variables created before the reward&#39;s rules are evaluated. Each binding pairs a name with a talang expression. The expression is evaluated once and its result is available by name in any rule condition or effect. Bindings must be defined outside of individual rules. | [optional] 
**pointsRequired** | [**\TalonOne\Client\Model\RewardPointsRequired[]**](RewardPointsRequired.md) | The loyalty points required to activate the reward. Each object defines the specific loyalty program and subledger from which points are deducted when activating the reward.  **Note:** When creating a reward, the &#x60;id&#x60; of each entry is ignored and a new entry is always created. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


