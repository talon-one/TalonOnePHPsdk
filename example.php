<?php

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/lib/utils/generators.php');

// ---- modify accordingly ----
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setHost('http://localhost:9000');
$config->setApplicationId('1');
$config->setApiKey('Authorization', 'ff164d01c11d9571');

$apiInstance = new Swagger\Client\Api\IntegrationAPIApi( new GuzzleHttp\Client(), $config);

// ----- create a customer profile
try {
    $result = $apiInstance->updateCustomerProfile(generateStr());
    $profileId = $result->getProfile()->getIntegrationId();
    echo("profile created:\t\t" . $profileId . "\n");
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->updateCustomerProfile: ', $e->getMessage(), PHP_EOL;
}

// ----- updates the created customer profile with a valid attribute
try {
    $result = $apiInstance->updateCustomerProfile($profileId, "{\"attributes\": {\"Name\": \"John McClient\"}}");
    echo("profile updated with name:\t" . $result->getProfile()->getAttributes()["Name"] . "\n");
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->updateCustomerProfile: ', $e->getMessage(), PHP_EOL;
}

// ----- create a new customer session (associated with $profileId)
$customerSessionBody = new Swagger\Client\Model\NewCustomerSession();
$customerSessionBody->setProfileId($profileId);
try {
    $result = $apiInstance->updateCustomerSession($profileId . '_session', $customerSessionBody);
    $sessionId = $result->getSession()->getIntegrationId();
    echo("session created:\t\t" . $sessionId . "\n");
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->updateCustomerSession: ', $e->getMessage(), PHP_EOL;
}

// ---- closes the previous opened session
$customerSessionBody->setState('closed');
try {
    $result = $apiInstance->updateCustomerSession($sessionId, $customerSessionBody);
    echo("session closed:\t\t\t" . $sessionId . "\n");
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->updateCustomerSession: ', $e->getMessage(), PHP_EOL;
}

?>