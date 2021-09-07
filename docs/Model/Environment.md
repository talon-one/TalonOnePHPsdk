# # Environment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**slots** | [**\TalonOne\Client\Model\SlotDef[]**](SlotDef.md) | The slots defined for this application. | 
**functions** | [**\TalonOne\Client\Model\FunctionDef[]**](FunctionDef.md) | The functions defined for this application. | 
**templates** | [**\TalonOne\Client\Model\TemplateDef[]**](TemplateDef.md) | The templates defined for this application. | 
**giveawaysPools** | [**\TalonOne\Client\Model\GiveawaysPool[]**](GiveawaysPool.md) | The giveaways pools that the application is subscribed to. | [optional] 
**variables** | **string** |  | 
**loyaltyPrograms** | [**\TalonOne\Client\Model\LoyaltyProgram[]**](LoyaltyProgram.md) | The loyalty programs that the application is subscribed to. | [optional] 
**attributes** | [**\TalonOne\Client\Model\Attribute[]**](Attribute.md) | The attributes that the application is subscribed to. | [optional] 
**additionalCosts** | [**\TalonOne\Client\Model\AccountAdditionalCost[]**](AccountAdditionalCost.md) | The additional costs that the application is subscribed to. | [optional] 
**audiences** | [**\TalonOne\Client\Model\Audience[]**](Audience.md) | The audiences contained in the account which the application belongs to. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


