/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.api;

import com.bluejeans.api.rest.meetings.ApiCallback;
import com.bluejeans.api.rest.meetings.ApiClient;
import com.bluejeans.api.rest.meetings.ApiException;
import com.bluejeans.api.rest.meetings.ApiResponse;
import com.bluejeans.api.rest.meetings.Configuration;
import com.bluejeans.api.rest.meetings.Pair;
import com.bluejeans.api.rest.meetings.ProgressRequestBody;
import com.bluejeans.api.rest.meetings.ProgressResponseBody;

import com.google.gson.reflect.TypeToken;

import java.io.IOException;


import com.bluejeans.api.rest.meetings.model.EnterpriseUserList;
import com.bluejeans.api.rest.meetings.model.Error;
import com.bluejeans.api.rest.meetings.model.User;
import com.bluejeans.api.rest.meetings.model.UserId;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class EnterpriseApi {
    private ApiClient apiClient;

    public EnterpriseApi() {
        this(Configuration.getDefaultApiClient());
    }

    public EnterpriseApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for createUser
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param user The information about the new user. (required)
     * @param forcePasswordChange Forces the user to change his or her password on first log in. (optional)
     * @param sendVerificationMail Prevents welcome emails from being sent to the newly created user. (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call createUserCall(Integer enterpriseId, User user, Boolean forcePasswordChange, Boolean sendVerificationMail, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = user;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/users"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (forcePasswordChange != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "forcePasswordChange", forcePasswordChange));
        if (sendVerificationMail != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "sendVerificationMail", sendVerificationMail));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "POST", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call createUserValidateBeforeCall(Integer enterpriseId, User user, Boolean forcePasswordChange, Boolean sendVerificationMail, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling createUser(Async)");
        }
        
        // verify the required parameter 'user' is set
        if (user == null) {
            throw new ApiException("Missing the required parameter 'user' when calling createUser(Async)");
        }
        
        
        com.squareup.okhttp.Call call = createUserCall(enterpriseId, user, forcePasswordChange, sendVerificationMail, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Create Enterprise User
     * This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param user The information about the new user. (required)
     * @param forcePasswordChange Forces the user to change his or her password on first log in. (optional)
     * @param sendVerificationMail Prevents welcome emails from being sent to the newly created user. (optional)
     * @return UserId
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public UserId createUser(Integer enterpriseId, User user, Boolean forcePasswordChange, Boolean sendVerificationMail) throws ApiException {
        ApiResponse<UserId> resp = createUserWithHttpInfo(enterpriseId, user, forcePasswordChange, sendVerificationMail);
        return resp.getData();
    }

    /**
     * Create Enterprise User
     * This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param user The information about the new user. (required)
     * @param forcePasswordChange Forces the user to change his or her password on first log in. (optional)
     * @param sendVerificationMail Prevents welcome emails from being sent to the newly created user. (optional)
     * @return ApiResponse&lt;UserId&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<UserId> createUserWithHttpInfo(Integer enterpriseId, User user, Boolean forcePasswordChange, Boolean sendVerificationMail) throws ApiException {
        com.squareup.okhttp.Call call = createUserValidateBeforeCall(enterpriseId, user, forcePasswordChange, sendVerificationMail, null, null);
        Type localVarReturnType = new TypeToken<UserId>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Create Enterprise User (asynchronously)
     * This endpoint allows adding a user to an existing enterprise. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param user The information about the new user. (required)
     * @param forcePasswordChange Forces the user to change his or her password on first log in. (optional)
     * @param sendVerificationMail Prevents welcome emails from being sent to the newly created user. (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call createUserAsync(Integer enterpriseId, User user, Boolean forcePasswordChange, Boolean sendVerificationMail, final ApiCallback<UserId> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = createUserValidateBeforeCall(enterpriseId, user, forcePasswordChange, sendVerificationMail, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<UserId>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for exportUsers
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call exportUsersCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/users/export"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "text/csv"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call exportUsersValidateBeforeCall(Integer enterpriseId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling exportUsers(Async)");
        }
        
        
        com.squareup.okhttp.Call call = exportUsersCall(enterpriseId, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Export Enterprise Users
     * This endpoint exports existing users into a CSV file.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void exportUsers(Integer enterpriseId) throws ApiException {
        exportUsersWithHttpInfo(enterpriseId);
    }

    /**
     * Export Enterprise Users
     * This endpoint exports existing users into a CSV file.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> exportUsersWithHttpInfo(Integer enterpriseId) throws ApiException {
        com.squareup.okhttp.Call call = exportUsersValidateBeforeCall(enterpriseId, null, null);
        return apiClient.execute(call);
    }

    /**
     * Export Enterprise Users (asynchronously)
     * This endpoint exports existing users into a CSV file.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call exportUsersAsync(Integer enterpriseId, final ApiCallback<Void> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = exportUsersValidateBeforeCall(enterpriseId, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
    /**
     * Build call for listUsers
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param emailId Allows filtering the response by a user’s email address. (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call listUsersCall(Integer enterpriseId, Integer pageSize, Integer pageNumber, String emailId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/users"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        if (pageSize != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "pageSize", pageSize));
        if (pageNumber != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "pageNumber", pageNumber));
        if (emailId != null)
        localVarQueryParams.addAll(apiClient.parameterToPairs("", "emailId", emailId));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call listUsersValidateBeforeCall(Integer enterpriseId, Integer pageSize, Integer pageNumber, String emailId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling listUsers(Async)");
        }
        
        
        com.squareup.okhttp.Call call = listUsersCall(enterpriseId, pageSize, pageNumber, emailId, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * List Enterprise Users
     * This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param emailId Allows filtering the response by a user’s email address. (optional)
     * @return EnterpriseUserList
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public EnterpriseUserList listUsers(Integer enterpriseId, Integer pageSize, Integer pageNumber, String emailId) throws ApiException {
        ApiResponse<EnterpriseUserList> resp = listUsersWithHttpInfo(enterpriseId, pageSize, pageNumber, emailId);
        return resp.getData();
    }

    /**
     * List Enterprise Users
     * This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param emailId Allows filtering the response by a user’s email address. (optional)
     * @return ApiResponse&lt;EnterpriseUserList&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<EnterpriseUserList> listUsersWithHttpInfo(Integer enterpriseId, Integer pageSize, Integer pageNumber, String emailId) throws ApiException {
        com.squareup.okhttp.Call call = listUsersValidateBeforeCall(enterpriseId, pageSize, pageNumber, emailId, null, null);
        Type localVarReturnType = new TypeToken<EnterpriseUserList>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List Enterprise Users (asynchronously)
     * This endpoint allows listing the users that are associated with an enterprise account. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param pageSize Sets number of items returned per page. (optional)
     * @param pageNumber Selects which page of results to return. (optional)
     * @param emailId Allows filtering the response by a user’s email address. (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call listUsersAsync(Integer enterpriseId, Integer pageSize, Integer pageNumber, String emailId, final ApiCallback<EnterpriseUserList> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = listUsersValidateBeforeCall(enterpriseId, pageSize, pageNumber, emailId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<EnterpriseUserList>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for removeUser
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call removeUserCall(Integer enterpriseId, Integer userId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;
        
        // create path and map variables
        String localVarPath = "/v1/enterprise/{enterprise_id}/users/{user_id}"
            .replaceAll("\\{" + "enterprise_id" + "\\}", apiClient.escapeString(enterpriseId.toString()))
            .replaceAll("\\{" + "user_id" + "\\}", apiClient.escapeString(userId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "access_token" };
        return apiClient.buildCall(localVarPath, "DELETE", localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }
    
    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call removeUserValidateBeforeCall(Integer enterpriseId, Integer userId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'enterpriseId' is set
        if (enterpriseId == null) {
            throw new ApiException("Missing the required parameter 'enterpriseId' when calling removeUser(Async)");
        }
        
        // verify the required parameter 'userId' is set
        if (userId == null) {
            throw new ApiException("Missing the required parameter 'userId' when calling removeUser(Async)");
        }
        
        
        com.squareup.okhttp.Call call = removeUserCall(enterpriseId, userId, progressListener, progressRequestListener);
        return call;

        
        
        
        
    }

    /**
     * Remove Enterprise User
     * This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void removeUser(Integer enterpriseId, Integer userId) throws ApiException {
        removeUserWithHttpInfo(enterpriseId, userId);
    }

    /**
     * Remove Enterprise User
     * This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> removeUserWithHttpInfo(Integer enterpriseId, Integer userId) throws ApiException {
        com.squareup.okhttp.Call call = removeUserValidateBeforeCall(enterpriseId, userId, null, null);
        return apiClient.execute(call);
    }

    /**
     * Remove Enterprise User (asynchronously)
     * This endpoint allows removing a user from an enterprise; it does not delete the user. Requires enterprise admin access level.
     * @param enterpriseId The ID of the enterprise of interest. This value is an integer which can be retrieved for the current user via the Get Enterprise Profile endpoint. (required)
     * @param userId The ID of the user of interest. This value is an integer which can be retrieved for the current user via the Get User Account Details endpoint. (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call removeUserAsync(Integer enterpriseId, Integer userId, final ApiCallback<Void> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = removeUserValidateBeforeCall(enterpriseId, userId, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
}
