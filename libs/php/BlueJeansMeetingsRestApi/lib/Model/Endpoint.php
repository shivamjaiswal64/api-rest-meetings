<?php
/**
 * Endpoint
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansMeetingsRestApi
 * @author   Swaagger Codegen team
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

namespace BlueJeansMeetingsRestApi\Model;

use \ArrayAccess;

/**
 * Endpoint Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansMeetingsRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Endpoint implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Endpoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ec_mode' => 'string',
        'creationtime' => 'string',
        'audio_remote_rtcp_address' => 'string',
        'video_send_codec' => 'string',
        'audio_play_id' => 'string',
        'call_quality_recv' => 'string',
        'session_out' => 'string',
        'audio_local_address' => 'string',
        'meetingid' => 'string',
        'video_send_width' => 'string',
        'call_quality_send' => 'string',
        'mhaddress' => 'string',
        'rdc_controllee_capable' => 'string',
        'audio_cap_name' => 'string',
        'proxy_info' => 'string',
        'audio_send_codec' => 'string',
        'vendor' => 'string',
        'video_recv_width' => 'string',
        'conaddress' => 'string',
        'talk_detected' => 'string',
        'sub_layout' => 'string',
        'audio_rtcp_relay' => 'string',
        'audio_recv_local_mute' => 'string',
        'name' => 'string',
        'video_local_address' => 'string',
        'audio_local_rtcp_address' => 'string',
        'content_rtp_relay' => 'string',
        'content_local_rtcp_address' => 'string',
        'remote_connection_count' => 'string',
        'callrate' => 'string',
        'mixer_guid' => 'string',
        'transport' => 'string',
        'audio_cap_select_id' => 'string',
        'country_code' => 'string',
        'rdc_controller_capable' => 'string',
        'pairedname' => 'string',
        'video_rtcp_relay' => 'string',
        'endpoint_cpu_params' => 'string',
        'video_remote_address' => 'string',
        'version' => 'string',
        'content_recv' => 'string',
        'local_name' => 'string',
        'bjn_user_id' => 'string',
        'content_remote_address' => 'string',
        'audio_send' => 'string',
        'participant_dtmf_menus' => 'string',
        'video_rtcp_transpor' => 'string',
        'audio_rtcp_transport' => 'string',
        'relay_node_id' => 'string',
        'content_remote_rtcp_address' => 'string',
        'audio_rtp_relay' => 'string',
        'video_rtp_transport' => 'string',
        'content_recv_local_mute' => 'string',
        'layout' => 'string',
        'content_send' => 'string',
        'remoteaddress' => 'string',
        'meeting_guid' => 'string',
        'connecttime' => 'string',
        'localaddress' => 'string',
        'audio_remote_address' => 'string',
        'bonded_audio_guid' => 'string',
        'audio_recv_remote_mute' => 'string',
        'session_out_relay' => 'string',
        'leader' => 'string',
        'content_local_address' => 'string',
        'movie_capable' => 'string',
        'video_recv_local_mute' => 'string',
        'content_rtp_transport' => 'string',
        'rdc_version' => 'string',
        'audio_recv' => 'string',
        'content_relay_server' => 'string',
        'video_recv' => 'string',
        'visibility' => 'string',
        'sessionid' => 'string',
        'content_rtcp_relay' => 'string',
        'locales' => 'string',
        'medaddress' => 'string',
        'html_layout_guid' => 'string',
        'endpoint' => 'string',
        'video_drop' => 'string',
        'content_rtcp_transport' => 'string',
        'video_remote_rtcp_address' => 'string',
        'video_rtp_relay' => 'string',
        'mixaddress' => 'string',
        'siphttp_proxy_transport' => 'string',
        'video_recv_codec' => 'string',
        'audio_recv_codec' => 'string',
        'session_in' => 'string',
        'bonded_video_guid' => 'string',
        'call_quality' => 'string',
        'meetingjointime' => 'string',
        'session_in_relay' => 'string',
        'pairedremoteaddress' => 'string',
        'video_send_height' => 'string',
        'video_recv_height' => 'string',
        'secure_call' => 'string',
        'video_local_rtcp_address' => 'string',
        'audio_play_name' => 'string',
        'video_cap_id' => 'string',
        'audio_rtp_transport' => 'string',
        'meeting_info_mode' => 'string',
        'callhostname' => 'string',
        'callguid' => 'string',
        'audio_cap_id' => 'string',
        'video_send' => 'string',
        'content_recv_codec' => 'string',
        'session_relay' => 'string',
        'video_recv_remote_mute' => 'string',
        'id' => 'string',
        'bonded_video_name' => 'string',
        'is_in_roster' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ec_mode' => null,
        'creationtime' => null,
        'audio_remote_rtcp_address' => null,
        'video_send_codec' => null,
        'audio_play_id' => null,
        'call_quality_recv' => null,
        'session_out' => null,
        'audio_local_address' => null,
        'meetingid' => null,
        'video_send_width' => null,
        'call_quality_send' => null,
        'mhaddress' => null,
        'rdc_controllee_capable' => null,
        'audio_cap_name' => null,
        'proxy_info' => null,
        'audio_send_codec' => null,
        'vendor' => null,
        'video_recv_width' => null,
        'conaddress' => null,
        'talk_detected' => null,
        'sub_layout' => null,
        'audio_rtcp_relay' => null,
        'audio_recv_local_mute' => null,
        'name' => null,
        'video_local_address' => null,
        'audio_local_rtcp_address' => null,
        'content_rtp_relay' => null,
        'content_local_rtcp_address' => null,
        'remote_connection_count' => null,
        'callrate' => null,
        'mixer_guid' => null,
        'transport' => null,
        'audio_cap_select_id' => null,
        'country_code' => null,
        'rdc_controller_capable' => null,
        'pairedname' => null,
        'video_rtcp_relay' => null,
        'endpoint_cpu_params' => null,
        'video_remote_address' => null,
        'version' => null,
        'content_recv' => null,
        'local_name' => null,
        'bjn_user_id' => null,
        'content_remote_address' => null,
        'audio_send' => null,
        'participant_dtmf_menus' => null,
        'video_rtcp_transpor' => null,
        'audio_rtcp_transport' => null,
        'relay_node_id' => null,
        'content_remote_rtcp_address' => null,
        'audio_rtp_relay' => null,
        'video_rtp_transport' => null,
        'content_recv_local_mute' => null,
        'layout' => null,
        'content_send' => null,
        'remoteaddress' => null,
        'meeting_guid' => null,
        'connecttime' => null,
        'localaddress' => null,
        'audio_remote_address' => null,
        'bonded_audio_guid' => null,
        'audio_recv_remote_mute' => null,
        'session_out_relay' => null,
        'leader' => null,
        'content_local_address' => null,
        'movie_capable' => null,
        'video_recv_local_mute' => null,
        'content_rtp_transport' => null,
        'rdc_version' => null,
        'audio_recv' => null,
        'content_relay_server' => null,
        'video_recv' => null,
        'visibility' => null,
        'sessionid' => null,
        'content_rtcp_relay' => null,
        'locales' => null,
        'medaddress' => null,
        'html_layout_guid' => null,
        'endpoint' => null,
        'video_drop' => null,
        'content_rtcp_transport' => null,
        'video_remote_rtcp_address' => null,
        'video_rtp_relay' => null,
        'mixaddress' => null,
        'siphttp_proxy_transport' => null,
        'video_recv_codec' => null,
        'audio_recv_codec' => null,
        'session_in' => null,
        'bonded_video_guid' => null,
        'call_quality' => null,
        'meetingjointime' => null,
        'session_in_relay' => null,
        'pairedremoteaddress' => null,
        'video_send_height' => null,
        'video_recv_height' => null,
        'secure_call' => null,
        'video_local_rtcp_address' => null,
        'audio_play_name' => null,
        'video_cap_id' => null,
        'audio_rtp_transport' => null,
        'meeting_info_mode' => null,
        'callhostname' => null,
        'callguid' => null,
        'audio_cap_id' => null,
        'video_send' => null,
        'content_recv_codec' => null,
        'session_relay' => null,
        'video_recv_remote_mute' => null,
        'id' => null,
        'bonded_video_name' => null,
        'is_in_roster' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'ec_mode' => 'EcMode',
        'creationtime' => 'creationtime',
        'audio_remote_rtcp_address' => 'audio.remote.rtcpAddress',
        'video_send_codec' => 'VideoSendCodec',
        'audio_play_id' => 'AudioPlayID',
        'call_quality_recv' => 'CallQualityRecv',
        'session_out' => 'SessionOut',
        'audio_local_address' => 'audio.local.address',
        'meetingid' => 'meetingid',
        'video_send_width' => 'VideoSendWidth',
        'call_quality_send' => 'CallQualitySend',
        'mhaddress' => 'mhaddress',
        'rdc_controllee_capable' => 'RDCControlleeCapable',
        'audio_cap_name' => 'AudioCapName',
        'proxy_info' => 'ProxyInfo',
        'audio_send_codec' => 'AudioSendCodec',
        'vendor' => 'vendor',
        'video_recv_width' => 'VideoRecvWidth',
        'conaddress' => 'conaddress',
        'talk_detected' => 'TalkDetected',
        'sub_layout' => 'SubLayout',
        'audio_rtcp_relay' => 'AudioRtcpRelay',
        'audio_recv_local_mute' => 'AudioRecvLocalMute',
        'name' => 'name',
        'video_local_address' => 'video.local.address',
        'audio_local_rtcp_address' => 'audio.local.rtcpAddress',
        'content_rtp_relay' => 'ContentRtpRelay',
        'content_local_rtcp_address' => 'content.local.rtcpAddress',
        'remote_connection_count' => 'RemoteConnectionCount',
        'callrate' => 'callrate',
        'mixer_guid' => 'MixerGuid',
        'transport' => 'transport',
        'audio_cap_select_id' => 'AudioCapSelectID',
        'country_code' => 'CountryCode',
        'rdc_controller_capable' => 'RDCControllerCapable',
        'pairedname' => 'pairedname',
        'video_rtcp_relay' => 'VideoRtcpRelay',
        'endpoint_cpu_params' => 'EndpointCpuParams',
        'video_remote_address' => 'video.remote.address',
        'version' => 'version',
        'content_recv' => 'ContentRecv',
        'local_name' => 'localName',
        'bjn_user_id' => 'BJNUserId',
        'content_remote_address' => 'content.remote.address',
        'audio_send' => 'AudioSend',
        'participant_dtmf_menus' => 'ParticipantDTMFMenus',
        'video_rtcp_transpor' => 'VideoRtcpTranspor',
        'audio_rtcp_transport' => 'AudioRtcpTransport',
        'relay_node_id' => 'RelayNodeId',
        'content_remote_rtcp_address' => 'content.remote.rtcpAddress',
        'audio_rtp_relay' => 'AudioRtpRelay',
        'video_rtp_transport' => 'VideoRtpTransport',
        'content_recv_local_mute' => 'ContentRecvLocalMute',
        'layout' => 'Layout',
        'content_send' => 'ContentSend',
        'remoteaddress' => 'remoteaddress',
        'meeting_guid' => 'MeetingGuid',
        'connecttime' => 'connecttime',
        'localaddress' => 'localaddress',
        'audio_remote_address' => 'audio.remote.address',
        'bonded_audio_guid' => 'BondedAudioGuid',
        'audio_recv_remote_mute' => 'AudioRecvRemoteMute',
        'session_out_relay' => 'SessionOutRelay',
        'leader' => 'Leader',
        'content_local_address' => 'content.local.address',
        'movie_capable' => 'MovieCapable',
        'video_recv_local_mute' => 'VideoRecvLocalMute',
        'content_rtp_transport' => 'ContentRtpTransport',
        'rdc_version' => 'RDCVersion',
        'audio_recv' => 'AudioRecv',
        'content_relay_server' => 'ContentRelayServer',
        'video_recv' => 'VideoRecv',
        'visibility' => 'visibility',
        'sessionid' => 'sessionid',
        'content_rtcp_relay' => 'ContentRtcpRelay',
        'locales' => 'locales',
        'medaddress' => 'medaddress',
        'html_layout_guid' => 'HtmlLayoutGuid',
        'endpoint' => 'endpoint',
        'video_drop' => 'VideoDrop',
        'content_rtcp_transport' => 'ContentRtcpTransport',
        'video_remote_rtcp_address' => 'video.remote.rtcpAddress',
        'video_rtp_relay' => 'VideoRtpRelay',
        'mixaddress' => 'mixaddress',
        'siphttp_proxy_transport' => 'SIPHTTPProxyTransport',
        'video_recv_codec' => 'VideoRecvCodec',
        'audio_recv_codec' => 'AudioRecvCodec',
        'session_in' => 'SessionIn',
        'bonded_video_guid' => 'BondedVideoGuid',
        'call_quality' => 'CallQuality',
        'meetingjointime' => 'meetingjointime',
        'session_in_relay' => 'SessionInRelay',
        'pairedremoteaddress' => 'pairedremoteaddress',
        'video_send_height' => 'VideoSendHeight',
        'video_recv_height' => 'VideoRecvHeight',
        'secure_call' => 'SecureCall',
        'video_local_rtcp_address' => 'video.local.rtcpAddress',
        'audio_play_name' => 'AudioPlayName',
        'video_cap_id' => 'VideoCapID',
        'audio_rtp_transport' => 'AudioRtpTransport',
        'meeting_info_mode' => 'MeetingInfoMode',
        'callhostname' => 'callhostname',
        'callguid' => 'callguid',
        'audio_cap_id' => 'AudioCapID',
        'video_send' => 'VideoSend',
        'content_recv_codec' => 'ContentRecvCodec',
        'session_relay' => 'SessionRelay',
        'video_recv_remote_mute' => 'VideoRecvRemoteMute',
        'id' => 'Id',
        'bonded_video_name' => 'BondedVideoName',
        'is_in_roster' => 'isInRoster'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ec_mode' => 'setEcMode',
        'creationtime' => 'setCreationtime',
        'audio_remote_rtcp_address' => 'setAudioRemoteRtcpAddress',
        'video_send_codec' => 'setVideoSendCodec',
        'audio_play_id' => 'setAudioPlayId',
        'call_quality_recv' => 'setCallQualityRecv',
        'session_out' => 'setSessionOut',
        'audio_local_address' => 'setAudioLocalAddress',
        'meetingid' => 'setMeetingid',
        'video_send_width' => 'setVideoSendWidth',
        'call_quality_send' => 'setCallQualitySend',
        'mhaddress' => 'setMhaddress',
        'rdc_controllee_capable' => 'setRdcControlleeCapable',
        'audio_cap_name' => 'setAudioCapName',
        'proxy_info' => 'setProxyInfo',
        'audio_send_codec' => 'setAudioSendCodec',
        'vendor' => 'setVendor',
        'video_recv_width' => 'setVideoRecvWidth',
        'conaddress' => 'setConaddress',
        'talk_detected' => 'setTalkDetected',
        'sub_layout' => 'setSubLayout',
        'audio_rtcp_relay' => 'setAudioRtcpRelay',
        'audio_recv_local_mute' => 'setAudioRecvLocalMute',
        'name' => 'setName',
        'video_local_address' => 'setVideoLocalAddress',
        'audio_local_rtcp_address' => 'setAudioLocalRtcpAddress',
        'content_rtp_relay' => 'setContentRtpRelay',
        'content_local_rtcp_address' => 'setContentLocalRtcpAddress',
        'remote_connection_count' => 'setRemoteConnectionCount',
        'callrate' => 'setCallrate',
        'mixer_guid' => 'setMixerGuid',
        'transport' => 'setTransport',
        'audio_cap_select_id' => 'setAudioCapSelectId',
        'country_code' => 'setCountryCode',
        'rdc_controller_capable' => 'setRdcControllerCapable',
        'pairedname' => 'setPairedname',
        'video_rtcp_relay' => 'setVideoRtcpRelay',
        'endpoint_cpu_params' => 'setEndpointCpuParams',
        'video_remote_address' => 'setVideoRemoteAddress',
        'version' => 'setVersion',
        'content_recv' => 'setContentRecv',
        'local_name' => 'setLocalName',
        'bjn_user_id' => 'setBjnUserId',
        'content_remote_address' => 'setContentRemoteAddress',
        'audio_send' => 'setAudioSend',
        'participant_dtmf_menus' => 'setParticipantDtmfMenus',
        'video_rtcp_transpor' => 'setVideoRtcpTranspor',
        'audio_rtcp_transport' => 'setAudioRtcpTransport',
        'relay_node_id' => 'setRelayNodeId',
        'content_remote_rtcp_address' => 'setContentRemoteRtcpAddress',
        'audio_rtp_relay' => 'setAudioRtpRelay',
        'video_rtp_transport' => 'setVideoRtpTransport',
        'content_recv_local_mute' => 'setContentRecvLocalMute',
        'layout' => 'setLayout',
        'content_send' => 'setContentSend',
        'remoteaddress' => 'setRemoteaddress',
        'meeting_guid' => 'setMeetingGuid',
        'connecttime' => 'setConnecttime',
        'localaddress' => 'setLocaladdress',
        'audio_remote_address' => 'setAudioRemoteAddress',
        'bonded_audio_guid' => 'setBondedAudioGuid',
        'audio_recv_remote_mute' => 'setAudioRecvRemoteMute',
        'session_out_relay' => 'setSessionOutRelay',
        'leader' => 'setLeader',
        'content_local_address' => 'setContentLocalAddress',
        'movie_capable' => 'setMovieCapable',
        'video_recv_local_mute' => 'setVideoRecvLocalMute',
        'content_rtp_transport' => 'setContentRtpTransport',
        'rdc_version' => 'setRdcVersion',
        'audio_recv' => 'setAudioRecv',
        'content_relay_server' => 'setContentRelayServer',
        'video_recv' => 'setVideoRecv',
        'visibility' => 'setVisibility',
        'sessionid' => 'setSessionid',
        'content_rtcp_relay' => 'setContentRtcpRelay',
        'locales' => 'setLocales',
        'medaddress' => 'setMedaddress',
        'html_layout_guid' => 'setHtmlLayoutGuid',
        'endpoint' => 'setEndpoint',
        'video_drop' => 'setVideoDrop',
        'content_rtcp_transport' => 'setContentRtcpTransport',
        'video_remote_rtcp_address' => 'setVideoRemoteRtcpAddress',
        'video_rtp_relay' => 'setVideoRtpRelay',
        'mixaddress' => 'setMixaddress',
        'siphttp_proxy_transport' => 'setSiphttpProxyTransport',
        'video_recv_codec' => 'setVideoRecvCodec',
        'audio_recv_codec' => 'setAudioRecvCodec',
        'session_in' => 'setSessionIn',
        'bonded_video_guid' => 'setBondedVideoGuid',
        'call_quality' => 'setCallQuality',
        'meetingjointime' => 'setMeetingjointime',
        'session_in_relay' => 'setSessionInRelay',
        'pairedremoteaddress' => 'setPairedremoteaddress',
        'video_send_height' => 'setVideoSendHeight',
        'video_recv_height' => 'setVideoRecvHeight',
        'secure_call' => 'setSecureCall',
        'video_local_rtcp_address' => 'setVideoLocalRtcpAddress',
        'audio_play_name' => 'setAudioPlayName',
        'video_cap_id' => 'setVideoCapId',
        'audio_rtp_transport' => 'setAudioRtpTransport',
        'meeting_info_mode' => 'setMeetingInfoMode',
        'callhostname' => 'setCallhostname',
        'callguid' => 'setCallguid',
        'audio_cap_id' => 'setAudioCapId',
        'video_send' => 'setVideoSend',
        'content_recv_codec' => 'setContentRecvCodec',
        'session_relay' => 'setSessionRelay',
        'video_recv_remote_mute' => 'setVideoRecvRemoteMute',
        'id' => 'setId',
        'bonded_video_name' => 'setBondedVideoName',
        'is_in_roster' => 'setIsInRoster'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ec_mode' => 'getEcMode',
        'creationtime' => 'getCreationtime',
        'audio_remote_rtcp_address' => 'getAudioRemoteRtcpAddress',
        'video_send_codec' => 'getVideoSendCodec',
        'audio_play_id' => 'getAudioPlayId',
        'call_quality_recv' => 'getCallQualityRecv',
        'session_out' => 'getSessionOut',
        'audio_local_address' => 'getAudioLocalAddress',
        'meetingid' => 'getMeetingid',
        'video_send_width' => 'getVideoSendWidth',
        'call_quality_send' => 'getCallQualitySend',
        'mhaddress' => 'getMhaddress',
        'rdc_controllee_capable' => 'getRdcControlleeCapable',
        'audio_cap_name' => 'getAudioCapName',
        'proxy_info' => 'getProxyInfo',
        'audio_send_codec' => 'getAudioSendCodec',
        'vendor' => 'getVendor',
        'video_recv_width' => 'getVideoRecvWidth',
        'conaddress' => 'getConaddress',
        'talk_detected' => 'getTalkDetected',
        'sub_layout' => 'getSubLayout',
        'audio_rtcp_relay' => 'getAudioRtcpRelay',
        'audio_recv_local_mute' => 'getAudioRecvLocalMute',
        'name' => 'getName',
        'video_local_address' => 'getVideoLocalAddress',
        'audio_local_rtcp_address' => 'getAudioLocalRtcpAddress',
        'content_rtp_relay' => 'getContentRtpRelay',
        'content_local_rtcp_address' => 'getContentLocalRtcpAddress',
        'remote_connection_count' => 'getRemoteConnectionCount',
        'callrate' => 'getCallrate',
        'mixer_guid' => 'getMixerGuid',
        'transport' => 'getTransport',
        'audio_cap_select_id' => 'getAudioCapSelectId',
        'country_code' => 'getCountryCode',
        'rdc_controller_capable' => 'getRdcControllerCapable',
        'pairedname' => 'getPairedname',
        'video_rtcp_relay' => 'getVideoRtcpRelay',
        'endpoint_cpu_params' => 'getEndpointCpuParams',
        'video_remote_address' => 'getVideoRemoteAddress',
        'version' => 'getVersion',
        'content_recv' => 'getContentRecv',
        'local_name' => 'getLocalName',
        'bjn_user_id' => 'getBjnUserId',
        'content_remote_address' => 'getContentRemoteAddress',
        'audio_send' => 'getAudioSend',
        'participant_dtmf_menus' => 'getParticipantDtmfMenus',
        'video_rtcp_transpor' => 'getVideoRtcpTranspor',
        'audio_rtcp_transport' => 'getAudioRtcpTransport',
        'relay_node_id' => 'getRelayNodeId',
        'content_remote_rtcp_address' => 'getContentRemoteRtcpAddress',
        'audio_rtp_relay' => 'getAudioRtpRelay',
        'video_rtp_transport' => 'getVideoRtpTransport',
        'content_recv_local_mute' => 'getContentRecvLocalMute',
        'layout' => 'getLayout',
        'content_send' => 'getContentSend',
        'remoteaddress' => 'getRemoteaddress',
        'meeting_guid' => 'getMeetingGuid',
        'connecttime' => 'getConnecttime',
        'localaddress' => 'getLocaladdress',
        'audio_remote_address' => 'getAudioRemoteAddress',
        'bonded_audio_guid' => 'getBondedAudioGuid',
        'audio_recv_remote_mute' => 'getAudioRecvRemoteMute',
        'session_out_relay' => 'getSessionOutRelay',
        'leader' => 'getLeader',
        'content_local_address' => 'getContentLocalAddress',
        'movie_capable' => 'getMovieCapable',
        'video_recv_local_mute' => 'getVideoRecvLocalMute',
        'content_rtp_transport' => 'getContentRtpTransport',
        'rdc_version' => 'getRdcVersion',
        'audio_recv' => 'getAudioRecv',
        'content_relay_server' => 'getContentRelayServer',
        'video_recv' => 'getVideoRecv',
        'visibility' => 'getVisibility',
        'sessionid' => 'getSessionid',
        'content_rtcp_relay' => 'getContentRtcpRelay',
        'locales' => 'getLocales',
        'medaddress' => 'getMedaddress',
        'html_layout_guid' => 'getHtmlLayoutGuid',
        'endpoint' => 'getEndpoint',
        'video_drop' => 'getVideoDrop',
        'content_rtcp_transport' => 'getContentRtcpTransport',
        'video_remote_rtcp_address' => 'getVideoRemoteRtcpAddress',
        'video_rtp_relay' => 'getVideoRtpRelay',
        'mixaddress' => 'getMixaddress',
        'siphttp_proxy_transport' => 'getSiphttpProxyTransport',
        'video_recv_codec' => 'getVideoRecvCodec',
        'audio_recv_codec' => 'getAudioRecvCodec',
        'session_in' => 'getSessionIn',
        'bonded_video_guid' => 'getBondedVideoGuid',
        'call_quality' => 'getCallQuality',
        'meetingjointime' => 'getMeetingjointime',
        'session_in_relay' => 'getSessionInRelay',
        'pairedremoteaddress' => 'getPairedremoteaddress',
        'video_send_height' => 'getVideoSendHeight',
        'video_recv_height' => 'getVideoRecvHeight',
        'secure_call' => 'getSecureCall',
        'video_local_rtcp_address' => 'getVideoLocalRtcpAddress',
        'audio_play_name' => 'getAudioPlayName',
        'video_cap_id' => 'getVideoCapId',
        'audio_rtp_transport' => 'getAudioRtpTransport',
        'meeting_info_mode' => 'getMeetingInfoMode',
        'callhostname' => 'getCallhostname',
        'callguid' => 'getCallguid',
        'audio_cap_id' => 'getAudioCapId',
        'video_send' => 'getVideoSend',
        'content_recv_codec' => 'getContentRecvCodec',
        'session_relay' => 'getSessionRelay',
        'video_recv_remote_mute' => 'getVideoRecvRemoteMute',
        'id' => 'getId',
        'bonded_video_name' => 'getBondedVideoName',
        'is_in_roster' => 'getIsInRoster'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ec_mode'] = isset($data['ec_mode']) ? $data['ec_mode'] : null;
        $this->container['creationtime'] = isset($data['creationtime']) ? $data['creationtime'] : null;
        $this->container['audio_remote_rtcp_address'] = isset($data['audio_remote_rtcp_address']) ? $data['audio_remote_rtcp_address'] : null;
        $this->container['video_send_codec'] = isset($data['video_send_codec']) ? $data['video_send_codec'] : null;
        $this->container['audio_play_id'] = isset($data['audio_play_id']) ? $data['audio_play_id'] : null;
        $this->container['call_quality_recv'] = isset($data['call_quality_recv']) ? $data['call_quality_recv'] : null;
        $this->container['session_out'] = isset($data['session_out']) ? $data['session_out'] : null;
        $this->container['audio_local_address'] = isset($data['audio_local_address']) ? $data['audio_local_address'] : null;
        $this->container['meetingid'] = isset($data['meetingid']) ? $data['meetingid'] : null;
        $this->container['video_send_width'] = isset($data['video_send_width']) ? $data['video_send_width'] : null;
        $this->container['call_quality_send'] = isset($data['call_quality_send']) ? $data['call_quality_send'] : null;
        $this->container['mhaddress'] = isset($data['mhaddress']) ? $data['mhaddress'] : null;
        $this->container['rdc_controllee_capable'] = isset($data['rdc_controllee_capable']) ? $data['rdc_controllee_capable'] : null;
        $this->container['audio_cap_name'] = isset($data['audio_cap_name']) ? $data['audio_cap_name'] : null;
        $this->container['proxy_info'] = isset($data['proxy_info']) ? $data['proxy_info'] : null;
        $this->container['audio_send_codec'] = isset($data['audio_send_codec']) ? $data['audio_send_codec'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['video_recv_width'] = isset($data['video_recv_width']) ? $data['video_recv_width'] : null;
        $this->container['conaddress'] = isset($data['conaddress']) ? $data['conaddress'] : null;
        $this->container['talk_detected'] = isset($data['talk_detected']) ? $data['talk_detected'] : null;
        $this->container['sub_layout'] = isset($data['sub_layout']) ? $data['sub_layout'] : null;
        $this->container['audio_rtcp_relay'] = isset($data['audio_rtcp_relay']) ? $data['audio_rtcp_relay'] : null;
        $this->container['audio_recv_local_mute'] = isset($data['audio_recv_local_mute']) ? $data['audio_recv_local_mute'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['video_local_address'] = isset($data['video_local_address']) ? $data['video_local_address'] : null;
        $this->container['audio_local_rtcp_address'] = isset($data['audio_local_rtcp_address']) ? $data['audio_local_rtcp_address'] : null;
        $this->container['content_rtp_relay'] = isset($data['content_rtp_relay']) ? $data['content_rtp_relay'] : null;
        $this->container['content_local_rtcp_address'] = isset($data['content_local_rtcp_address']) ? $data['content_local_rtcp_address'] : null;
        $this->container['remote_connection_count'] = isset($data['remote_connection_count']) ? $data['remote_connection_count'] : null;
        $this->container['callrate'] = isset($data['callrate']) ? $data['callrate'] : null;
        $this->container['mixer_guid'] = isset($data['mixer_guid']) ? $data['mixer_guid'] : null;
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
        $this->container['audio_cap_select_id'] = isset($data['audio_cap_select_id']) ? $data['audio_cap_select_id'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['rdc_controller_capable'] = isset($data['rdc_controller_capable']) ? $data['rdc_controller_capable'] : null;
        $this->container['pairedname'] = isset($data['pairedname']) ? $data['pairedname'] : null;
        $this->container['video_rtcp_relay'] = isset($data['video_rtcp_relay']) ? $data['video_rtcp_relay'] : null;
        $this->container['endpoint_cpu_params'] = isset($data['endpoint_cpu_params']) ? $data['endpoint_cpu_params'] : null;
        $this->container['video_remote_address'] = isset($data['video_remote_address']) ? $data['video_remote_address'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['content_recv'] = isset($data['content_recv']) ? $data['content_recv'] : null;
        $this->container['local_name'] = isset($data['local_name']) ? $data['local_name'] : null;
        $this->container['bjn_user_id'] = isset($data['bjn_user_id']) ? $data['bjn_user_id'] : null;
        $this->container['content_remote_address'] = isset($data['content_remote_address']) ? $data['content_remote_address'] : null;
        $this->container['audio_send'] = isset($data['audio_send']) ? $data['audio_send'] : null;
        $this->container['participant_dtmf_menus'] = isset($data['participant_dtmf_menus']) ? $data['participant_dtmf_menus'] : null;
        $this->container['video_rtcp_transpor'] = isset($data['video_rtcp_transpor']) ? $data['video_rtcp_transpor'] : null;
        $this->container['audio_rtcp_transport'] = isset($data['audio_rtcp_transport']) ? $data['audio_rtcp_transport'] : null;
        $this->container['relay_node_id'] = isset($data['relay_node_id']) ? $data['relay_node_id'] : null;
        $this->container['content_remote_rtcp_address'] = isset($data['content_remote_rtcp_address']) ? $data['content_remote_rtcp_address'] : null;
        $this->container['audio_rtp_relay'] = isset($data['audio_rtp_relay']) ? $data['audio_rtp_relay'] : null;
        $this->container['video_rtp_transport'] = isset($data['video_rtp_transport']) ? $data['video_rtp_transport'] : null;
        $this->container['content_recv_local_mute'] = isset($data['content_recv_local_mute']) ? $data['content_recv_local_mute'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['content_send'] = isset($data['content_send']) ? $data['content_send'] : null;
        $this->container['remoteaddress'] = isset($data['remoteaddress']) ? $data['remoteaddress'] : null;
        $this->container['meeting_guid'] = isset($data['meeting_guid']) ? $data['meeting_guid'] : null;
        $this->container['connecttime'] = isset($data['connecttime']) ? $data['connecttime'] : null;
        $this->container['localaddress'] = isset($data['localaddress']) ? $data['localaddress'] : null;
        $this->container['audio_remote_address'] = isset($data['audio_remote_address']) ? $data['audio_remote_address'] : null;
        $this->container['bonded_audio_guid'] = isset($data['bonded_audio_guid']) ? $data['bonded_audio_guid'] : null;
        $this->container['audio_recv_remote_mute'] = isset($data['audio_recv_remote_mute']) ? $data['audio_recv_remote_mute'] : null;
        $this->container['session_out_relay'] = isset($data['session_out_relay']) ? $data['session_out_relay'] : null;
        $this->container['leader'] = isset($data['leader']) ? $data['leader'] : null;
        $this->container['content_local_address'] = isset($data['content_local_address']) ? $data['content_local_address'] : null;
        $this->container['movie_capable'] = isset($data['movie_capable']) ? $data['movie_capable'] : null;
        $this->container['video_recv_local_mute'] = isset($data['video_recv_local_mute']) ? $data['video_recv_local_mute'] : null;
        $this->container['content_rtp_transport'] = isset($data['content_rtp_transport']) ? $data['content_rtp_transport'] : null;
        $this->container['rdc_version'] = isset($data['rdc_version']) ? $data['rdc_version'] : null;
        $this->container['audio_recv'] = isset($data['audio_recv']) ? $data['audio_recv'] : null;
        $this->container['content_relay_server'] = isset($data['content_relay_server']) ? $data['content_relay_server'] : null;
        $this->container['video_recv'] = isset($data['video_recv']) ? $data['video_recv'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['sessionid'] = isset($data['sessionid']) ? $data['sessionid'] : null;
        $this->container['content_rtcp_relay'] = isset($data['content_rtcp_relay']) ? $data['content_rtcp_relay'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['medaddress'] = isset($data['medaddress']) ? $data['medaddress'] : null;
        $this->container['html_layout_guid'] = isset($data['html_layout_guid']) ? $data['html_layout_guid'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['video_drop'] = isset($data['video_drop']) ? $data['video_drop'] : null;
        $this->container['content_rtcp_transport'] = isset($data['content_rtcp_transport']) ? $data['content_rtcp_transport'] : null;
        $this->container['video_remote_rtcp_address'] = isset($data['video_remote_rtcp_address']) ? $data['video_remote_rtcp_address'] : null;
        $this->container['video_rtp_relay'] = isset($data['video_rtp_relay']) ? $data['video_rtp_relay'] : null;
        $this->container['mixaddress'] = isset($data['mixaddress']) ? $data['mixaddress'] : null;
        $this->container['siphttp_proxy_transport'] = isset($data['siphttp_proxy_transport']) ? $data['siphttp_proxy_transport'] : null;
        $this->container['video_recv_codec'] = isset($data['video_recv_codec']) ? $data['video_recv_codec'] : null;
        $this->container['audio_recv_codec'] = isset($data['audio_recv_codec']) ? $data['audio_recv_codec'] : null;
        $this->container['session_in'] = isset($data['session_in']) ? $data['session_in'] : null;
        $this->container['bonded_video_guid'] = isset($data['bonded_video_guid']) ? $data['bonded_video_guid'] : null;
        $this->container['call_quality'] = isset($data['call_quality']) ? $data['call_quality'] : null;
        $this->container['meetingjointime'] = isset($data['meetingjointime']) ? $data['meetingjointime'] : null;
        $this->container['session_in_relay'] = isset($data['session_in_relay']) ? $data['session_in_relay'] : null;
        $this->container['pairedremoteaddress'] = isset($data['pairedremoteaddress']) ? $data['pairedremoteaddress'] : null;
        $this->container['video_send_height'] = isset($data['video_send_height']) ? $data['video_send_height'] : null;
        $this->container['video_recv_height'] = isset($data['video_recv_height']) ? $data['video_recv_height'] : null;
        $this->container['secure_call'] = isset($data['secure_call']) ? $data['secure_call'] : null;
        $this->container['video_local_rtcp_address'] = isset($data['video_local_rtcp_address']) ? $data['video_local_rtcp_address'] : null;
        $this->container['audio_play_name'] = isset($data['audio_play_name']) ? $data['audio_play_name'] : null;
        $this->container['video_cap_id'] = isset($data['video_cap_id']) ? $data['video_cap_id'] : null;
        $this->container['audio_rtp_transport'] = isset($data['audio_rtp_transport']) ? $data['audio_rtp_transport'] : null;
        $this->container['meeting_info_mode'] = isset($data['meeting_info_mode']) ? $data['meeting_info_mode'] : null;
        $this->container['callhostname'] = isset($data['callhostname']) ? $data['callhostname'] : null;
        $this->container['callguid'] = isset($data['callguid']) ? $data['callguid'] : null;
        $this->container['audio_cap_id'] = isset($data['audio_cap_id']) ? $data['audio_cap_id'] : null;
        $this->container['video_send'] = isset($data['video_send']) ? $data['video_send'] : null;
        $this->container['content_recv_codec'] = isset($data['content_recv_codec']) ? $data['content_recv_codec'] : null;
        $this->container['session_relay'] = isset($data['session_relay']) ? $data['session_relay'] : null;
        $this->container['video_recv_remote_mute'] = isset($data['video_recv_remote_mute']) ? $data['video_recv_remote_mute'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bonded_video_name'] = isset($data['bonded_video_name']) ? $data['bonded_video_name'] : null;
        $this->container['is_in_roster'] = isset($data['is_in_roster']) ? $data['is_in_roster'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets ec_mode
     * @return string
     */
    public function getEcMode()
    {
        return $this->container['ec_mode'];
    }

    /**
     * Sets ec_mode
     * @param string $ec_mode
     * @return $this
     */
    public function setEcMode($ec_mode)
    {
        $this->container['ec_mode'] = $ec_mode;

        return $this;
    }

    /**
     * Gets creationtime
     * @return string
     */
    public function getCreationtime()
    {
        return $this->container['creationtime'];
    }

    /**
     * Sets creationtime
     * @param string $creationtime
     * @return $this
     */
    public function setCreationtime($creationtime)
    {
        $this->container['creationtime'] = $creationtime;

        return $this;
    }

    /**
     * Gets audio_remote_rtcp_address
     * @return string
     */
    public function getAudioRemoteRtcpAddress()
    {
        return $this->container['audio_remote_rtcp_address'];
    }

    /**
     * Sets audio_remote_rtcp_address
     * @param string $audio_remote_rtcp_address
     * @return $this
     */
    public function setAudioRemoteRtcpAddress($audio_remote_rtcp_address)
    {
        $this->container['audio_remote_rtcp_address'] = $audio_remote_rtcp_address;

        return $this;
    }

    /**
     * Gets video_send_codec
     * @return string
     */
    public function getVideoSendCodec()
    {
        return $this->container['video_send_codec'];
    }

    /**
     * Sets video_send_codec
     * @param string $video_send_codec
     * @return $this
     */
    public function setVideoSendCodec($video_send_codec)
    {
        $this->container['video_send_codec'] = $video_send_codec;

        return $this;
    }

    /**
     * Gets audio_play_id
     * @return string
     */
    public function getAudioPlayId()
    {
        return $this->container['audio_play_id'];
    }

    /**
     * Sets audio_play_id
     * @param string $audio_play_id
     * @return $this
     */
    public function setAudioPlayId($audio_play_id)
    {
        $this->container['audio_play_id'] = $audio_play_id;

        return $this;
    }

    /**
     * Gets call_quality_recv
     * @return string
     */
    public function getCallQualityRecv()
    {
        return $this->container['call_quality_recv'];
    }

    /**
     * Sets call_quality_recv
     * @param string $call_quality_recv
     * @return $this
     */
    public function setCallQualityRecv($call_quality_recv)
    {
        $this->container['call_quality_recv'] = $call_quality_recv;

        return $this;
    }

    /**
     * Gets session_out
     * @return string
     */
    public function getSessionOut()
    {
        return $this->container['session_out'];
    }

    /**
     * Sets session_out
     * @param string $session_out
     * @return $this
     */
    public function setSessionOut($session_out)
    {
        $this->container['session_out'] = $session_out;

        return $this;
    }

    /**
     * Gets audio_local_address
     * @return string
     */
    public function getAudioLocalAddress()
    {
        return $this->container['audio_local_address'];
    }

    /**
     * Sets audio_local_address
     * @param string $audio_local_address
     * @return $this
     */
    public function setAudioLocalAddress($audio_local_address)
    {
        $this->container['audio_local_address'] = $audio_local_address;

        return $this;
    }

    /**
     * Gets meetingid
     * @return string
     */
    public function getMeetingid()
    {
        return $this->container['meetingid'];
    }

    /**
     * Sets meetingid
     * @param string $meetingid
     * @return $this
     */
    public function setMeetingid($meetingid)
    {
        $this->container['meetingid'] = $meetingid;

        return $this;
    }

    /**
     * Gets video_send_width
     * @return string
     */
    public function getVideoSendWidth()
    {
        return $this->container['video_send_width'];
    }

    /**
     * Sets video_send_width
     * @param string $video_send_width
     * @return $this
     */
    public function setVideoSendWidth($video_send_width)
    {
        $this->container['video_send_width'] = $video_send_width;

        return $this;
    }

    /**
     * Gets call_quality_send
     * @return string
     */
    public function getCallQualitySend()
    {
        return $this->container['call_quality_send'];
    }

    /**
     * Sets call_quality_send
     * @param string $call_quality_send
     * @return $this
     */
    public function setCallQualitySend($call_quality_send)
    {
        $this->container['call_quality_send'] = $call_quality_send;

        return $this;
    }

    /**
     * Gets mhaddress
     * @return string
     */
    public function getMhaddress()
    {
        return $this->container['mhaddress'];
    }

    /**
     * Sets mhaddress
     * @param string $mhaddress
     * @return $this
     */
    public function setMhaddress($mhaddress)
    {
        $this->container['mhaddress'] = $mhaddress;

        return $this;
    }

    /**
     * Gets rdc_controllee_capable
     * @return string
     */
    public function getRdcControlleeCapable()
    {
        return $this->container['rdc_controllee_capable'];
    }

    /**
     * Sets rdc_controllee_capable
     * @param string $rdc_controllee_capable
     * @return $this
     */
    public function setRdcControlleeCapable($rdc_controllee_capable)
    {
        $this->container['rdc_controllee_capable'] = $rdc_controllee_capable;

        return $this;
    }

    /**
     * Gets audio_cap_name
     * @return string
     */
    public function getAudioCapName()
    {
        return $this->container['audio_cap_name'];
    }

    /**
     * Sets audio_cap_name
     * @param string $audio_cap_name
     * @return $this
     */
    public function setAudioCapName($audio_cap_name)
    {
        $this->container['audio_cap_name'] = $audio_cap_name;

        return $this;
    }

    /**
     * Gets proxy_info
     * @return string
     */
    public function getProxyInfo()
    {
        return $this->container['proxy_info'];
    }

    /**
     * Sets proxy_info
     * @param string $proxy_info
     * @return $this
     */
    public function setProxyInfo($proxy_info)
    {
        $this->container['proxy_info'] = $proxy_info;

        return $this;
    }

    /**
     * Gets audio_send_codec
     * @return string
     */
    public function getAudioSendCodec()
    {
        return $this->container['audio_send_codec'];
    }

    /**
     * Sets audio_send_codec
     * @param string $audio_send_codec
     * @return $this
     */
    public function setAudioSendCodec($audio_send_codec)
    {
        $this->container['audio_send_codec'] = $audio_send_codec;

        return $this;
    }

    /**
     * Gets vendor
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     * @param string $vendor
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets video_recv_width
     * @return string
     */
    public function getVideoRecvWidth()
    {
        return $this->container['video_recv_width'];
    }

    /**
     * Sets video_recv_width
     * @param string $video_recv_width
     * @return $this
     */
    public function setVideoRecvWidth($video_recv_width)
    {
        $this->container['video_recv_width'] = $video_recv_width;

        return $this;
    }

    /**
     * Gets conaddress
     * @return string
     */
    public function getConaddress()
    {
        return $this->container['conaddress'];
    }

    /**
     * Sets conaddress
     * @param string $conaddress
     * @return $this
     */
    public function setConaddress($conaddress)
    {
        $this->container['conaddress'] = $conaddress;

        return $this;
    }

    /**
     * Gets talk_detected
     * @return string
     */
    public function getTalkDetected()
    {
        return $this->container['talk_detected'];
    }

    /**
     * Sets talk_detected
     * @param string $talk_detected
     * @return $this
     */
    public function setTalkDetected($talk_detected)
    {
        $this->container['talk_detected'] = $talk_detected;

        return $this;
    }

    /**
     * Gets sub_layout
     * @return string
     */
    public function getSubLayout()
    {
        return $this->container['sub_layout'];
    }

    /**
     * Sets sub_layout
     * @param string $sub_layout
     * @return $this
     */
    public function setSubLayout($sub_layout)
    {
        $this->container['sub_layout'] = $sub_layout;

        return $this;
    }

    /**
     * Gets audio_rtcp_relay
     * @return string
     */
    public function getAudioRtcpRelay()
    {
        return $this->container['audio_rtcp_relay'];
    }

    /**
     * Sets audio_rtcp_relay
     * @param string $audio_rtcp_relay
     * @return $this
     */
    public function setAudioRtcpRelay($audio_rtcp_relay)
    {
        $this->container['audio_rtcp_relay'] = $audio_rtcp_relay;

        return $this;
    }

    /**
     * Gets audio_recv_local_mute
     * @return string
     */
    public function getAudioRecvLocalMute()
    {
        return $this->container['audio_recv_local_mute'];
    }

    /**
     * Sets audio_recv_local_mute
     * @param string $audio_recv_local_mute
     * @return $this
     */
    public function setAudioRecvLocalMute($audio_recv_local_mute)
    {
        $this->container['audio_recv_local_mute'] = $audio_recv_local_mute;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets video_local_address
     * @return string
     */
    public function getVideoLocalAddress()
    {
        return $this->container['video_local_address'];
    }

    /**
     * Sets video_local_address
     * @param string $video_local_address
     * @return $this
     */
    public function setVideoLocalAddress($video_local_address)
    {
        $this->container['video_local_address'] = $video_local_address;

        return $this;
    }

    /**
     * Gets audio_local_rtcp_address
     * @return string
     */
    public function getAudioLocalRtcpAddress()
    {
        return $this->container['audio_local_rtcp_address'];
    }

    /**
     * Sets audio_local_rtcp_address
     * @param string $audio_local_rtcp_address
     * @return $this
     */
    public function setAudioLocalRtcpAddress($audio_local_rtcp_address)
    {
        $this->container['audio_local_rtcp_address'] = $audio_local_rtcp_address;

        return $this;
    }

    /**
     * Gets content_rtp_relay
     * @return string
     */
    public function getContentRtpRelay()
    {
        return $this->container['content_rtp_relay'];
    }

    /**
     * Sets content_rtp_relay
     * @param string $content_rtp_relay
     * @return $this
     */
    public function setContentRtpRelay($content_rtp_relay)
    {
        $this->container['content_rtp_relay'] = $content_rtp_relay;

        return $this;
    }

    /**
     * Gets content_local_rtcp_address
     * @return string
     */
    public function getContentLocalRtcpAddress()
    {
        return $this->container['content_local_rtcp_address'];
    }

    /**
     * Sets content_local_rtcp_address
     * @param string $content_local_rtcp_address
     * @return $this
     */
    public function setContentLocalRtcpAddress($content_local_rtcp_address)
    {
        $this->container['content_local_rtcp_address'] = $content_local_rtcp_address;

        return $this;
    }

    /**
     * Gets remote_connection_count
     * @return string
     */
    public function getRemoteConnectionCount()
    {
        return $this->container['remote_connection_count'];
    }

    /**
     * Sets remote_connection_count
     * @param string $remote_connection_count
     * @return $this
     */
    public function setRemoteConnectionCount($remote_connection_count)
    {
        $this->container['remote_connection_count'] = $remote_connection_count;

        return $this;
    }

    /**
     * Gets callrate
     * @return string
     */
    public function getCallrate()
    {
        return $this->container['callrate'];
    }

    /**
     * Sets callrate
     * @param string $callrate
     * @return $this
     */
    public function setCallrate($callrate)
    {
        $this->container['callrate'] = $callrate;

        return $this;
    }

    /**
     * Gets mixer_guid
     * @return string
     */
    public function getMixerGuid()
    {
        return $this->container['mixer_guid'];
    }

    /**
     * Sets mixer_guid
     * @param string $mixer_guid
     * @return $this
     */
    public function setMixerGuid($mixer_guid)
    {
        $this->container['mixer_guid'] = $mixer_guid;

        return $this;
    }

    /**
     * Gets transport
     * @return string
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     * @param string $transport
     * @return $this
     */
    public function setTransport($transport)
    {
        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets audio_cap_select_id
     * @return string
     */
    public function getAudioCapSelectId()
    {
        return $this->container['audio_cap_select_id'];
    }

    /**
     * Sets audio_cap_select_id
     * @param string $audio_cap_select_id
     * @return $this
     */
    public function setAudioCapSelectId($audio_cap_select_id)
    {
        $this->container['audio_cap_select_id'] = $audio_cap_select_id;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets rdc_controller_capable
     * @return string
     */
    public function getRdcControllerCapable()
    {
        return $this->container['rdc_controller_capable'];
    }

    /**
     * Sets rdc_controller_capable
     * @param string $rdc_controller_capable
     * @return $this
     */
    public function setRdcControllerCapable($rdc_controller_capable)
    {
        $this->container['rdc_controller_capable'] = $rdc_controller_capable;

        return $this;
    }

    /**
     * Gets pairedname
     * @return string
     */
    public function getPairedname()
    {
        return $this->container['pairedname'];
    }

    /**
     * Sets pairedname
     * @param string $pairedname
     * @return $this
     */
    public function setPairedname($pairedname)
    {
        $this->container['pairedname'] = $pairedname;

        return $this;
    }

    /**
     * Gets video_rtcp_relay
     * @return string
     */
    public function getVideoRtcpRelay()
    {
        return $this->container['video_rtcp_relay'];
    }

    /**
     * Sets video_rtcp_relay
     * @param string $video_rtcp_relay
     * @return $this
     */
    public function setVideoRtcpRelay($video_rtcp_relay)
    {
        $this->container['video_rtcp_relay'] = $video_rtcp_relay;

        return $this;
    }

    /**
     * Gets endpoint_cpu_params
     * @return string
     */
    public function getEndpointCpuParams()
    {
        return $this->container['endpoint_cpu_params'];
    }

    /**
     * Sets endpoint_cpu_params
     * @param string $endpoint_cpu_params
     * @return $this
     */
    public function setEndpointCpuParams($endpoint_cpu_params)
    {
        $this->container['endpoint_cpu_params'] = $endpoint_cpu_params;

        return $this;
    }

    /**
     * Gets video_remote_address
     * @return string
     */
    public function getVideoRemoteAddress()
    {
        return $this->container['video_remote_address'];
    }

    /**
     * Sets video_remote_address
     * @param string $video_remote_address
     * @return $this
     */
    public function setVideoRemoteAddress($video_remote_address)
    {
        $this->container['video_remote_address'] = $video_remote_address;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets content_recv
     * @return string
     */
    public function getContentRecv()
    {
        return $this->container['content_recv'];
    }

    /**
     * Sets content_recv
     * @param string $content_recv
     * @return $this
     */
    public function setContentRecv($content_recv)
    {
        $this->container['content_recv'] = $content_recv;

        return $this;
    }

    /**
     * Gets local_name
     * @return string
     */
    public function getLocalName()
    {
        return $this->container['local_name'];
    }

    /**
     * Sets local_name
     * @param string $local_name
     * @return $this
     */
    public function setLocalName($local_name)
    {
        $this->container['local_name'] = $local_name;

        return $this;
    }

    /**
     * Gets bjn_user_id
     * @return string
     */
    public function getBjnUserId()
    {
        return $this->container['bjn_user_id'];
    }

    /**
     * Sets bjn_user_id
     * @param string $bjn_user_id
     * @return $this
     */
    public function setBjnUserId($bjn_user_id)
    {
        $this->container['bjn_user_id'] = $bjn_user_id;

        return $this;
    }

    /**
     * Gets content_remote_address
     * @return string
     */
    public function getContentRemoteAddress()
    {
        return $this->container['content_remote_address'];
    }

    /**
     * Sets content_remote_address
     * @param string $content_remote_address
     * @return $this
     */
    public function setContentRemoteAddress($content_remote_address)
    {
        $this->container['content_remote_address'] = $content_remote_address;

        return $this;
    }

    /**
     * Gets audio_send
     * @return string
     */
    public function getAudioSend()
    {
        return $this->container['audio_send'];
    }

    /**
     * Sets audio_send
     * @param string $audio_send
     * @return $this
     */
    public function setAudioSend($audio_send)
    {
        $this->container['audio_send'] = $audio_send;

        return $this;
    }

    /**
     * Gets participant_dtmf_menus
     * @return string
     */
    public function getParticipantDtmfMenus()
    {
        return $this->container['participant_dtmf_menus'];
    }

    /**
     * Sets participant_dtmf_menus
     * @param string $participant_dtmf_menus
     * @return $this
     */
    public function setParticipantDtmfMenus($participant_dtmf_menus)
    {
        $this->container['participant_dtmf_menus'] = $participant_dtmf_menus;

        return $this;
    }

    /**
     * Gets video_rtcp_transpor
     * @return string
     */
    public function getVideoRtcpTranspor()
    {
        return $this->container['video_rtcp_transpor'];
    }

    /**
     * Sets video_rtcp_transpor
     * @param string $video_rtcp_transpor
     * @return $this
     */
    public function setVideoRtcpTranspor($video_rtcp_transpor)
    {
        $this->container['video_rtcp_transpor'] = $video_rtcp_transpor;

        return $this;
    }

    /**
     * Gets audio_rtcp_transport
     * @return string
     */
    public function getAudioRtcpTransport()
    {
        return $this->container['audio_rtcp_transport'];
    }

    /**
     * Sets audio_rtcp_transport
     * @param string $audio_rtcp_transport
     * @return $this
     */
    public function setAudioRtcpTransport($audio_rtcp_transport)
    {
        $this->container['audio_rtcp_transport'] = $audio_rtcp_transport;

        return $this;
    }

    /**
     * Gets relay_node_id
     * @return string
     */
    public function getRelayNodeId()
    {
        return $this->container['relay_node_id'];
    }

    /**
     * Sets relay_node_id
     * @param string $relay_node_id
     * @return $this
     */
    public function setRelayNodeId($relay_node_id)
    {
        $this->container['relay_node_id'] = $relay_node_id;

        return $this;
    }

    /**
     * Gets content_remote_rtcp_address
     * @return string
     */
    public function getContentRemoteRtcpAddress()
    {
        return $this->container['content_remote_rtcp_address'];
    }

    /**
     * Sets content_remote_rtcp_address
     * @param string $content_remote_rtcp_address
     * @return $this
     */
    public function setContentRemoteRtcpAddress($content_remote_rtcp_address)
    {
        $this->container['content_remote_rtcp_address'] = $content_remote_rtcp_address;

        return $this;
    }

    /**
     * Gets audio_rtp_relay
     * @return string
     */
    public function getAudioRtpRelay()
    {
        return $this->container['audio_rtp_relay'];
    }

    /**
     * Sets audio_rtp_relay
     * @param string $audio_rtp_relay
     * @return $this
     */
    public function setAudioRtpRelay($audio_rtp_relay)
    {
        $this->container['audio_rtp_relay'] = $audio_rtp_relay;

        return $this;
    }

    /**
     * Gets video_rtp_transport
     * @return string
     */
    public function getVideoRtpTransport()
    {
        return $this->container['video_rtp_transport'];
    }

    /**
     * Sets video_rtp_transport
     * @param string $video_rtp_transport
     * @return $this
     */
    public function setVideoRtpTransport($video_rtp_transport)
    {
        $this->container['video_rtp_transport'] = $video_rtp_transport;

        return $this;
    }

    /**
     * Gets content_recv_local_mute
     * @return string
     */
    public function getContentRecvLocalMute()
    {
        return $this->container['content_recv_local_mute'];
    }

    /**
     * Sets content_recv_local_mute
     * @param string $content_recv_local_mute
     * @return $this
     */
    public function setContentRecvLocalMute($content_recv_local_mute)
    {
        $this->container['content_recv_local_mute'] = $content_recv_local_mute;

        return $this;
    }

    /**
     * Gets layout
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     * @param string $layout
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets content_send
     * @return string
     */
    public function getContentSend()
    {
        return $this->container['content_send'];
    }

    /**
     * Sets content_send
     * @param string $content_send
     * @return $this
     */
    public function setContentSend($content_send)
    {
        $this->container['content_send'] = $content_send;

        return $this;
    }

    /**
     * Gets remoteaddress
     * @return string
     */
    public function getRemoteaddress()
    {
        return $this->container['remoteaddress'];
    }

    /**
     * Sets remoteaddress
     * @param string $remoteaddress
     * @return $this
     */
    public function setRemoteaddress($remoteaddress)
    {
        $this->container['remoteaddress'] = $remoteaddress;

        return $this;
    }

    /**
     * Gets meeting_guid
     * @return string
     */
    public function getMeetingGuid()
    {
        return $this->container['meeting_guid'];
    }

    /**
     * Sets meeting_guid
     * @param string $meeting_guid
     * @return $this
     */
    public function setMeetingGuid($meeting_guid)
    {
        $this->container['meeting_guid'] = $meeting_guid;

        return $this;
    }

    /**
     * Gets connecttime
     * @return string
     */
    public function getConnecttime()
    {
        return $this->container['connecttime'];
    }

    /**
     * Sets connecttime
     * @param string $connecttime
     * @return $this
     */
    public function setConnecttime($connecttime)
    {
        $this->container['connecttime'] = $connecttime;

        return $this;
    }

    /**
     * Gets localaddress
     * @return string
     */
    public function getLocaladdress()
    {
        return $this->container['localaddress'];
    }

    /**
     * Sets localaddress
     * @param string $localaddress
     * @return $this
     */
    public function setLocaladdress($localaddress)
    {
        $this->container['localaddress'] = $localaddress;

        return $this;
    }

    /**
     * Gets audio_remote_address
     * @return string
     */
    public function getAudioRemoteAddress()
    {
        return $this->container['audio_remote_address'];
    }

    /**
     * Sets audio_remote_address
     * @param string $audio_remote_address
     * @return $this
     */
    public function setAudioRemoteAddress($audio_remote_address)
    {
        $this->container['audio_remote_address'] = $audio_remote_address;

        return $this;
    }

    /**
     * Gets bonded_audio_guid
     * @return string
     */
    public function getBondedAudioGuid()
    {
        return $this->container['bonded_audio_guid'];
    }

    /**
     * Sets bonded_audio_guid
     * @param string $bonded_audio_guid
     * @return $this
     */
    public function setBondedAudioGuid($bonded_audio_guid)
    {
        $this->container['bonded_audio_guid'] = $bonded_audio_guid;

        return $this;
    }

    /**
     * Gets audio_recv_remote_mute
     * @return string
     */
    public function getAudioRecvRemoteMute()
    {
        return $this->container['audio_recv_remote_mute'];
    }

    /**
     * Sets audio_recv_remote_mute
     * @param string $audio_recv_remote_mute
     * @return $this
     */
    public function setAudioRecvRemoteMute($audio_recv_remote_mute)
    {
        $this->container['audio_recv_remote_mute'] = $audio_recv_remote_mute;

        return $this;
    }

    /**
     * Gets session_out_relay
     * @return string
     */
    public function getSessionOutRelay()
    {
        return $this->container['session_out_relay'];
    }

    /**
     * Sets session_out_relay
     * @param string $session_out_relay
     * @return $this
     */
    public function setSessionOutRelay($session_out_relay)
    {
        $this->container['session_out_relay'] = $session_out_relay;

        return $this;
    }

    /**
     * Gets leader
     * @return string
     */
    public function getLeader()
    {
        return $this->container['leader'];
    }

    /**
     * Sets leader
     * @param string $leader
     * @return $this
     */
    public function setLeader($leader)
    {
        $this->container['leader'] = $leader;

        return $this;
    }

    /**
     * Gets content_local_address
     * @return string
     */
    public function getContentLocalAddress()
    {
        return $this->container['content_local_address'];
    }

    /**
     * Sets content_local_address
     * @param string $content_local_address
     * @return $this
     */
    public function setContentLocalAddress($content_local_address)
    {
        $this->container['content_local_address'] = $content_local_address;

        return $this;
    }

    /**
     * Gets movie_capable
     * @return string
     */
    public function getMovieCapable()
    {
        return $this->container['movie_capable'];
    }

    /**
     * Sets movie_capable
     * @param string $movie_capable
     * @return $this
     */
    public function setMovieCapable($movie_capable)
    {
        $this->container['movie_capable'] = $movie_capable;

        return $this;
    }

    /**
     * Gets video_recv_local_mute
     * @return string
     */
    public function getVideoRecvLocalMute()
    {
        return $this->container['video_recv_local_mute'];
    }

    /**
     * Sets video_recv_local_mute
     * @param string $video_recv_local_mute
     * @return $this
     */
    public function setVideoRecvLocalMute($video_recv_local_mute)
    {
        $this->container['video_recv_local_mute'] = $video_recv_local_mute;

        return $this;
    }

    /**
     * Gets content_rtp_transport
     * @return string
     */
    public function getContentRtpTransport()
    {
        return $this->container['content_rtp_transport'];
    }

    /**
     * Sets content_rtp_transport
     * @param string $content_rtp_transport
     * @return $this
     */
    public function setContentRtpTransport($content_rtp_transport)
    {
        $this->container['content_rtp_transport'] = $content_rtp_transport;

        return $this;
    }

    /**
     * Gets rdc_version
     * @return string
     */
    public function getRdcVersion()
    {
        return $this->container['rdc_version'];
    }

    /**
     * Sets rdc_version
     * @param string $rdc_version
     * @return $this
     */
    public function setRdcVersion($rdc_version)
    {
        $this->container['rdc_version'] = $rdc_version;

        return $this;
    }

    /**
     * Gets audio_recv
     * @return string
     */
    public function getAudioRecv()
    {
        return $this->container['audio_recv'];
    }

    /**
     * Sets audio_recv
     * @param string $audio_recv
     * @return $this
     */
    public function setAudioRecv($audio_recv)
    {
        $this->container['audio_recv'] = $audio_recv;

        return $this;
    }

    /**
     * Gets content_relay_server
     * @return string
     */
    public function getContentRelayServer()
    {
        return $this->container['content_relay_server'];
    }

    /**
     * Sets content_relay_server
     * @param string $content_relay_server
     * @return $this
     */
    public function setContentRelayServer($content_relay_server)
    {
        $this->container['content_relay_server'] = $content_relay_server;

        return $this;
    }

    /**
     * Gets video_recv
     * @return string
     */
    public function getVideoRecv()
    {
        return $this->container['video_recv'];
    }

    /**
     * Sets video_recv
     * @param string $video_recv
     * @return $this
     */
    public function setVideoRecv($video_recv)
    {
        $this->container['video_recv'] = $video_recv;

        return $this;
    }

    /**
     * Gets visibility
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     * @param string $visibility
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets sessionid
     * @return string
     */
    public function getSessionid()
    {
        return $this->container['sessionid'];
    }

    /**
     * Sets sessionid
     * @param string $sessionid
     * @return $this
     */
    public function setSessionid($sessionid)
    {
        $this->container['sessionid'] = $sessionid;

        return $this;
    }

    /**
     * Gets content_rtcp_relay
     * @return string
     */
    public function getContentRtcpRelay()
    {
        return $this->container['content_rtcp_relay'];
    }

    /**
     * Sets content_rtcp_relay
     * @param string $content_rtcp_relay
     * @return $this
     */
    public function setContentRtcpRelay($content_rtcp_relay)
    {
        $this->container['content_rtcp_relay'] = $content_rtcp_relay;

        return $this;
    }

    /**
     * Gets locales
     * @return string
     */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
     * Sets locales
     * @param string $locales
     * @return $this
     */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;

        return $this;
    }

    /**
     * Gets medaddress
     * @return string
     */
    public function getMedaddress()
    {
        return $this->container['medaddress'];
    }

    /**
     * Sets medaddress
     * @param string $medaddress
     * @return $this
     */
    public function setMedaddress($medaddress)
    {
        $this->container['medaddress'] = $medaddress;

        return $this;
    }

    /**
     * Gets html_layout_guid
     * @return string
     */
    public function getHtmlLayoutGuid()
    {
        return $this->container['html_layout_guid'];
    }

    /**
     * Sets html_layout_guid
     * @param string $html_layout_guid
     * @return $this
     */
    public function setHtmlLayoutGuid($html_layout_guid)
    {
        $this->container['html_layout_guid'] = $html_layout_guid;

        return $this;
    }

    /**
     * Gets endpoint
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets video_drop
     * @return string
     */
    public function getVideoDrop()
    {
        return $this->container['video_drop'];
    }

    /**
     * Sets video_drop
     * @param string $video_drop
     * @return $this
     */
    public function setVideoDrop($video_drop)
    {
        $this->container['video_drop'] = $video_drop;

        return $this;
    }

    /**
     * Gets content_rtcp_transport
     * @return string
     */
    public function getContentRtcpTransport()
    {
        return $this->container['content_rtcp_transport'];
    }

    /**
     * Sets content_rtcp_transport
     * @param string $content_rtcp_transport
     * @return $this
     */
    public function setContentRtcpTransport($content_rtcp_transport)
    {
        $this->container['content_rtcp_transport'] = $content_rtcp_transport;

        return $this;
    }

    /**
     * Gets video_remote_rtcp_address
     * @return string
     */
    public function getVideoRemoteRtcpAddress()
    {
        return $this->container['video_remote_rtcp_address'];
    }

    /**
     * Sets video_remote_rtcp_address
     * @param string $video_remote_rtcp_address
     * @return $this
     */
    public function setVideoRemoteRtcpAddress($video_remote_rtcp_address)
    {
        $this->container['video_remote_rtcp_address'] = $video_remote_rtcp_address;

        return $this;
    }

    /**
     * Gets video_rtp_relay
     * @return string
     */
    public function getVideoRtpRelay()
    {
        return $this->container['video_rtp_relay'];
    }

    /**
     * Sets video_rtp_relay
     * @param string $video_rtp_relay
     * @return $this
     */
    public function setVideoRtpRelay($video_rtp_relay)
    {
        $this->container['video_rtp_relay'] = $video_rtp_relay;

        return $this;
    }

    /**
     * Gets mixaddress
     * @return string
     */
    public function getMixaddress()
    {
        return $this->container['mixaddress'];
    }

    /**
     * Sets mixaddress
     * @param string $mixaddress
     * @return $this
     */
    public function setMixaddress($mixaddress)
    {
        $this->container['mixaddress'] = $mixaddress;

        return $this;
    }

    /**
     * Gets siphttp_proxy_transport
     * @return string
     */
    public function getSiphttpProxyTransport()
    {
        return $this->container['siphttp_proxy_transport'];
    }

    /**
     * Sets siphttp_proxy_transport
     * @param string $siphttp_proxy_transport
     * @return $this
     */
    public function setSiphttpProxyTransport($siphttp_proxy_transport)
    {
        $this->container['siphttp_proxy_transport'] = $siphttp_proxy_transport;

        return $this;
    }

    /**
     * Gets video_recv_codec
     * @return string
     */
    public function getVideoRecvCodec()
    {
        return $this->container['video_recv_codec'];
    }

    /**
     * Sets video_recv_codec
     * @param string $video_recv_codec
     * @return $this
     */
    public function setVideoRecvCodec($video_recv_codec)
    {
        $this->container['video_recv_codec'] = $video_recv_codec;

        return $this;
    }

    /**
     * Gets audio_recv_codec
     * @return string
     */
    public function getAudioRecvCodec()
    {
        return $this->container['audio_recv_codec'];
    }

    /**
     * Sets audio_recv_codec
     * @param string $audio_recv_codec
     * @return $this
     */
    public function setAudioRecvCodec($audio_recv_codec)
    {
        $this->container['audio_recv_codec'] = $audio_recv_codec;

        return $this;
    }

    /**
     * Gets session_in
     * @return string
     */
    public function getSessionIn()
    {
        return $this->container['session_in'];
    }

    /**
     * Sets session_in
     * @param string $session_in
     * @return $this
     */
    public function setSessionIn($session_in)
    {
        $this->container['session_in'] = $session_in;

        return $this;
    }

    /**
     * Gets bonded_video_guid
     * @return string
     */
    public function getBondedVideoGuid()
    {
        return $this->container['bonded_video_guid'];
    }

    /**
     * Sets bonded_video_guid
     * @param string $bonded_video_guid
     * @return $this
     */
    public function setBondedVideoGuid($bonded_video_guid)
    {
        $this->container['bonded_video_guid'] = $bonded_video_guid;

        return $this;
    }

    /**
     * Gets call_quality
     * @return string
     */
    public function getCallQuality()
    {
        return $this->container['call_quality'];
    }

    /**
     * Sets call_quality
     * @param string $call_quality
     * @return $this
     */
    public function setCallQuality($call_quality)
    {
        $this->container['call_quality'] = $call_quality;

        return $this;
    }

    /**
     * Gets meetingjointime
     * @return string
     */
    public function getMeetingjointime()
    {
        return $this->container['meetingjointime'];
    }

    /**
     * Sets meetingjointime
     * @param string $meetingjointime
     * @return $this
     */
    public function setMeetingjointime($meetingjointime)
    {
        $this->container['meetingjointime'] = $meetingjointime;

        return $this;
    }

    /**
     * Gets session_in_relay
     * @return string
     */
    public function getSessionInRelay()
    {
        return $this->container['session_in_relay'];
    }

    /**
     * Sets session_in_relay
     * @param string $session_in_relay
     * @return $this
     */
    public function setSessionInRelay($session_in_relay)
    {
        $this->container['session_in_relay'] = $session_in_relay;

        return $this;
    }

    /**
     * Gets pairedremoteaddress
     * @return string
     */
    public function getPairedremoteaddress()
    {
        return $this->container['pairedremoteaddress'];
    }

    /**
     * Sets pairedremoteaddress
     * @param string $pairedremoteaddress
     * @return $this
     */
    public function setPairedremoteaddress($pairedremoteaddress)
    {
        $this->container['pairedremoteaddress'] = $pairedremoteaddress;

        return $this;
    }

    /**
     * Gets video_send_height
     * @return string
     */
    public function getVideoSendHeight()
    {
        return $this->container['video_send_height'];
    }

    /**
     * Sets video_send_height
     * @param string $video_send_height
     * @return $this
     */
    public function setVideoSendHeight($video_send_height)
    {
        $this->container['video_send_height'] = $video_send_height;

        return $this;
    }

    /**
     * Gets video_recv_height
     * @return string
     */
    public function getVideoRecvHeight()
    {
        return $this->container['video_recv_height'];
    }

    /**
     * Sets video_recv_height
     * @param string $video_recv_height
     * @return $this
     */
    public function setVideoRecvHeight($video_recv_height)
    {
        $this->container['video_recv_height'] = $video_recv_height;

        return $this;
    }

    /**
     * Gets secure_call
     * @return string
     */
    public function getSecureCall()
    {
        return $this->container['secure_call'];
    }

    /**
     * Sets secure_call
     * @param string $secure_call
     * @return $this
     */
    public function setSecureCall($secure_call)
    {
        $this->container['secure_call'] = $secure_call;

        return $this;
    }

    /**
     * Gets video_local_rtcp_address
     * @return string
     */
    public function getVideoLocalRtcpAddress()
    {
        return $this->container['video_local_rtcp_address'];
    }

    /**
     * Sets video_local_rtcp_address
     * @param string $video_local_rtcp_address
     * @return $this
     */
    public function setVideoLocalRtcpAddress($video_local_rtcp_address)
    {
        $this->container['video_local_rtcp_address'] = $video_local_rtcp_address;

        return $this;
    }

    /**
     * Gets audio_play_name
     * @return string
     */
    public function getAudioPlayName()
    {
        return $this->container['audio_play_name'];
    }

    /**
     * Sets audio_play_name
     * @param string $audio_play_name
     * @return $this
     */
    public function setAudioPlayName($audio_play_name)
    {
        $this->container['audio_play_name'] = $audio_play_name;

        return $this;
    }

    /**
     * Gets video_cap_id
     * @return string
     */
    public function getVideoCapId()
    {
        return $this->container['video_cap_id'];
    }

    /**
     * Sets video_cap_id
     * @param string $video_cap_id
     * @return $this
     */
    public function setVideoCapId($video_cap_id)
    {
        $this->container['video_cap_id'] = $video_cap_id;

        return $this;
    }

    /**
     * Gets audio_rtp_transport
     * @return string
     */
    public function getAudioRtpTransport()
    {
        return $this->container['audio_rtp_transport'];
    }

    /**
     * Sets audio_rtp_transport
     * @param string $audio_rtp_transport
     * @return $this
     */
    public function setAudioRtpTransport($audio_rtp_transport)
    {
        $this->container['audio_rtp_transport'] = $audio_rtp_transport;

        return $this;
    }

    /**
     * Gets meeting_info_mode
     * @return string
     */
    public function getMeetingInfoMode()
    {
        return $this->container['meeting_info_mode'];
    }

    /**
     * Sets meeting_info_mode
     * @param string $meeting_info_mode
     * @return $this
     */
    public function setMeetingInfoMode($meeting_info_mode)
    {
        $this->container['meeting_info_mode'] = $meeting_info_mode;

        return $this;
    }

    /**
     * Gets callhostname
     * @return string
     */
    public function getCallhostname()
    {
        return $this->container['callhostname'];
    }

    /**
     * Sets callhostname
     * @param string $callhostname
     * @return $this
     */
    public function setCallhostname($callhostname)
    {
        $this->container['callhostname'] = $callhostname;

        return $this;
    }

    /**
     * Gets callguid
     * @return string
     */
    public function getCallguid()
    {
        return $this->container['callguid'];
    }

    /**
     * Sets callguid
     * @param string $callguid
     * @return $this
     */
    public function setCallguid($callguid)
    {
        $this->container['callguid'] = $callguid;

        return $this;
    }

    /**
     * Gets audio_cap_id
     * @return string
     */
    public function getAudioCapId()
    {
        return $this->container['audio_cap_id'];
    }

    /**
     * Sets audio_cap_id
     * @param string $audio_cap_id
     * @return $this
     */
    public function setAudioCapId($audio_cap_id)
    {
        $this->container['audio_cap_id'] = $audio_cap_id;

        return $this;
    }

    /**
     * Gets video_send
     * @return string
     */
    public function getVideoSend()
    {
        return $this->container['video_send'];
    }

    /**
     * Sets video_send
     * @param string $video_send
     * @return $this
     */
    public function setVideoSend($video_send)
    {
        $this->container['video_send'] = $video_send;

        return $this;
    }

    /**
     * Gets content_recv_codec
     * @return string
     */
    public function getContentRecvCodec()
    {
        return $this->container['content_recv_codec'];
    }

    /**
     * Sets content_recv_codec
     * @param string $content_recv_codec
     * @return $this
     */
    public function setContentRecvCodec($content_recv_codec)
    {
        $this->container['content_recv_codec'] = $content_recv_codec;

        return $this;
    }

    /**
     * Gets session_relay
     * @return string
     */
    public function getSessionRelay()
    {
        return $this->container['session_relay'];
    }

    /**
     * Sets session_relay
     * @param string $session_relay
     * @return $this
     */
    public function setSessionRelay($session_relay)
    {
        $this->container['session_relay'] = $session_relay;

        return $this;
    }

    /**
     * Gets video_recv_remote_mute
     * @return string
     */
    public function getVideoRecvRemoteMute()
    {
        return $this->container['video_recv_remote_mute'];
    }

    /**
     * Sets video_recv_remote_mute
     * @param string $video_recv_remote_mute
     * @return $this
     */
    public function setVideoRecvRemoteMute($video_recv_remote_mute)
    {
        $this->container['video_recv_remote_mute'] = $video_recv_remote_mute;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets bonded_video_name
     * @return string
     */
    public function getBondedVideoName()
    {
        return $this->container['bonded_video_name'];
    }

    /**
     * Sets bonded_video_name
     * @param string $bonded_video_name
     * @return $this
     */
    public function setBondedVideoName($bonded_video_name)
    {
        $this->container['bonded_video_name'] = $bonded_video_name;

        return $this;
    }

    /**
     * Gets is_in_roster
     * @return bool
     */
    public function getIsInRoster()
    {
        return $this->container['is_in_roster'];
    }

    /**
     * Sets is_in_roster
     * @param bool $is_in_roster
     * @return $this
     */
    public function setIsInRoster($is_in_roster)
    {
        $this->container['is_in_roster'] = $is_in_roster;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BlueJeansMeetingsRestApi\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BlueJeansMeetingsRestApi\ObjectSerializer::sanitizeForSerialization($this));
    }
}


