<?php
/**
 * AuthenticationApi
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans Meetings REST API
 *
 * ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr>
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

namespace BlueJeansMeetingsRestApi\Api;

use \BlueJeansMeetingsRestApi\ApiClient;
use \BlueJeansMeetingsRestApi\ApiException;
use \BlueJeansMeetingsRestApi\Configuration;
use \BlueJeansMeetingsRestApi\ObjectSerializer;

/**
 * AuthenticationApi Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationApi
{
    /**
     * API Client
     *
     * @var \BlueJeansMeetingsRestApi\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BlueJeansMeetingsRestApi\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BlueJeansMeetingsRestApi\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BlueJeansMeetingsRestApi\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BlueJeansMeetingsRestApi\ApiClient $apiClient set the API client
     *
     * @return AuthenticationApi
     */
    public function setApiClient(\BlueJeansMeetingsRestApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAuthorizationCode
     *
     * Get Authorization Code
     *
     * @param string $client_id The 32 character client ID generated when you created the client application. (optional)
     * @param string $redirect_uri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
     * @param string $state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
     * @param string $scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)
     * @param string $response_type The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)
     * @param string $app_name The name of the client application shown to user during authorization. (optional)
     * @param string $app_logo_url URL to an 84x84 image shown to user during authorization. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function getAuthorizationCode($client_id = null, $redirect_uri = null, $state = null, $scope = null, $response_type = 'code', $app_name = null, $app_logo_url = null)
    {
        list($response) = $this->getAuthorizationCodeWithHttpInfo($client_id, $redirect_uri, $state, $scope, $response_type, $app_name, $app_logo_url);
        return $response;
    }

    /**
     * Operation getAuthorizationCodeWithHttpInfo
     *
     * Get Authorization Code
     *
     * @param string $client_id The 32 character client ID generated when you created the client application. (optional)
     * @param string $redirect_uri The URL where the authorization code will be returned via redirect.  The URL must match a URL registered with the client application. (optional)
     * @param string $state Client application specific state passed through and returned in the redirect URL. May be useful for identifying operations or users. (optional)
     * @param string $scope A comma delimited list of scopes requested. Scopes may be list_meetings, modify_meetings, user_info. Unfortunately, not all operations in the API are available via this authentication method at the current time. (optional)
     * @param string $response_type The type of authorization you are peforrming.  Set to \&quot;code\&quot;. (optional, default to code)
     * @param string $app_name The name of the client application shown to user during authorization. (optional)
     * @param string $app_logo_url URL to an 84x84 image shown to user during authorization. (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuthorizationCodeWithHttpInfo($client_id = null, $redirect_uri = null, $state = null, $scope = null, $response_type = 'code', $app_name = null, $app_logo_url = null)
    {
        // parse inputs
        $resourcePath = "/oauth2/authorize";
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
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirectUri'] = $this->apiClient->getSerializer()->toQueryValue($redirect_uri);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = $this->apiClient->getSerializer()->toQueryValue($scope);
        }
        // query params
        if ($response_type !== null) {
            $queryParams['responseType'] = $this->apiClient->getSerializer()->toQueryValue($response_type);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['appName'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
        // query params
        if ($app_logo_url !== null) {
            $queryParams['appLogoUrl'] = $this->apiClient->getSerializer()->toQueryValue($app_logo_url);
        }

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
                null,
                '/oauth2/authorize'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTokenByClient
     *
     * Authentication via Client Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestClient $grant_request_client Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\GrantClient
     */
    public function getTokenByClient($grant_request_client)
    {
        list($response) = $this->getTokenByClientWithHttpInfo($grant_request_client);
        return $response;
    }

    /**
     * Operation getTokenByClientWithHttpInfo
     *
     * Authentication via Client Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestClient $grant_request_client Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *client_credentials*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantClient, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByClientWithHttpInfo($grant_request_client)
    {
        // verify the required parameter 'grant_request_client' is set
        if ($grant_request_client === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_request_client when calling getTokenByClient');
        }
        // parse inputs
        $resourcePath = "/oauth2/token?Client";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($grant_request_client)) {
            $_tempBody = $grant_request_client;
        }

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
                '\BlueJeansMeetingsRestApi\Model\GrantClient',
                '/oauth2/token?Client'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\GrantClient', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\GrantClient', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTokenByCode
     *
     * Authentication via Code Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestCode $grant_request_code Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\GrantCode
     */
    public function getTokenByCode($grant_request_code)
    {
        list($response) = $this->getTokenByCodeWithHttpInfo($grant_request_code);
        return $response;
    }

    /**
     * Operation getTokenByCodeWithHttpInfo
     *
     * Authentication via Code Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestCode $grant_request_code Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *authorization_code*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantCode, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByCodeWithHttpInfo($grant_request_code)
    {
        // verify the required parameter 'grant_request_code' is set
        if ($grant_request_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_request_code when calling getTokenByCode');
        }
        // parse inputs
        $resourcePath = "/oauth2/token?Code";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($grant_request_code)) {
            $_tempBody = $grant_request_code;
        }

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
                '\BlueJeansMeetingsRestApi\Model\GrantCode',
                '/oauth2/token?Code'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\GrantCode', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\GrantCode', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTokenByMeeting
     *
     * Authentication via Meeting Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting $grant_request_meeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\GrantMeeting
     */
    public function getTokenByMeeting($grant_request_meeting)
    {
        list($response) = $this->getTokenByMeetingWithHttpInfo($grant_request_meeting);
        return $response;
    }

    /**
     * Operation getTokenByMeetingWithHttpInfo
     *
     * Authentication via Meeting Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestMeeting $grant_request_meeting Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *meeting_passcode*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantMeeting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByMeetingWithHttpInfo($grant_request_meeting)
    {
        // verify the required parameter 'grant_request_meeting' is set
        if ($grant_request_meeting === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_request_meeting when calling getTokenByMeeting');
        }
        // parse inputs
        $resourcePath = "/oauth2/token?Meeting";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($grant_request_meeting)) {
            $_tempBody = $grant_request_meeting;
        }

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
                '\BlueJeansMeetingsRestApi\Model\GrantMeeting',
                '/oauth2/token?Meeting'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\GrantMeeting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\GrantMeeting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTokenByPassword
     *
     * Authentication via Password Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestPassword $grant_request_password Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\GrantPassword
     */
    public function getTokenByPassword($grant_request_password)
    {
        list($response) = $this->getTokenByPasswordWithHttpInfo($grant_request_password);
        return $response;
    }

    /**
     * Operation getTokenByPasswordWithHttpInfo
     *
     * Authentication via Password Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestPassword $grant_request_password Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *password*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantPassword, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByPasswordWithHttpInfo($grant_request_password)
    {
        // verify the required parameter 'grant_request_password' is set
        if ($grant_request_password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_request_password when calling getTokenByPassword');
        }
        // parse inputs
        $resourcePath = "/oauth2/token?Password";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($grant_request_password)) {
            $_tempBody = $grant_request_password;
        }

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
                '\BlueJeansMeetingsRestApi\Model\GrantPassword',
                '/oauth2/token?Password'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\GrantPassword', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\GrantPassword', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTokenByRefresh
     *
     * Authentication via Refresh Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh $grant_request_refresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\GrantRefresh
     */
    public function getTokenByRefresh($grant_request_refresh)
    {
        list($response) = $this->getTokenByRefreshWithHttpInfo($grant_request_refresh);
        return $response;
    }

    /**
     * Operation getTokenByRefreshWithHttpInfo
     *
     * Authentication via Refresh Grant Type
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestRefresh $grant_request_refresh Contains information about the type of grant you are requesting.  **Remember**, the field *grant_type* must be set to *refresh_token*. (required)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\GrantRefresh, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenByRefreshWithHttpInfo($grant_request_refresh)
    {
        // verify the required parameter 'grant_request_refresh' is set
        if ($grant_request_refresh === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_request_refresh when calling getTokenByRefresh');
        }
        // parse inputs
        $resourcePath = "/oauth2/token?Refresh";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($grant_request_refresh)) {
            $_tempBody = $grant_request_refresh;
        }

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
                '\BlueJeansMeetingsRestApi\Model\GrantRefresh',
                '/oauth2/token?Refresh'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\GrantRefresh', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\GrantRefresh', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTokenInfo
     *
     * Validate a Token
     *
     * @param string $access_token  (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return \BlueJeansMeetingsRestApi\Model\InlineResponse200
     */
    public function getTokenInfo($access_token = null)
    {
        list($response) = $this->getTokenInfoWithHttpInfo($access_token);
        return $response;
    }

    /**
     * Operation getTokenInfoWithHttpInfo
     *
     * Validate a Token
     *
     * @param string $access_token  (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of \BlueJeansMeetingsRestApi\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenInfoWithHttpInfo($access_token = null)
    {
        // parse inputs
        $resourcePath = "/oauth2/tokenInfo";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }

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
                '\BlueJeansMeetingsRestApi\Model\InlineResponse200',
                '/oauth2/tokenInfo'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlueJeansMeetingsRestApi\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation revokeAccessToken
     *
     * Revoke Access Token
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke $grant_request_revoke Contains information about the type of grant you are revoking. (required)
     * @param string $access_token  (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return void
     */
    public function revokeAccessToken($grant_request_revoke, $access_token = null)
    {
        list($response) = $this->revokeAccessTokenWithHttpInfo($grant_request_revoke, $access_token);
        return $response;
    }

    /**
     * Operation revokeAccessTokenWithHttpInfo
     *
     * Revoke Access Token
     *
     * @param \BlueJeansMeetingsRestApi\Model\GrantRequestRevoke $grant_request_revoke Contains information about the type of grant you are revoking. (required)
     * @param string $access_token  (optional)
     * @throws \BlueJeansMeetingsRestApi\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function revokeAccessTokenWithHttpInfo($grant_request_revoke, $access_token = null)
    {
        // verify the required parameter 'grant_request_revoke' is set
        if ($grant_request_revoke === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_request_revoke when calling revokeAccessToken');
        }
        // parse inputs
        $resourcePath = "/oauth2/token?Revoke";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // body params
        $_tempBody = null;
        if (isset($grant_request_revoke)) {
            $_tempBody = $grant_request_revoke;
        }

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
                null,
                '/oauth2/token?Revoke'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlueJeansMeetingsRestApi\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
