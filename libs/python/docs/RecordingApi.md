# BlueJeansMeetingsRestApi.RecordingApi

All URIs are relative to *https://api.bluejeans.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_meeting_recordings**](RecordingApi.md#get_meeting_recordings) | **GET** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings | Get All Recordings for a Specified Meeting ID
[**get_recording_content**](RecordingApi.md#get_recording_content) | **GET** /v1/user/{user_id}/cms/{content_id} | Get Recording Download Link
[**start_recording**](RecordingApi.md#start_recording) | **POST** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Start Recording
[**stop_recording**](RecordingApi.md#stop_recording) | **PUT** /v1/user/{user_id}/live_meetings/{meeting_id}/recordings | Stop Recording
[**v1_user_user_id_meeting_history_meeting_guid_recordings_delete**](RecordingApi.md#v1_user_user_id_meeting_history_meeting_guid_recordings_delete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/ | Delete All Recordings for a Specified Meeting GUID
[**v1_user_user_id_meeting_history_meeting_id_recordings_recording_chapter_id_delete**](RecordingApi.md#v1_user_user_id_meeting_history_meeting_id_recordings_recording_chapter_id_delete) | **DELETE** /v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/ | Delete a Specified Recording Chapter


# **get_meeting_recordings**
> RecordingHistoryList get_meeting_recordings(user_id, meeting_id, meeting_guid=meeting_guid)

Get All Recordings for a Specified Meeting ID

This endpoint lists the recordings for a meeting.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.RecordingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)

try: 
    # Get All Recordings for a Specified Meeting ID
    api_response = api_instance.get_meeting_recordings(user_id, meeting_id, meeting_guid=meeting_guid)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->get_meeting_recordings: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | [optional] 

### Return type

[**RecordingHistoryList**](RecordingHistoryList.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_recording_content**
> Content get_recording_content(user_id, content_id, is_downloadable)

Get Recording Download Link

This endpoint retrieves properties about the recording chapter.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.RecordingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
content_id = 56 # int | The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument.
is_downloadable = true # bool | Set to true. (default to true)

try: 
    # Get Recording Download Link
    api_response = api_instance.get_recording_content(user_id, content_id, is_downloadable)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->get_recording_content: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **content_id** | **int**| The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. | 
 **is_downloadable** | **bool**| Set to true. | [default to true]

### Return type

[**Content**](Content.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **start_recording**
> start_recording(user_id, meeting_id, action)

Start Recording

This endpoint starts recording for a meeting in progress. Note that this is a POST operation. Stop is a PUT operation.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.RecordingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
action = 'start' # str | Always set to \"start\" in order to start recording. (default to start)

try: 
    # Start Recording
    api_instance.start_recording(user_id, meeting_id, action)
except ApiException as e:
    print("Exception when calling RecordingApi->start_recording: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **action** | **str**| Always set to \&quot;start\&quot; in order to start recording. | [default to start]

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **stop_recording**
> stop_recording(user_id, meeting_id, action)

Stop Recording

This endpoint stops recording for a meeting in progress. Note that this is a PUT operation. Start is a POST operation.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.RecordingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
action = 'stop' # str | Always set to \"stop\" in order to stop recording. (default to stop)

try: 
    # Stop Recording
    api_instance.stop_recording(user_id, meeting_id, action)
except ApiException as e:
    print("Exception when calling RecordingApi->stop_recording: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **action** | **str**| Always set to \&quot;stop\&quot; in order to stop recording. | [default to stop]

### Return type

void (empty response body)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_meeting_history_meeting_guid_recordings_delete**
> Meeting v1_user_user_id_meeting_history_meeting_guid_recordings_delete(user_id, meeting_guid)

Delete All Recordings for a Specified Meeting GUID

This endpoint stops recording for a meeting in progress. 

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.RecordingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_guid = 'meeting_guid_example' # str | The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest.

try: 
    # Delete All Recordings for a Specified Meeting GUID
    api_response = api_instance.v1_user_user_id_meeting_history_meeting_guid_recordings_delete(user_id, meeting_guid)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->v1_user_user_id_meeting_history_meeting_guid_recordings_delete: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_guid** | **str**| The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1_user_user_id_meeting_history_meeting_id_recordings_recording_chapter_id_delete**
> Meeting v1_user_user_id_meeting_history_meeting_id_recordings_recording_chapter_id_delete(user_id, meeting_id, recording_chapter_id)

Delete a Specified Recording Chapter

This endpoint stops recording for a meeting in progress.

### Example 
```python
from __future__ import print_function
import time
import BlueJeansMeetingsRestApi
from BlueJeansMeetingsRestApi.rest import ApiException
from pprint import pprint

# Configure API key authorization: access_token
BlueJeansMeetingsRestApi.configuration.api_key['access_token'] = 'YOUR_API_KEY'
# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# BlueJeansMeetingsRestApi.configuration.api_key_prefix['access_token'] = 'Bearer'

# create an instance of the API class
api_instance = BlueJeansMeetingsRestApi.RecordingApi()
user_id = 56 # int | The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint.
meeting_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.
recording_chapter_id = 56 # int | The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \"id\" property.

try: 
    # Delete a Specified Recording Chapter
    api_response = api_instance.v1_user_user_id_meeting_history_meeting_id_recordings_recording_chapter_id_delete(user_id, meeting_id, recording_chapter_id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RecordingApi->v1_user_user_id_meeting_history_meeting_id_recordings_recording_chapter_id_delete: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. | 
 **meeting_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 
 **recording_chapter_id** | **int**| The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. | 

### Return type

[**Meeting**](Meeting.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

