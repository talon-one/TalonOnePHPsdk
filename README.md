# Talon.One PHP SDK

This SDK supports all of the operations of Talon.One's Integration API and Management API.

## Requirements

- [PHP 7.1 and later](https://www.php.net/)

## Installation and usage

### Using Composer

This is the recommended method.

1. Install [Composer](https://getcomposer.org/) following the [installation instructions](https://getcomposer.org/doc/00-intro.md).
1. Execute the following command in your project root to install this library:

   ```sh
   composer require talon-one/talon-one-client
   ```

1. Include the autoloader:

   ```php
   require_once '/path/to/your-project/vendor/autoload.php';
   ```

### Using the release's source

If you prefer not to use Composer, you can download the package in its entirety.
The [Releases](https://github.com/talon-one/TalonOnePHPsdk/releases) page lists all stable versions.

1. Download the source code of the desired version, or checkout the source code directly from the repository.
1. Uncompress the zip file you downloaded, and include the autoloader in your project:

   ```php
   require_once '/path/to/talon-one-client/vendor/autoload.php';
   ```

## Running the tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Determining the base URL of the endpoints

The API is available at the same hostname as your Campaign Manager deployment.
For example, if you access the Campaign Manager at `https://yourbaseurl.talon.one`,
the URL for the [Update customer session](https://docs.talon.one/integration-api#operation/updateCustomerSessionV2) endpoint
is `https://yourbaseurl.talon.one/v2/customer_sessions/{Id}`.

## Getting started

### Integration API

The following code shows an example of using the Integration API:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Host, API key, & API key prefix for integration authentication
$config = \TalonOne\Client\Configuration::getDefaultConfiguration()
    ->setHost('https://yourbaseurl.talon.one')
    ->setApiKeyPrefix('Authorization', 'ApiKey-v1')
    ->setApiKey('Authorization', 'dbc644d33aa74d582bd9479c59e16f970fe13bf34a208c39d6c7fa7586968468');

// Initiating an integration api instance with the config
$apiInstance = new \TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default when `null` is passed.
    null, // new YouClientImplementation(),
    $config
);

$customer_session_id = 'customer_session_id_example'; // string | The unique identifier for this session
$customer_session = new \TalonOne\Client\Model\NewCustomerSessionV2([
    'profileId' => 'example_prof_id',
    'couponCodes' => [
        'Cool-Summer!'
    ],
    'cartItems' => [
        new \TalonOne\Client\Model\CartItem([
            'name' => 'Hawaiian Pizza',
            'sku' => 'piz-hw-001',
            'quantity' => 1,
            'price' => 5.85
        ])
    ]
]);
$body = new \TalonOne\Client\Model\IntegrationRequest([
    'customerSession' => $customer_session,
    // Optional list of requested information to be present on the response.
    // See lib/Model/IntegrationRequest.php#getResponseContentAllowableValues for full list
    // 'responseContent' => [
    //     \TalonOne\Client\Model\IntegrationRequest::RESPONSE_CONTENT_CUSTOMER_SESSION,
    //     \TalonOne\Client\Model\IntegrationRequest::RESPONSE_CONTENT_COUPONS
    // ]
]);

try {
    // Create/Update a customer session using `updateCustomerSessionV2` function
    $integration_state = $apiInstance->updateCustomerSessionV2($customer_session_id, $body);
    print_r($integration_state);

    // Parsing the returned effects list, please consult https://developers.talon.one/Integration-API/handling-effects-v2 for the full list of effects and their corresponding properties
    foreach ($integration_state->getEffects() as $effect) {
        if ("addLoyaltyPoints" == $effect->getEffectType()) {
            // Initiating right props instance according to the effect type
            $props = new \TalonOne\Client\Model\AddLoyaltyPointsEffectProps((array) $effect->getProps());

            // Access the specific effect's properties
            echo $props->getName(), ':: ', $props->getRecipientIntegrationId(), ' just earned ',  $props->getValue(), ' points', PHP_EOL;
        }
        if ("acceptCoupon" == $effect->getEffectType()) {
            // Initiating right props instance according to the effect type
            $props = new \TalonOne\Client\Model\AcceptCouponEffectProps((array) $effect->getProps());
            // work with AcceptCouponEffectProps' properties
            // ...
        }
    }
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerSessionV2: ', $e->getMessage(), PHP_EOL;
}

?>
```

### Management API

The following code shows an example of using the Management API:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Host, API key, & API key prefix for management authentication
$config = \TalonOne\Client\Configuration::getDefaultConfiguration()
    ->setHost('https://yourbaseurl.talon.one')
    ->setApiKeyPrefix('Authorization', 'ManagementKey-v1')
    ->setApiKey('Authorization', '2f0dce055da01ae595005d7d79154bae7448d319d5fc7c5b2951fadd6ba1ea07');

// Initiating a management api instance with the config
$apiInstance = new \TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default when `null` is passed.
    null, // new YouClientImplementation(),
    $config
);

try {
    $application_id = 7; // int | desired application identifier
    // Calling `getApplication` function
    $application = $apiInstance->getApplication($application_id);
    print_r($application);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplication: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API endpoints

All URLs are relative to `https://yourbaseurl.talon.one`.

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*IntegrationApi* | [**createAudienceV2**](docs/Api/IntegrationApi.md#createaudiencev2) | **POST** /v2/audiences | Create audience
*IntegrationApi* | [**createCouponReservation**](docs/Api/IntegrationApi.md#createcouponreservation) | **POST** /v1/coupon_reservations/{couponValue} | Create coupon reservation
*IntegrationApi* | [**createReferral**](docs/Api/IntegrationApi.md#createreferral) | **POST** /v1/referrals | Create referral code for an advocate
*IntegrationApi* | [**createReferralsForMultipleAdvocates**](docs/Api/IntegrationApi.md#createreferralsformultipleadvocates) | **POST** /v1/referrals_for_multiple_advocates | Create referral codes for multiple advocates
*IntegrationApi* | [**deleteAudienceMembershipsV2**](docs/Api/IntegrationApi.md#deleteaudiencemembershipsv2) | **DELETE** /v2/audiences/{audienceId}/memberships | Delete audience memberships
*IntegrationApi* | [**deleteAudienceV2**](docs/Api/IntegrationApi.md#deleteaudiencev2) | **DELETE** /v2/audiences/{audienceId} | Delete audience
*IntegrationApi* | [**deleteCouponReservation**](docs/Api/IntegrationApi.md#deletecouponreservation) | **DELETE** /v1/coupon_reservations/{couponValue} | Delete coupon reservations
*IntegrationApi* | [**deleteCustomerData**](docs/Api/IntegrationApi.md#deletecustomerdata) | **DELETE** /v1/customer_data/{integrationId} | Delete customer&#39;s personal data
*IntegrationApi* | [**generateLoyaltyCard**](docs/Api/IntegrationApi.md#generateloyaltycard) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/cards | Generate loyalty card
*IntegrationApi* | [**getCustomerAchievementHistory**](docs/Api/IntegrationApi.md#getcustomerachievementhistory) | **GET** /v1/customer_profiles/{integrationId}/achievements/{achievementId} | List customer&#39;s achievement history
*IntegrationApi* | [**getCustomerAchievements**](docs/Api/IntegrationApi.md#getcustomerachievements) | **GET** /v1/customer_profiles/{integrationId}/achievements | List customer&#39;s available achievements
*IntegrationApi* | [**getCustomerInventory**](docs/Api/IntegrationApi.md#getcustomerinventory) | **GET** /v1/customer_profiles/{integrationId}/inventory | List customer data
*IntegrationApi* | [**getCustomerSession**](docs/Api/IntegrationApi.md#getcustomersession) | **GET** /v2/customer_sessions/{customerSessionId} | Get customer session
*IntegrationApi* | [**getLoyaltyBalances**](docs/Api/IntegrationApi.md#getloyaltybalances) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/balances | Get customer&#39;s loyalty balances
*IntegrationApi* | [**getLoyaltyCardBalances**](docs/Api/IntegrationApi.md#getloyaltycardbalances) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/balances | Get card&#39;s point balances
*IntegrationApi* | [**getLoyaltyCardPoints**](docs/Api/IntegrationApi.md#getloyaltycardpoints) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/points | List card&#39;s unused loyalty points
*IntegrationApi* | [**getLoyaltyCardTransactions**](docs/Api/IntegrationApi.md#getloyaltycardtransactions) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/transactions | List card&#39;s transactions
*IntegrationApi* | [**getLoyaltyProgramProfilePoints**](docs/Api/IntegrationApi.md#getloyaltyprogramprofilepoints) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/points | List customer&#39;s unused loyalty points
*IntegrationApi* | [**getLoyaltyProgramProfileTransactions**](docs/Api/IntegrationApi.md#getloyaltyprogramprofiletransactions) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/transactions | List customer&#39;s loyalty transactions
*IntegrationApi* | [**getReservedCustomers**](docs/Api/IntegrationApi.md#getreservedcustomers) | **GET** /v1/coupon_reservations/customerprofiles/{couponValue} | List customers that have this coupon reserved
*IntegrationApi* | [**linkLoyaltyCardToProfile**](docs/Api/IntegrationApi.md#linkloyaltycardtoprofile) | **POST** /v2/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/link_profile | Link customer profile to card
*IntegrationApi* | [**reopenCustomerSession**](docs/Api/IntegrationApi.md#reopencustomersession) | **PUT** /v2/customer_sessions/{customerSessionId}/reopen | Reopen customer session
*IntegrationApi* | [**returnCartItems**](docs/Api/IntegrationApi.md#returncartitems) | **POST** /v2/customer_sessions/{customerSessionId}/returns | Return cart items
*IntegrationApi* | [**syncCatalog**](docs/Api/IntegrationApi.md#synccatalog) | **PUT** /v1/catalogs/{catalogId}/sync | Sync cart item catalog
*IntegrationApi* | [**trackEventV2**](docs/Api/IntegrationApi.md#trackeventv2) | **POST** /v2/events | Track event
*IntegrationApi* | [**updateAudienceCustomersAttributes**](docs/Api/IntegrationApi.md#updateaudiencecustomersattributes) | **PUT** /v2/audience_customers/{audienceId}/attributes | Update profile attributes for all customers in audience
*IntegrationApi* | [**updateAudienceV2**](docs/Api/IntegrationApi.md#updateaudiencev2) | **PUT** /v2/audiences/{audienceId} | Update audience name
*IntegrationApi* | [**updateCustomerProfileAudiences**](docs/Api/IntegrationApi.md#updatecustomerprofileaudiences) | **POST** /v2/customer_audiences | Update multiple customer profiles&#39; audiences
*IntegrationApi* | [**updateCustomerProfileV2**](docs/Api/IntegrationApi.md#updatecustomerprofilev2) | **PUT** /v2/customer_profiles/{integrationId} | Update customer profile
*IntegrationApi* | [**updateCustomerProfilesV2**](docs/Api/IntegrationApi.md#updatecustomerprofilesv2) | **PUT** /v2/customer_profiles | Update multiple customer profiles
*IntegrationApi* | [**updateCustomerSessionV2**](docs/Api/IntegrationApi.md#updatecustomersessionv2) | **PUT** /v2/customer_sessions/{customerSessionId} | Update customer session
*ManagementApi* | [**activateUserByEmail**](docs/Api/ManagementApi.md#activateuserbyemail) | **POST** /v1/users/activate | Enable user by email address
*ManagementApi* | [**addLoyaltyCardPoints**](docs/Api/ManagementApi.md#addloyaltycardpoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/add_points | Add points to card
*ManagementApi* | [**addLoyaltyPoints**](docs/Api/ManagementApi.md#addloyaltypoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/add_points | Add points to customer profile
*ManagementApi* | [**copyCampaignToApplications**](docs/Api/ManagementApi.md#copycampaigntoapplications) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/copy | Copy the campaign into the specified Application
*ManagementApi* | [**createAccountCollection**](docs/Api/ManagementApi.md#createaccountcollection) | **POST** /v1/collections | Create account-level collection
*ManagementApi* | [**createAchievement**](docs/Api/ManagementApi.md#createachievement) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/achievements | Create achievement
*ManagementApi* | [**createAdditionalCost**](docs/Api/ManagementApi.md#createadditionalcost) | **POST** /v1/additional_costs | Create additional cost
*ManagementApi* | [**createAttribute**](docs/Api/ManagementApi.md#createattribute) | **POST** /v1/attributes | Create custom attribute
*ManagementApi* | [**createBatchLoyaltyCards**](docs/Api/ManagementApi.md#createbatchloyaltycards) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/cards/batch | Create loyalty cards
*ManagementApi* | [**createCampaignFromTemplate**](docs/Api/ManagementApi.md#createcampaignfromtemplate) | **POST** /v1/applications/{applicationId}/create_campaign_from_template | Create campaign from campaign template
*ManagementApi* | [**createCollection**](docs/Api/ManagementApi.md#createcollection) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/collections | Create campaign-level collection
*ManagementApi* | [**createCoupons**](docs/Api/ManagementApi.md#createcoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Create coupons
*ManagementApi* | [**createCouponsAsync**](docs/Api/ManagementApi.md#createcouponsasync) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_async | Create coupons asynchronously
*ManagementApi* | [**createCouponsDeletionJob**](docs/Api/ManagementApi.md#createcouponsdeletionjob) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_deletion_jobs | Creates a coupon deletion job
*ManagementApi* | [**createCouponsForMultipleRecipients**](docs/Api/ManagementApi.md#createcouponsformultiplerecipients) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_with_recipients | Create coupons for multiple recipients
*ManagementApi* | [**createInviteEmail**](docs/Api/ManagementApi.md#createinviteemail) | **POST** /v1/invite_emails | Resend invitation email
*ManagementApi* | [**createInviteV2**](docs/Api/ManagementApi.md#createinvitev2) | **POST** /v2/invites | Invite user
*ManagementApi* | [**createPasswordRecoveryEmail**](docs/Api/ManagementApi.md#createpasswordrecoveryemail) | **POST** /v1/password_recovery_emails | Request a password reset
*ManagementApi* | [**createSession**](docs/Api/ManagementApi.md#createsession) | **POST** /v1/sessions | Create session
*ManagementApi* | [**createStore**](docs/Api/ManagementApi.md#createstore) | **POST** /v1/applications/{applicationId}/stores | Create store
*ManagementApi* | [**deactivateUserByEmail**](docs/Api/ManagementApi.md#deactivateuserbyemail) | **POST** /v1/users/deactivate | Disable user by email address
*ManagementApi* | [**deductLoyaltyCardPoints**](docs/Api/ManagementApi.md#deductloyaltycardpoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/deduct_points | Deduct points from card
*ManagementApi* | [**deleteAccountCollection**](docs/Api/ManagementApi.md#deleteaccountcollection) | **DELETE** /v1/collections/{collectionId} | Delete account-level collection
*ManagementApi* | [**deleteAchievement**](docs/Api/ManagementApi.md#deleteachievement) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/achievements/{achievementId} | Delete achievement
*ManagementApi* | [**deleteCampaign**](docs/Api/ManagementApi.md#deletecampaign) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId} | Delete campaign
*ManagementApi* | [**deleteCollection**](docs/Api/ManagementApi.md#deletecollection) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Delete campaign-level collection
*ManagementApi* | [**deleteCoupon**](docs/Api/ManagementApi.md#deletecoupon) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Delete coupon
*ManagementApi* | [**deleteCoupons**](docs/Api/ManagementApi.md#deletecoupons) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Delete coupons
*ManagementApi* | [**deleteLoyaltyCard**](docs/Api/ManagementApi.md#deleteloyaltycard) | **DELETE** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId} | Delete loyalty card
*ManagementApi* | [**deleteReferral**](docs/Api/ManagementApi.md#deletereferral) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Delete referral
*ManagementApi* | [**deleteStore**](docs/Api/ManagementApi.md#deletestore) | **DELETE** /v1/applications/{applicationId}/stores/{storeId} | Delete store
*ManagementApi* | [**deleteUser**](docs/Api/ManagementApi.md#deleteuser) | **DELETE** /v1/users/{userId} | Delete user
*ManagementApi* | [**deleteUserByEmail**](docs/Api/ManagementApi.md#deleteuserbyemail) | **POST** /v1/users/delete | Delete user by email address
*ManagementApi* | [**destroySession**](docs/Api/ManagementApi.md#destroysession) | **DELETE** /v1/sessions | Destroy session
*ManagementApi* | [**disconnectCampaignStores**](docs/Api/ManagementApi.md#disconnectcampaignstores) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/stores | Disconnect stores
*ManagementApi* | [**exportAccountCollectionItems**](docs/Api/ManagementApi.md#exportaccountcollectionitems) | **GET** /v1/collections/{collectionId}/export | Export account-level collection&#39;s items
*ManagementApi* | [**exportAchievements**](docs/Api/ManagementApi.md#exportachievements) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/achievements/{achievementId}/export | Export achievement customer data
*ManagementApi* | [**exportAudiencesMemberships**](docs/Api/ManagementApi.md#exportaudiencesmemberships) | **GET** /v1/audiences/{audienceId}/memberships/export | Export audience members
*ManagementApi* | [**exportCampaignStores**](docs/Api/ManagementApi.md#exportcampaignstores) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/stores/export | Export stores
*ManagementApi* | [**exportCollectionItems**](docs/Api/ManagementApi.md#exportcollectionitems) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId}/export | Export campaign-level collection&#39;s items
*ManagementApi* | [**exportCoupons**](docs/Api/ManagementApi.md#exportcoupons) | **GET** /v1/applications/{applicationId}/export_coupons | Export coupons
*ManagementApi* | [**exportCustomerSessions**](docs/Api/ManagementApi.md#exportcustomersessions) | **GET** /v1/applications/{applicationId}/export_customer_sessions | Export customer sessions
*ManagementApi* | [**exportCustomersTiers**](docs/Api/ManagementApi.md#exportcustomerstiers) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_customers_tiers | Export customers&#39; tier data
*ManagementApi* | [**exportEffects**](docs/Api/ManagementApi.md#exporteffects) | **GET** /v1/applications/{applicationId}/export_effects | Export triggered effects
*ManagementApi* | [**exportLoyaltyBalance**](docs/Api/ManagementApi.md#exportloyaltybalance) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_customer_balance | Export customer loyalty balance to CSV
*ManagementApi* | [**exportLoyaltyBalances**](docs/Api/ManagementApi.md#exportloyaltybalances) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_customer_balances | Export customer loyalty balances
*ManagementApi* | [**exportLoyaltyCardBalances**](docs/Api/ManagementApi.md#exportloyaltycardbalances) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_card_balances | Export all card transaction logs
*ManagementApi* | [**exportLoyaltyCardLedger**](docs/Api/ManagementApi.md#exportloyaltycardledger) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/export_log | Export card&#39;s ledger log
*ManagementApi* | [**exportLoyaltyCards**](docs/Api/ManagementApi.md#exportloyaltycards) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/export | Export loyalty cards
*ManagementApi* | [**exportLoyaltyLedger**](docs/Api/ManagementApi.md#exportloyaltyledger) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/export_log | Export customer&#39;s transaction logs
*ManagementApi* | [**exportPoolGiveaways**](docs/Api/ManagementApi.md#exportpoolgiveaways) | **GET** /v1/giveaways/pools/{poolId}/export | Export giveaway codes of a giveaway pool
*ManagementApi* | [**exportReferrals**](docs/Api/ManagementApi.md#exportreferrals) | **GET** /v1/applications/{applicationId}/export_referrals | Export referrals
*ManagementApi* | [**getAccessLogsWithoutTotalCount**](docs/Api/ManagementApi.md#getaccesslogswithouttotalcount) | **GET** /v1/applications/{applicationId}/access_logs/no_total | Get access logs for Application
*ManagementApi* | [**getAccount**](docs/Api/ManagementApi.md#getaccount) | **GET** /v1/accounts/{accountId} | Get account details
*ManagementApi* | [**getAccountAnalytics**](docs/Api/ManagementApi.md#getaccountanalytics) | **GET** /v1/accounts/{accountId}/analytics | Get account analytics
*ManagementApi* | [**getAccountCollection**](docs/Api/ManagementApi.md#getaccountcollection) | **GET** /v1/collections/{collectionId} | Get account-level collection
*ManagementApi* | [**getAchievement**](docs/Api/ManagementApi.md#getachievement) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/achievements/{achievementId} | Get achievement
*ManagementApi* | [**getAdditionalCost**](docs/Api/ManagementApi.md#getadditionalcost) | **GET** /v1/additional_costs/{additionalCostId} | Get additional cost
*ManagementApi* | [**getAdditionalCosts**](docs/Api/ManagementApi.md#getadditionalcosts) | **GET** /v1/additional_costs | List additional costs
*ManagementApi* | [**getApplication**](docs/Api/ManagementApi.md#getapplication) | **GET** /v1/applications/{applicationId} | Get Application
*ManagementApi* | [**getApplicationApiHealth**](docs/Api/ManagementApi.md#getapplicationapihealth) | **GET** /v1/applications/{applicationId}/health_report | Get Application health
*ManagementApi* | [**getApplicationCustomer**](docs/Api/ManagementApi.md#getapplicationcustomer) | **GET** /v1/applications/{applicationId}/customers/{customerId} | Get application&#39;s customer
*ManagementApi* | [**getApplicationCustomerFriends**](docs/Api/ManagementApi.md#getapplicationcustomerfriends) | **GET** /v1/applications/{applicationId}/profile/{integrationId}/friends | List friends referred by customer profile
*ManagementApi* | [**getApplicationCustomers**](docs/Api/ManagementApi.md#getapplicationcustomers) | **GET** /v1/applications/{applicationId}/customers | List application&#39;s customers
*ManagementApi* | [**getApplicationCustomersByAttributes**](docs/Api/ManagementApi.md#getapplicationcustomersbyattributes) | **POST** /v1/applications/{applicationId}/customer_search | List application customers matching the given attributes
*ManagementApi* | [**getApplicationEventTypes**](docs/Api/ManagementApi.md#getapplicationeventtypes) | **GET** /v1/applications/{applicationId}/event_types | List Applications event types
*ManagementApi* | [**getApplicationEventsWithoutTotalCount**](docs/Api/ManagementApi.md#getapplicationeventswithouttotalcount) | **GET** /v1/applications/{applicationId}/events/no_total | List Applications events
*ManagementApi* | [**getApplicationSession**](docs/Api/ManagementApi.md#getapplicationsession) | **GET** /v1/applications/{applicationId}/sessions/{sessionId} | Get Application session
*ManagementApi* | [**getApplicationSessions**](docs/Api/ManagementApi.md#getapplicationsessions) | **GET** /v1/applications/{applicationId}/sessions | List Application sessions
*ManagementApi* | [**getApplications**](docs/Api/ManagementApi.md#getapplications) | **GET** /v1/applications | List Applications
*ManagementApi* | [**getAttribute**](docs/Api/ManagementApi.md#getattribute) | **GET** /v1/attributes/{attributeId} | Get custom attribute
*ManagementApi* | [**getAttributes**](docs/Api/ManagementApi.md#getattributes) | **GET** /v1/attributes | List custom attributes
*ManagementApi* | [**getAudienceMemberships**](docs/Api/ManagementApi.md#getaudiencememberships) | **GET** /v1/audiences/{audienceId}/memberships | List audience members
*ManagementApi* | [**getAudiences**](docs/Api/ManagementApi.md#getaudiences) | **GET** /v1/audiences | List audiences
*ManagementApi* | [**getAudiencesAnalytics**](docs/Api/ManagementApi.md#getaudiencesanalytics) | **GET** /v1/audiences/analytics | List audience analytics
*ManagementApi* | [**getCampaign**](docs/Api/ManagementApi.md#getcampaign) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId} | Get campaign
*ManagementApi* | [**getCampaignAnalytics**](docs/Api/ManagementApi.md#getcampaignanalytics) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/analytics | Get analytics of campaigns
*ManagementApi* | [**getCampaignByAttributes**](docs/Api/ManagementApi.md#getcampaignbyattributes) | **POST** /v1/applications/{applicationId}/campaigns_search | List campaigns that match the given attributes
*ManagementApi* | [**getCampaignGroup**](docs/Api/ManagementApi.md#getcampaigngroup) | **GET** /v1/campaign_groups/{campaignGroupId} | Get campaign access group
*ManagementApi* | [**getCampaignGroups**](docs/Api/ManagementApi.md#getcampaigngroups) | **GET** /v1/campaign_groups | List campaign access groups
*ManagementApi* | [**getCampaignTemplates**](docs/Api/ManagementApi.md#getcampaigntemplates) | **GET** /v1/campaign_templates | List campaign templates
*ManagementApi* | [**getCampaigns**](docs/Api/ManagementApi.md#getcampaigns) | **GET** /v1/applications/{applicationId}/campaigns | List campaigns
*ManagementApi* | [**getChanges**](docs/Api/ManagementApi.md#getchanges) | **GET** /v1/changes | Get audit logs for an account
*ManagementApi* | [**getCollection**](docs/Api/ManagementApi.md#getcollection) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Get campaign-level collection
*ManagementApi* | [**getCollectionItems**](docs/Api/ManagementApi.md#getcollectionitems) | **GET** /v1/collections/{collectionId}/items | Get collection items
*ManagementApi* | [**getCouponsWithoutTotalCount**](docs/Api/ManagementApi.md#getcouponswithouttotalcount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/no_total | List coupons
*ManagementApi* | [**getCustomerActivityReport**](docs/Api/ManagementApi.md#getcustomeractivityreport) | **GET** /v1/applications/{applicationId}/customer_activity_reports/{customerId} | Get customer&#39;s activity report
*ManagementApi* | [**getCustomerActivityReportsWithoutTotalCount**](docs/Api/ManagementApi.md#getcustomeractivityreportswithouttotalcount) | **GET** /v1/applications/{applicationId}/customer_activity_reports/no_total | Get Activity Reports for Application Customers
*ManagementApi* | [**getCustomerAnalytics**](docs/Api/ManagementApi.md#getcustomeranalytics) | **GET** /v1/applications/{applicationId}/customers/{customerId}/analytics | Get customer&#39;s analytics report
*ManagementApi* | [**getCustomerProfile**](docs/Api/ManagementApi.md#getcustomerprofile) | **GET** /v1/customers/{customerId} | Get customer profile
*ManagementApi* | [**getCustomerProfileAchievementProgress**](docs/Api/ManagementApi.md#getcustomerprofileachievementprogress) | **GET** /v1/applications/{applicationId}/achievement_progress/{integrationId} | List customer achievements
*ManagementApi* | [**getCustomerProfiles**](docs/Api/ManagementApi.md#getcustomerprofiles) | **GET** /v1/customers/no_total | List customer profiles
*ManagementApi* | [**getCustomersByAttributes**](docs/Api/ManagementApi.md#getcustomersbyattributes) | **POST** /v1/customer_search/no_total | List customer profiles matching the given attributes
*ManagementApi* | [**getDashboardStatistics**](docs/Api/ManagementApi.md#getdashboardstatistics) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/dashboard | Get statistics for loyalty dashboard
*ManagementApi* | [**getEventTypes**](docs/Api/ManagementApi.md#geteventtypes) | **GET** /v1/event_types | List event types
*ManagementApi* | [**getExports**](docs/Api/ManagementApi.md#getexports) | **GET** /v1/exports | Get exports
*ManagementApi* | [**getLoyaltyCard**](docs/Api/ManagementApi.md#getloyaltycard) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId} | Get loyalty card
*ManagementApi* | [**getLoyaltyCardTransactionLogs**](docs/Api/ManagementApi.md#getloyaltycardtransactionlogs) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/logs | List card&#39;s transactions
*ManagementApi* | [**getLoyaltyCards**](docs/Api/ManagementApi.md#getloyaltycards) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards | List loyalty cards
*ManagementApi* | [**getLoyaltyPoints**](docs/Api/ManagementApi.md#getloyaltypoints) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId} | Get customer&#39;s full loyalty ledger
*ManagementApi* | [**getLoyaltyProgram**](docs/Api/ManagementApi.md#getloyaltyprogram) | **GET** /v1/loyalty_programs/{loyaltyProgramId} | Get loyalty program
*ManagementApi* | [**getLoyaltyProgramTransactions**](docs/Api/ManagementApi.md#getloyaltyprogramtransactions) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/transactions | List loyalty program transactions
*ManagementApi* | [**getLoyaltyPrograms**](docs/Api/ManagementApi.md#getloyaltyprograms) | **GET** /v1/loyalty_programs | List loyalty programs
*ManagementApi* | [**getLoyaltyStatistics**](docs/Api/ManagementApi.md#getloyaltystatistics) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/statistics | Get loyalty program statistics
*ManagementApi* | [**getMessageLogs**](docs/Api/ManagementApi.md#getmessagelogs) | **GET** /v1/message_logs | List message log entries
*ManagementApi* | [**getReferralsWithoutTotalCount**](docs/Api/ManagementApi.md#getreferralswithouttotalcount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/no_total | List referrals
*ManagementApi* | [**getRoleV2**](docs/Api/ManagementApi.md#getrolev2) | **GET** /v2/roles/{roleId} | Get role
*ManagementApi* | [**getRuleset**](docs/Api/ManagementApi.md#getruleset) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Get ruleset
*ManagementApi* | [**getRulesets**](docs/Api/ManagementApi.md#getrulesets) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets | List campaign rulesets
*ManagementApi* | [**getStore**](docs/Api/ManagementApi.md#getstore) | **GET** /v1/applications/{applicationId}/stores/{storeId} | Get store
*ManagementApi* | [**getUser**](docs/Api/ManagementApi.md#getuser) | **GET** /v1/users/{userId} | Get user
*ManagementApi* | [**getUsers**](docs/Api/ManagementApi.md#getusers) | **GET** /v1/users | List users in account
*ManagementApi* | [**getWebhook**](docs/Api/ManagementApi.md#getwebhook) | **GET** /v1/webhooks/{webhookId} | Get webhook
*ManagementApi* | [**getWebhookActivationLogs**](docs/Api/ManagementApi.md#getwebhookactivationlogs) | **GET** /v1/webhook_activation_logs | List webhook activation log entries
*ManagementApi* | [**getWebhookLogs**](docs/Api/ManagementApi.md#getwebhooklogs) | **GET** /v1/webhook_logs | List webhook log entries
*ManagementApi* | [**getWebhooks**](docs/Api/ManagementApi.md#getwebhooks) | **GET** /v1/webhooks | List webhooks
*ManagementApi* | [**importAccountCollection**](docs/Api/ManagementApi.md#importaccountcollection) | **POST** /v1/collections/{collectionId}/import | Import data into existing account-level collection
*ManagementApi* | [**importAllowedList**](docs/Api/ManagementApi.md#importallowedlist) | **POST** /v1/attributes/{attributeId}/allowed_list/import | Import allowed values for attribute
*ManagementApi* | [**importAudiencesMemberships**](docs/Api/ManagementApi.md#importaudiencesmemberships) | **POST** /v1/audiences/{audienceId}/memberships/import | Import audience members
*ManagementApi* | [**importCampaignStores**](docs/Api/ManagementApi.md#importcampaignstores) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/stores/import | Import stores
*ManagementApi* | [**importCollection**](docs/Api/ManagementApi.md#importcollection) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId}/import | Import data into existing campaign-level collection
*ManagementApi* | [**importCoupons**](docs/Api/ManagementApi.md#importcoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_coupons | Import coupons
*ManagementApi* | [**importLoyaltyCards**](docs/Api/ManagementApi.md#importloyaltycards) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/import_cards | Import loyalty cards
*ManagementApi* | [**importLoyaltyCustomersTiers**](docs/Api/ManagementApi.md#importloyaltycustomerstiers) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/import_customers_tiers | Import customers into loyalty tiers
*ManagementApi* | [**importLoyaltyPoints**](docs/Api/ManagementApi.md#importloyaltypoints) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/import_points | Import loyalty points
*ManagementApi* | [**importPoolGiveaways**](docs/Api/ManagementApi.md#importpoolgiveaways) | **POST** /v1/giveaways/pools/{poolId}/import | Import giveaway codes into a giveaway pool
*ManagementApi* | [**importReferrals**](docs/Api/ManagementApi.md#importreferrals) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_referrals | Import referrals
*ManagementApi* | [**inviteUserExternal**](docs/Api/ManagementApi.md#inviteuserexternal) | **POST** /v1/users/invite | Invite user from identity provider
*ManagementApi* | [**listAccountCollections**](docs/Api/ManagementApi.md#listaccountcollections) | **GET** /v1/collections | List collections in account
*ManagementApi* | [**listAchievements**](docs/Api/ManagementApi.md#listachievements) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/achievements | List achievements
*ManagementApi* | [**listAllRolesV2**](docs/Api/ManagementApi.md#listallrolesv2) | **GET** /v2/roles | List roles
*ManagementApi* | [**listCatalogItems**](docs/Api/ManagementApi.md#listcatalogitems) | **GET** /v1/catalogs/{catalogId}/items | List items in a catalog
*ManagementApi* | [**listCollections**](docs/Api/ManagementApi.md#listcollections) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections | List collections in campaign
*ManagementApi* | [**listCollectionsInApplication**](docs/Api/ManagementApi.md#listcollectionsinapplication) | **GET** /v1/applications/{applicationId}/collections | List collections in Application
*ManagementApi* | [**listStores**](docs/Api/ManagementApi.md#liststores) | **GET** /v1/applications/{applicationId}/stores | List stores
*ManagementApi* | [**oktaEventHandlerChallenge**](docs/Api/ManagementApi.md#oktaeventhandlerchallenge) | **GET** /v1/provisioning/okta | Validate Okta API ownership
*ManagementApi* | [**removeLoyaltyPoints**](docs/Api/ManagementApi.md#removeloyaltypoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/deduct_points | Deduct points from customer profile
*ManagementApi* | [**resetPassword**](docs/Api/ManagementApi.md#resetpassword) | **POST** /v1/reset_password | Reset password
*ManagementApi* | [**scimCreateUser**](docs/Api/ManagementApi.md#scimcreateuser) | **POST** /v1/provisioning/scim/Users | Create SCIM user
*ManagementApi* | [**scimDeleteUser**](docs/Api/ManagementApi.md#scimdeleteuser) | **DELETE** /v1/provisioning/scim/Users/{userId} | Delete SCIM user
*ManagementApi* | [**scimGetResourceTypes**](docs/Api/ManagementApi.md#scimgetresourcetypes) | **GET** /v1/provisioning/scim/ResourceTypes | List supported SCIM resource types
*ManagementApi* | [**scimGetSchemas**](docs/Api/ManagementApi.md#scimgetschemas) | **GET** /v1/provisioning/scim/Schemas | List supported SCIM schemas
*ManagementApi* | [**scimGetServiceProviderConfig**](docs/Api/ManagementApi.md#scimgetserviceproviderconfig) | **GET** /v1/provisioning/scim/ServiceProviderConfig | Get SCIM service provider configuration
*ManagementApi* | [**scimGetUser**](docs/Api/ManagementApi.md#scimgetuser) | **GET** /v1/provisioning/scim/Users/{userId} | Get SCIM user
*ManagementApi* | [**scimGetUsers**](docs/Api/ManagementApi.md#scimgetusers) | **GET** /v1/provisioning/scim/Users | List SCIM users
*ManagementApi* | [**scimPatchUser**](docs/Api/ManagementApi.md#scimpatchuser) | **PATCH** /v1/provisioning/scim/Users/{userId} | Update SCIM user attributes
*ManagementApi* | [**scimReplaceUserAttributes**](docs/Api/ManagementApi.md#scimreplaceuserattributes) | **PUT** /v1/provisioning/scim/Users/{userId} | Update SCIM user
*ManagementApi* | [**searchCouponsAdvancedApplicationWideWithoutTotalCount**](docs/Api/ManagementApi.md#searchcouponsadvancedapplicationwidewithouttotalcount) | **POST** /v1/applications/{applicationId}/coupons_search_advanced/no_total | List coupons that match the given attributes (without total count)
*ManagementApi* | [**searchCouponsAdvancedWithoutTotalCount**](docs/Api/ManagementApi.md#searchcouponsadvancedwithouttotalcount) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search_advanced/no_total | List coupons that match the given attributes in campaign (without total count)
*ManagementApi* | [**transferLoyaltyCard**](docs/Api/ManagementApi.md#transferloyaltycard) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/transfer | Transfer card data
*ManagementApi* | [**updateAccountCollection**](docs/Api/ManagementApi.md#updateaccountcollection) | **PUT** /v1/collections/{collectionId} | Update account-level collection
*ManagementApi* | [**updateAchievement**](docs/Api/ManagementApi.md#updateachievement) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/achievements/{achievementId} | Update achievement
*ManagementApi* | [**updateAdditionalCost**](docs/Api/ManagementApi.md#updateadditionalcost) | **PUT** /v1/additional_costs/{additionalCostId} | Update additional cost
*ManagementApi* | [**updateAttribute**](docs/Api/ManagementApi.md#updateattribute) | **PUT** /v1/attributes/{attributeId} | Update custom attribute
*ManagementApi* | [**updateCampaign**](docs/Api/ManagementApi.md#updatecampaign) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId} | Update campaign
*ManagementApi* | [**updateCollection**](docs/Api/ManagementApi.md#updatecollection) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Update campaign-level collection&#39;s description
*ManagementApi* | [**updateCoupon**](docs/Api/ManagementApi.md#updatecoupon) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Update coupon
*ManagementApi* | [**updateCouponBatch**](docs/Api/ManagementApi.md#updatecouponbatch) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Update coupons
*ManagementApi* | [**updateLoyaltyCard**](docs/Api/ManagementApi.md#updateloyaltycard) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId} | Update loyalty card status
*ManagementApi* | [**updateReferral**](docs/Api/ManagementApi.md#updatereferral) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Update referral
*ManagementApi* | [**updateRoleV2**](docs/Api/ManagementApi.md#updaterolev2) | **PUT** /v2/roles/{roleId} | Update role
*ManagementApi* | [**updateStore**](docs/Api/ManagementApi.md#updatestore) | **PUT** /v1/applications/{applicationId}/stores/{storeId} | Update store
*ManagementApi* | [**updateUser**](docs/Api/ManagementApi.md#updateuser) | **PUT** /v1/users/{userId} | Update user

## Documentation for models

- [APIError](docs/Model/APIError.md)
- [AcceptCouponEffectProps](docs/Model/AcceptCouponEffectProps.md)
- [AcceptReferralEffectProps](docs/Model/AcceptReferralEffectProps.md)
- [AccessLogEntry](docs/Model/AccessLogEntry.md)
- [Account](docs/Model/Account.md)
- [AccountAdditionalCost](docs/Model/AccountAdditionalCost.md)
- [AccountAnalytics](docs/Model/AccountAnalytics.md)
- [AccountDashboardStatistic](docs/Model/AccountDashboardStatistic.md)
- [AccountDashboardStatisticCampaigns](docs/Model/AccountDashboardStatisticCampaigns.md)
- [AccountDashboardStatisticDiscount](docs/Model/AccountDashboardStatisticDiscount.md)
- [AccountDashboardStatisticLoyaltyPoints](docs/Model/AccountDashboardStatisticLoyaltyPoints.md)
- [AccountDashboardStatisticReferrals](docs/Model/AccountDashboardStatisticReferrals.md)
- [AccountDashboardStatisticRevenue](docs/Model/AccountDashboardStatisticRevenue.md)
- [AccountEntity](docs/Model/AccountEntity.md)
- [AccountLimits](docs/Model/AccountLimits.md)
- [Achievement](docs/Model/Achievement.md)
- [AchievementAdditionalProperties](docs/Model/AchievementAdditionalProperties.md)
- [AchievementBase](docs/Model/AchievementBase.md)
- [AchievementProgress](docs/Model/AchievementProgress.md)
- [AchievementProgressWithDefinition](docs/Model/AchievementProgressWithDefinition.md)
- [AchievementStatusEntry](docs/Model/AchievementStatusEntry.md)
- [AddFreeItemEffectProps](docs/Model/AddFreeItemEffectProps.md)
- [AddItemCatalogAction](docs/Model/AddItemCatalogAction.md)
- [AddLoyaltyPoints](docs/Model/AddLoyaltyPoints.md)
- [AddLoyaltyPointsEffectProps](docs/Model/AddLoyaltyPointsEffectProps.md)
- [AddToAudienceEffectProps](docs/Model/AddToAudienceEffectProps.md)
- [AddedDeductedPointsNotificationPolicy](docs/Model/AddedDeductedPointsNotificationPolicy.md)
- [AdditionalCampaignProperties](docs/Model/AdditionalCampaignProperties.md)
- [AdditionalCost](docs/Model/AdditionalCost.md)
- [AnalyticsDataPoint](docs/Model/AnalyticsDataPoint.md)
- [AnalyticsDataPointWithTrend](docs/Model/AnalyticsDataPointWithTrend.md)
- [AnalyticsDataPointWithTrendAndInfluencedRate](docs/Model/AnalyticsDataPointWithTrendAndInfluencedRate.md)
- [AnalyticsDataPointWithTrendAndUplift](docs/Model/AnalyticsDataPointWithTrendAndUplift.md)
- [AnalyticsProduct](docs/Model/AnalyticsProduct.md)
- [AnalyticsSKU](docs/Model/AnalyticsSKU.md)
- [Application](docs/Model/Application.md)
- [ApplicationAPIKey](docs/Model/ApplicationAPIKey.md)
- [ApplicationAnalyticsDataPoint](docs/Model/ApplicationAnalyticsDataPoint.md)
- [ApplicationApiHealth](docs/Model/ApplicationApiHealth.md)
- [ApplicationCIF](docs/Model/ApplicationCIF.md)
- [ApplicationCIFExpression](docs/Model/ApplicationCIFExpression.md)
- [ApplicationCIFReferences](docs/Model/ApplicationCIFReferences.md)
- [ApplicationCampaignAnalytics](docs/Model/ApplicationCampaignAnalytics.md)
- [ApplicationCampaignStats](docs/Model/ApplicationCampaignStats.md)
- [ApplicationCustomer](docs/Model/ApplicationCustomer.md)
- [ApplicationCustomerEntity](docs/Model/ApplicationCustomerEntity.md)
- [ApplicationEntity](docs/Model/ApplicationEntity.md)
- [ApplicationEvent](docs/Model/ApplicationEvent.md)
- [ApplicationNotification](docs/Model/ApplicationNotification.md)
- [ApplicationReferee](docs/Model/ApplicationReferee.md)
- [ApplicationSession](docs/Model/ApplicationSession.md)
- [ApplicationSessionEntity](docs/Model/ApplicationSessionEntity.md)
- [ApplicationStoreEntity](docs/Model/ApplicationStoreEntity.md)
- [AsyncCouponCreationResponse](docs/Model/AsyncCouponCreationResponse.md)
- [AsyncCouponDeletionJobResponse](docs/Model/AsyncCouponDeletionJobResponse.md)
- [Attribute](docs/Model/Attribute.md)
- [AttributesMandatory](docs/Model/AttributesMandatory.md)
- [AttributesSettings](docs/Model/AttributesSettings.md)
- [Audience](docs/Model/Audience.md)
- [AudienceAnalytics](docs/Model/AudienceAnalytics.md)
- [AudienceCustomer](docs/Model/AudienceCustomer.md)
- [AudienceIntegrationID](docs/Model/AudienceIntegrationID.md)
- [AudienceMembership](docs/Model/AudienceMembership.md)
- [AwardGiveawayEffectProps](docs/Model/AwardGiveawayEffectProps.md)
- [BaseCampaign](docs/Model/BaseCampaign.md)
- [BaseLoyaltyProgram](docs/Model/BaseLoyaltyProgram.md)
- [BaseNotification](docs/Model/BaseNotification.md)
- [BaseNotificationEntity](docs/Model/BaseNotificationEntity.md)
- [BaseNotificationWebhook](docs/Model/BaseNotificationWebhook.md)
- [BaseNotifications](docs/Model/BaseNotifications.md)
- [BaseSamlConnection](docs/Model/BaseSamlConnection.md)
- [Binding](docs/Model/Binding.md)
- [BulkApplicationNotification](docs/Model/BulkApplicationNotification.md)
- [BulkCampaignNotification](docs/Model/BulkCampaignNotification.md)
- [BulkOperationOnCampaigns](docs/Model/BulkOperationOnCampaigns.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignActivationRequest](docs/Model/CampaignActivationRequest.md)
- [CampaignAnalytics](docs/Model/CampaignAnalytics.md)
- [CampaignBudget](docs/Model/CampaignBudget.md)
- [CampaignCollection](docs/Model/CampaignCollection.md)
- [CampaignCollectionEditedNotification](docs/Model/CampaignCollectionEditedNotification.md)
- [CampaignCollectionWithoutPayload](docs/Model/CampaignCollectionWithoutPayload.md)
- [CampaignCopy](docs/Model/CampaignCopy.md)
- [CampaignCreatedNotification](docs/Model/CampaignCreatedNotification.md)
- [CampaignDeletedNotification](docs/Model/CampaignDeletedNotification.md)
- [CampaignDetail](docs/Model/CampaignDetail.md)
- [CampaignEditedNotification](docs/Model/CampaignEditedNotification.md)
- [CampaignEntity](docs/Model/CampaignEntity.md)
- [CampaignEvaluationGroup](docs/Model/CampaignEvaluationGroup.md)
- [CampaignEvaluationPosition](docs/Model/CampaignEvaluationPosition.md)
- [CampaignEvaluationTreeChangedNotification](docs/Model/CampaignEvaluationTreeChangedNotification.md)
- [CampaignGroup](docs/Model/CampaignGroup.md)
- [CampaignGroupEntity](docs/Model/CampaignGroupEntity.md)
- [CampaignNotification](docs/Model/CampaignNotification.md)
- [CampaignNotificationPolicy](docs/Model/CampaignNotificationPolicy.md)
- [CampaignRulesetChangedNotification](docs/Model/CampaignRulesetChangedNotification.md)
- [CampaignSearch](docs/Model/CampaignSearch.md)
- [CampaignSet](docs/Model/CampaignSet.md)
- [CampaignSetBranchNode](docs/Model/CampaignSetBranchNode.md)
- [CampaignSetLeafNode](docs/Model/CampaignSetLeafNode.md)
- [CampaignSetNode](docs/Model/CampaignSetNode.md)
- [CampaignStateChangedNotification](docs/Model/CampaignStateChangedNotification.md)
- [CampaignStoreBudget](docs/Model/CampaignStoreBudget.md)
- [CampaignStoreBudgetLimitConfig](docs/Model/CampaignStoreBudgetLimitConfig.md)
- [CampaignTemplate](docs/Model/CampaignTemplate.md)
- [CampaignTemplateCollection](docs/Model/CampaignTemplateCollection.md)
- [CampaignTemplateCouponReservationSettings](docs/Model/CampaignTemplateCouponReservationSettings.md)
- [CampaignTemplateParams](docs/Model/CampaignTemplateParams.md)
- [CampaignVersions](docs/Model/CampaignVersions.md)
- [CardAddedDeductedPointsNotificationPolicy](docs/Model/CardAddedDeductedPointsNotificationPolicy.md)
- [CardExpiringPointsNotificationPolicy](docs/Model/CardExpiringPointsNotificationPolicy.md)
- [CardExpiringPointsNotificationTrigger](docs/Model/CardExpiringPointsNotificationTrigger.md)
- [CardLedgerPointsEntryIntegrationAPI](docs/Model/CardLedgerPointsEntryIntegrationAPI.md)
- [CardLedgerTransactionLogEntry](docs/Model/CardLedgerTransactionLogEntry.md)
- [CardLedgerTransactionLogEntryIntegrationAPI](docs/Model/CardLedgerTransactionLogEntryIntegrationAPI.md)
- [CartItem](docs/Model/CartItem.md)
- [Catalog](docs/Model/Catalog.md)
- [CatalogAction](docs/Model/CatalogAction.md)
- [CatalogActionFilter](docs/Model/CatalogActionFilter.md)
- [CatalogItem](docs/Model/CatalogItem.md)
- [CatalogSyncRequest](docs/Model/CatalogSyncRequest.md)
- [CatalogsStrikethroughNotificationPolicy](docs/Model/CatalogsStrikethroughNotificationPolicy.md)
- [Change](docs/Model/Change.md)
- [ChangeLoyaltyTierLevelEffectProps](docs/Model/ChangeLoyaltyTierLevelEffectProps.md)
- [ChangeProfilePassword](docs/Model/ChangeProfilePassword.md)
- [CodeGeneratorSettings](docs/Model/CodeGeneratorSettings.md)
- [Collection](docs/Model/Collection.md)
- [CollectionItem](docs/Model/CollectionItem.md)
- [CollectionWithoutPayload](docs/Model/CollectionWithoutPayload.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponConstraints](docs/Model/CouponConstraints.md)
- [CouponCreatedEffectProps](docs/Model/CouponCreatedEffectProps.md)
- [CouponCreationJob](docs/Model/CouponCreationJob.md)
- [CouponDeletionFilters](docs/Model/CouponDeletionFilters.md)
- [CouponDeletionJob](docs/Model/CouponDeletionJob.md)
- [CouponLimitConfigs](docs/Model/CouponLimitConfigs.md)
- [CouponRejectionReason](docs/Model/CouponRejectionReason.md)
- [CouponReservations](docs/Model/CouponReservations.md)
- [CouponSearch](docs/Model/CouponSearch.md)
- [CouponValue](docs/Model/CouponValue.md)
- [CouponsNotificationPolicy](docs/Model/CouponsNotificationPolicy.md)
- [CreateAchievement](docs/Model/CreateAchievement.md)
- [CreateApplicationAPIKey](docs/Model/CreateApplicationAPIKey.md)
- [CreateManagementKey](docs/Model/CreateManagementKey.md)
- [CreateTemplateCampaign](docs/Model/CreateTemplateCampaign.md)
- [CreateTemplateCampaignResponse](docs/Model/CreateTemplateCampaignResponse.md)
- [CustomEffect](docs/Model/CustomEffect.md)
- [CustomEffectProps](docs/Model/CustomEffectProps.md)
- [CustomerActivityReport](docs/Model/CustomerActivityReport.md)
- [CustomerAnalytics](docs/Model/CustomerAnalytics.md)
- [CustomerInventory](docs/Model/CustomerInventory.md)
- [CustomerProfile](docs/Model/CustomerProfile.md)
- [CustomerProfileAudienceRequest](docs/Model/CustomerProfileAudienceRequest.md)
- [CustomerProfileAudienceRequestItem](docs/Model/CustomerProfileAudienceRequestItem.md)
- [CustomerProfileIntegrationRequestV2](docs/Model/CustomerProfileIntegrationRequestV2.md)
- [CustomerProfileIntegrationResponseV2](docs/Model/CustomerProfileIntegrationResponseV2.md)
- [CustomerProfileSearchQuery](docs/Model/CustomerProfileSearchQuery.md)
- [CustomerProfileUpdateV2Response](docs/Model/CustomerProfileUpdateV2Response.md)
- [CustomerSession](docs/Model/CustomerSession.md)
- [CustomerSessionV2](docs/Model/CustomerSessionV2.md)
- [DeductLoyaltyPoints](docs/Model/DeductLoyaltyPoints.md)
- [DeductLoyaltyPointsEffectProps](docs/Model/DeductLoyaltyPointsEffectProps.md)
- [DeleteUserRequest](docs/Model/DeleteUserRequest.md)
- [Effect](docs/Model/Effect.md)
- [EffectEntity](docs/Model/EffectEntity.md)
- [EmailEntity](docs/Model/EmailEntity.md)
- [Endpoint](docs/Model/Endpoint.md)
- [Entity](docs/Model/Entity.md)
- [EntityWithTalangVisibleID](docs/Model/EntityWithTalangVisibleID.md)
- [Environment](docs/Model/Environment.md)
- [ErrorEffectProps](docs/Model/ErrorEffectProps.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseWithStatus](docs/Model/ErrorResponseWithStatus.md)
- [ErrorSource](docs/Model/ErrorSource.md)
- [EvaluableCampaignIds](docs/Model/EvaluableCampaignIds.md)
- [Event](docs/Model/Event.md)
- [EventType](docs/Model/EventType.md)
- [EventV2](docs/Model/EventV2.md)
- [ExpiringCouponsNotificationPolicy](docs/Model/ExpiringCouponsNotificationPolicy.md)
- [ExpiringCouponsNotificationTrigger](docs/Model/ExpiringCouponsNotificationTrigger.md)
- [ExpiringPointsNotificationPolicy](docs/Model/ExpiringPointsNotificationPolicy.md)
- [ExpiringPointsNotificationTrigger](docs/Model/ExpiringPointsNotificationTrigger.md)
- [Export](docs/Model/Export.md)
- [FeatureFlag](docs/Model/FeatureFlag.md)
- [FeaturesFeed](docs/Model/FeaturesFeed.md)
- [FuncArgDef](docs/Model/FuncArgDef.md)
- [FunctionDef](docs/Model/FunctionDef.md)
- [GenerateCampaignDescription](docs/Model/GenerateCampaignDescription.md)
- [GenerateCampaignTags](docs/Model/GenerateCampaignTags.md)
- [GenerateItemFilterDescription](docs/Model/GenerateItemFilterDescription.md)
- [GenerateLoyaltyCard](docs/Model/GenerateLoyaltyCard.md)
- [GenerateRuleTitle](docs/Model/GenerateRuleTitle.md)
- [GenerateRuleTitleRule](docs/Model/GenerateRuleTitleRule.md)
- [GetIntegrationCouponRequest](docs/Model/GetIntegrationCouponRequest.md)
- [Giveaway](docs/Model/Giveaway.md)
- [GiveawaysPool](docs/Model/GiveawaysPool.md)
- [HiddenConditionsEffects](docs/Model/HiddenConditionsEffects.md)
- [IdentifiableEntity](docs/Model/IdentifiableEntity.md)
- [Import](docs/Model/Import.md)
- [ImportEntity](docs/Model/ImportEntity.md)
- [IncreaseAchievementProgressEffectProps](docs/Model/IncreaseAchievementProgressEffectProps.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse20020](docs/Model/InlineResponse20020.md)
- [InlineResponse20021](docs/Model/InlineResponse20021.md)
- [InlineResponse20022](docs/Model/InlineResponse20022.md)
- [InlineResponse20023](docs/Model/InlineResponse20023.md)
- [InlineResponse20024](docs/Model/InlineResponse20024.md)
- [InlineResponse20025](docs/Model/InlineResponse20025.md)
- [InlineResponse20026](docs/Model/InlineResponse20026.md)
- [InlineResponse20027](docs/Model/InlineResponse20027.md)
- [InlineResponse20028](docs/Model/InlineResponse20028.md)
- [InlineResponse20029](docs/Model/InlineResponse20029.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse20030](docs/Model/InlineResponse20030.md)
- [InlineResponse20031](docs/Model/InlineResponse20031.md)
- [InlineResponse20032](docs/Model/InlineResponse20032.md)
- [InlineResponse20033](docs/Model/InlineResponse20033.md)
- [InlineResponse20034](docs/Model/InlineResponse20034.md)
- [InlineResponse20035](docs/Model/InlineResponse20035.md)
- [InlineResponse20036](docs/Model/InlineResponse20036.md)
- [InlineResponse20037](docs/Model/InlineResponse20037.md)
- [InlineResponse20038](docs/Model/InlineResponse20038.md)
- [InlineResponse20039](docs/Model/InlineResponse20039.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse20040](docs/Model/InlineResponse20040.md)
- [InlineResponse20041](docs/Model/InlineResponse20041.md)
- [InlineResponse20042](docs/Model/InlineResponse20042.md)
- [InlineResponse20043](docs/Model/InlineResponse20043.md)
- [InlineResponse20044](docs/Model/InlineResponse20044.md)
- [InlineResponse20045](docs/Model/InlineResponse20045.md)
- [InlineResponse20046](docs/Model/InlineResponse20046.md)
- [InlineResponse20047](docs/Model/InlineResponse20047.md)
- [InlineResponse20048](docs/Model/InlineResponse20048.md)
- [InlineResponse20049](docs/Model/InlineResponse20049.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InlineResponse201](docs/Model/InlineResponse201.md)
- [IntegrationCoupon](docs/Model/IntegrationCoupon.md)
- [IntegrationCustomerSessionResponse](docs/Model/IntegrationCustomerSessionResponse.md)
- [IntegrationEntity](docs/Model/IntegrationEntity.md)
- [IntegrationEvent](docs/Model/IntegrationEvent.md)
- [IntegrationEventV2Request](docs/Model/IntegrationEventV2Request.md)
- [IntegrationProfileEntity](docs/Model/IntegrationProfileEntity.md)
- [IntegrationRequest](docs/Model/IntegrationRequest.md)
- [IntegrationState](docs/Model/IntegrationState.md)
- [IntegrationStateV2](docs/Model/IntegrationStateV2.md)
- [IntegrationStoreEntity](docs/Model/IntegrationStoreEntity.md)
- [InventoryCoupon](docs/Model/InventoryCoupon.md)
- [InventoryReferral](docs/Model/InventoryReferral.md)
- [ItemAttribute](docs/Model/ItemAttribute.md)
- [LedgerEntry](docs/Model/LedgerEntry.md)
- [LedgerInfo](docs/Model/LedgerInfo.md)
- [LedgerPointsEntryIntegrationAPI](docs/Model/LedgerPointsEntryIntegrationAPI.md)
- [LedgerTransactionLogEntryIntegrationAPI](docs/Model/LedgerTransactionLogEntryIntegrationAPI.md)
- [LibraryAttribute](docs/Model/LibraryAttribute.md)
- [LimitConfig](docs/Model/LimitConfig.md)
- [LimitCounter](docs/Model/LimitCounter.md)
- [ListCampaignStoreBudgets](docs/Model/ListCampaignStoreBudgets.md)
- [ListCampaignStoreBudgetsStore](docs/Model/ListCampaignStoreBudgetsStore.md)
- [LoginParams](docs/Model/LoginParams.md)
- [Loyalty](docs/Model/Loyalty.md)
- [LoyaltyBalance](docs/Model/LoyaltyBalance.md)
- [LoyaltyBalanceWithTier](docs/Model/LoyaltyBalanceWithTier.md)
- [LoyaltyBalances](docs/Model/LoyaltyBalances.md)
- [LoyaltyBalancesWithTiers](docs/Model/LoyaltyBalancesWithTiers.md)
- [LoyaltyCard](docs/Model/LoyaltyCard.md)
- [LoyaltyCardBalances](docs/Model/LoyaltyCardBalances.md)
- [LoyaltyCardBatch](docs/Model/LoyaltyCardBatch.md)
- [LoyaltyCardBatchResponse](docs/Model/LoyaltyCardBatchResponse.md)
- [LoyaltyCardProfileRegistration](docs/Model/LoyaltyCardProfileRegistration.md)
- [LoyaltyCardRegistration](docs/Model/LoyaltyCardRegistration.md)
- [LoyaltyDashboardData](docs/Model/LoyaltyDashboardData.md)
- [LoyaltyDashboardPointsBreakdown](docs/Model/LoyaltyDashboardPointsBreakdown.md)
- [LoyaltyLedger](docs/Model/LoyaltyLedger.md)
- [LoyaltyLedgerEntry](docs/Model/LoyaltyLedgerEntry.md)
- [LoyaltyLedgerEntryFlags](docs/Model/LoyaltyLedgerEntryFlags.md)
- [LoyaltyLedgerTransactions](docs/Model/LoyaltyLedgerTransactions.md)
- [LoyaltyMembership](docs/Model/LoyaltyMembership.md)
- [LoyaltyProgram](docs/Model/LoyaltyProgram.md)
- [LoyaltyProgramBalance](docs/Model/LoyaltyProgramBalance.md)
- [LoyaltyProgramEntity](docs/Model/LoyaltyProgramEntity.md)
- [LoyaltyProgramLedgers](docs/Model/LoyaltyProgramLedgers.md)
- [LoyaltyProgramTransaction](docs/Model/LoyaltyProgramTransaction.md)
- [LoyaltySubLedger](docs/Model/LoyaltySubLedger.md)
- [LoyaltyTier](docs/Model/LoyaltyTier.md)
- [ManagementKey](docs/Model/ManagementKey.md)
- [ManagerConfig](docs/Model/ManagerConfig.md)
- [MessageLogEntries](docs/Model/MessageLogEntries.md)
- [MessageLogEntry](docs/Model/MessageLogEntry.md)
- [MessageLogRequest](docs/Model/MessageLogRequest.md)
- [MessageLogResponse](docs/Model/MessageLogResponse.md)
- [MessageTest](docs/Model/MessageTest.md)
- [Meta](docs/Model/Meta.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [MultiApplicationEntity](docs/Model/MultiApplicationEntity.md)
- [MultipleAttribute](docs/Model/MultipleAttribute.md)
- [MultipleAudiences](docs/Model/MultipleAudiences.md)
- [MultipleAudiencesItem](docs/Model/MultipleAudiencesItem.md)
- [MultipleCustomerProfileIntegrationRequest](docs/Model/MultipleCustomerProfileIntegrationRequest.md)
- [MultipleCustomerProfileIntegrationRequestItem](docs/Model/MultipleCustomerProfileIntegrationRequestItem.md)
- [MultipleCustomerProfileIntegrationResponseV2](docs/Model/MultipleCustomerProfileIntegrationResponseV2.md)
- [MultipleNewAttribute](docs/Model/MultipleNewAttribute.md)
- [MultipleNewAudiences](docs/Model/MultipleNewAudiences.md)
- [MutableEntity](docs/Model/MutableEntity.md)
- [NewAccount](docs/Model/NewAccount.md)
- [NewAccountSignUp](docs/Model/NewAccountSignUp.md)
- [NewAdditionalCost](docs/Model/NewAdditionalCost.md)
- [NewAppWideCouponDeletionJob](docs/Model/NewAppWideCouponDeletionJob.md)
- [NewApplication](docs/Model/NewApplication.md)
- [NewApplicationAPIKey](docs/Model/NewApplicationAPIKey.md)
- [NewApplicationCIF](docs/Model/NewApplicationCIF.md)
- [NewApplicationCIFExpression](docs/Model/NewApplicationCIFExpression.md)
- [NewAttribute](docs/Model/NewAttribute.md)
- [NewAudience](docs/Model/NewAudience.md)
- [NewBaseNotification](docs/Model/NewBaseNotification.md)
- [NewCampaign](docs/Model/NewCampaign.md)
- [NewCampaignCollection](docs/Model/NewCampaignCollection.md)
- [NewCampaignEvaluationGroup](docs/Model/NewCampaignEvaluationGroup.md)
- [NewCampaignGroup](docs/Model/NewCampaignGroup.md)
- [NewCampaignSet](docs/Model/NewCampaignSet.md)
- [NewCampaignStoreBudget](docs/Model/NewCampaignStoreBudget.md)
- [NewCampaignStoreBudgetStoreLimit](docs/Model/NewCampaignStoreBudgetStoreLimit.md)
- [NewCampaignTemplate](docs/Model/NewCampaignTemplate.md)
- [NewCatalog](docs/Model/NewCatalog.md)
- [NewCollection](docs/Model/NewCollection.md)
- [NewCouponCreationJob](docs/Model/NewCouponCreationJob.md)
- [NewCouponDeletionJob](docs/Model/NewCouponDeletionJob.md)
- [NewCoupons](docs/Model/NewCoupons.md)
- [NewCouponsForMultipleRecipients](docs/Model/NewCouponsForMultipleRecipients.md)
- [NewCustomEffect](docs/Model/NewCustomEffect.md)
- [NewCustomerProfile](docs/Model/NewCustomerProfile.md)
- [NewCustomerSession](docs/Model/NewCustomerSession.md)
- [NewCustomerSessionV2](docs/Model/NewCustomerSessionV2.md)
- [NewEvent](docs/Model/NewEvent.md)
- [NewEventType](docs/Model/NewEventType.md)
- [NewExternalInvitation](docs/Model/NewExternalInvitation.md)
- [NewGiveawaysPool](docs/Model/NewGiveawaysPool.md)
- [NewInternalAudience](docs/Model/NewInternalAudience.md)
- [NewInvitation](docs/Model/NewInvitation.md)
- [NewInviteEmail](docs/Model/NewInviteEmail.md)
- [NewLoyaltyProgram](docs/Model/NewLoyaltyProgram.md)
- [NewLoyaltyTier](docs/Model/NewLoyaltyTier.md)
- [NewManagementKey](docs/Model/NewManagementKey.md)
- [NewMessageTest](docs/Model/NewMessageTest.md)
- [NewMultipleAudiencesItem](docs/Model/NewMultipleAudiencesItem.md)
- [NewNotificationWebhook](docs/Model/NewNotificationWebhook.md)
- [NewOutgoingIntegrationWebhook](docs/Model/NewOutgoingIntegrationWebhook.md)
- [NewPassword](docs/Model/NewPassword.md)
- [NewPasswordEmail](docs/Model/NewPasswordEmail.md)
- [NewPicklist](docs/Model/NewPicklist.md)
- [NewReferral](docs/Model/NewReferral.md)
- [NewReferralsForMultipleAdvocates](docs/Model/NewReferralsForMultipleAdvocates.md)
- [NewReturn](docs/Model/NewReturn.md)
- [NewRevisionVersion](docs/Model/NewRevisionVersion.md)
- [NewRole](docs/Model/NewRole.md)
- [NewRoleV2](docs/Model/NewRoleV2.md)
- [NewRuleset](docs/Model/NewRuleset.md)
- [NewSamlConnection](docs/Model/NewSamlConnection.md)
- [NewStore](docs/Model/NewStore.md)
- [NewTemplateDef](docs/Model/NewTemplateDef.md)
- [NewUser](docs/Model/NewUser.md)
- [NewWebhook](docs/Model/NewWebhook.md)
- [Notification](docs/Model/Notification.md)
- [NotificationActivation](docs/Model/NotificationActivation.md)
- [NotificationListItem](docs/Model/NotificationListItem.md)
- [OktaEvent](docs/Model/OktaEvent.md)
- [OktaEventPayload](docs/Model/OktaEventPayload.md)
- [OktaEventPayloadData](docs/Model/OktaEventPayloadData.md)
- [OktaEventTarget](docs/Model/OktaEventTarget.md)
- [OneTimeCode](docs/Model/OneTimeCode.md)
- [OutgoingIntegrationBrazePolicy](docs/Model/OutgoingIntegrationBrazePolicy.md)
- [OutgoingIntegrationCleverTapPolicy](docs/Model/OutgoingIntegrationCleverTapPolicy.md)
- [OutgoingIntegrationConfiguration](docs/Model/OutgoingIntegrationConfiguration.md)
- [OutgoingIntegrationIterablePolicy](docs/Model/OutgoingIntegrationIterablePolicy.md)
- [OutgoingIntegrationMoEngagePolicy](docs/Model/OutgoingIntegrationMoEngagePolicy.md)
- [OutgoingIntegrationTemplate](docs/Model/OutgoingIntegrationTemplate.md)
- [OutgoingIntegrationTemplateWithConfigurationDetails](docs/Model/OutgoingIntegrationTemplateWithConfigurationDetails.md)
- [OutgoingIntegrationTemplates](docs/Model/OutgoingIntegrationTemplates.md)
- [OutgoingIntegrationType](docs/Model/OutgoingIntegrationType.md)
- [OutgoingIntegrationTypes](docs/Model/OutgoingIntegrationTypes.md)
- [PatchItemCatalogAction](docs/Model/PatchItemCatalogAction.md)
- [PatchManyItemsCatalogAction](docs/Model/PatchManyItemsCatalogAction.md)
- [PendingPointsNotificationPolicy](docs/Model/PendingPointsNotificationPolicy.md)
- [Picklist](docs/Model/Picklist.md)
- [Product](docs/Model/Product.md)
- [ProductSearchMatch](docs/Model/ProductSearchMatch.md)
- [ProductUnitAnalytics](docs/Model/ProductUnitAnalytics.md)
- [ProductUnitAnalyticsDataPoint](docs/Model/ProductUnitAnalyticsDataPoint.md)
- [ProductUnitAnalyticsTotals](docs/Model/ProductUnitAnalyticsTotals.md)
- [ProfileAudiencesChanges](docs/Model/ProfileAudiencesChanges.md)
- [ProjectedTier](docs/Model/ProjectedTier.md)
- [RedeemReferralEffectProps](docs/Model/RedeemReferralEffectProps.md)
- [Referral](docs/Model/Referral.md)
- [ReferralConstraints](docs/Model/ReferralConstraints.md)
- [ReferralCreatedEffectProps](docs/Model/ReferralCreatedEffectProps.md)
- [ReferralRejectionReason](docs/Model/ReferralRejectionReason.md)
- [RejectCouponEffectProps](docs/Model/RejectCouponEffectProps.md)
- [RejectReferralEffectProps](docs/Model/RejectReferralEffectProps.md)
- [RemoveFromAudienceEffectProps](docs/Model/RemoveFromAudienceEffectProps.md)
- [RemoveItemCatalogAction](docs/Model/RemoveItemCatalogAction.md)
- [RemoveManyItemsCatalogAction](docs/Model/RemoveManyItemsCatalogAction.md)
- [ReopenSessionResponse](docs/Model/ReopenSessionResponse.md)
- [ReserveCouponEffectProps](docs/Model/ReserveCouponEffectProps.md)
- [ReturnIntegrationRequest](docs/Model/ReturnIntegrationRequest.md)
- [ReturnedCartItem](docs/Model/ReturnedCartItem.md)
- [Revision](docs/Model/Revision.md)
- [RevisionActivation](docs/Model/RevisionActivation.md)
- [RevisionActivationRequest](docs/Model/RevisionActivationRequest.md)
- [RevisionVersion](docs/Model/RevisionVersion.md)
- [Role](docs/Model/Role.md)
- [RoleAssign](docs/Model/RoleAssign.md)
- [RoleMembership](docs/Model/RoleMembership.md)
- [RoleV2](docs/Model/RoleV2.md)
- [RoleV2ApplicationDetails](docs/Model/RoleV2ApplicationDetails.md)
- [RoleV2Base](docs/Model/RoleV2Base.md)
- [RoleV2PermissionSet](docs/Model/RoleV2PermissionSet.md)
- [RoleV2Permissions](docs/Model/RoleV2Permissions.md)
- [RoleV2RolesGroup](docs/Model/RoleV2RolesGroup.md)
- [RollbackAddedLoyaltyPointsEffectProps](docs/Model/RollbackAddedLoyaltyPointsEffectProps.md)
- [RollbackCouponEffectProps](docs/Model/RollbackCouponEffectProps.md)
- [RollbackDeductedLoyaltyPointsEffectProps](docs/Model/RollbackDeductedLoyaltyPointsEffectProps.md)
- [RollbackDiscountEffectProps](docs/Model/RollbackDiscountEffectProps.md)
- [RollbackIncreasedAchievementProgressEffectProps](docs/Model/RollbackIncreasedAchievementProgressEffectProps.md)
- [RollbackReferralEffectProps](docs/Model/RollbackReferralEffectProps.md)
- [Rule](docs/Model/Rule.md)
- [RuleFailureReason](docs/Model/RuleFailureReason.md)
- [Ruleset](docs/Model/Ruleset.md)
- [SSOConfig](docs/Model/SSOConfig.md)
- [SamlConnection](docs/Model/SamlConnection.md)
- [SamlConnectionInternal](docs/Model/SamlConnectionInternal.md)
- [SamlConnectionMetadata](docs/Model/SamlConnectionMetadata.md)
- [SamlLoginEndpoint](docs/Model/SamlLoginEndpoint.md)
- [ScimBaseUser](docs/Model/ScimBaseUser.md)
- [ScimBaseUserName](docs/Model/ScimBaseUserName.md)
- [ScimNewUser](docs/Model/ScimNewUser.md)
- [ScimPatchOperation](docs/Model/ScimPatchOperation.md)
- [ScimPatchRequest](docs/Model/ScimPatchRequest.md)
- [ScimResource](docs/Model/ScimResource.md)
- [ScimResourceTypesListResponse](docs/Model/ScimResourceTypesListResponse.md)
- [ScimSchemaResource](docs/Model/ScimSchemaResource.md)
- [ScimSchemasListResponse](docs/Model/ScimSchemasListResponse.md)
- [ScimServiceProviderConfigResponse](docs/Model/ScimServiceProviderConfigResponse.md)
- [ScimServiceProviderConfigResponseBulk](docs/Model/ScimServiceProviderConfigResponseBulk.md)
- [ScimServiceProviderConfigResponseChangePassword](docs/Model/ScimServiceProviderConfigResponseChangePassword.md)
- [ScimServiceProviderConfigResponseFilter](docs/Model/ScimServiceProviderConfigResponseFilter.md)
- [ScimServiceProviderConfigResponsePatch](docs/Model/ScimServiceProviderConfigResponsePatch.md)
- [ScimServiceProviderConfigResponseSort](docs/Model/ScimServiceProviderConfigResponseSort.md)
- [ScimUser](docs/Model/ScimUser.md)
- [ScimUsersListResponse](docs/Model/ScimUsersListResponse.md)
- [Session](docs/Model/Session.md)
- [SetDiscountEffectProps](docs/Model/SetDiscountEffectProps.md)
- [SetDiscountPerAdditionalCostEffectProps](docs/Model/SetDiscountPerAdditionalCostEffectProps.md)
- [SetDiscountPerAdditionalCostPerItemEffectProps](docs/Model/SetDiscountPerAdditionalCostPerItemEffectProps.md)
- [SetDiscountPerItemEffectProps](docs/Model/SetDiscountPerItemEffectProps.md)
- [ShowBundleMetadataEffectProps](docs/Model/ShowBundleMetadataEffectProps.md)
- [ShowNotificationEffectProps](docs/Model/ShowNotificationEffectProps.md)
- [SkuUnitAnalytics](docs/Model/SkuUnitAnalytics.md)
- [SkuUnitAnalyticsDataPoint](docs/Model/SkuUnitAnalyticsDataPoint.md)
- [SlotDef](docs/Model/SlotDef.md)
- [Store](docs/Model/Store.md)
- [StrikethroughChangedItem](docs/Model/StrikethroughChangedItem.md)
- [StrikethroughCustomEffectPerItemProps](docs/Model/StrikethroughCustomEffectPerItemProps.md)
- [StrikethroughDebugResponse](docs/Model/StrikethroughDebugResponse.md)
- [StrikethroughEffect](docs/Model/StrikethroughEffect.md)
- [StrikethroughLabelingNotification](docs/Model/StrikethroughLabelingNotification.md)
- [StrikethroughSetDiscountPerItemEffectProps](docs/Model/StrikethroughSetDiscountPerItemEffectProps.md)
- [StrikethroughTrigger](docs/Model/StrikethroughTrigger.md)
- [SummaryCampaignStoreBudget](docs/Model/SummaryCampaignStoreBudget.md)
- [TalangAttribute](docs/Model/TalangAttribute.md)
- [TalangAttributeVisibility](docs/Model/TalangAttributeVisibility.md)
- [TemplateArgDef](docs/Model/TemplateArgDef.md)
- [TemplateDef](docs/Model/TemplateDef.md)
- [TemplateLimitConfig](docs/Model/TemplateLimitConfig.md)
- [Tier](docs/Model/Tier.md)
- [TierDowngradeNotificationPolicy](docs/Model/TierDowngradeNotificationPolicy.md)
- [TierUpgradeNotificationPolicy](docs/Model/TierUpgradeNotificationPolicy.md)
- [TierWillDowngradeNotificationPolicy](docs/Model/TierWillDowngradeNotificationPolicy.md)
- [TierWillDowngradeNotificationTrigger](docs/Model/TierWillDowngradeNotificationTrigger.md)
- [TimePoint](docs/Model/TimePoint.md)
- [TrackEventV2Response](docs/Model/TrackEventV2Response.md)
- [TransferLoyaltyCard](docs/Model/TransferLoyaltyCard.md)
- [TriggerWebhookEffectProps](docs/Model/TriggerWebhookEffectProps.md)
- [TwoFAConfig](docs/Model/TwoFAConfig.md)
- [UpdateAccount](docs/Model/UpdateAccount.md)
- [UpdateAchievement](docs/Model/UpdateAchievement.md)
- [UpdateApplication](docs/Model/UpdateApplication.md)
- [UpdateApplicationAPIKey](docs/Model/UpdateApplicationAPIKey.md)
- [UpdateApplicationCIF](docs/Model/UpdateApplicationCIF.md)
- [UpdateAttributeEffectProps](docs/Model/UpdateAttributeEffectProps.md)
- [UpdateAudience](docs/Model/UpdateAudience.md)
- [UpdateCampaign](docs/Model/UpdateCampaign.md)
- [UpdateCampaignCollection](docs/Model/UpdateCampaignCollection.md)
- [UpdateCampaignEvaluationGroup](docs/Model/UpdateCampaignEvaluationGroup.md)
- [UpdateCampaignGroup](docs/Model/UpdateCampaignGroup.md)
- [UpdateCampaignTemplate](docs/Model/UpdateCampaignTemplate.md)
- [UpdateCatalog](docs/Model/UpdateCatalog.md)
- [UpdateCollection](docs/Model/UpdateCollection.md)
- [UpdateCoupon](docs/Model/UpdateCoupon.md)
- [UpdateCouponBatch](docs/Model/UpdateCouponBatch.md)
- [UpdateLoyaltyCard](docs/Model/UpdateLoyaltyCard.md)
- [UpdateLoyaltyProgram](docs/Model/UpdateLoyaltyProgram.md)
- [UpdateLoyaltyProgramTier](docs/Model/UpdateLoyaltyProgramTier.md)
- [UpdatePicklist](docs/Model/UpdatePicklist.md)
- [UpdateReferral](docs/Model/UpdateReferral.md)
- [UpdateReferralBatch](docs/Model/UpdateReferralBatch.md)
- [UpdateRole](docs/Model/UpdateRole.md)
- [UpdateStore](docs/Model/UpdateStore.md)
- [UpdateUser](docs/Model/UpdateUser.md)
- [User](docs/Model/User.md)
- [UserEntity](docs/Model/UserEntity.md)
- [ValueMap](docs/Model/ValueMap.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookActivationLogEntry](docs/Model/WebhookActivationLogEntry.md)
- [WebhookLogEntry](docs/Model/WebhookLogEntry.md)
- [WebhookWithOutgoingIntegrationDetails](docs/Model/WebhookWithOutgoingIntegrationDetails.md)
- [WillAwardGiveawayEffectProps](docs/Model/WillAwardGiveawayEffectProps.md)

## Authorization

## api_key_v1

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## management_key

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## manager_auth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

