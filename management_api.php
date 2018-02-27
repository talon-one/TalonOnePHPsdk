<?php

/**
* Generated at Tue Feb 27 2018 14:21:39 GMT+0100 (CET)
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
    * Create a new application in the current account.
    *
    * $body accepted parameters
    *
    * @param	string	name	-
    * @param	string	description	-
    * @param	string	key	-
    * @param	string	timezone	-
    * @param	string	currency	-
    */
   
    public function create_application($body, $query) {
      return $this->post("applications", $body, $query);
    }

    /**
    * Change the application specified by the ID.
    * Arguments
    *
    * @param 	integer	   $applicationId -

    * $body accepted parameters
    *
    * @param	string	name	-
    * @param	string	description	-
    * @param	string	key	-
    * @param	string	timezone	-
    * @param	string	currency	-
    */
   
    public function update_application($applicationId, $body, $query) {
      return $this->put("applications/$applicationId", $body, $query);
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
    * Delete the application specified by the ID. Also deletes associated data.
    * Arguments
    *
    * @param 	integer	   $applicationId -

    *
    */
   
    public function delete_application($applicationId, $body, $query) {
      return $this->delete("applications/$applicationId", $body, $query);
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
    * @param 	integer	   $applicationId -

    * $body accepted parameters
    *
    * @param	string	name	-
    * @param	string	description	-
    * @param	string	startTime	-
    * @param	string	endTime	-
    * @param	object	attributes	-
    * @param	string	state	-
    * @param	integer	activeRulesetId	-
    * @param	array	tags	-
    * @param	array	features	-
    * @param	array	limits	-
    *     @param	string	action	The limitable action to which this limit will be applied
    *     @param	number	limit	The value to set for the limit
    *     @param	array	entities	The entities that make the address of this limit
    */
   
    public function create_campaign($applicationId, $body, $query) {
      return $this->post("applications/$applicationId/campaigns", $body, $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    * $body accepted parameters
    *
    * @param	integer	applicationId	-
    */
   
    public function update_campaign_set($applicationId, $body, $query) {
      return $this->put("applications/$applicationId/campaign_set", $body, $query);
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

    * $body accepted parameters
    *
    * @param	string	name	-
    * @param	string	description	-
    * @param	string	startTime	-
    * @param	string	endTime	-
    * @param	object	attributes	-
    * @param	string	state	-
    * @param	integer	activeRulesetId	-
    * @param	array	tags	-
    * @param	array	features	-
    * @param	array	limits	-
    *     @param	string	action	The limitable action to which this limit will be applied
    *     @param	number	limit	The value to set for the limit
    *     @param	array	entities	The entities that make the address of this limit
    */
   
    public function update_campaign($applicationId, $campaignId, $body, $query) {
      return $this->put("applications/$applicationId/campaigns/$campaignId", $body, $query);
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

    *
    */
   
    public function delete_campaign($applicationId, $campaignId, $body, $query) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId", $body, $query);
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

    * $body accepted parameters
    *
    * @param	array	rules	-
    *     @param	string	title	A short description of the rule.
    *     @param	string	description	A longer, more detailed description of the rule.
    *     @param	array	bindings	An array that provides objects with variable names (name) and talang expressions to whose result they are bound (expression) during rule evaluation. The order of the evaluation is decided by the position in the array.
    *     @param	array	condition	A Talang expression that will be evaluated in the context of the given event.
    *     @param	array	effects	An array of effectful Talang expressions in arrays that will be evaluated when a rule matches.
    */
   
    public function create_ruleset($applicationId, $campaignId, $body, $query) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/rulesets", $body, $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	integer	   $rulesetId 

    * $body accepted parameters
    *
    * @param	array	rules	-
    *     @param	string	title	A short description of the rule.
    *     @param	string	description	A longer, more detailed description of the rule.
    *     @param	array	bindings	An array that provides objects with variable names (name) and talang expressions to whose result they are bound (expression) during rule evaluation. The order of the evaluation is decided by the position in the array.
    *     @param	array	condition	A Talang expression that will be evaluated in the context of the given event.
    *     @param	array	effects	An array of effectful Talang expressions in arrays that will be evaluated when a rule matches.
    */
   
    public function update_ruleset($applicationId, $campaignId, $rulesetId, $body, $query) {
      return $this->put("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $body, $query);
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
   
    public function delete_ruleset($applicationId, $campaignId, $rulesetId, $body, $query) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $body, $query);
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
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code

    *
    */
   
    public function get_coupons($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/coupons", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	string	   $silent If set to 'yes', response will be an empty 204, otherwise a list of the coupons generated.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    * $body accepted parameters
    *
    * @param	integer	usageLimit	-
    * @param	string	startDate	-
    * @param	string	expiryDate	-
    * @param	array	validCharacters	-
    * @param	string	couponPattern	-
    * @param	integer	numberOfCoupons	-
    * @param	object	attributes	-
    * @param	string	recipientIntegrationId	-
    */
   
    public function create_coupons($applicationId, $campaignId, $body, $query) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons", $body, $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 

    *
    */
   
    public function delete_all_coupons($applicationId, $campaignId, $body, $query) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/coupons", $body, $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $couponId The ID of the coupon code to update

    * $body accepted parameters
    *
    * @param	string	value	-
    * @param	integer	usageLimit	-
    * @param	string	startDate	-
    * @param	string	expiryDate	-
    * @param	string	recipientIntegrationId	-
    */
   
    public function update_coupon($applicationId, $campaignId, $couponId, $body, $query) {
      return $this->put("applications/$applicationId/campaigns/$campaignId/coupons/$couponId", $body, $query);
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
   
    public function delete_coupon($applicationId, $campaignId, $couponId, $body, $query) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/coupons/$couponId", $body, $query);
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
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code

    * $body accepted parameters
    *
    * @param	object	attributes	-
    */
   
    public function get_coupons_by_attributes($applicationId, $campaignId, $body, $query) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons_search", $body, $query);
    }

    /**
    * Gets a list of all the coupons that exactly match a set of attributes from all campaigns.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request. 
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
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code

    * $body accepted parameters
    *
    * @param	object	attributes	-
    */
   
    public function get_coupons_by_attributes_application_wide($applicationId, $body, $query) {
      return $this->post("applications/$applicationId/coupons_search", $body, $query);
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
    * @param 	string	   $usable Either "true" or "false". If "true", only referrals where `usageCounter < usageLimit` will be returned, "false" will return only referrals where `usageCounter >= usageLimit`.

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
   
    public function delete_referral($applicationId, $campaignId, $referralId, $body, $query) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/referrals/$referralId", $body, $query);
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
    * 
    * Arguments
    *
    * @param 	integer	   $userId 

    * $body accepted parameters
    *
    * @param	string	email	-
    * @param	string	name	-
    * @param	string	password	-
    * @param	string	newPassword	-
    * @param	string	state	-
    * @param	boolean	releaseUpdate	-
    */
   
    public function update_user($userId, $body, $query) {
      return $this->put("users/$userId", $body, $query);
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
    *
    * $body accepted parameters
    *
    * @param	string	name	-
    * @param	string	email	-
    */
   
    public function create_invite($body, $query) {
      return $this->post("invites", $body, $query);
    }

    /**
    * Given a token & email address, send an invitation email. 
    *
    * $body accepted parameters
    *
    * @param	string	email	-
    * @param	string	token	-
    */
   
    public function create_invite_email($body, $query) {
      return $this->post("invite_emails", $body, $query);
    }

    /**
    * Update the details of your companies Talon.One account. The fields below are the only ones that accept updates via the API. 
    *
    * $body accepted parameters
    *
    * @param	string	companyName	-
    * @param	string	billingEmail	-
    */
   
    public function update_account($accountId, $body, $query) {
      return $this->put("accounts/$accountId", $body, $query);
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
    * 
    *
    * $body accepted parameters
    *
    * @param	string	email	-
    * @param	string	password	-
    */
   
    public function create_session($body, $query) {
      return $this->post("sessions", $body, $query);
    }

    /**
    * 
    *
    *
    */
   
    public function destroy_session($body, $query) {
      return $this->delete("sessions", $body, $query);
    }

    /**
    * Updates your personal configuration of the Campaign Manager. As mentioned above, this configuration has no effect on the behaviour of the API or environment. 
    *
    * $body accepted parameters
    *
    * @param	integer	schemaVersion	-
    */
   
    public function update_manager_config($body, $query) {
      return $this->put("manager_config", $body, $query);
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
    * Get a list of all past exports 
    *
    *
    */
   
    public function get_exports($query) {
      return $this->get("exports", $query);
    }

    /**
    * This endpoint can be used to record the date and time of an Export. 
    *
    * $body accepted parameters
    *
    * @param	string	entity	-
    * @param	object	filter	-
    */
   
    public function create_export($body, $query) {
      return $this->post("exports", $body, $query);
    }

}

?>