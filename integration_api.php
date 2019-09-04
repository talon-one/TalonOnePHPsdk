<?php

/**
* Generated at Wed Sep 04 2019 15:59:06 GMT+0200 (CEST)
* Author: Talon.One
* The contents of this file are auto generated
*/

class TalonOne {
    public $applicationId;
    public $applicationKey;
    public $apikey;
    public $subdomain;

    public function apiRequest($method, $resource, $payload) {
        $baseUrl = "https://".$this->subdomain.".talon.one/v1";
        $jsonString = json_encode($payload);
        $url = $baseUrl.'/'.$resource;
        $headers = array(
            'Content-Type: application/json',
            'Authorization: ApiKey-v1 ' .$this->apikey
        );
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
    public function post($resource, $payload) {
        return $this->apiRequest("POST", $resource, $payload);
    }
    
    public function put($resource, $payload) {
        return $this->apiRequest("PUT", $resource, $payload);
    }
    public function processEffects($response, $handlers) {
        $fxs = $response['event']['effects'];
        
        foreach ($fxs as $fx) {
            list($campaignId, $rulesetId, $ruleIndex, $effect) = $fx;
            $action = $effect[0];
            $args = array_slice($effect, 1);
            $handler = $handlers[$action];
            if ($handler) {
                $handler($response, $args);
            }
        }
    }

    /**
    * Update (or create) a [Customer Profile][]. This profile information can then be matched and/or updated by campaign [Rules][].  The `integrationId` may be any identifier that will remain stable for the customer. For example, you might use a database ID, an email, or a phone number as the `integrationId`. It is vital that this ID **not** change over time, so **don't** use any identifier that the customer can update themselves. E.g. if your application allows a customer to update their e-mail address, you should instead use a database ID.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  [Customer Profile]: /Getting-Started/entities#customer-profile [Rules]: /Getting-Started/entities#campaigns-rulesets-and-coupons 
    * Arguments
    *
    * @param 	string	   $integrationId The custom identifier for this profile, must be unique within the account.

    *
    */
 
    public function update_customer_profile($integrationId, $body) {
        return $this->apiRequest("PUT", "customer_profiles/$integrationId", $body);
    }

    /**
    * Update (or create) a [Customer Session][]. For example, the items in a customers cart are part of a session.  The Talon.One platform supports multiple simultaneous sessions for the same profile, so if you have multiple ways of accessing the same application you have the option of either tracking multiple independent sessions or using the same session across all of them. You should share sessions when application access points share other state, such as the users cart. If two points of access to the application have independent state (e.g. a user can have different items in their cart across the two) they should use independent customer session ID's.  The `profileId` parameter in the request body should correspond to an `integrationId` for a customer profile, to track an anonymous session use the empty string (`""`) as the `profileId`. Note that you do **not** need to create a customer profile first: if the specified profile does not yet exist, an empty profile will be created automatically.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  The currency for the session and the cart items in the session is the same as that of the application with which the session is associated.  [Customer Session]: /Getting-Started/entities#customer-session 
    * Arguments
    *
    * @param 	string	   $customerSessionId The custom identifier for this session, must be unique within the account.

    *
    */
 
    public function update_customer_session($customerSessionId, $body) {
        return $this->apiRequest("PUT", "customer_sessions/$customerSessionId", $body);
    }

    /**
    * Records an arbitrary event in a customer session. For example, an integration might record an event when a user updates their payment information.  The `sessionId` body parameter is required, an event is always part of a session. Much like updating a customer session, if either the profile or the session do not exist, a new empty one will be created. Note that if the specified session already exists, it must belong to the same `profileId` or an error will be returned.  As with customer sessions, you can use an empty string for `profileId` to indicate that this is an anonymous session.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place. 
    * Arguments
    *

    *
    */
 
    public function track_event($body) {
        return $this->apiRequest("POST", "events", $body);
    }

    /**
    * Creates a referral code for an advocate. The code will be valid for the referral campaign for which is created, indicated in the `campaignId` parameter, and will be associated with the profile specified in the `advocateProfileIntegrationId` parameter as the advocate's profile. 
    * Arguments
    *

    *
    */
 
    public function create_referral($body) {
        return $this->apiRequest("POST", "referrals", $body);
    }

    /**
    * Delete all attributes on the customer profile and on entities that reference that customer profile. 
    * Arguments
    *
    * @param 	string	   $integrationId The custom identifier for this profile, must be unique within the account.

    *
    */
 
    public function delete_customer_data($integrationId, $body) {
        return $this->apiRequest("DELETE", "customer_data/$integrationId", $body);
    }

    /**
    * Creates a coupon reservation for all passed customer profiles on this couponID 
    * Arguments
    *
    * @param 	string	   $couponValue The value of a coupon

    *
    */
 
    public function create_coupon_reservation($couponValue, $body) {
        return $this->apiRequest("POST", "coupon_reservations/$couponValue", $body);
    }

    /**
    * Removes all passed customer profiles reservation from this coupon 
    * Arguments
    *
    * @param 	string	   $couponValue The value of a coupon

    *
    */
 
    public function delete_coupon_reservation($couponValue, $body) {
        return $this->apiRequest("DELETE", "coupon_reservations/$couponValue", $body);
    }

    /**
    * Returns all users that have this coupon marked as reserved 
    * Arguments
    *
    * @param 	string	   $couponValue The value of a coupon

    *
    */
 
    public function get_reserved_customers($couponValue, $body) {
        return $this->apiRequest("GET", "coupon_reservations/customerprofiles/$couponValue", $body);
    }

    /**
    * Returns all coupons this user is subscribed to that are valid and usable 
    * Arguments
    *
    * @param 	string	   $integrationId The custom identifier for this profile, must be unique within the account.

    *
    */
 
    public function get_reserved_coupons($integrationId, $body) {
        return $this->apiRequest("GET", "coupon_reservations/coupons/$integrationId", $body);
    }

}

?>