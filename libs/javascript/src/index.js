/**
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.2.3
 *
 * Do not edit the class manually.
 *
 */

(function(factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/AnalyticsEndpointDistribution', 'model/AnalyticsEndpointDistributionDistribution', 'model/AnalyticsFeedbackComments', 'model/AnalyticsFeedbackCommentsComments', 'model/AnalyticsFeedbackScores', 'model/AnalyticsRoiData', 'model/AnalyticsRoiDataRoiRanges', 'model/AnalyticsTopUsers', 'model/AnalyticsTopUsersUsage', 'model/AnalyticsUsage', 'model/AnalyticsUsageUsage', 'model/Application', 'model/ApplicationSecret', 'model/Attendee', 'model/Content', 'model/ContentContentProperties', 'model/ContentContentPropertiesLevels', 'model/DialoutPstn', 'model/Endpoint', 'model/EndpointIndigo', 'model/EndpointIndigoEndpointAttributes1', 'model/EndpointIndigoLocation', 'model/EndpointIndigoSummaryStats', 'model/EndpointIndigoTraceroute', 'model/EndpointIndigoTracerouteTracePath', 'model/Endpoints', 'model/EndpointsInner', 'model/EndpointsInnerConnections', 'model/Enterprise', 'model/EnterpriseUserList', 'model/EnterpriseUserListUsers', 'model/Error', 'model/GrantClient', 'model/GrantClientScope', 'model/GrantCode', 'model/GrantCodeScope', 'model/GrantCodeScopeAppPermissions', 'model/GrantMeeting', 'model/GrantMeetingScope', 'model/GrantMeetingScopeMeeting', 'model/GrantPassword', 'model/GrantPasswordScope', 'model/GrantRefresh', 'model/GrantRefreshScope', 'model/GrantRequestClient', 'model/GrantRequestCode', 'model/GrantRequestMeeting', 'model/GrantRequestPassword', 'model/GrantRequestRefresh', 'model/GrantRequestRevoke', 'model/GrantedApplications', 'model/InlineResponse200', 'model/Layout', 'model/Meeting', 'model/MeetingAdvancedMeetingOptions', 'model/MeetingHistory', 'model/MeetingHistoryLeaderInfo', 'model/MeetingHistoryParticipantList', 'model/MeetingHistorySharing', 'model/MeetingIndigo', 'model/MeetingIndigoList', 'model/MeetingState', 'model/MeetingStateRecordinginfo', 'model/Numbers', 'model/NumbersLabel', 'model/NumbersNumbers', 'model/PairingCodeSIP', 'model/PairingCodeSIPTurnservers', 'model/PairingCodeWebRTC', 'model/Partition', 'model/PayloadDialout', 'model/PayloadInvite', 'model/PayloadMeetingState', 'model/PayloadPairingCodePstn', 'model/PayloadPairingCodeSIP', 'model/PayloadPairingCodeWebRTC', 'model/Recording', 'model/RecordingHistory', 'model/RecordingHistoryList', 'model/RecordingRecordingChapters', 'model/RecordingSession', 'model/RecordingSessionStartedBy', 'model/RecordingSummary', 'model/Room', 'model/User', 'model/UserId', 'model/MeetingExtendedIndigo', 'api/ApplicationApi', 'api/AuthenticationApi', 'api/CommandCenterApi', 'api/EnterpriseApi', 'api/HistoryApi', 'api/MeetingApi', 'api/RecordingApi', 'api/UserApi'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('./ApiClient'), require('./model/AnalyticsEndpointDistribution'), require('./model/AnalyticsEndpointDistributionDistribution'), require('./model/AnalyticsFeedbackComments'), require('./model/AnalyticsFeedbackCommentsComments'), require('./model/AnalyticsFeedbackScores'), require('./model/AnalyticsRoiData'), require('./model/AnalyticsRoiDataRoiRanges'), require('./model/AnalyticsTopUsers'), require('./model/AnalyticsTopUsersUsage'), require('./model/AnalyticsUsage'), require('./model/AnalyticsUsageUsage'), require('./model/Application'), require('./model/ApplicationSecret'), require('./model/Attendee'), require('./model/Content'), require('./model/ContentContentProperties'), require('./model/ContentContentPropertiesLevels'), require('./model/DialoutPstn'), require('./model/Endpoint'), require('./model/EndpointIndigo'), require('./model/EndpointIndigoEndpointAttributes1'), require('./model/EndpointIndigoLocation'), require('./model/EndpointIndigoSummaryStats'), require('./model/EndpointIndigoTraceroute'), require('./model/EndpointIndigoTracerouteTracePath'), require('./model/Endpoints'), require('./model/EndpointsInner'), require('./model/EndpointsInnerConnections'), require('./model/Enterprise'), require('./model/EnterpriseUserList'), require('./model/EnterpriseUserListUsers'), require('./model/Error'), require('./model/GrantClient'), require('./model/GrantClientScope'), require('./model/GrantCode'), require('./model/GrantCodeScope'), require('./model/GrantCodeScopeAppPermissions'), require('./model/GrantMeeting'), require('./model/GrantMeetingScope'), require('./model/GrantMeetingScopeMeeting'), require('./model/GrantPassword'), require('./model/GrantPasswordScope'), require('./model/GrantRefresh'), require('./model/GrantRefreshScope'), require('./model/GrantRequestClient'), require('./model/GrantRequestCode'), require('./model/GrantRequestMeeting'), require('./model/GrantRequestPassword'), require('./model/GrantRequestRefresh'), require('./model/GrantRequestRevoke'), require('./model/GrantedApplications'), require('./model/InlineResponse200'), require('./model/Layout'), require('./model/Meeting'), require('./model/MeetingAdvancedMeetingOptions'), require('./model/MeetingHistory'), require('./model/MeetingHistoryLeaderInfo'), require('./model/MeetingHistoryParticipantList'), require('./model/MeetingHistorySharing'), require('./model/MeetingIndigo'), require('./model/MeetingIndigoList'), require('./model/MeetingState'), require('./model/MeetingStateRecordinginfo'), require('./model/Numbers'), require('./model/NumbersLabel'), require('./model/NumbersNumbers'), require('./model/PairingCodeSIP'), require('./model/PairingCodeSIPTurnservers'), require('./model/PairingCodeWebRTC'), require('./model/Partition'), require('./model/PayloadDialout'), require('./model/PayloadInvite'), require('./model/PayloadMeetingState'), require('./model/PayloadPairingCodePstn'), require('./model/PayloadPairingCodeSIP'), require('./model/PayloadPairingCodeWebRTC'), require('./model/Recording'), require('./model/RecordingHistory'), require('./model/RecordingHistoryList'), require('./model/RecordingRecordingChapters'), require('./model/RecordingSession'), require('./model/RecordingSessionStartedBy'), require('./model/RecordingSummary'), require('./model/Room'), require('./model/User'), require('./model/UserId'), require('./model/MeetingExtendedIndigo'), require('./api/ApplicationApi'), require('./api/AuthenticationApi'), require('./api/CommandCenterApi'), require('./api/EnterpriseApi'), require('./api/HistoryApi'), require('./api/MeetingApi'), require('./api/RecordingApi'), require('./api/UserApi'));
  }
}(function(ApiClient, AnalyticsEndpointDistribution, AnalyticsEndpointDistributionDistribution, AnalyticsFeedbackComments, AnalyticsFeedbackCommentsComments, AnalyticsFeedbackScores, AnalyticsRoiData, AnalyticsRoiDataRoiRanges, AnalyticsTopUsers, AnalyticsTopUsersUsage, AnalyticsUsage, AnalyticsUsageUsage, Application, ApplicationSecret, Attendee, Content, ContentContentProperties, ContentContentPropertiesLevels, DialoutPstn, Endpoint, EndpointIndigo, EndpointIndigoEndpointAttributes1, EndpointIndigoLocation, EndpointIndigoSummaryStats, EndpointIndigoTraceroute, EndpointIndigoTracerouteTracePath, Endpoints, EndpointsInner, EndpointsInnerConnections, Enterprise, EnterpriseUserList, EnterpriseUserListUsers, Error, GrantClient, GrantClientScope, GrantCode, GrantCodeScope, GrantCodeScopeAppPermissions, GrantMeeting, GrantMeetingScope, GrantMeetingScopeMeeting, GrantPassword, GrantPasswordScope, GrantRefresh, GrantRefreshScope, GrantRequestClient, GrantRequestCode, GrantRequestMeeting, GrantRequestPassword, GrantRequestRefresh, GrantRequestRevoke, GrantedApplications, InlineResponse200, Layout, Meeting, MeetingAdvancedMeetingOptions, MeetingHistory, MeetingHistoryLeaderInfo, MeetingHistoryParticipantList, MeetingHistorySharing, MeetingIndigo, MeetingIndigoList, MeetingState, MeetingStateRecordinginfo, Numbers, NumbersLabel, NumbersNumbers, PairingCodeSIP, PairingCodeSIPTurnservers, PairingCodeWebRTC, Partition, PayloadDialout, PayloadInvite, PayloadMeetingState, PayloadPairingCodePstn, PayloadPairingCodeSIP, PayloadPairingCodeWebRTC, Recording, RecordingHistory, RecordingHistoryList, RecordingRecordingChapters, RecordingSession, RecordingSessionStartedBy, RecordingSummary, Room, User, UserId, MeetingExtendedIndigo, ApplicationApi, AuthenticationApi, CommandCenterApi, EnterpriseApi, HistoryApi, MeetingApi, RecordingApi, UserApi) {
  'use strict';

  /**
   * JavaScript client for BlueJeans Meetings REST APIs.<br>
   * The <code>index</code> module provides access to constructors for all the classes which comprise the public API.
   * <p>
   * An AMD (recommended!) or CommonJS application will generally do something equivalent to the following:
   * <pre>
   * var BlueJeansMeetingsRestApi = require('index'); // See note below*.
   * var xxxSvc = new BlueJeansMeetingsRestApi.XxxApi(); // Allocate the API class we're going to use.
   * var yyyModel = new BlueJeansMeetingsRestApi.Yyy(); // Construct a model instance.
   * yyyModel.someProperty = 'someValue';
   * ...
   * var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
   * ...
   * </pre>
   * <em>*NOTE: For a top-level AMD script, use require(['index'], function(){...})
   * and put the application logic within the callback function.</em>
   * </p>
   * <p>
   * A non-AMD browser application (discouraged) might do something like this:
   * <pre>
   * var xxxSvc = new BlueJeansMeetingsRestApi.XxxApi(); // Allocate the API class we're going to use.
   * var yyy = new BlueJeansMeetingsRestApi.Yyy(); // Construct a model instance.
   * yyyModel.someProperty = 'someValue';
   * ...
   * var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
   * ...
   * </pre>
   * </p>
   * @module index
   * @version 1.0.0
   */
  var exports = {
    /**
     * The ApiClient constructor.
     * @property {module:ApiClient}
     */
    ApiClient: ApiClient,
    /**
     * The AnalyticsEndpointDistribution model constructor.
     * @property {module:model/AnalyticsEndpointDistribution}
     */
    AnalyticsEndpointDistribution: AnalyticsEndpointDistribution,
    /**
     * The AnalyticsEndpointDistributionDistribution model constructor.
     * @property {module:model/AnalyticsEndpointDistributionDistribution}
     */
    AnalyticsEndpointDistributionDistribution: AnalyticsEndpointDistributionDistribution,
    /**
     * The AnalyticsFeedbackComments model constructor.
     * @property {module:model/AnalyticsFeedbackComments}
     */
    AnalyticsFeedbackComments: AnalyticsFeedbackComments,
    /**
     * The AnalyticsFeedbackCommentsComments model constructor.
     * @property {module:model/AnalyticsFeedbackCommentsComments}
     */
    AnalyticsFeedbackCommentsComments: AnalyticsFeedbackCommentsComments,
    /**
     * The AnalyticsFeedbackScores model constructor.
     * @property {module:model/AnalyticsFeedbackScores}
     */
    AnalyticsFeedbackScores: AnalyticsFeedbackScores,
    /**
     * The AnalyticsRoiData model constructor.
     * @property {module:model/AnalyticsRoiData}
     */
    AnalyticsRoiData: AnalyticsRoiData,
    /**
     * The AnalyticsRoiDataRoiRanges model constructor.
     * @property {module:model/AnalyticsRoiDataRoiRanges}
     */
    AnalyticsRoiDataRoiRanges: AnalyticsRoiDataRoiRanges,
    /**
     * The AnalyticsTopUsers model constructor.
     * @property {module:model/AnalyticsTopUsers}
     */
    AnalyticsTopUsers: AnalyticsTopUsers,
    /**
     * The AnalyticsTopUsersUsage model constructor.
     * @property {module:model/AnalyticsTopUsersUsage}
     */
    AnalyticsTopUsersUsage: AnalyticsTopUsersUsage,
    /**
     * The AnalyticsUsage model constructor.
     * @property {module:model/AnalyticsUsage}
     */
    AnalyticsUsage: AnalyticsUsage,
    /**
     * The AnalyticsUsageUsage model constructor.
     * @property {module:model/AnalyticsUsageUsage}
     */
    AnalyticsUsageUsage: AnalyticsUsageUsage,
    /**
     * The Application model constructor.
     * @property {module:model/Application}
     */
    Application: Application,
    /**
     * The ApplicationSecret model constructor.
     * @property {module:model/ApplicationSecret}
     */
    ApplicationSecret: ApplicationSecret,
    /**
     * The Attendee model constructor.
     * @property {module:model/Attendee}
     */
    Attendee: Attendee,
    /**
     * The Content model constructor.
     * @property {module:model/Content}
     */
    Content: Content,
    /**
     * The ContentContentProperties model constructor.
     * @property {module:model/ContentContentProperties}
     */
    ContentContentProperties: ContentContentProperties,
    /**
     * The ContentContentPropertiesLevels model constructor.
     * @property {module:model/ContentContentPropertiesLevels}
     */
    ContentContentPropertiesLevels: ContentContentPropertiesLevels,
    /**
     * The DialoutPstn model constructor.
     * @property {module:model/DialoutPstn}
     */
    DialoutPstn: DialoutPstn,
    /**
     * The Endpoint model constructor.
     * @property {module:model/Endpoint}
     */
    Endpoint: Endpoint,
    /**
     * The EndpointIndigo model constructor.
     * @property {module:model/EndpointIndigo}
     */
    EndpointIndigo: EndpointIndigo,
    /**
     * The EndpointIndigoEndpointAttributes1 model constructor.
     * @property {module:model/EndpointIndigoEndpointAttributes1}
     */
    EndpointIndigoEndpointAttributes1: EndpointIndigoEndpointAttributes1,
    /**
     * The EndpointIndigoLocation model constructor.
     * @property {module:model/EndpointIndigoLocation}
     */
    EndpointIndigoLocation: EndpointIndigoLocation,
    /**
     * The EndpointIndigoSummaryStats model constructor.
     * @property {module:model/EndpointIndigoSummaryStats}
     */
    EndpointIndigoSummaryStats: EndpointIndigoSummaryStats,
    /**
     * The EndpointIndigoTraceroute model constructor.
     * @property {module:model/EndpointIndigoTraceroute}
     */
    EndpointIndigoTraceroute: EndpointIndigoTraceroute,
    /**
     * The EndpointIndigoTracerouteTracePath model constructor.
     * @property {module:model/EndpointIndigoTracerouteTracePath}
     */
    EndpointIndigoTracerouteTracePath: EndpointIndigoTracerouteTracePath,
    /**
     * The Endpoints model constructor.
     * @property {module:model/Endpoints}
     */
    Endpoints: Endpoints,
    /**
     * The EndpointsInner model constructor.
     * @property {module:model/EndpointsInner}
     */
    EndpointsInner: EndpointsInner,
    /**
     * The EndpointsInnerConnections model constructor.
     * @property {module:model/EndpointsInnerConnections}
     */
    EndpointsInnerConnections: EndpointsInnerConnections,
    /**
     * The Enterprise model constructor.
     * @property {module:model/Enterprise}
     */
    Enterprise: Enterprise,
    /**
     * The EnterpriseUserList model constructor.
     * @property {module:model/EnterpriseUserList}
     */
    EnterpriseUserList: EnterpriseUserList,
    /**
     * The EnterpriseUserListUsers model constructor.
     * @property {module:model/EnterpriseUserListUsers}
     */
    EnterpriseUserListUsers: EnterpriseUserListUsers,
    /**
     * The Error model constructor.
     * @property {module:model/Error}
     */
    Error: Error,
    /**
     * The GrantClient model constructor.
     * @property {module:model/GrantClient}
     */
    GrantClient: GrantClient,
    /**
     * The GrantClientScope model constructor.
     * @property {module:model/GrantClientScope}
     */
    GrantClientScope: GrantClientScope,
    /**
     * The GrantCode model constructor.
     * @property {module:model/GrantCode}
     */
    GrantCode: GrantCode,
    /**
     * The GrantCodeScope model constructor.
     * @property {module:model/GrantCodeScope}
     */
    GrantCodeScope: GrantCodeScope,
    /**
     * The GrantCodeScopeAppPermissions model constructor.
     * @property {module:model/GrantCodeScopeAppPermissions}
     */
    GrantCodeScopeAppPermissions: GrantCodeScopeAppPermissions,
    /**
     * The GrantMeeting model constructor.
     * @property {module:model/GrantMeeting}
     */
    GrantMeeting: GrantMeeting,
    /**
     * The GrantMeetingScope model constructor.
     * @property {module:model/GrantMeetingScope}
     */
    GrantMeetingScope: GrantMeetingScope,
    /**
     * The GrantMeetingScopeMeeting model constructor.
     * @property {module:model/GrantMeetingScopeMeeting}
     */
    GrantMeetingScopeMeeting: GrantMeetingScopeMeeting,
    /**
     * The GrantPassword model constructor.
     * @property {module:model/GrantPassword}
     */
    GrantPassword: GrantPassword,
    /**
     * The GrantPasswordScope model constructor.
     * @property {module:model/GrantPasswordScope}
     */
    GrantPasswordScope: GrantPasswordScope,
    /**
     * The GrantRefresh model constructor.
     * @property {module:model/GrantRefresh}
     */
    GrantRefresh: GrantRefresh,
    /**
     * The GrantRefreshScope model constructor.
     * @property {module:model/GrantRefreshScope}
     */
    GrantRefreshScope: GrantRefreshScope,
    /**
     * The GrantRequestClient model constructor.
     * @property {module:model/GrantRequestClient}
     */
    GrantRequestClient: GrantRequestClient,
    /**
     * The GrantRequestCode model constructor.
     * @property {module:model/GrantRequestCode}
     */
    GrantRequestCode: GrantRequestCode,
    /**
     * The GrantRequestMeeting model constructor.
     * @property {module:model/GrantRequestMeeting}
     */
    GrantRequestMeeting: GrantRequestMeeting,
    /**
     * The GrantRequestPassword model constructor.
     * @property {module:model/GrantRequestPassword}
     */
    GrantRequestPassword: GrantRequestPassword,
    /**
     * The GrantRequestRefresh model constructor.
     * @property {module:model/GrantRequestRefresh}
     */
    GrantRequestRefresh: GrantRequestRefresh,
    /**
     * The GrantRequestRevoke model constructor.
     * @property {module:model/GrantRequestRevoke}
     */
    GrantRequestRevoke: GrantRequestRevoke,
    /**
     * The GrantedApplications model constructor.
     * @property {module:model/GrantedApplications}
     */
    GrantedApplications: GrantedApplications,
    /**
     * The InlineResponse200 model constructor.
     * @property {module:model/InlineResponse200}
     */
    InlineResponse200: InlineResponse200,
    /**
     * The Layout model constructor.
     * @property {module:model/Layout}
     */
    Layout: Layout,
    /**
     * The Meeting model constructor.
     * @property {module:model/Meeting}
     */
    Meeting: Meeting,
    /**
     * The MeetingAdvancedMeetingOptions model constructor.
     * @property {module:model/MeetingAdvancedMeetingOptions}
     */
    MeetingAdvancedMeetingOptions: MeetingAdvancedMeetingOptions,
    /**
     * The MeetingHistory model constructor.
     * @property {module:model/MeetingHistory}
     */
    MeetingHistory: MeetingHistory,
    /**
     * The MeetingHistoryLeaderInfo model constructor.
     * @property {module:model/MeetingHistoryLeaderInfo}
     */
    MeetingHistoryLeaderInfo: MeetingHistoryLeaderInfo,
    /**
     * The MeetingHistoryParticipantList model constructor.
     * @property {module:model/MeetingHistoryParticipantList}
     */
    MeetingHistoryParticipantList: MeetingHistoryParticipantList,
    /**
     * The MeetingHistorySharing model constructor.
     * @property {module:model/MeetingHistorySharing}
     */
    MeetingHistorySharing: MeetingHistorySharing,
    /**
     * The MeetingIndigo model constructor.
     * @property {module:model/MeetingIndigo}
     */
    MeetingIndigo: MeetingIndigo,
    /**
     * The MeetingIndigoList model constructor.
     * @property {module:model/MeetingIndigoList}
     */
    MeetingIndigoList: MeetingIndigoList,
    /**
     * The MeetingState model constructor.
     * @property {module:model/MeetingState}
     */
    MeetingState: MeetingState,
    /**
     * The MeetingStateRecordinginfo model constructor.
     * @property {module:model/MeetingStateRecordinginfo}
     */
    MeetingStateRecordinginfo: MeetingStateRecordinginfo,
    /**
     * The Numbers model constructor.
     * @property {module:model/Numbers}
     */
    Numbers: Numbers,
    /**
     * The NumbersLabel model constructor.
     * @property {module:model/NumbersLabel}
     */
    NumbersLabel: NumbersLabel,
    /**
     * The NumbersNumbers model constructor.
     * @property {module:model/NumbersNumbers}
     */
    NumbersNumbers: NumbersNumbers,
    /**
     * The PairingCodeSIP model constructor.
     * @property {module:model/PairingCodeSIP}
     */
    PairingCodeSIP: PairingCodeSIP,
    /**
     * The PairingCodeSIPTurnservers model constructor.
     * @property {module:model/PairingCodeSIPTurnservers}
     */
    PairingCodeSIPTurnservers: PairingCodeSIPTurnservers,
    /**
     * The PairingCodeWebRTC model constructor.
     * @property {module:model/PairingCodeWebRTC}
     */
    PairingCodeWebRTC: PairingCodeWebRTC,
    /**
     * The Partition model constructor.
     * @property {module:model/Partition}
     */
    Partition: Partition,
    /**
     * The PayloadDialout model constructor.
     * @property {module:model/PayloadDialout}
     */
    PayloadDialout: PayloadDialout,
    /**
     * The PayloadInvite model constructor.
     * @property {module:model/PayloadInvite}
     */
    PayloadInvite: PayloadInvite,
    /**
     * The PayloadMeetingState model constructor.
     * @property {module:model/PayloadMeetingState}
     */
    PayloadMeetingState: PayloadMeetingState,
    /**
     * The PayloadPairingCodePstn model constructor.
     * @property {module:model/PayloadPairingCodePstn}
     */
    PayloadPairingCodePstn: PayloadPairingCodePstn,
    /**
     * The PayloadPairingCodeSIP model constructor.
     * @property {module:model/PayloadPairingCodeSIP}
     */
    PayloadPairingCodeSIP: PayloadPairingCodeSIP,
    /**
     * The PayloadPairingCodeWebRTC model constructor.
     * @property {module:model/PayloadPairingCodeWebRTC}
     */
    PayloadPairingCodeWebRTC: PayloadPairingCodeWebRTC,
    /**
     * The Recording model constructor.
     * @property {module:model/Recording}
     */
    Recording: Recording,
    /**
     * The RecordingHistory model constructor.
     * @property {module:model/RecordingHistory}
     */
    RecordingHistory: RecordingHistory,
    /**
     * The RecordingHistoryList model constructor.
     * @property {module:model/RecordingHistoryList}
     */
    RecordingHistoryList: RecordingHistoryList,
    /**
     * The RecordingRecordingChapters model constructor.
     * @property {module:model/RecordingRecordingChapters}
     */
    RecordingRecordingChapters: RecordingRecordingChapters,
    /**
     * The RecordingSession model constructor.
     * @property {module:model/RecordingSession}
     */
    RecordingSession: RecordingSession,
    /**
     * The RecordingSessionStartedBy model constructor.
     * @property {module:model/RecordingSessionStartedBy}
     */
    RecordingSessionStartedBy: RecordingSessionStartedBy,
    /**
     * The RecordingSummary model constructor.
     * @property {module:model/RecordingSummary}
     */
    RecordingSummary: RecordingSummary,
    /**
     * The Room model constructor.
     * @property {module:model/Room}
     */
    Room: Room,
    /**
     * The User model constructor.
     * @property {module:model/User}
     */
    User: User,
    /**
     * The UserId model constructor.
     * @property {module:model/UserId}
     */
    UserId: UserId,
    /**
     * The MeetingExtendedIndigo model constructor.
     * @property {module:model/MeetingExtendedIndigo}
     */
    MeetingExtendedIndigo: MeetingExtendedIndigo,
    /**
     * The ApplicationApi service constructor.
     * @property {module:api/ApplicationApi}
     */
    ApplicationApi: ApplicationApi,
    /**
     * The AuthenticationApi service constructor.
     * @property {module:api/AuthenticationApi}
     */
    AuthenticationApi: AuthenticationApi,
    /**
     * The CommandCenterApi service constructor.
     * @property {module:api/CommandCenterApi}
     */
    CommandCenterApi: CommandCenterApi,
    /**
     * The EnterpriseApi service constructor.
     * @property {module:api/EnterpriseApi}
     */
    EnterpriseApi: EnterpriseApi,
    /**
     * The HistoryApi service constructor.
     * @property {module:api/HistoryApi}
     */
    HistoryApi: HistoryApi,
    /**
     * The MeetingApi service constructor.
     * @property {module:api/MeetingApi}
     */
    MeetingApi: MeetingApi,
    /**
     * The RecordingApi service constructor.
     * @property {module:api/RecordingApi}
     */
    RecordingApi: RecordingApi,
    /**
     * The UserApi service constructor.
     * @property {module:api/UserApi}
     */
    UserApi: UserApi
  };

  return exports;
}));
