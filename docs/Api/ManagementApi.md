# TalonOne\Client\ManagementApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLoyaltyPoints**](ManagementApi.md#addLoyaltyPoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/add_points | Add points in loyalty program for given customer
[**copyCampaignToApplications**](ManagementApi.md#copyCampaignToApplications) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/copy | Copy the campaign into the specified application
[**createAccountCollection**](ManagementApi.md#createAccountCollection) | **POST** /v1/collections | Create account-level collection
[**createAdditionalCost**](ManagementApi.md#createAdditionalCost) | **POST** /v1/additional_costs | Create additional cost
[**createAttribute**](ManagementApi.md#createAttribute) | **POST** /v1/attributes | Create custom attribute
[**createCampaignFromTemplate**](ManagementApi.md#createCampaignFromTemplate) | **POST** /v1/applications/{applicationId}/create_campaign_from_template | Create campaign from campaign template
[**createCollection**](ManagementApi.md#createCollection) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/collections | Create collection
[**createCoupons**](ManagementApi.md#createCoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Create coupons
[**createCouponsAsync**](ManagementApi.md#createCouponsAsync) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_async | Create coupons asynchronously
[**createCouponsForMultipleRecipients**](ManagementApi.md#createCouponsForMultipleRecipients) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_with_recipients | Create coupons for multiple recipients
[**createPasswordRecoveryEmail**](ManagementApi.md#createPasswordRecoveryEmail) | **POST** /v1/password_recovery_emails | Request a password reset
[**createSession**](ManagementApi.md#createSession) | **POST** /v1/sessions | Create session
[**deleteAccountCollection**](ManagementApi.md#deleteAccountCollection) | **DELETE** /v1/collections/{collectionId} | Delete account-level collection
[**deleteCampaign**](ManagementApi.md#deleteCampaign) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId} | Delete campaign
[**deleteCollection**](ManagementApi.md#deleteCollection) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Delete collection
[**deleteCoupon**](ManagementApi.md#deleteCoupon) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Delete coupon
[**deleteCoupons**](ManagementApi.md#deleteCoupons) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Delete coupons
[**deleteLoyaltyCard**](ManagementApi.md#deleteLoyaltyCard) | **DELETE** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardIdentifier} | Delete loyalty card
[**deleteReferral**](ManagementApi.md#deleteReferral) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Delete referral
[**destroySession**](ManagementApi.md#destroySession) | **DELETE** /v1/sessions | Destroy session
[**exportAccountCollectionItems**](ManagementApi.md#exportAccountCollectionItems) | **GET** /v1/collections/{collectionId}/export | Export account-level collection items to CSV file
[**exportCollectionItems**](ManagementApi.md#exportCollectionItems) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId}/export | Export a collection&#39;s items to CSV file
[**exportCoupons**](ManagementApi.md#exportCoupons) | **GET** /v1/applications/{applicationId}/export_coupons | Export coupons to CSV file
[**exportCustomerSessions**](ManagementApi.md#exportCustomerSessions) | **GET** /v1/applications/{applicationId}/export_customer_sessions | Export customer sessions to CSV file
[**exportEffects**](ManagementApi.md#exportEffects) | **GET** /v1/applications/{applicationId}/export_effects | Export triggered effects to CSV file
[**exportLoyaltyBalance**](ManagementApi.md#exportLoyaltyBalance) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_customer_balance | Export customer loyalty balance to a CSV file
[**exportLoyaltyCardLedger**](ManagementApi.md#exportLoyaltyCardLedger) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardIdentifier}/export | Export a loyalty card&#39;s ledger log to CSV file
[**exportLoyaltyLedger**](ManagementApi.md#exportLoyaltyLedger) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/export_log | Export a customer&#39;s loyalty ledger log to CSV file
[**exportReferrals**](ManagementApi.md#exportReferrals) | **GET** /v1/applications/{applicationId}/export_referrals | Export referrals to CSV file
[**getAccessLogsWithoutTotalCount**](ManagementApi.md#getAccessLogsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/access_logs/no_total | Get access logs for Application
[**getAccount**](ManagementApi.md#getAccount) | **GET** /v1/accounts/{accountId} | Get account details
[**getAccountAnalytics**](ManagementApi.md#getAccountAnalytics) | **GET** /v1/accounts/{accountId}/analytics | Get account analytics
[**getAccountCollection**](ManagementApi.md#getAccountCollection) | **GET** /v1/collections/{collectionId} | Get account-level collection
[**getAdditionalCost**](ManagementApi.md#getAdditionalCost) | **GET** /v1/additional_costs/{additionalCostId} | Get additional cost
[**getAdditionalCosts**](ManagementApi.md#getAdditionalCosts) | **GET** /v1/additional_costs | List additional costs
[**getAllAccessLogs**](ManagementApi.md#getAllAccessLogs) | **GET** /v1/access_logs | List access logs
[**getAllRoles**](ManagementApi.md#getAllRoles) | **GET** /v1/roles | List roles
[**getApplication**](ManagementApi.md#getApplication) | **GET** /v1/applications/{applicationId} | Get application
[**getApplicationApiHealth**](ManagementApi.md#getApplicationApiHealth) | **GET** /v1/applications/{applicationId}/health_report | Get report of health of application API
[**getApplicationCustomer**](ManagementApi.md#getApplicationCustomer) | **GET** /v1/applications/{applicationId}/customers/{customerId} | Get application&#39;s customer
[**getApplicationCustomerFriends**](ManagementApi.md#getApplicationCustomerFriends) | **GET** /v1/applications/{applicationId}/profile/{integrationId}/friends | List friends referred by customer profile
[**getApplicationCustomers**](ManagementApi.md#getApplicationCustomers) | **GET** /v1/applications/{applicationId}/customers | List application&#39;s customers
[**getApplicationCustomersByAttributes**](ManagementApi.md#getApplicationCustomersByAttributes) | **POST** /v1/applications/{applicationId}/customer_search | List application customers matching the given attributes
[**getApplicationEventTypes**](ManagementApi.md#getApplicationEventTypes) | **GET** /v1/applications/{applicationId}/event_types | List Applications event types
[**getApplicationEventsWithoutTotalCount**](ManagementApi.md#getApplicationEventsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/events/no_total | List Applications events
[**getApplicationSession**](ManagementApi.md#getApplicationSession) | **GET** /v1/applications/{applicationId}/sessions/{sessionId} | Get Application session
[**getApplicationSessions**](ManagementApi.md#getApplicationSessions) | **GET** /v1/applications/{applicationId}/sessions | List Application sessions
[**getApplications**](ManagementApi.md#getApplications) | **GET** /v1/applications | List applications
[**getAttribute**](ManagementApi.md#getAttribute) | **GET** /v1/attributes/{attributeId} | Get custom attribute
[**getAttributes**](ManagementApi.md#getAttributes) | **GET** /v1/attributes | List custom attributes
[**getAudiences**](ManagementApi.md#getAudiences) | **GET** /v1/audiences | List audiences
[**getCampaign**](ManagementApi.md#getCampaign) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId} | Get campaign
[**getCampaignAnalytics**](ManagementApi.md#getCampaignAnalytics) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/analytics | Get analytics of campaigns
[**getCampaignByAttributes**](ManagementApi.md#getCampaignByAttributes) | **POST** /v1/applications/{applicationId}/campaigns_search | List campaigns that match the given attributes
[**getCampaigns**](ManagementApi.md#getCampaigns) | **GET** /v1/applications/{applicationId}/campaigns | List campaigns
[**getChanges**](ManagementApi.md#getChanges) | **GET** /v1/changes | Get audit log for an account
[**getCollection**](ManagementApi.md#getCollection) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Get collection
[**getCouponsByAttributes**](ManagementApi.md#getCouponsByAttributes) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search | List coupons that match the given attributes
[**getCouponsWithoutTotalCount**](ManagementApi.md#getCouponsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/no_total | List coupons
[**getCustomerActivityReport**](ManagementApi.md#getCustomerActivityReport) | **GET** /v1/applications/{applicationId}/customer_activity_reports/{customerId} | Get customer&#39;s activity report
[**getCustomerActivityReportsWithoutTotalCount**](ManagementApi.md#getCustomerActivityReportsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/customer_activity_reports/no_total | Get Activity Reports for Application Customers
[**getCustomerAnalytics**](ManagementApi.md#getCustomerAnalytics) | **GET** /v1/applications/{applicationId}/customers/{customerId}/analytics | Get customer&#39;s analytics report
[**getCustomerProfile**](ManagementApi.md#getCustomerProfile) | **GET** /v1/customers/{customerId} | Get customer profile
[**getCustomerProfiles**](ManagementApi.md#getCustomerProfiles) | **GET** /v1/customers/no_total | List customer profiles
[**getCustomersByAttributes**](ManagementApi.md#getCustomersByAttributes) | **POST** /v1/customer_search/no_total | List customer profiles matching the given attributes
[**getEventTypes**](ManagementApi.md#getEventTypes) | **GET** /v1/event_types | List event types
[**getExports**](ManagementApi.md#getExports) | **GET** /v1/exports | Get exports
[**getLoyaltyPoints**](ManagementApi.md#getLoyaltyPoints) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId} | Get the Loyalty Ledger for this integrationID
[**getLoyaltyProgram**](ManagementApi.md#getLoyaltyProgram) | **GET** /v1/loyalty_programs/{loyaltyProgramId} | Get loyalty program
[**getLoyaltyPrograms**](ManagementApi.md#getLoyaltyPrograms) | **GET** /v1/loyalty_programs | List loyalty programs
[**getLoyaltyStatistics**](ManagementApi.md#getLoyaltyStatistics) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/statistics | Get loyalty program statistics by loyalty program ID
[**getReferralsWithoutTotalCount**](ManagementApi.md#getReferralsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/no_total | List referrals
[**getRole**](ManagementApi.md#getRole) | **GET** /v1/roles/{roleId} | Get role
[**getRuleset**](ManagementApi.md#getRuleset) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Get ruleset
[**getRulesets**](ManagementApi.md#getRulesets) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets | List campaign rulesets
[**getUser**](ManagementApi.md#getUser) | **GET** /v1/users/{userId} | Get user
[**getUsers**](ManagementApi.md#getUsers) | **GET** /v1/users | List users in account
[**getWebhook**](ManagementApi.md#getWebhook) | **GET** /v1/webhooks/{webhookId} | Get webhook
[**getWebhookActivationLogs**](ManagementApi.md#getWebhookActivationLogs) | **GET** /v1/webhook_activation_logs | List webhook activation log entries
[**getWebhookLogs**](ManagementApi.md#getWebhookLogs) | **GET** /v1/webhook_logs | List webhook log entries
[**getWebhooks**](ManagementApi.md#getWebhooks) | **GET** /v1/webhooks | List webhooks
[**importAccountCollection**](ManagementApi.md#importAccountCollection) | **POST** /v1/collections/{collectionId}/import | Import data in existing account-level collection via CSV file
[**importAllowedList**](ManagementApi.md#importAllowedList) | **POST** /v1/attributes/{attributeId}/allowed_list/import | Import allowed values for attribute
[**importCollection**](ManagementApi.md#importCollection) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId}/import | Import data in existing collection via CSV file
[**importCoupons**](ManagementApi.md#importCoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_coupons | Import coupons via CSV file
[**importLoyaltyPoints**](ManagementApi.md#importLoyaltyPoints) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/import_points | Import loyalty points via CSV file
[**importPoolGiveaways**](ManagementApi.md#importPoolGiveaways) | **POST** /v1/giveaways/pools/{poolId}/import | Import giveaway codes into a giveaway pool
[**importReferrals**](ManagementApi.md#importReferrals) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_referrals | Import referrals via CSV file
[**listAccountCollections**](ManagementApi.md#listAccountCollections) | **GET** /v1/collections | List collections in account
[**listCollections**](ManagementApi.md#listCollections) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections | List collections
[**listCollectionsInApplication**](ManagementApi.md#listCollectionsInApplication) | **GET** /v1/applications/{applicationId}/collections | List collections in application
[**removeLoyaltyPoints**](ManagementApi.md#removeLoyaltyPoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/deduct_points | Deduct points in loyalty program for given customer
[**resetPassword**](ManagementApi.md#resetPassword) | **POST** /v1/reset_password | Reset password
[**searchCouponsAdvancedApplicationWideWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedApplicationWideWithoutTotalCount) | **POST** /v1/applications/{applicationId}/coupons_search_advanced/no_total | List coupons that match the given attributes in all active campaigns of an application
[**searchCouponsAdvancedWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedWithoutTotalCount) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search_advanced/no_total | List coupons that match the given attributes
[**updateAccountCollection**](ManagementApi.md#updateAccountCollection) | **PUT** /v1/collections/{collectionId} | Update account-level collection
[**updateAdditionalCost**](ManagementApi.md#updateAdditionalCost) | **PUT** /v1/additional_costs/{additionalCostId} | Update additional cost
[**updateAttribute**](ManagementApi.md#updateAttribute) | **PUT** /v1/attributes/{attributeId} | Update custom attribute
[**updateCampaign**](ManagementApi.md#updateCampaign) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId} | Update campaign
[**updateCollection**](ManagementApi.md#updateCollection) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Update collection
[**updateCoupon**](ManagementApi.md#updateCoupon) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Update coupon
[**updateCouponBatch**](ManagementApi.md#updateCouponBatch) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Update coupons
[**updateReferral**](ManagementApi.md#updateReferral) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Update referral



## addLoyaltyPoints

> addLoyaltyPoints($loyaltyProgramId, $integrationId, $body)

Add points in loyalty program for given customer

Add points in the specified loyalty program for the given customer.  To get the `integrationId` of the profile from a `sessionId`, use the [Update customer session](/integration-api/#operation/updateCustomerSessionV2).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.
$body = new \TalonOne\Client\Model\LoyaltyPoints(); // \TalonOne\Client\Model\LoyaltyPoints | 

try {
    $apiInstance->addLoyaltyPoints($loyaltyProgramId, $integrationId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->addLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |
 **body** | [**\TalonOne\Client\Model\LoyaltyPoints**](../Model/LoyaltyPoints.md)|  |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## copyCampaignToApplications

> \TalonOne\Client\Model\InlineResponse2002 copyCampaignToApplications($applicationId, $campaignId, $body)

Copy the campaign into the specified application

Copy the campaign into all specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CampaignCopy(); // \TalonOne\Client\Model\CampaignCopy | 

try {
    $result = $apiInstance->copyCampaignToApplications($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->copyCampaignToApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CampaignCopy**](../Model/CampaignCopy.md)|  |

### Return type

[**\TalonOne\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAccountCollection

> \TalonOne\Client\Model\Collection createAccountCollection($body)

Create account-level collection

Create account-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewCollection(); // \TalonOne\Client\Model\NewCollection | 

try {
    $result = $apiInstance->createAccountCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewCollection**](../Model/NewCollection.md)|  |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost createAdditionalCost($body)

Create additional cost

Create an [additional cost](/docs/product/account/dev-tools/managing-additional-costs/).  These additional costs are shared across all applications in your account, and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewAdditionalCost(); // \TalonOne\Client\Model\NewAdditionalCost | 

try {
    $result = $apiInstance->createAdditionalCost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)|  |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAttribute

> \TalonOne\Client\Model\Attribute createAttribute($body)

Create custom attribute

Create a _custom attribute_ in this account. Custom attributes allow you to attach new fields to Talon.One domain objects like campaigns, coupons, customers and so on.  These attributes can then be given values when creating/updating these objects, and these values can be used in your campaign rules. For example, you could define a `zipCode` field for customer sessions, and add a rule to your campaign that only allows certain ZIP codes.  These attributes are shared across all applications in your account, and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewAttribute(); // \TalonOne\Client\Model\NewAttribute | 

try {
    $result = $apiInstance->createAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewAttribute**](../Model/NewAttribute.md)|  |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCampaignFromTemplate

> \TalonOne\Client\Model\CreateTemplateCampaignResponse createCampaignFromTemplate($applicationId, $body)

Create campaign from campaign template

Use the campaign template referenced in the request body to create a new Campaign in one of the connected Applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CreateTemplateCampaign(); // \TalonOne\Client\Model\CreateTemplateCampaign | 

try {
    $result = $apiInstance->createCampaignFromTemplate($applicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCampaignFromTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CreateTemplateCampaign**](../Model/CreateTemplateCampaign.md)|  |

### Return type

[**\TalonOne\Client\Model\CreateTemplateCampaignResponse**](../Model/CreateTemplateCampaignResponse.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCollection

> \TalonOne\Client\Model\Collection createCollection($applicationId, $campaignId, $body)

Create collection

Create a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCollection(); // \TalonOne\Client\Model\NewCollection | 

try {
    $result = $apiInstance->createCollection($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCollection**](../Model/NewCollection.md)|  |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCoupons

> \TalonOne\Client\Model\InlineResponse2004 createCoupons($applicationId, $campaignId, $body, $silent)

Create coupons

Create coupons according to some pattern. Up to 20.000 coupons can be created without a unique prefix. When a unique prefix is provided, up to 200.000 coupons can be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCoupons(); // \TalonOne\Client\Model\NewCoupons | 
$silent = 'yes'; // string | Possible values: `yes` or `no`. - `yes`: Increases the perfomance of the API call by returning a 204 response. - `no`: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information.

try {
    $result = $apiInstance->createCoupons($applicationId, $campaignId, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCoupons**](../Model/NewCoupons.md)|  |
 **silent** | **string**| Possible values: &#x60;yes&#x60; or &#x60;no&#x60;. - &#x60;yes&#x60;: Increases the perfomance of the API call by returning a 204 response. - &#x60;no&#x60;: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information. | [optional] [default to &#39;yes&#39;]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCouponsAsync

> \TalonOne\Client\Model\AsyncCouponCreationResponse createCouponsAsync($applicationId, $campaignId, $body)

Create coupons asynchronously

Create any number of coupons from 20,001 to 5,000,000.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCouponCreationJob(); // \TalonOne\Client\Model\NewCouponCreationJob | 

try {
    $result = $apiInstance->createCouponsAsync($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCouponsAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCouponCreationJob**](../Model/NewCouponCreationJob.md)|  |

### Return type

[**\TalonOne\Client\Model\AsyncCouponCreationResponse**](../Model/AsyncCouponCreationResponse.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCouponsForMultipleRecipients

> \TalonOne\Client\Model\InlineResponse2004 createCouponsForMultipleRecipients($applicationId, $campaignId, $body, $silent)

Create coupons for multiple recipients

Create coupons according to some pattern for up to 1000 recipients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCouponsForMultipleRecipients(); // \TalonOne\Client\Model\NewCouponsForMultipleRecipients | 
$silent = 'yes'; // string | Possible values: `yes` or `no`. - `yes`: Increases the perfomance of the API call by returning a 204 response. - `no`: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information.

try {
    $result = $apiInstance->createCouponsForMultipleRecipients($applicationId, $campaignId, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCouponsForMultipleRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCouponsForMultipleRecipients**](../Model/NewCouponsForMultipleRecipients.md)|  |
 **silent** | **string**| Possible values: &#x60;yes&#x60; or &#x60;no&#x60;. - &#x60;yes&#x60;: Increases the perfomance of the API call by returning a 204 response. - &#x60;no&#x60;: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information. | [optional] [default to &#39;yes&#39;]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPasswordRecoveryEmail

> \TalonOne\Client\Model\NewPasswordEmail createPasswordRecoveryEmail($body)

Request a password reset

Send an email with a password recovery link to the email address of an existing account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewPasswordEmail(); // \TalonOne\Client\Model\NewPasswordEmail | 

try {
    $result = $apiInstance->createPasswordRecoveryEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createPasswordRecoveryEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)|  |

### Return type

[**\TalonOne\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSession

> \TalonOne\Client\Model\Session createSession($body)

Create session

Create a session to use the Management API endpoints. Use the value of the `token` property provided in the response as bearer token in other API calls.  A token is valid for 3 months. In accordance with best pratices, use your generated token for all your API requests. Do **not** regenerate a token for each request.  This endpoint has a rate limit of 3 to 6 requests per second per account, depending on your setup.  **Note:** You can also use your browser's developer's console to [display your token](https://docs.talon.one/docs/dev/tutorials/receiving-loyalty-ledger-braze/#extracting-the-session-token) when you log into the Campaign Manager.  In this case, keep in mind that logging out destroys the token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\LoginParams(); // \TalonOne\Client\Model\LoginParams | 

try {
    $result = $apiInstance->createSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\LoginParams**](../Model/LoginParams.md)|  |

### Return type

[**\TalonOne\Client\Model\Session**](../Model/Session.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAccountCollection

> deleteAccountCollection($collectionId)

Delete account-level collection

Delete the given account-level collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).

try {
    $apiInstance->deleteAccountCollection($collectionId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCampaign

> deleteCampaign($applicationId, $campaignId)

Delete campaign

Delete the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.

try {
    $apiInstance->deleteCampaign($applicationId, $campaignId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCollection

> deleteCollection($applicationId, $campaignId, $collectionId)

Delete collection

Delete the given collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).

try {
    $apiInstance->deleteCollection($applicationId, $campaignId, $collectionId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCoupon

> deleteCoupon($applicationId, $campaignId, $couponId)

Delete coupon

Delete the specified coupon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$couponId = 'couponId_example'; // string | The ID of the coupon code to update

try {
    $apiInstance->deleteCoupon($applicationId, $campaignId, $couponId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **couponId** | **string**| The ID of the coupon code to update |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCoupons

> deleteCoupons($applicationId, $campaignId, $value, $createdBefore, $createdAfter, $startsAfter, $startsBefore, $expiresAfter, $expiresBefore, $valid, $batchId, $usable, $referralId, $recipientIntegrationId, $exactMatch)

Delete coupons

Deletes all the coupons matching the specified criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | - `expired`: Matches coupons in which the expiry date is set and in the past. - `validNow`: Matches coupons in which start date is null or in the past and expiry date is null or in the future. - `validFuture`: Matches coupons in which start date is set and in the future.
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$usable = 'usable_example'; // string | - `true`: only coupons where `usageCounter < usageLimit` will be returned. - `false`: only coupons where `usageCounter >= usageLimit` will be returned.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's `RecipientIntegrationId` field.
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $apiInstance->deleteCoupons($applicationId, $campaignId, $value, $createdBefore, $createdAfter, $startsAfter, $startsBefore, $expiresAfter, $expiresBefore, $valid, $batchId, $usable, $referralId, $recipientIntegrationId, $exactMatch);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| - &#x60;expired&#x60;: Matches coupons in which the expiry date is set and in the past. - &#x60;validNow&#x60;: Matches coupons in which start date is null or in the past and expiry date is null or in the future. - &#x60;validFuture&#x60;: Matches coupons in which start date is set and in the future. | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **usable** | **string**| - &#x60;true&#x60;: only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned. - &#x60;false&#x60;: only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60; will be returned. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s &#x60;RecipientIntegrationId&#x60; field. | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteLoyaltyCard

> deleteLoyaltyCard($loyaltyProgramId, $loyaltyCardIdentifier)

Delete loyalty card

Delete the specified loyalty card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | 
$loyaltyCardIdentifier = 'loyaltyCardIdentifier_example'; // string | Identifier of the loyalty card.

try {
    $apiInstance->deleteLoyaltyCard($loyaltyProgramId, $loyaltyCardIdentifier);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteLoyaltyCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**|  |
 **loyaltyCardIdentifier** | **string**| Identifier of the loyalty card. |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteReferral

> deleteReferral($applicationId, $campaignId, $referralId)

Delete referral

Delete the specified referral.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$referralId = 'referralId_example'; // string | The ID of the referral code to delete

try {
    $apiInstance->deleteReferral($applicationId, $campaignId, $referralId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **referralId** | **string**| The ID of the referral code to delete |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroySession

> destroySession()

Destroy session

Destroys the session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->destroySession();
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->destroySession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportAccountCollectionItems

> string exportAccountCollectionItems($collectionId)

Export account-level collection items to CSV file

Download a file containing an account-level collection's items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).

try {
    $result = $apiInstance->exportAccountCollectionItems($collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportAccountCollectionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCollectionItems

> string exportCollectionItems($applicationId, $campaignId, $collectionId)

Export a collection's items to CSV file

Download a file containing a collection's items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).

try {
    $result = $apiInstance->exportCollectionItems($applicationId, $campaignId, $collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCollectionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCoupons

> string exportCoupons($applicationId, $campaignId, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $dateFormat, $campaignState)

Export coupons to CSV file

Download a file containing the coupons that match the given properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 3.4; // float | Filter results by campaign.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.

try {
    $result = $apiInstance->exportCoupons($applicationId, $campaignId, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $dateFormat, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCustomerSessions

> string exportCustomerSessions($applicationId, $createdBefore, $createdAfter, $profileIntegrationId, $dateFormat, $customerSessionState)

Export customer sessions to CSV file

Download a file containing the customer sessions that match the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string.
$profileIntegrationId = 'profileIntegrationId_example'; // string | Only return sessions for the customer that matches this customer integration ID.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.
$customerSessionState = 'customerSessionState_example'; // string | Filter results by state.

try {
    $result = $apiInstance->exportCustomerSessions($applicationId, $createdBefore, $createdAfter, $profileIntegrationId, $dateFormat, $customerSessionState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCustomerSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **profileIntegrationId** | **string**| Only return sessions for the customer that matches this customer integration ID. | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]
 **customerSessionState** | **string**| Filter results by state. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportEffects

> string exportEffects($applicationId, $campaignId, $createdBefore, $createdAfter, $dateFormat)

Export triggered effects to CSV file

Download a file containing the triggered effects that match the given attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 3.4; // float | Filter results by campaign.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportEffects($applicationId, $campaignId, $createdBefore, $createdAfter, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportEffects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyBalance

> string exportLoyaltyBalance($loyaltyProgramId)

Export customer loyalty balance to a CSV file

Download a file with the balance of each customer in the loyalty program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.

try {
    $result = $apiInstance->exportLoyaltyBalance($loyaltyProgramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyCardLedger

> string exportLoyaltyCardLedger($loyaltyProgramId, $loyaltyCardIdentifier, $rangeStart, $rangeEnd, $dateFormat)

Export a loyalty card's ledger log to CSV file

Download a file with a loyalty card ledger log in the loyalty program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | 
$loyaltyCardIdentifier = 'loyaltyCardIdentifier_example'; // string | Identifier of the loyalty card.
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportLoyaltyCardLedger($loyaltyProgramId, $loyaltyCardIdentifier, $rangeStart, $rangeEnd, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyCardLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**|  |
 **loyaltyCardIdentifier** | **string**| Identifier of the loyalty card. |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyLedger

> string exportLoyaltyLedger($rangeStart, $rangeEnd, $loyaltyProgramId, $integrationId, $dateFormat)

Export a customer's loyalty ledger log to CSV file

Download a file with a customer's ledger log in the loyalty program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportLoyaltyLedger($rangeStart, $rangeEnd, $loyaltyProgramId, $integrationId, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportReferrals

> string exportReferrals($applicationId, $campaignId, $createdBefore, $createdAfter, $valid, $usable, $batchId, $dateFormat)

Export referrals to CSV file

Download a file containing the referrals that match the given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 3.4; // float | Filter results by campaign.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | - `expired`: Matches referrals in which the expiry date is set and in the past. - `validNow`: Matches referrals in which start date is null or in the past and expiry date is null or in the future. - `validFuture`: Matches referrals in which start date is set and in the future.
$usable = 'usable_example'; // string | - `true`, only referrals where `usageCounter < usageLimit` will be returned. - `false`, only referrals where `usageCounter >= usageLimit` will be returned.
$batchId = 'batchId_example'; // string | Filter results by batches of referrals
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportReferrals($applicationId, $campaignId, $createdBefore, $createdAfter, $valid, $usable, $batchId, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| - &#x60;expired&#x60;: Matches referrals in which the expiry date is set and in the past. - &#x60;validNow&#x60;: Matches referrals in which start date is null or in the past and expiry date is null or in the future. - &#x60;validFuture&#x60;: Matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| - &#x60;true&#x60;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned. - &#x60;false&#x60;, only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60; will be returned. | [optional]
 **batchId** | **string**| Filter results by batches of referrals | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccessLogsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2009 getAccessLogsWithoutTotalCount($applicationId, $rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort)

Get access logs for Application

Retrieve the list of API calls to this Application matching the specified criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAccessLogsWithoutTotalCount($applicationId, $rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccessLogsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccount

> \TalonOne\Client\Model\Account getAccount($accountId)

Get account details

Return the details of your companies Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The identifier of the account. Retrieve it via the [List users in account endpoint](https://docs.talon.one/management-api#operation/getUsers), in the `accountId` property.

try {
    $result = $apiInstance->getAccount($accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The identifier of the account. Retrieve it via the [List users in account endpoint](https://docs.talon.one/management-api#operation/getUsers), in the &#x60;accountId&#x60; property. |

### Return type

[**\TalonOne\Client\Model\Account**](../Model/Account.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountAnalytics

> \TalonOne\Client\Model\AccountAnalytics getAccountAnalytics($accountId)

Get account analytics

Return the analytics of your Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The identifier of the account. Retrieve it via the [List users in account endpoint](https://docs.talon.one/management-api#operation/getUsers), in the `accountId` property.

try {
    $result = $apiInstance->getAccountAnalytics($accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccountAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The identifier of the account. Retrieve it via the [List users in account endpoint](https://docs.talon.one/management-api#operation/getUsers), in the &#x60;accountId&#x60; property. |

### Return type

[**\TalonOne\Client\Model\AccountAnalytics**](../Model/AccountAnalytics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountCollection

> \TalonOne\Client\Model\Collection getAccountCollection($collectionId)

Get account-level collection

Retrieve the given account-level collection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).

try {
    $result = $apiInstance->getAccountCollection($collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost getAdditionalCost($additionalCostId)

Get additional cost

Returns the additional cost.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additionalCostId = 56; // int | 

try {
    $result = $apiInstance->getAdditionalCost($additionalCostId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additionalCostId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCosts

> \TalonOne\Client\Model\InlineResponse20022 getAdditionalCosts($pageSize, $skip, $sort)

List additional costs

Returns all the defined additional costs for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAdditionalCosts($pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAdditionalCosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllAccessLogs

> \TalonOne\Client\Model\InlineResponse20010 getAllAccessLogs($rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort)

List access logs

Fetches the access logs for the entire account. Sensitive requests (logins) are _always_ filtered from the logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAllAccessLogs($rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAllAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllRoles

> \TalonOne\Client\Model\InlineResponse20030 getAllRoles()

List roles

List all roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAllRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TalonOne\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplication

> \TalonOne\Client\Model\Application getApplication($applicationId)

Get application

Get the application specified by the ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.

try {
    $result = $apiInstance->getApplication($applicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |

### Return type

[**\TalonOne\Client\Model\Application**](../Model/Application.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationApiHealth

> \TalonOne\Client\Model\ApplicationApiHealth getApplicationApiHealth($applicationId)

Get report of health of application API

Display the health of the application and show the last time the Application was used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.

try {
    $result = $apiInstance->getApplicationApiHealth($applicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationApiHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |

### Return type

[**\TalonOne\Client\Model\ApplicationApiHealth**](../Model/ApplicationApiHealth.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomer

> \TalonOne\Client\Model\ApplicationCustomer getApplicationCustomer($applicationId, $customerId)

Get application's customer

Retrieve the customers of the specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List application's customers](#operation/getApplicationCustomers) endpoint.

try {
    $result = $apiInstance->getApplicationCustomer($applicationId, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List application&#39;s customers](#operation/getApplicationCustomers) endpoint. |

### Return type

[**\TalonOne\Client\Model\ApplicationCustomer**](../Model/ApplicationCustomer.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomerFriends

> \TalonOne\Client\Model\InlineResponse20020 getApplicationCustomerFriends($applicationId, $integrationId, $pageSize, $skip, $sort, $withTotalResultSize)

List friends referred by customer profile

List the friends referred by the specified customer profile in this Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$integrationId = 'integrationId_example'; // string | The Integration ID of the Advocate's Profile.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

try {
    $result = $apiInstance->getApplicationCustomerFriends($applicationId, $integrationId, $pageSize, $skip, $sort, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomerFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **integrationId** | **string**| The Integration ID of the Advocate&#39;s Profile. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomers

> \TalonOne\Client\Model\InlineResponse20012 getApplicationCustomers($applicationId, $integrationId, $pageSize, $skip, $withTotalResultSize)

List application's customers

List all the customers of the specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$integrationId = 'integrationId_example'; // string | Filter results performing an exact matching against the profile integration identifier.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

try {
    $result = $apiInstance->getApplicationCustomers($applicationId, $integrationId, $pageSize, $skip, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **integrationId** | **string**| Filter results performing an exact matching against the profile integration identifier. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomersByAttributes

> \TalonOne\Client\Model\InlineResponse20013 getApplicationCustomersByAttributes($applicationId, $body, $pageSize, $skip, $withTotalResultSize)

List application customers matching the given attributes

Get a list of the application customers matching the provided criteria.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CustomerProfileSearchQuery(); // \TalonOne\Client\Model\CustomerProfileSearchQuery | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

try {
    $result = $apiInstance->getApplicationCustomersByAttributes($applicationId, $body, $pageSize, $skip, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CustomerProfileSearchQuery**](../Model/CustomerProfileSearchQuery.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventTypes

> \TalonOne\Client\Model\InlineResponse20018 getApplicationEventTypes($applicationId, $pageSize, $skip, $sort)

List Applications event types

Get all of the distinct values of the Event `type` property for events recorded in the application.  See also: [Track an event](/integration-api/#operation/trackEvent)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getApplicationEventTypes($applicationId, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20017 getApplicationEventsWithoutTotalCount($applicationId, $pageSize, $skip, $sort, $type, $createdBefore, $createdAfter, $session, $profile, $customerName, $customerEmail, $couponCode, $referralCode, $ruleQuery, $campaignQuery)

List Applications events

Lists all events recorded for an application. Instead of having the total number of results in the response, this endpoint only if there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$type = 'type_example'; // string | Comma-separated list of types by which to filter events. Must be exact match(es).
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally.
$session = 'session_example'; // string | Session integration ID filter for events. Must be exact match.
$profile = 'profile_example'; // string | Profile integration ID filter for events. Must be exact match.
$customerName = 'customerName_example'; // string | Customer name filter for events. Will match substrings case-insensitively.
$customerEmail = 'customerEmail_example'; // string | Customer e-mail address filter for events. Will match substrings case-insensitively.
$couponCode = 'couponCode_example'; // string | Coupon code
$referralCode = 'referralCode_example'; // string | Referral code
$ruleQuery = 'ruleQuery_example'; // string | Rule name filter for events
$campaignQuery = 'campaignQuery_example'; // string | Campaign name filter for events

try {
    $result = $apiInstance->getApplicationEventsWithoutTotalCount($applicationId, $pageSize, $skip, $sort, $type, $createdBefore, $createdAfter, $session, $profile, $customerName, $customerEmail, $couponCode, $referralCode, $ruleQuery, $campaignQuery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEventsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **type** | **string**| Comma-separated list of types by which to filter events. Must be exact match(es). | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **session** | **string**| Session integration ID filter for events. Must be exact match. | [optional]
 **profile** | **string**| Profile integration ID filter for events. Must be exact match. | [optional]
 **customerName** | **string**| Customer name filter for events. Will match substrings case-insensitively. | [optional]
 **customerEmail** | **string**| Customer e-mail address filter for events. Will match substrings case-insensitively. | [optional]
 **couponCode** | **string**| Coupon code | [optional]
 **referralCode** | **string**| Referral code | [optional]
 **ruleQuery** | **string**| Rule name filter for events | [optional]
 **campaignQuery** | **string**| Campaign name filter for events | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSession

> \TalonOne\Client\Model\ApplicationSession getApplicationSession($applicationId, $sessionId)

Get Application session

Get the details of the given session. You can list the sessions with the [List application sessions](#operation/getApplicationSessions) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$sessionId = 56; // int | The ID of the session.

try {
    $result = $apiInstance->getApplicationSession($applicationId, $sessionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **sessionId** | **int**| The ID of the session. |

### Return type

[**\TalonOne\Client\Model\ApplicationSession**](../Model/ApplicationSession.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSessions

> \TalonOne\Client\Model\InlineResponse20016 getApplicationSessions($applicationId, $pageSize, $skip, $sort, $profile, $state, $createdBefore, $createdAfter, $coupon, $referral, $integrationId)

List Application sessions

List all the sessions of the specified Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$profile = 'profile_example'; // string | Profile integration ID filter for sessions. Must be exact match.
$state = 'state_example'; // string | Filter by sessions with this state. Must be exact match.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally.
$coupon = 'coupon_example'; // string | Filter by sessions with this coupon. Must be exact match.
$referral = 'referral_example'; // string | Filter by sessions with this referral. Must be exact match.
$integrationId = 'integrationId_example'; // string | Filter by sessions with this integrationId. Must be exact match.

try {
    $result = $apiInstance->getApplicationSessions($applicationId, $pageSize, $skip, $sort, $profile, $state, $createdBefore, $createdAfter, $coupon, $referral, $integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **profile** | **string**| Profile integration ID filter for sessions. Must be exact match. | [optional]
 **state** | **string**| Filter by sessions with this state. Must be exact match. | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **coupon** | **string**| Filter by sessions with this coupon. Must be exact match. | [optional]
 **referral** | **string**| Filter by sessions with this referral. Must be exact match. | [optional]
 **integrationId** | **string**| Filter by sessions with this integrationId. Must be exact match. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplications

> \TalonOne\Client\Model\InlineResponse2001 getApplications($pageSize, $skip, $sort)

List applications

List all applications in the current account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getApplications($pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttribute

> \TalonOne\Client\Model\Attribute getAttribute($attributeId)

Get custom attribute

Returns custom attribute for the account by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | 

try {
    $result = $apiInstance->getAttribute($attributeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttributes

> \TalonOne\Client\Model\InlineResponse20021 getAttributes($pageSize, $skip, $sort, $entity)

List custom attributes

Returns all the defined custom attributes for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$entity = 'entity_example'; // string | Returned attributes will be filtered by supplied entity

try {
    $result = $apiInstance->getAttributes($pageSize, $skip, $sort, $entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **entity** | **string**| Returned attributes will be filtered by supplied entity | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAudiences

> \TalonOne\Client\Model\InlineResponse20019 getAudiences($pageSize, $skip, $sort, $withTotalResultSize)

List audiences

Get All audiences created in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

try {
    $result = $apiInstance->getAudiences($pageSize, $skip, $sort, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAudiences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaign

> \TalonOne\Client\Model\Campaign getCampaign($applicationId, $campaignId)

Get campaign

Retrieve the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.

try {
    $result = $apiInstance->getCampaign($applicationId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |

### Return type

[**\TalonOne\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignAnalytics

> \TalonOne\Client\Model\InlineResponse20011 getCampaignAnalytics($applicationId, $campaignId, $rangeStart, $rangeEnd, $granularity)

Get analytics of campaigns

Retrieve statistical data about the performance of the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$granularity = 'granularity_example'; // string | The time interval between the results in the returned time-series.

try {
    $result = $apiInstance->getCampaignAnalytics($applicationId, $campaignId, $rangeStart, $rangeEnd, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **granularity** | **string**| The time interval between the results in the returned time-series. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignByAttributes

> \TalonOne\Client\Model\InlineResponse2002 getCampaignByAttributes($applicationId, $body, $pageSize, $skip, $sort, $campaignState)

List campaigns that match the given attributes

Get a list of all the campaigns that match a set of attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CampaignSearch(); // \TalonOne\Client\Model\CampaignSearch | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.

try {
    $result = $apiInstance->getCampaignByAttributes($applicationId, $body, $pageSize, $skip, $sort, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CampaignSearch**](../Model/CampaignSearch.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaigns

> \TalonOne\Client\Model\InlineResponse2002 getCampaigns($applicationId, $pageSize, $skip, $sort, $campaignState, $name, $tags, $createdBefore, $createdAfter, $campaignGroupId, $templateId)

List campaigns

List the campaigns of the specified application that match your filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.
$name = 'name_example'; // string | Filter results performing case-insensitive matching against the name of the campaign.
$tags = 'tags_example'; // string | Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \"name\" query parameter, a logical OR will be performed to search both tags and name for the provided values
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$campaignGroupId = 56; // int | Filter results to campaigns owned by the specified campaign group ID.
$templateId = 56; // int | The ID of the Campaign Template this Campaign was created from.

try {
    $result = $apiInstance->getCampaigns($applicationId, $pageSize, $skip, $sort, $campaignState, $name, $tags, $createdBefore, $createdAfter, $campaignGroupId, $templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]
 **name** | **string**| Filter results performing case-insensitive matching against the name of the campaign. | [optional]
 **tags** | **string**| Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \&quot;name\&quot; query parameter, a logical OR will be performed to search both tags and name for the provided values | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **campaignGroupId** | **int**| Filter results to campaigns owned by the specified campaign group ID. | [optional]
 **templateId** | **int**| The ID of the Campaign Template this Campaign was created from. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getChanges

> \TalonOne\Client\Model\InlineResponse20028 getChanges($pageSize, $skip, $sort, $applicationId, $entityPath, $userId, $createdBefore, $createdAfter, $withTotalResultSize, $includeOld)

Get audit log for an account

Get list of changes caused by API calls for an account. Only accessible for admins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$applicationId = 3.4; // float | Filter results by Application ID.
$entityPath = 'entityPath_example'; // string | Filter results on a case insensitive matching of the url path of the entity
$userId = 56; // int | Filter results that match the given user ID.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$includeOld = True; // bool | When this flag is set to false, the state without the change will not be returned. The default value is true.

try {
    $result = $apiInstance->getChanges($pageSize, $skip, $sort, $applicationId, $entityPath, $userId, $createdBefore, $createdAfter, $withTotalResultSize, $includeOld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **entityPath** | **string**| Filter results on a case insensitive matching of the url path of the entity | [optional]
 **userId** | **int**| Filter results that match the given user ID. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **includeOld** | **bool**| When this flag is set to false, the state without the change will not be returned. The default value is true. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCollection

> \TalonOne\Client\Model\Collection getCollection($applicationId, $campaignId, $collectionId)

Get collection

Retrieve the given collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).

try {
    $result = $apiInstance->getCollection($applicationId, $campaignId, $collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsByAttributes

> \TalonOne\Client\Model\InlineResponse2004 getCouponsByAttributes($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId)

List coupons that match the given attributes

Get a list of all the coupons that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CouponSearch(); // \TalonOne\Client\Model\CouponSearch | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batchId = 'batchId_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->getCouponsByAttributes($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CouponSearch**](../Model/CouponSearch.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batchId** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2005 getCouponsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch)

List coupons

List all the coupons matching the specified criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $result = $apiInstance->getCouponsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

[**\TalonOne\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReport

> \TalonOne\Client\Model\CustomerActivityReport getCustomerActivityReport($rangeStart, $rangeEnd, $applicationId, $customerId, $pageSize, $skip)

Get customer's activity report

Fetch the summary report of a given customer in the given application, in a time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List application's customers](#operation/getApplicationCustomers) endpoint.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomerActivityReport($rangeStart, $rangeEnd, $applicationId, $customerId, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List application&#39;s customers](#operation/getApplicationCustomers) endpoint. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\CustomerActivityReport**](../Model/CustomerActivityReport.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReportsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20015 getCustomerActivityReportsWithoutTotalCount($rangeStart, $rangeEnd, $applicationId, $pageSize, $skip, $sort, $name, $integrationId, $campaignName, $advocateName)

Get Activity Reports for Application Customers

Fetch summary reports for all application customers based on a time range. Instead of having the total number of results in the response, this endpoint only if there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$name = 'name_example'; // string | Only return reports matching the customer name
$integrationId = 'integrationId_example'; // string | Filter results performing an exact matching against the profile integration identifier.
$campaignName = 'campaignName_example'; // string | Only return reports matching the campaignName
$advocateName = 'advocateName_example'; // string | Only return reports matching the current customer referrer name

try {
    $result = $apiInstance->getCustomerActivityReportsWithoutTotalCount($rangeStart, $rangeEnd, $applicationId, $pageSize, $skip, $sort, $name, $integrationId, $campaignName, $advocateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReportsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **name** | **string**| Only return reports matching the customer name | [optional]
 **integrationId** | **string**| Filter results performing an exact matching against the profile integration identifier. | [optional]
 **campaignName** | **string**| Only return reports matching the campaignName | [optional]
 **advocateName** | **string**| Only return reports matching the current customer referrer name | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerAnalytics

> \TalonOne\Client\Model\CustomerAnalytics getCustomerAnalytics($applicationId, $customerId, $pageSize, $skip, $sort)

Get customer's analytics report

Fetch analytics for a given customer in the given application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List application's customers](#operation/getApplicationCustomers) endpoint.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getCustomerAnalytics($applicationId, $customerId, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List application&#39;s customers](#operation/getApplicationCustomers) endpoint. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\CustomerAnalytics**](../Model/CustomerAnalytics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfile

> \TalonOne\Client\Model\CustomerProfile getCustomerProfile($customerId)

Get customer profile

Return the details of the specified customer profile.  **Performance tip:** You can retrieve the same information via the Integration API, which can save you extra API requests. Consider these options: - Request the customer profile to be part of the response content using   [Update Customer Session](/integration-api/operation#updateCustomerSessionV2). - Send an empty update with the [Update Customer Profile](/integration-api/#operation/updateCustomerProfileV2) endpoint with `runRuleEngine=false`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List application's customers](#operation/getApplicationCustomers) endpoint.

try {
    $result = $apiInstance->getCustomerProfile($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List application&#39;s customers](#operation/getApplicationCustomers) endpoint. |

### Return type

[**\TalonOne\Client\Model\CustomerProfile**](../Model/CustomerProfile.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfiles

> \TalonOne\Client\Model\InlineResponse20014 getCustomerProfiles($pageSize, $skip)

List customer profiles

List all customer profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomerProfiles($pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomersByAttributes

> \TalonOne\Client\Model\InlineResponse20014 getCustomersByAttributes($body, $pageSize, $skip)

List customer profiles matching the given attributes

Get a list of the customer profiles matching the provided criteria.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\CustomerProfileSearchQuery(); // \TalonOne\Client\Model\CustomerProfileSearchQuery | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomersByAttributes($body, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\CustomerProfileSearchQuery**](../Model/CustomerProfileSearchQuery.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventTypes

> \TalonOne\Client\Model\InlineResponse20026 getEventTypes($name, $includeOldVersions, $pageSize, $skip, $sort)

List event types

Fetch all event type definitions for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Filter results to event types with the given name. This parameter implies `includeOldVersions`.
$includeOldVersions = false; // bool | Include all versions of every event type.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getEventTypes($name, $includeOldVersions, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter results to event types with the given name. This parameter implies &#x60;includeOldVersions&#x60;. | [optional]
 **includeOldVersions** | **bool**| Include all versions of every event type. | [optional] [default to false]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExports

> \TalonOne\Client\Model\InlineResponse20029 getExports($pageSize, $skip, $applicationId, $campaignId, $entity)

Get exports

List all past exports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$applicationId = 3.4; // float | Filter results by Application ID.
$campaignId = 56; // int | Filter by the campaign ID on which the limit counters are used.
$entity = 'entity_example'; // string | The name of the entity type that was exported.

try {
    $result = $apiInstance->getExports($pageSize, $skip, $applicationId, $campaignId, $entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **campaignId** | **int**| Filter by the campaign ID on which the limit counters are used. | [optional]
 **entity** | **string**| The name of the entity type that was exported. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPoints

> \TalonOne\Client\Model\LoyaltyLedger getLoyaltyPoints($loyaltyProgramId, $integrationId)

Get the Loyalty Ledger for this integrationID

Get the loyalty ledger for this profile integration ID.  To get the `integrationId` of the profile from a `sessionId`, use the [Update customer session](/integration-api/#operation/updateCustomerSessionV2).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.

try {
    $result = $apiInstance->getLoyaltyPoints($loyaltyProgramId, $integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |

### Return type

[**\TalonOne\Client\Model\LoyaltyLedger**](../Model/LoyaltyLedger.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyProgram

> \TalonOne\Client\Model\LoyaltyProgram getLoyaltyProgram($loyaltyProgramId)

Get loyalty program

Get the specified [loyalty program](https://www.talon.one/glossary/loyalty). To list all loyalty programs in your Application, use [List loyalty programs](#operation/getLoyaltyPrograms).  To list the loyalty programs that a customer profile is part of, use the [List customer profile data](/integration-api/#operation/getCustomerInventory)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | 

try {
    $result = $apiInstance->getLoyaltyProgram($loyaltyProgramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPrograms

> \TalonOne\Client\Model\InlineResponse2007 getLoyaltyPrograms()

List loyalty programs

List the loyalty programs of the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoyaltyPrograms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TalonOne\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyStatistics

> \TalonOne\Client\Model\LoyaltyStatistics getLoyaltyStatistics($loyaltyProgramId)

Get loyalty program statistics by loyalty program ID

Retrieve the statistics of the specified loyalty program such as the total active points, pending points, spent points and expired points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | 

try {
    $result = $apiInstance->getLoyaltyStatistics($loyaltyProgramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\LoyaltyStatistics**](../Model/LoyaltyStatistics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReferralsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2006 getReferralsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $code, $createdBefore, $createdAfter, $valid, $usable, $advocate)

List referrals

List all referrals of the specified campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$code = 'code_example'; // string | Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only referrals where `usageCounter < usageLimit` will be returned, \"false\" will return only referrals where `usageCounter >= usageLimit`.
$advocate = 'advocate_example'; // string | Filter results by match with a profile id specified in the referral's AdvocateProfileIntegrationId field

try {
    $result = $apiInstance->getReferralsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $code, $createdBefore, $createdAfter, $valid, $usable, $advocate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getReferralsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **code** | **string**| Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **advocate** | **string**| Filter results by match with a profile id specified in the referral&#39;s AdvocateProfileIntegrationId field | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRole

> \TalonOne\Client\Model\Role getRole($roleId)

Get role

Get the details of the specified role. To see all the roles, use [List roles](#operation/getAllRoles).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = 56; // int | The Id of role.

try {
    $result = $apiInstance->getRole($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**| The Id of role. |

### Return type

[**\TalonOne\Client\Model\Role**](../Model/Role.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRuleset

> \TalonOne\Client\Model\Ruleset getRuleset($applicationId, $campaignId, $rulesetId)

Get ruleset

Retrieve the specified ruleset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$rulesetId = 56; // int | 

try {
    $result = $apiInstance->getRuleset($applicationId, $campaignId, $rulesetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **rulesetId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRulesets

> \TalonOne\Client\Model\InlineResponse2003 getRulesets($applicationId, $campaignId, $pageSize, $skip, $sort)

List campaign rulesets

List all rulesets of this campaign. A ruleset is a revision of the rules of a campaign. **Important:** The response also includes deleted rules. You should only consider the latest revision of the returned rulesets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getRulesets($applicationId, $campaignId, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRulesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \TalonOne\Client\Model\User getUser($userId)

Get user

Retrieve the data (including an invitation code) for a user. Non-admin users can only get their own profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | The ID of the user.

try {
    $result = $apiInstance->getUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| The ID of the user. |

### Return type

[**\TalonOne\Client\Model\User**](../Model/User.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsers

> \TalonOne\Client\Model\InlineResponse20027 getUsers($pageSize, $skip, $sort)

List users in account

Retrieve all users in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getUsers($pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhook

> \TalonOne\Client\Model\Webhook getWebhook($webhookId)

Get webhook

Returns a webhook by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookId = 56; // int | 

try {
    $result = $apiInstance->getWebhook($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookActivationLogs

> \TalonOne\Client\Model\InlineResponse20024 getWebhookActivationLogs($pageSize, $skip, $sort, $integrationRequestUuid, $webhookId, $applicationId, $campaignId, $createdBefore, $createdAfter)

List webhook activation log entries

Webhook activation log entries would be created as soon as an integration request triggered an effect with a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$integrationRequestUuid = 'integrationRequestUuid_example'; // string | Filter results by integration request UUID.
$webhookId = 3.4; // float | Filter results by Webhook.
$applicationId = 3.4; // float | Filter results by Application ID.
$campaignId = 3.4; // float | Filter results by campaign.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally.

try {
    $result = $apiInstance->getWebhookActivationLogs($pageSize, $skip, $sort, $integrationRequestUuid, $webhookId, $applicationId, $campaignId, $createdBefore, $createdAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhookActivationLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **integrationRequestUuid** | **string**| Filter results by integration request UUID. | [optional]
 **webhookId** | **float**| Filter results by Webhook. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookLogs

> \TalonOne\Client\Model\InlineResponse20025 getWebhookLogs($pageSize, $skip, $sort, $status, $webhookId, $applicationId, $campaignId, $requestUuid, $createdBefore, $createdAfter)

List webhook log entries

Retrieve all webhook log entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$webhookId = 3.4; // float | Filter results by Webhook.
$applicationId = 3.4; // float | Filter results by Application ID.
$campaignId = 3.4; // float | Filter results by campaign.
$requestUuid = 'requestUuid_example'; // string | Filter results by request UUID.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally.

try {
    $result = $apiInstance->getWebhookLogs($pageSize, $skip, $sort, $status, $webhookId, $applicationId, $campaignId, $requestUuid, $createdBefore, $createdAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **webhookId** | **float**| Filter results by Webhook. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **requestUuid** | **string**| Filter results by request UUID. | [optional]
 **createdBefore** | **\DateTime**| Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhooks

> \TalonOne\Client\Model\InlineResponse20023 getWebhooks($applicationIds, $sort, $pageSize, $skip)

List webhooks

List all webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationIds = 'applicationIds_example'; // string | Filter by one or more application ids separated by comma
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getWebhooks($applicationIds, $sort, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationIds** | **string**| Filter by one or more application ids separated by comma | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importAccountCollection

> \TalonOne\Client\Model\Import importAccountCollection($collectionId, $upFile)

Import data in existing account-level collection via CSV file

Upload a CSV file containing the collection of string values that should be attached as payload for collection. The file should be sent as multipart data.  The import **replaces** the initial content of the collection.  The CSV file **must** only contain the following column:  - `item`: the values in your collection.  A collection is limited to 500,000 items.  Example:  ``` item Addidas Nike Asics ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importAccountCollection($collectionId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importAllowedList

> \TalonOne\Client\Model\Import importAllowedList($attributeId, $upFile)

Import allowed values for attribute

Upload a CSV file containing a list of allowed values for the specified attribute. These values are also called [picklist values](/docs/product/account/dev-tools/managing-attributes/#picklist-values).  The file should be sent as multipart data.  The import **replaces** the previous list of allowed values for this attribute, if any.  The CSV file **must** only contain the following column: - `item` (required): the values in your allowed list, for example a list of SKU's.  An allowed list is limited to 500,000 items.  Example:  ```text item CS-VG-04032021-UP-50D-10 CS-DV-04042021-UP-49D-12 CS-DG-02082021-UP-50G-07 ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | 
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importAllowedList($attributeId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importAllowedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **int**|  |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importCollection

> \TalonOne\Client\Model\Import importCollection($applicationId, $campaignId, $collectionId, $upFile)

Import data in existing collection via CSV file

Upload a CSV file containing the collection of string values that should be attached as payload for collection. The file should be sent as multipart data.  The import **replaces** the initial content of the collection.  The CSV file **must** only contain the following column:  - `item`: the values in your collection.  A collection is limited to 500,000 items.  Example:  ``` item Addidas Nike Asics ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importCollection($applicationId, $campaignId, $collectionId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importCoupons

> \TalonOne\Client\Model\Import importCoupons($applicationId, $campaignId, $upFile)

Import coupons via CSV file

Upload a CSV file containing the coupons that should be created. The file should be sent as multipart data.  The CSV file can contain the following columns:  - `value` (required): The coupon code. - `expirydate`: The end date in RFC3339 of the code redemption period. - `startdate`: The start date in RFC3339 of the code redemption period. - `limitval`: The maximum amount of redemptions of this code. Defaults to `1` when not provided. - `attributes`: A json object describing _custom_ referral attribute names and their values. Double the double-quotes in the object. - `discountlimit`: The amount of discounts that can be given with this coupon code.   For example, if you created a [custom attribute](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes)   called `category` associated to the coupon entity, set it with `\"{\"\"category\"\": \"\"10_off\"\"}\"`.  **Important:** Do not leave empty columns in the file.  You can use the timezone of your choice. It is converted to UTC internally by Talon.One.  **Example:**  ```text \"value\",\"expirydate\",\"startdate\",\"recipientintegrationid\",\"limitval\",\"attributes\",\"discountlimit\" COUP1,2018-07-01T04:00:00Z,2018-05-01T04:00:00Z,cust123,1,\"{\"\"Category\"\": \"\"10_off\"\"}\",2.4 ```  Once imported, you can find the `batchId` in the Campaign Manager or by using [List coupons](#operation/getReservedCustomers).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importCoupons($applicationId, $campaignId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importLoyaltyPoints

> \TalonOne\Client\Model\Import importLoyaltyPoints($loyaltyProgramId, $upFile)

Import loyalty points via CSV file

Upload a CSV file containing the [loyalty](https://www.talon.one/pillar-pages/loyalty) points that should be created. The file should be sent as multipart data.  **Important**: Importing points does **not** overwrite existing points for any customer.  The CSV file can contain the following columns:  - `customerprofileid`: The integration ID of the customer profile that should receive the loyalty points. - `amount`: The amount of points to award to the customer profile. - `startdate`: The earliest date when the points can be redeemed. On this date and until the expiry date, the points are `active`. - `expirydate`: The latest date when the points can be redeemed. After this date, the points are `expired`. - `subledgerid` (optional): The ID of the subledger that should received the points. - `reason` (optional): A reason why these points were awarded.  **Important:** Do not leave empty columns in the file.  You can use the timezone of your choice. It is converted to UTC internally by Talon.One.  **Example:**  ```text customerprofileid,amount,startdate,expirydate,subledgerid,reason URNGV8294NV,100,2009-11-10T23:00:00Z,2009-11-11T23:00:00Z,subledger1,appeasement ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | 
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importLoyaltyPoints($loyaltyProgramId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**|  |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importPoolGiveaways

> \TalonOne\Client\Model\Import importPoolGiveaways($poolId, $upFile)

Import giveaway codes into a giveaway pool

Upload a CSV file containing the giveaway codes that should be created. Send the file as multipart data.  The CSV file can contain the following columns: - `code` (required): the code of your giveaway, for instance, a gift card redemption code. - `startdate`:  the start date in RFC3339 of the code redemption period. - `enddate`: the last date in RFC3339 of the code redemption period. - `attributes`: A json object describing _custom_ giveaway attribute names and their values. Double the double-quotes in the object.   For example, if you [created a custom attribute](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes)   called `provider` associated to the giveaway entity, set it with `\"{\"\"provider\"\": \"\"myPartnerCompany\"\"}\"`.  **Important:** Do not leave empty columns in the file.  The `startdate` and `enddate` have nothing to do with the _validity_ of the codes. They are only used by the Rule Engine to award the codes or not. You can use the timezone of your choice. It is converted to UTC internally by Talon.One.  **Example:**  ```text code,startdate,enddate,attributes GIVEAWAY1,2020-11-10T23:00:00Z,2022-11-11T23:00:00Z,\"{\"\"provider\"\": \"\"Amazon\"\"}\" GIVEAWAY2,2020-11-10T23:00:00Z,2022-11-11T23:00:00Z,\"{\"\"provider\"\": \"\"Amazon\"\"}\" GIVEAWAY3,2021-01-10T23:00:00Z,2022-11-11T23:00:00Z,\"{\"\"provider\"\": \"\"Aliexpress\"\"}\" ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poolId = 56; // int | 
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importPoolGiveaways($poolId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importPoolGiveaways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poolId** | **int**|  |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importReferrals

> \TalonOne\Client\Model\Import importReferrals($applicationId, $campaignId, $upFile)

Import referrals via CSV file

Upload a CSV file containing the referrals that should be created. The file should be sent as multipart data.  The CSV file can contain the following columns:  - `code` (required): The referral code. - `advocateprofileintegrationid` (required): The profile ID of the advocate. - `startdate`: The start date in RFC3339 of the code redemption period. - `expirydate`: The end date in RFC3339 of the code redemption period. - `limitval`: The maximum amount of redemptions of this code. Defaults to `1` when left blank. - `attributes`: A json object describing _custom_ referral attribute names and their values. Double the double-quotes in the object.    For example, if you [created a custom attribute](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes)   called `category` associated to the referral entity, set it with `\"{\"\"category\"\": \"\"10_off\"\"}\"`.  You can use the timezone of your choice. It is converted to UTC internally by Talon.One.  **Example:**  ```text code,startdate,expirydate,advocateprofileintegrationid,limitval,attributes REFERRAL_CODE1,2020-11-10T23:00:00Z,2021-11-11T23:00:00Z,integid_4,1,\"{\"\"my_attribute\"\": \"\"10_off\"\"}\" REFERRAL_CODE2,2020-11-10T23:00:00Z,2021-11-11T23:00:00Z,integid1,1,\"{\"\"my_attribute\"\": \"\"20_off\"\"}\" ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importReferrals($applicationId, $campaignId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAccountCollections

> \TalonOne\Client\Model\InlineResponse2008 listAccountCollections($pageSize, $skip, $sort, $withTotalResultSize, $name)

List collections in account

List collections in account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$name = 'name_example'; // string | Filter by the name of the Collection.

try {
    $result = $apiInstance->listAccountCollections($pageSize, $skip, $sort, $withTotalResultSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listAccountCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **name** | **string**| Filter by the name of the Collection. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCollections

> \TalonOne\Client\Model\InlineResponse2008 listCollections($applicationId, $campaignId, $pageSize, $skip, $sort, $withTotalResultSize, $name)

List collections

List collections in the campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$name = 'name_example'; // string | Filter by the name of the Collection.

try {
    $result = $apiInstance->listCollections($applicationId, $campaignId, $pageSize, $skip, $sort, $withTotalResultSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **name** | **string**| Filter by the name of the Collection. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCollectionsInApplication

> \TalonOne\Client\Model\InlineResponse2008 listCollectionsInApplication($applicationId, $pageSize, $skip, $sort, $withTotalResultSize, $name)

List collections in application

List collections from all campaigns in the Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$name = 'name_example'; // string | Filter by the name of the Collection.

try {
    $result = $apiInstance->listCollectionsInApplication($applicationId, $pageSize, $skip, $sort, $withTotalResultSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listCollectionsInApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **name** | **string**| Filter by the name of the Collection. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeLoyaltyPoints

> removeLoyaltyPoints($loyaltyProgramId, $integrationId, $body)

Deduct points in loyalty program for given customer

Remove points from the specified loyalty program and specified customer profile.  To get the `integrationId` of the profile from a `sessionId`, use the [Update customer session](/integration-api/#operation/updateCustomerSessionV2).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.
$body = new \TalonOne\Client\Model\LoyaltyPoints(); // \TalonOne\Client\Model\LoyaltyPoints | 

try {
    $apiInstance->removeLoyaltyPoints($loyaltyProgramId, $integrationId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->removeLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |
 **body** | [**\TalonOne\Client\Model\LoyaltyPoints**](../Model/LoyaltyPoints.md)|  |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resetPassword

> \TalonOne\Client\Model\NewPassword resetPassword($body)

Reset password

Consumes the supplied password reset token and updates the password for the associated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewPassword(); // \TalonOne\Client\Model\NewPassword | 

try {
    $result = $apiInstance->resetPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewPassword**](../Model/NewPassword.md)|  |

### Return type

[**\TalonOne\Client\Model\NewPassword**](../Model/NewPassword.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedApplicationWideWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2005 searchCouponsAdvancedApplicationWideWithoutTotalCount($applicationId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState)

List coupons that match the given attributes in all active campaigns of an application

Lists all the coupons with attributes matching the query criteria in all active campaigns of the specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \stdClass; // object | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.

try {
    $result = $apiInstance->searchCouponsAdvancedApplicationWideWithoutTotalCount($applicationId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedApplicationWideWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | **object**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2005 searchCouponsAdvancedWithoutTotalCount($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId)

List coupons that match the given attributes

Lists all the coupons with attributes matching the query criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \stdClass; // object | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batchId = 'batchId_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->searchCouponsAdvancedWithoutTotalCount($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | **object**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batchId** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAccountCollection

> \TalonOne\Client\Model\Collection updateAccountCollection($collectionId, $body)

Update account-level collection

Update account-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).
$body = new \TalonOne\Client\Model\UpdateCollection(); // \TalonOne\Client\Model\UpdateCollection | 

try {
    $result = $apiInstance->updateAccountCollection($collectionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |
 **body** | [**\TalonOne\Client\Model\UpdateCollection**](../Model/UpdateCollection.md)|  |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost updateAdditionalCost($additionalCostId, $body)

Update additional cost

Updates an existing additional cost. Once created, the only property of an additional cost that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additionalCostId = 56; // int | 
$body = new \TalonOne\Client\Model\NewAdditionalCost(); // \TalonOne\Client\Model\NewAdditionalCost | 

try {
    $result = $apiInstance->updateAdditionalCost($additionalCostId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additionalCostId** | **int**|  |
 **body** | [**\TalonOne\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)|  |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAttribute

> \TalonOne\Client\Model\Attribute updateAttribute($attributeId, $body)

Update custom attribute

Updates an existing custom attribute. Once created, the only property of a custom attribute that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations. E.g. if you have a customer profile attribute with the name `region`, and your integration is sending `attributes.region` with customer profile updates, changing the name to `locale` would cause the integration requests to begin failing.  If you **really** need to change the `type` or `name` property of a custom attribute, create a new attribute and update any relevant integrations and rules to use the new attribute. Then delete the old attribute when you are confident you have migrated any needed data from the old attribute to the new one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | 
$body = new \TalonOne\Client\Model\NewAttribute(); // \TalonOne\Client\Model\NewAttribute | 

try {
    $result = $apiInstance->updateAttribute($attributeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **int**|  |
 **body** | [**\TalonOne\Client\Model\NewAttribute**](../Model/NewAttribute.md)|  |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCampaign

> \TalonOne\Client\Model\Campaign updateCampaign($applicationId, $campaignId, $body)

Update campaign

Update the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\UpdateCampaign(); // \TalonOne\Client\Model\UpdateCampaign | 

try {
    $result = $apiInstance->updateCampaign($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\UpdateCampaign**](../Model/UpdateCampaign.md)|  |

### Return type

[**\TalonOne\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCollection

> \TalonOne\Client\Model\Collection updateCollection($applicationId, $campaignId, $collectionId, $body)

Update collection

Upate the specified collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication).
$body = new \TalonOne\Client\Model\UpdateCollection(); // \TalonOne\Client\Model\UpdateCollection | 

try {
    $result = $apiInstance->updateCollection($applicationId, $campaignId, $collectionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collection in account endpoint](#operation/listCollectionsInApplication). |
 **body** | [**\TalonOne\Client\Model\UpdateCollection**](../Model/UpdateCollection.md)|  |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCoupon

> \TalonOne\Client\Model\Coupon updateCoupon($applicationId, $campaignId, $couponId, $body)

Update coupon

Update the specified coupon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$couponId = 'couponId_example'; // string | The ID of the coupon code to update
$body = new \TalonOne\Client\Model\UpdateCoupon(); // \TalonOne\Client\Model\UpdateCoupon | 

try {
    $result = $apiInstance->updateCoupon($applicationId, $campaignId, $couponId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **couponId** | **string**| The ID of the coupon code to update |
 **body** | [**\TalonOne\Client\Model\UpdateCoupon**](../Model/UpdateCoupon.md)|  |

### Return type

[**\TalonOne\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCouponBatch

> updateCouponBatch($applicationId, $campaignId, $body)

Update coupons

Update all coupons of an campaign, or a specific batch of coupons. You can find the `batchId` in the **Coupons** view of your Application in the Campaign Manager or by using [List coupons](#operation/getCouponsWithoutTotalCount).  **Important**: - Only send sequential requests to this endpoint. - Requests to this endpoint timeout after 30 minutes. If you hit a timeout, reach out to our support team.  To update a specific coupon, use [Update coupon](#operation/updateCoupon).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\UpdateCouponBatch(); // \TalonOne\Client\Model\UpdateCouponBatch | 

try {
    $apiInstance->updateCouponBatch($applicationId, $campaignId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCouponBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\UpdateCouponBatch**](../Model/UpdateCouponBatch.md)|  |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReferral

> \TalonOne\Client\Model\Referral updateReferral($applicationId, $campaignId, $referralId, $body)

Update referral

Update the specified referral.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$referralId = 'referralId_example'; // string | The ID of the referral code to delete
$body = new \TalonOne\Client\Model\UpdateReferral(); // \TalonOne\Client\Model\UpdateReferral | 

try {
    $result = $apiInstance->updateReferral($applicationId, $campaignId, $referralId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **referralId** | **string**| The ID of the referral code to delete |
 **body** | [**\TalonOne\Client\Model\UpdateReferral**](../Model/UpdateReferral.md)|  |

### Return type

[**\TalonOne\Client\Model\Referral**](../Model/Referral.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

