# Talon.One PHP sdk

## Structure

- integration_api.php
- management_api.php

## Usage

include either client in your project and follow the instructions on `example.php`

## Consumption example

You can find this same example on `example.php`

```php
<?php
include 'integration_api.php';
include 'management_api.php';

$t = new TalonOne();
$tm = new TalonOneManagement();

$t->subdomain = "demo";
$t->applicationId = 1;
$t->applicationKey = "2f276f93baf3d415";

// set apikey for the integration api
$t->apikey = "dbc644d33aa74d582bd9479c59e16f970fe13bf34a208c39d6c7fa7586968468";

// Refer to http://developers.talon.one/data-model/attribute-library/ for additional attributes
$response = $t->update_customer_profile("any_given_integration_id",
                    array('attributes' => array('Email' => 'your@customer.org')));
print_r($response);

// get an application by id
if ($tm->createManagementSession("demo@talon.one","Demo1234")) {
    print_r($tm->get_campaign_analytics(1, 1, array('rangeStart' => '2016-06-14T13:09:35.835Z', 'rangeEnd' => '2018-06-14T13:09:35.835Z')));
    $tm->destroyManagementSession();
}

```
