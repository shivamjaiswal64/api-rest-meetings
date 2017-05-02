<?php
/**
 * RecordingApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 3 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to the user. * Authorization Code Grant – Authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access code. (\"three-legged OAuth\") * Password Credentials Grant – Authenticate with a Username and password and receives an access code. (\"two-legged OAuth\"); * Client Credentials Grant – Similar to Password Grant (\"two-legged OAuth\").  ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – scope of APIs is limited to individual meetings. * User-level – scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users.  All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use on of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * RecordingApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecordingApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return RecordingApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getMeetingRecordings
     *
     * Get All Recordings for a Specified Meeting ID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RecordingHistoryList
     */
    public function getMeetingRecordings($user_id, $meeting_id, $meeting_guid = null)
    {
        list($response) = $this->getMeetingRecordingsWithHttpInfo($user_id, $meeting_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation getMeetingRecordingsWithHttpInfo
     *
     * Get All Recordings for a Specified Meeting ID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RecordingHistoryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMeetingRecordingsWithHttpInfo($user_id, $meeting_id, $meeting_guid = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getMeetingRecordings');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling getMeetingRecordings');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($meeting_guid !== null) {
            $queryParams['meetingGuid'] = $this->apiClient->getSerializer()->toQueryValue($meeting_guid);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RecordingHistoryList',
                '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RecordingHistoryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RecordingHistoryList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRecordingContent
     *
     * Get Recording Download Link
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param bool $is_downloadable Set to true. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Content
     */
    public function getRecordingContent($user_id, $content_id, $is_downloadable)
    {
        list($response) = $this->getRecordingContentWithHttpInfo($user_id, $content_id, $is_downloadable);
        return $response;
    }

    /**
     * Operation getRecordingContentWithHttpInfo
     *
     * Get Recording Download Link
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $content_id The recording properties fetched with other API endpoints will return a compositeContentId or a contentId. That value can be used for this argument. (required)
     * @param bool $is_downloadable Set to true. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Content, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRecordingContentWithHttpInfo($user_id, $content_id, $is_downloadable)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getRecordingContent');
        }
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling getRecordingContent');
        }
        // verify the required parameter 'is_downloadable' is set
        if ($is_downloadable === null) {
            throw new \InvalidArgumentException('Missing the required parameter $is_downloadable when calling getRecordingContent');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/cms/{content_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($is_downloadable !== null) {
            $queryParams['isDownloadable'] = $this->apiClient->getSerializer()->toQueryValue($is_downloadable);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Content',
                '/v1/user/{user_id}/cms/{content_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Content', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Content', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation startRecording
     *
     * Start Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function startRecording($user_id, $meeting_id, $action)
    {
        list($response) = $this->startRecordingWithHttpInfo($user_id, $meeting_id, $action);
        return $response;
    }

    /**
     * Operation startRecordingWithHttpInfo
     *
     * Start Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;start\&quot; in order to start recording. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function startRecordingWithHttpInfo($user_id, $meeting_id, $action)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling startRecording');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling startRecording');
        }
        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling startRecording');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($action !== null) {
            $queryParams['action'] = $this->apiClient->getSerializer()->toQueryValue($action);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation stopRecording
     *
     * Stop Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function stopRecording($user_id, $meeting_id, $action)
    {
        list($response) = $this->stopRecordingWithHttpInfo($user_id, $meeting_id, $action);
        return $response;
    }

    /**
     * Operation stopRecordingWithHttpInfo
     *
     * Stop Recording
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param string $action Always set to \&quot;stop\&quot; in order to stop recording. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function stopRecordingWithHttpInfo($user_id, $meeting_id, $action)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling stopRecording');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling stopRecording');
        }
        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling stopRecording');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/live_meetings/{meeting_id}/recordings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($action !== null) {
            $queryParams['action'] = $this->apiClient->getSerializer()->toQueryValue($action);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/user/{user_id}/live_meetings/{meeting_id}/recordings'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Meeting
     */
    public function v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete($user_id, $meeting_guid)
    {
        list($response) = $this->v1UserUserIdMeetingHistoryMeetingGuidRecordingsDeleteWithHttpInfo($user_id, $meeting_guid);
        return $response;
    }

    /**
     * Operation v1UserUserIdMeetingHistoryMeetingGuidRecordingsDeleteWithHttpInfo
     *
     * Delete All Recordings for a Specified Meeting GUID
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param string $meeting_guid The globally unique identifier (GUID) of the meeting of interest. This value is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 5 alphanumeric segments separated by dashes. Since a given numeric meeting ID can have multiple instantiations over time, the GUID helps identify the instance of interest. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UserUserIdMeetingHistoryMeetingGuidRecordingsDeleteWithHttpInfo($user_id, $meeting_guid)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete');
        }
        // verify the required parameter 'meeting_guid' is set
        if ($meeting_guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_guid when calling v1UserUserIdMeetingHistoryMeetingGuidRecordingsDelete');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_guid !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_guid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Meeting',
                '/v1/user/{user_id}/meeting_history/{meeting_guid}/recordings/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete
     *
     * Delete a Specified Recording Chapter
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Meeting
     */
    public function v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete($user_id, $meeting_id, $recording_chapter_id)
    {
        list($response) = $this->v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDeleteWithHttpInfo($user_id, $meeting_id, $recording_chapter_id);
        return $response;
    }

    /**
     * Operation v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDeleteWithHttpInfo
     *
     * Delete a Specified Recording Chapter
     *
     * @param int $user_id The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param int $meeting_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @param int $recording_chapter_id The ID of the meeting you want to view. This is an integer value. You can find this ID by doing a list of meetings and referencing the \&quot;id\&quot; property. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Meeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDeleteWithHttpInfo($user_id, $meeting_id, $recording_chapter_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete');
        }
        // verify the required parameter 'meeting_id' is set
        if ($meeting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $meeting_id when calling v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete');
        }
        // verify the required parameter 'recording_chapter_id' is set
        if ($recording_chapter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recording_chapter_id when calling v1UserUserIdMeetingHistoryMeetingIdRecordingsRecordingChapterIdDelete');
        }
        // parse inputs
        $resourcePath = "/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($meeting_id !== null) {
            $resourcePath = str_replace(
                "{" . "meeting_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($meeting_id),
                $resourcePath
            );
        }
        // path params
        if ($recording_chapter_id !== null) {
            $resourcePath = str_replace(
                "{" . "recording_chapter_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($recording_chapter_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Meeting',
                '/v1/user/{user_id}/meeting_history/{meeting_id}/recordings/{recording_chapter_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Meeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Meeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
