# Swagger\Client\AnalyticsApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/endpoints/distribution | Endpoint Distribution
[**v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/feedback/comments | Survey Feedback Comments
[**v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/meetings/usage | Meeting Usage Over Time
[**v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/roi_ranges | ROI Data
[**v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/analytics/users/usage | Top Users
[**v1EnterpriseEnterpriseIdIndigoFeedbackCountGet**](AnalyticsApi.md#v1EnterpriseEnterpriseIdIndigoFeedbackCountGet) | **GET** /v1/enterprise/{enterprise_id}/indigo/feedback/count | Survey Feedback Scores


# **v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet**
> \Swagger\Client\Model\AnalyticsEndpointDistribution v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet($enterprise_id, $filter)

Endpoint Distribution

This endpoint retrieves endpoint connection type distribution by enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AnalyticsApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"creation_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"creation_time\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet($enterprise_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->v1EnterpriseEnterpriseIdIndigoAnalyticsEndpointsDistributionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;creation_time&quot;}]]

### Return type

[**\Swagger\Client\Model\AnalyticsEndpointDistribution**](../Model/AnalyticsEndpointDistribution.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet**
> \Swagger\Client\Model\AnalyticsFeedbackComments v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet($enterprise_id, $start, $end)

Survey Feedback Comments

This endpoint lists end of meeting survey comments by enterprise by time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AnalyticsApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$start = "2017-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$end = "2018-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

try {
    $result = $api_instance->v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet($enterprise_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->v1EnterpriseEnterpriseIdIndigoAnalyticsFeedbackCommentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**\Swagger\Client\Model\AnalyticsFeedbackComments**](../Model/AnalyticsFeedbackComments.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet**
> \Swagger\Client\Model\AnalyticsUsage v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet($enterprise_id, $client_tz, $filter)

Meeting Usage Over Time

This endpoint reports on meeting usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AnalyticsApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$client_tz = "America/Denver"; // string | Based on standard TZ code.
$filter = "[{\"type\":\"string\",\"comparison\":\"eq\",\"value\":\"DAY\",\"field\":\"groupInterval\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"lowts\"},{\"type\":\"date\",\"comparison\":\"eq\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"hights\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet($enterprise_id, $client_tz, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->v1EnterpriseEnterpriseIdIndigoAnalyticsMeetingsUsageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **client_tz** | **string**| Based on standard TZ code. | [optional] [default to America/Denver]
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;string&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;DAY&quot;,&quot;field&quot;:&quot;groupInterval&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;lowts&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;hights&quot;}]]

### Return type

[**\Swagger\Client\Model\AnalyticsUsage**](../Model/AnalyticsUsage.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet**
> \Swagger\Client\Model\AnalyticsRoiData v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet($enterprise_id, $filter)

ROI Data

This endpoint lists return on investment (ROI) data for meetings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AnalyticsApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"startTime\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"startTime\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet($enterprise_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->v1EnterpriseEnterpriseIdIndigoAnalyticsRoiRangesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded JSON string | [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;startTime&quot;}]]

### Return type

[**\Swagger\Client\Model\AnalyticsRoiData**](../Model/AnalyticsRoiData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet**
> \Swagger\Client\Model\AnalyticsTopUsers v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet($enterprise_id, $filter)

Top Users

This endpoint retrieves the top useres by usage for an enterprise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AnalyticsApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$filter = "[{\"type\":\"date\",\"comparison\":\"gt\",\"value\":\"2017-01-16T00:00:00-07:00\",\"field\":\"start_time\"},{\"type\":\"date\",\"comparison\":\"lt\",\"value\":\"2017-01-23T23:59:59-07:00\",\"field\":\"end_time\"}]"; // string | URL-encoded JSON string

try {
    $result = $api_instance->v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet($enterprise_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->v1EnterpriseEnterpriseIdIndigoAnalyticsUsersUsageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **filter** | **string**| URL-encoded JSON string | [optional] [default to [{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;gt&quot;,&quot;value&quot;:&quot;2017-01-16T00:00:00-07:00&quot;,&quot;field&quot;:&quot;start_time&quot;},{&quot;type&quot;:&quot;date&quot;,&quot;comparison&quot;:&quot;lt&quot;,&quot;value&quot;:&quot;2017-01-23T23:59:59-07:00&quot;,&quot;field&quot;:&quot;end_time&quot;}]]

### Return type

[**\Swagger\Client\Model\AnalyticsTopUsers**](../Model/AnalyticsTopUsers.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1EnterpriseEnterpriseIdIndigoFeedbackCountGet**
> \Swagger\Client\Model\AnalyticsFeedbackScores v1EnterpriseEnterpriseIdIndigoFeedbackCountGet($enterprise_id, $start, $end)

Survey Feedback Scores

This endpoint lists end of meeting survey scores by enterprise by time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\AnalyticsApi();
$enterprise_id = 56; // int | The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint.
$start = "2017-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.
$end = "2018-01-01T00:00:00-00:00"; // string | Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format.

try {
    $result = $api_instance->v1EnterpriseEnterpriseIdIndigoFeedbackCountGet($enterprise_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->v1EnterpriseEnterpriseIdIndigoFeedbackCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise_id** | **int**| The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. |
 **start** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2017-01-01T00:00:00-00:00]
 **end** | **string**| Date and time in an [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format. | [default to 2018-01-01T00:00:00-00:00]

### Return type

[**\Swagger\Client\Model\AnalyticsFeedbackScores**](../Model/AnalyticsFeedbackScores.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
