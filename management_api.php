<?php

/**
* Generated at Fri Oct 12 2018 15:27:08 GMT+0200 (CEST)
* Author: Talon.One
* The contents of this file are auto generated
*/

class TalonOneManagement {
    public $subdomain;
    public $sessionToken;
    
    public function apiRequest($method, $resource, $body, $query) {
        $baseUrl = "https://".$this->subdomain.".talon.one/v1";
        $jsonString = json_encode($body);
        $url = $baseUrl.'/'.$resource;

        if ($query) {
          $queryString = '?';
          foreach($query as $key => $value)
          {
            $queryString = $queryString . urlencode($key) . '=' . urlencode($value) . '&';
          }
          $url = $baseUrl.'/'.$resource.$queryString;
        }

        $headers = array(
            'Content-Type: application/json'
        );

        if ($this->sessionToken) {
            array_push($headers, "Authorization: Bearer ".$this->sessionToken);
        }

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonString);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($curl);
        curl_close($curl);

        if ($response) {
            $response = json_decode($response, true);
        }
        return $response;
    }

    public function post($resource, $body) {
        return $this->apiRequest("POST", $resource, $body, array());
    }
    
    public function put($resource, $body) {
        return $this->apiRequest("PUT", $resource, $body, array());
    }
    
    public function get($resource, $query) {
        return $this->apiRequest("GET", $resource, array(), $query);
    }
    
    public function delete($resource, $body) {
        return $this->apiRequest("DELETE", $resource, $body, array());
    }
    
    public function createManagementSession($email, $password) {
        $response = $this->post("sessions", array("email" => $email, "password" => $password));
        $this->sessionToken = $response['token'];
        return $response;
    }

    public function destroyManagementSession() {
        $response = $this->delete("sessions", array());
        $this->sessionToken = NULL;
        return $response;
    }


    /**
    * Create a new application in the current account.
    * Arguments
    *

    * $body accepted parameters
    * name	| string	| The name of this application.
    * description	| string	| A longer description of the application.
    * key	| string	| Hex key for HMAC-signing API calls as coming from this application (16 hex digits)
    * timezone	| string	| A string containing an IANA timezone descriptor.
    * currency	| string	| A string describing a default currency for new customer sessions.
    */
 
    public function create_application($body) {
      return $this->post("applications", $body);
    }

    /**
    * List all application in the current account.
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_applications($query) {
      return $this->get("applications", $query);
    }

    /**
    * Get the application specified by the ID.
    * Arguments
    *
    * @param 	integer	   $applicationId -

    *
    */
 
    public function get_application($applicationId, $query) {
      return $this->get("applications/$applicationId", $query);
    }

    /**
    * Change the application specified by the ID.
    * Arguments
    *
    * @param 	integer	   $applicationId -

    * $body accepted parameters
    * name	| string	| The name of this application.
    * description	| string	| A longer description of the application.
    * key	| string	| Hex key for HMAC-signing API calls as coming from this application (16 hex digits)
    * timezone	| string	| A string containing an IANA timezone descriptor.
    * currency	| string	| A string describing a default currency for new customer sessions.
    */
 
    public function update_application($applicationId, $body) {
      return $this->put("applications/$applicationId", $body);
    }

    /**
    * Delete the application specified by the ID. Also deletes associated data.
    * Arguments
    *
    * @param 	integer	   $applicationId -

    *
    */
 
    public function delete_application($applicationId, $body) {
      return $this->delete("applications/$applicationId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -

    * $body accepted parameters
    * name	| string	| A friendly name for this campaign.
    * description	| string	| A detailed description of the campaign.
    * startTime	| string	| Datetime when the campaign will become active.
    * endTime	| string	| Datetime when the campaign will become in-active.
    * state	| string	| A disabled or archived campaign is not evaluated for rules or coupons.*
    * activeRulesetId	| integer	| ID of Ruleset this campaign applies on customer session evaluation.
    * tags	| array	| A list of tags for the campaign.
    *    [tags]	string	-
    * features	| array	| A list of features for the campaign.
    *    [features]	string	-
    * limits	| array	| The set of limits that will operate for this campaign
    * limits[]
    *    [action]	string	-
    *    [limit]	number	-
    */
 
    public function create_campaign($applicationId, $body) {
      return $this->post("applications/$applicationId/campaigns", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -

    *
    */
 
    public function get_campaigns($applicationId, $query) {
      return $this->get("applications/$applicationId/campaigns", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    * $body accepted parameters
    * applicationId	| integer	| The ID of the application that owns this entity.
    */
 
    public function update_campaign_set($applicationId, $body) {
      return $this->put("applications/$applicationId/campaign_set", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_campaign_set($applicationId, $query) {
      return $this->get("applications/$applicationId/campaign_set", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function get_campaign($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    * $body accepted parameters
    * name	| string	| A friendly name for this campaign.
    * description	| string	| A detailed description of the campaign.
    * startTime	| string	| Datetime when the campaign will become active.
    * endTime	| string	| Datetime when the campaign will become in-active.
    * state	| string	| A disabled or archived campaign is not evaluated for rules or coupons.*
    * activeRulesetId	| integer	| ID of Ruleset this campaign applies on customer session evaluation.
    * tags	| array	| A list of tags for the campaign.
    *    [tags]	string	-
    * features	| array	| A list of features for the campaign.
    *    [features]	string	-
    * limits	| array	| The set of limits that will operate for this campaign
    * limits[]
    *    [action]	string	-
    *    [limit]	number	-
    */
 
    public function update_campaign($applicationId, $campaignId, $body) {
      return $this->put("applications/$applicationId/campaigns/$campaignId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function delete_campaign($applicationId, $campaignId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    * $body accepted parameters
    * rules	| array	| Set of rules to apply.
    * rules[]
    *    [title]	string	-
    *    [description]	string	-
    * rbVersion	| string	| A string indicating which version of the rulebuilder was used to create this ruleset.
    */
 
    public function create_ruleset($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/rulesets", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 

    *
    */
 
    public function get_rulesets($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/rulesets", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	integer	   $rulesetId 

    * $body accepted parameters
    * rules	| array	| Set of rules to apply.
    * rules[]
    *    [title]	string	-
    *    [description]	string	-
    * rbVersion	| string	| A string indicating which version of the rulebuilder was used to create this ruleset.
    */
 
    public function update_ruleset($applicationId, $campaignId, $rulesetId, $body) {
      return $this->put("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	integer	   $rulesetId 

    *
    */
 
    public function get_ruleset($applicationId, $campaignId, $rulesetId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	integer	   $rulesetId 

    *
    */
 
    public function delete_ruleset($applicationId, $campaignId, $rulesetId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	string	   $silent If set to 'yes', response will be an empty 204, otherwise a list of the coupons generated.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    * $body accepted parameters
    * usageLimit	| integer	| The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply.*
    * startDate	| string	| Timestamp at which point the coupon becomes valid.
    * expiryDate	| string	| Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative.
    * validCharacters	| array	| Set of characters to be used when generating random part of code. Defaults to [A-Z, 0-9] (in terms of RegExp).
    *    [validCharacters]	string	-
    * couponPattern	| string	| The pattern that will be used to generate coupon codes. The character `#` acts as a placeholder and will be replaced by a random character from the `validCharacters` set.*
    * numberOfCoupons	| integer	| The number of new coupon codes to generate for the campaign. Must be at least 1.
    * recipientIntegrationId	| string	| The integration ID for this coupon's beneficiary's profile
    */
 
    public function create_coupons($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.

    *
    */
 
    public function get_coupons($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/coupons", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.

    *
    */
 
    public function delete_all_coupons($applicationId, $campaignId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/coupons", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $couponId The ID of the coupon code to update

    * $body accepted parameters
    * value	| string	| The actual coupon code.
    * usageLimit	| integer	| The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply.*
    * startDate	| string	| Timestamp at which point the coupon becomes valid.
    * expiryDate	| string	| Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative.
    * recipientIntegrationId	| string	| The integration ID for this coupon's beneficiary's profile
    */
 
    public function update_coupon($applicationId, $campaignId, $couponId, $body) {
      return $this->put("applications/$applicationId/campaigns/$campaignId/coupons/$couponId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $couponId The ID of the coupon code to delete

    *
    */
 
    public function delete_coupon($applicationId, $campaignId, $couponId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/coupons/$couponId", $body);
    }

    /**
    * Gets a list of all the coupons that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.

    *
    */
 
    public function get_coupons_by_attributes($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons_search", $body);
    }

    /**
    * Gets a list of all the coupons that exactly match a set of attributes from all campaigns that are currently active.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.

    *
    */
 
    public function get_coupons_by_attributes_application_wide($applicationId, $body) {
      return $this->post("applications/$applicationId/coupons_search", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $code Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.

    *
    */
 
    public function get_referrals($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/referrals", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $referralId The ID of the referral code to delete

    *
    */
 
    public function delete_referral($applicationId, $campaignId, $referralId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/referrals/$referralId", $body);
    }

    /**
    * Create a new API key in the account.
    * Arguments
    *

    * $body accepted parameters
    * name	| string	| The name of this API key.
    * description	| string	| A longer description of the API key.
    * roleId	| integer	| ID of the role to be used.
    * applicationId	| integer	| ID of the application to be used for integration requests.
    */
 
    public function create_api_key($body) {
      return $this->post("api_keys", $body);
    }

    /**
    * Show API keys for this account. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_api_keys($query) {
      return $this->get("api_keys", $query);
    }

    /**
    * Renew the token for an API key.
    * Arguments
    *

    * $body accepted parameters
    * name	| string	| The name of this API key.
    * description	| string	| A longer description of the API key.
    * roleId	| integer	| ID of the role to be used.
    * applicationId	| integer	| ID of the application to be used for integration requests.
    */
 
    public function renew_api_token($body) {
      return $this->put("api_keys/renew_token", $body);
    }

    /**
    * Get a specific API key.
    * Arguments
    *
    * @param 	integer	   $apiKeyId The identifier for the API key

    *
    */
 
    public function get_api_key($apiKeyId, $query) {
      return $this->get("$apiKeyId", $query);
    }

    /**
    * Change an existing API key.
    * Arguments
    *
    * @param 	integer	   $apiKeyId The identifier for the API key

    * $body accepted parameters
    * name	| string	| The name of this API key.
    * description	| string	| A longer description of the API key.
    * roleId	| integer	| ID of the role to be used.
    * applicationId	| integer	| ID of the application to be used for integration requests.
    */
 
    public function update_api_key($apiKeyId, $body) {
      return $this->put("$apiKeyId", $body);
    }

    /**
    * Delete an API Key.
    * Arguments
    *
    * @param 	integer	   $apiKeyId The identifier for the API key

    *
    */
 
    public function delete_api_key($apiKeyId, $body) {
      return $this->delete("$apiKeyId", $body);
    }

    /**
    * Create a new role in the account.
    * Arguments
    *

    * $body accepted parameters
    * name	| string	| The name of this application.
    */
 
    public function create_role($body) {
      return $this->post("roles", $body);
    }

    /**
    * Show roles for this account. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_roles($query) {
      return $this->get("roles", $query);
    }

    /**
    * Get a specific role.
    * Arguments
    *
    * @param 	integer	   $roleId The identifier for the role

    *
    */
 
    public function get_role($roleId, $query) {
      return $this->get("roles/$roleId", $query);
    }

    /**
    * Change an existing role.
    * Arguments
    *
    * @param 	string	   $roleId The identifier for this role.

    * $body accepted parameters
    * name	| string	| The name of this application.
    */
 
    public function update_role($roleId, $body) {
      return $this->put("roles/$roleId", $body);
    }

    /**
    * Delete a role.
    * Arguments
    *
    * @param 	integer	   $roleId The identifier for the role

    *
    */
 
    public function delete_role($roleId, $body) {
      return $this->delete("roles/$roleId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_api_health($applicationId, $query) {
      return $this->get("applications/$applicationId/health_report", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	string	   $path Only return results where the request path matches the given regular expresssion.
    * @param 	string	   $method Only return results where the request method matches the given regular expresssion.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_access_logs($applicationId, $query) {
      return $this->get("applications/$applicationId/access_logs", $query);
    }

    /**
    * Fetches the access logs for the entire account. Sensitive requests (logins) are _always_ filtered from the logs. 
    * Arguments
    *
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $path Only return results where the request path matches the given regular expresssion.
    * @param 	string	   $method Only return results where the request method matches the given regular expresssion.
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_all_access_logs($query) {
      return $this->get("access_logs", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 

    *
    */
 
    public function get_campaign_analytics($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/analytics", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_customers($applicationId, $query) {
      return $this->get("applications/$applicationId/customers", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $customerId 

    *
    */
 
    public function get_application_customer($applicationId, $customerId, $query) {
      return $this->get("applications/$applicationId/customers/$customerId", $query);
    }

    /**
    * Fetch summary reports for all application customers based on a time range
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $applicationId 
    * @param 	string	   $name Only return reports matching the customer name
    * @param 	string	   $integrationId Only return reports matching the integrationId
    * @param 	string	   $campaignName Only return reports matching the campaignName
    * @param 	string	   $advocateName Only return reports matching the current customer referrer name

    *
    */
 
    public function get_customer_activity_reports($applicationId, $query) {
      return $this->get("applications/$applicationId/customer_activity_reports", $query);
    }

    /**
    * Fetch summary report for single application customer based on a time range
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $applicationId 
    * @param 	integer	   $customerId 

    *
    */
 
    public function get_customer_activity_report($applicationId, $customerId, $query) {
      return $this->get("applications/$applicationId/customer_activity_reports/$customerId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $profile Profile integration ID filter for sessions. Must be exact match.
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_sessions($applicationId, $query) {
      return $this->get("applications/$applicationId/sessions", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $sessionId 

    *
    */
 
    public function get_application_session($applicationId, $sessionId, $query) {
      return $this->get("applications/$applicationId/sessions/$sessionId", $query);
    }

    /**
    * Lists all events recorded for an application. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $type Comma-separated list of types by which to filter events. Must be exact match(es).
    * @param 	string	   $createdBefore Only return events created before this date
    * @param 	string	   $createdAfter Only return events created after this date
    * @param 	string	   $session Session integration ID filter for events. Must be exact match.
    * @param 	string	   $profile Profile integration ID filter for events. Must be exact match.
    * @param 	string	   $customerName Customer name filter for events. Will match substrings case-insensitively.
    * @param 	string	   $customerEmail Customer e-mail address filter for events. Will match substrings case-insensitively.
    * @param 	string	   $effectsQuery Effects filter for events. Will perform a full-text search on the text content of the events effects, if any.
    * @param 	string	   $attributesQuery Attributes filter for events. Will perform a full-text search on the text content of the events attributes, both keys and values.
    * @param 	string	   $ruleQuery Rule name filter for events
    * @param 	string	   $campaignQuery Campaign name filter for events
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_events($applicationId, $query) {
      return $this->get("applications/$applicationId/events", $query);
    }

    /**
    * Get all of the distinct values of the Event `type` property for events recorded in the application.  See also: [Track an event](/integration-api/reference/#trackEvent) 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -

    *
    */
 
    public function get_application_event_types($applicationId, $query) {
      return $this->get("applications/$applicationId/event_types", $query);
    }

    /**
    * Returns custom attribute for the account by its id. 
    * Arguments
    *
    * @param 	integer	   $attributeId -

    *
    */
 
    public function get_attribute($attributeId, $query) {
      return $this->get("attributes/$attributeId", $query);
    }

    /**
    * Updates an existing custom attribute. Once created, the only property of a custom attribute that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations. E.g. if you have a customer profile attribute with the name `region`, and your integration is sending `attributes.region` with customer profile updates, changing the name to `locale` would cause the integration requests to begin failing.  If you **really** need to change the `type` or `name` property of a custom attribute, create a new attribute and update any relevant integrations and rules to use the new attribute. Then delete the old attribute when you are confident you have migrated any needed data from the old attribute to the new one. 
    * Arguments
    *
    * @param 	integer	   $attributeId -

    * $body accepted parameters
    * entity	| string	| The name of the entity that can have this attribute. When creating or updating the entities of a given type, you can include an `attributes` object with keys corresponding to the `name` of the custom attributes for that type.
    * eventType	| string	-
    * name	| string	| The attribute name that will be used in API requests and Talang. E.g. if `name == "region"` then you would set the region attribute by including an `attributes.region` property in your request payload.*
    * title	| string	| The human-readable name for the attribute that will be shown in the Campaign Manager. Like `name`, the combination of entity and title must also be unique.
    * type	| string	| The data type of the attribute, a `time` attribute must be sent as a string that conforms to the [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) timestamp format.
    * description	| string	| A description of this attribute.
    * tags	| array	| A list of tags for the attribute.
    *    [tags]	string	-
    * editable	| boolean	| Whether or not this attribute can be edited.
    */
 
    public function update_attribute($attributeId, $body) {
      return $this->put("attributes/$attributeId", $body);
    }

    /**
    * Removes a defined custom attribute.  **Warning:** this will also destroy all data associated with the attribute! 
    * Arguments
    *
    * @param 	integer	   $attributeId -

    *
    */
 
    public function delete_attribute($attributeId, $body) {
      return $this->delete("attributes/$attributeId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	string	   $applicationIds Filter by one or more application ids separated by comma
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.

    *
    */
 
    public function get_webhooks($query) {
      return $this->get("webhooks", $query);
    }

    /**
    * Creates a new webhook.
    * Arguments
    *

    * $body accepted parameters
    * applicationIds	| array	| The IDs of the applications that are related to this entity.
    *    [applicationIds]	integer	-
    * title	| string	| Friendly title for this webhook
    * verb	| string	| API method for this webhook
    * url	| string	| API url (supports templating using parameters) for this webhook
    * headers	| array	| List of API HTTP headers for this webhook
    *    [headers]	string	-
    * payload	| string	| API payload (supports templating using parameters) for this webhook
    * params	| array	| Array of template argument definitions
    * params[]
    *    [type]	string	-
    *    [description]	string	-
    *    [title]	string	-
    *    [ui]	object	-
    * enabled	| boolean	| Enables or disables webhook from showing in rule builder
    */
 
    public function create_webhook($body) {
      return $this->post("webhooks", $body);
    }

    /**
    * Returns an webhook by its id.
    * Arguments
    *
    * @param 	integer	   $webhookId -

    *
    */
 
    public function get_webhook($webhookId, $query) {
      return $this->get("webhooks/$webhookId", $query);
    }

    /**
    * Updates an existing webhook.
    * Arguments
    *
    * @param 	integer	   $webhookId -

    * $body accepted parameters
    * id	| integer	| Unique ID for this entity.
    * created	| string	| The exact moment this entity was created.
    * modified	| string	| The exact moment this entity was last modified.
    * applicationIds	| array	| The IDs of the applications that are related to this entity. The IDs of the applications that are related to this entity.
    *    [applicationIds]	integer	-
    * title	| string	| Friendly title for this webhook
    * verb	| string	| API method for this webhook
    * url	| string	| API url (supports templating using parameters) for this webhook
    * headers	| array	| List of API HTTP headers for this webhook
    *    [headers]	string	-
    * payload	| string	| API payload (supports templating using parameters) for this webhook
    * params	| array	| Array of template argument definitions
    * params[]
    *    [type]	string	-
    *    [description]	string	-
    *    [title]	string	-
    *    [ui]	object	-
    * enabled	| boolean	| Enables or disables webhook from showing in rule builder
    * usedAt	| array	| array of rulesets where webhook is used
    *    [usedAt]	string	-
    */
 
    public function update_webhook($webhookId, $body) {
      return $this->put("webhooks/$webhookId", $body);
    }

    /**
    * Removes an existing webhook.
    * Arguments
    *
    * @param 	integer	   $webhookId -

    *
    */
 
    public function delete_webhook($webhookId, $body) {
      return $this->delete("webhooks/$webhookId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	int	   $webhookId Filter results by Webhook.
    * @param 	int	   $applicationId -
    * @param 	int	   $campaignId Filter results by campaign.
    * @param 	string	   $requestUuid Filter results by request UUID.
    * @param 	string	   $status Filter results by HTTTP status codes.
    * @param 	string	   $createdBefore Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string.
    * @param 	string	   $createdAfter Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string.

    *
    */
 
    public function get_webhook_logs($query) {
      return $this->get("webhook_logs", $query);
    }

    /**
    * Fetch all event type definitions for your account. Each event type can be 
    * Arguments
    *
    * @param 	string	   $applicationIds Filter by one or more application ids separated by comma
    * @param 	string	   $name Filter results to event types with the given name. This parameter implies `includeOldVersions`.
    * @param 	bool	   $includeOldVersions Include all versions of every event type.
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_event_types($query) {
      return $this->get("event_types", $query);
    }

    /**
    * Define a new event type. Due to event types being immutable, this operation also serves the purpose of updating an event type. To create a new version of an existing event type use the same name with a new `version` (by convention the new version is `oldVersion + 1`, but any unique `(name, version)` combination is allowed. 
    * Arguments
    *

    * $body accepted parameters
    * applicationIds	| array	| The IDs of the applications that are related to this entity.
    *    [applicationIds]	integer	-
    * title	| string	| The human-friendly display name for this event type. Use a short, past-tense, description of the event.
    * name	| string	| The machine-friendly canonical name for this event type. This will be used in URLs, and cannot be changed after an event type has been created.
    * description	| string	| An explanation of when the event type is triggered. Write this with a campaign manager in mind. For example:**> The "Payment Accepted" event is triggered after successful processing of a payment by our payment gateway.*
    * mimeType	| string	| This defines how the request payload will be parsed before your handler code is run.
    * examplePayload	| string	| It is often helpful to include an example payload with the event type definition for documentation purposes.
    * handlerLanguage	| string	| The language of the handler code. Currently only `"talang"` is supported.
    * handler	| string	| Code that will be run after successful parsing & validation of the payload for this event.*This code _may_ choose to evaluate campaign rules.*
    * version	| integer	| The version of this event type. When updating an existing event type this must be **exactly** `currentVersion + 1`.*
    */
 
    public function create_event_type($body) {
      return $this->post("event_types", $body);
    }

    /**
    * undefined
    * Arguments
    *
    * @param 	integer	   $eventTypeId -

    *
    */
 
    public function get_event_type($eventTypeId, $query) {
      return $this->get("event_types/$eventTypeId", $query);
    }

    /**
    * Removes an existing event type.
    * Arguments
    *
    * @param 	integer	   $eventTypeId -

    *
    */
 
    public function delete_event_type($eventTypeId, $body) {
      return $this->delete("event_types/$eventTypeId", $body);
    }

    /**
    * Retrieve all users in your account. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_users($query) {
      return $this->get("users", $query);
    }

    /**
    * Retrieves the data (including an invitation code) for a user. Non-admin users can only get themselves. 
    * Arguments
    *
    * @param 	integer	   $userId 

    *
    */
 
    public function get_user($userId, $query) {
      return $this->get("users/$userId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $userId 

    * $body accepted parameters
    * email	| string	| The email address associated with your account.
    * name	| string	| Your name.
    * password	| string	| Your old password.
    * newPassword	| string	| Your new password.
    * state	| string	| New state ("deactivated" or "active") for the user. Only usable by admins for the user.
    * releaseUpdate	| boolean	| Update the user via email
    */
 
    public function update_user($userId, $body) {
      return $this->put("users/$userId", $body);
    }

    /**
    * Get list of changes caused by API calls for an account. Only accessible for admins.
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_changes($query) {
      return $this->get("changes", $query);
    }

    /**
    * Creates a new invitation within your account. To trigger sending of an invitation email, use the `createInviteEmail` operation below. 
    * Arguments
    *

    * $body accepted parameters
    * name	| string	| Name of the user being invited.
    * email	| string	-
    */
 
    public function create_invite($body) {
      return $this->post("invites", $body);
    }

    /**
    * Sends an email with a password recovery link to the email of an existing account. 
    * Arguments
    *

    * $body accepted parameters
    * email	| string	-
    */
 
    public function create_password_recovery_email($body) {
      return $this->post("password_recovery_emails", $body);
    }

    /**
    * Consumes the supplied password reset token and updates the password for the associated account. 
    * Arguments
    *

    * $body accepted parameters
    * password	| string	| The new password for your account.
    * resetToken	| string	-
    */
 
    public function reset_password($body) {
      return $this->post("reset_password", $body);
    }

    /**
    * Return the details of your companies Talon.One account. 
    * Arguments
    *
    * @param 	integer	   $accountId 

    *
    */
 
    public function get_account($accountId, $query) {
      return $this->get("accounts/$accountId", $query);
    }

    /**
    * Update the details of your companies Talon.One account. The fields below are the only ones that accept updates via the API. 
    * Arguments
    *

    * $body accepted parameters
    * companyName	| string	| Name of your company.
    * billingEmail	| string	| The billing email address associated with your company account.
    */
 
    public function update_account($accountId, $body) {
      return $this->put("accounts/$accountId", $body);
    }

    /**
    * 
    * Arguments
    *

    * $body accepted parameters
    * email	| string	| The email address associated with your account.
    * password	| string	| The password for your account.
    */
 
    public function create_session($body) {
      return $this->post("sessions", $body);
    }

    /**
    * Get the current users individual campaign manager configuration. This configuration contains settings for the UI that have no effect on the operation of the API or environment. 
    * -
    *
    */
 
    public function get_manager_config($query) {
      return $this->get("manager_config", $query);
    }

    /**
    * Updates your personal configuration of the Campaign Manager. As mentioned above, this configuration has no effect on the behaviour of the API or environment. 
    * Arguments
    *

    * $body accepted parameters
    * schemaVersion	| integer	-
    */
 
    public function update_manager_config($body) {
      return $this->put("manager_config", $body);
    }

    /**
    * Get a list of all past exports 
    * Arguments
    *

    *
    */
 
    public function get_exports($query) {
      return $this->get("exports", $query);
    }

    /**
    * This endpoint can be used to record the date and time of an Export. 
    * Arguments
    *

    * $body accepted parameters
    * entity	| string	| The name of the entity type being exported.
    */
 
    public function create_export($body) {
      return $this->post("exports", $body);
    }

}

?>