# # Risk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**notificationId** | **int** | The ID of the risk notification rule that flagged this risk. | 
**featureDate** | [**\DateTime**](\DateTime.md) | The date of the activity data in which this risk was detected. The anomaly detection pipeline scores complete 24-hour cycles, so this is always the day before the risk was reported, not the reporting date itself. | 
**groupKey** | **string** | The Application group this risk was detected in. Contains the Application ID, or &#x60;__GLOBAL__&#x60; for metrics that are not grouped by Application. | 
**applicationId** | **int** | The ID of the Application this risk belongs to. Absent for global metrics. | [optional] 
**status** | **string** | The triage lifecycle status of this risk. | 
**criticality** | **string** | The critical classification bucket of this risk. | 
**entity** | **string** | The entity type the risk was detected in. | 
**activity** | **string** | The activity metric the risk was detected in. | 
**timeFrame** | **string** | The rolling time window of the risk evaluation. | 
**reportedDate** | [**\DateTime**](\DateTime.md) | The time the ML service reported this risk. | 
**affectedEntityCount** | **int** | The total number of entities affected by this risk. | 
**description** | **string** | Human-readable description of the detected anomaly. | [optional] 
**discardReason** | **string** | The reason this risk was discarded. Only present on discarded risks. | [optional] 
**statusComment** | **string** | The free-text details of the latest reclassification action: the description for resolving confirmed risks, or the details for discarding risks. | [optional] 
**statusChangedBy** | **int** | The ID of the user who performed the latest reclassification action. | [optional] 
**statusChangedAt** | [**\DateTime**](\DateTime.md) | The time of the latest reclassification action. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


