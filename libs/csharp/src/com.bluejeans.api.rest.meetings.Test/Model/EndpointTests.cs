/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */


using NUnit.Framework;

using System;
using System.Linq;
using System.IO;
using System.Collections.Generic;
using com.bluejeans.api.rest.meetings.Api;
using com.bluejeans.api.rest.meetings.Model;
using com.bluejeans.api.rest.meetings.Client;
using System.Reflection;

namespace com.bluejeans.api.rest.meetings.Test
{
    /// <summary>
    ///  Class for testing Endpoint
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class EndpointTests
    {
        // TODO uncomment below to declare an instance variable for Endpoint
        //private Endpoint instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            // TODO uncomment below to create an instance of Endpoint
            //instance = new Endpoint();
        }

        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of Endpoint
        /// </summary>
        [Test]
        public void EndpointInstanceTest()
        {
            // TODO uncomment below to test "IsInstanceOfType" Endpoint
            //Assert.IsInstanceOfType<Endpoint> (instance, "variable 'instance' is a Endpoint");
        }

        /// <summary>
        /// Test the property 'EcMode'
        /// </summary>
        [Test]
        public void EcModeTest()
        {
            // TODO unit test for the property 'EcMode'
        }
        /// <summary>
        /// Test the property 'Creationtime'
        /// </summary>
        [Test]
        public void CreationtimeTest()
        {
            // TODO unit test for the property 'Creationtime'
        }
        /// <summary>
        /// Test the property 'AudioRemoteRtcpAddress'
        /// </summary>
        [Test]
        public void AudioRemoteRtcpAddressTest()
        {
            // TODO unit test for the property 'AudioRemoteRtcpAddress'
        }
        /// <summary>
        /// Test the property 'VideoSendCodec'
        /// </summary>
        [Test]
        public void VideoSendCodecTest()
        {
            // TODO unit test for the property 'VideoSendCodec'
        }
        /// <summary>
        /// Test the property 'AudioPlayID'
        /// </summary>
        [Test]
        public void AudioPlayIDTest()
        {
            // TODO unit test for the property 'AudioPlayID'
        }
        /// <summary>
        /// Test the property 'CallQualityRecv'
        /// </summary>
        [Test]
        public void CallQualityRecvTest()
        {
            // TODO unit test for the property 'CallQualityRecv'
        }
        /// <summary>
        /// Test the property 'SessionOut'
        /// </summary>
        [Test]
        public void SessionOutTest()
        {
            // TODO unit test for the property 'SessionOut'
        }
        /// <summary>
        /// Test the property 'AudioLocalAddress'
        /// </summary>
        [Test]
        public void AudioLocalAddressTest()
        {
            // TODO unit test for the property 'AudioLocalAddress'
        }
        /// <summary>
        /// Test the property 'Meetingid'
        /// </summary>
        [Test]
        public void MeetingidTest()
        {
            // TODO unit test for the property 'Meetingid'
        }
        /// <summary>
        /// Test the property 'VideoSendWidth'
        /// </summary>
        [Test]
        public void VideoSendWidthTest()
        {
            // TODO unit test for the property 'VideoSendWidth'
        }
        /// <summary>
        /// Test the property 'CallQualitySend'
        /// </summary>
        [Test]
        public void CallQualitySendTest()
        {
            // TODO unit test for the property 'CallQualitySend'
        }
        /// <summary>
        /// Test the property 'Mhaddress'
        /// </summary>
        [Test]
        public void MhaddressTest()
        {
            // TODO unit test for the property 'Mhaddress'
        }
        /// <summary>
        /// Test the property 'RDCControlleeCapable'
        /// </summary>
        [Test]
        public void RDCControlleeCapableTest()
        {
            // TODO unit test for the property 'RDCControlleeCapable'
        }
        /// <summary>
        /// Test the property 'AudioCapName'
        /// </summary>
        [Test]
        public void AudioCapNameTest()
        {
            // TODO unit test for the property 'AudioCapName'
        }
        /// <summary>
        /// Test the property 'ProxyInfo'
        /// </summary>
        [Test]
        public void ProxyInfoTest()
        {
            // TODO unit test for the property 'ProxyInfo'
        }
        /// <summary>
        /// Test the property 'AudioSendCodec'
        /// </summary>
        [Test]
        public void AudioSendCodecTest()
        {
            // TODO unit test for the property 'AudioSendCodec'
        }
        /// <summary>
        /// Test the property 'Vendor'
        /// </summary>
        [Test]
        public void VendorTest()
        {
            // TODO unit test for the property 'Vendor'
        }
        /// <summary>
        /// Test the property 'VideoRecvWidth'
        /// </summary>
        [Test]
        public void VideoRecvWidthTest()
        {
            // TODO unit test for the property 'VideoRecvWidth'
        }
        /// <summary>
        /// Test the property 'Conaddress'
        /// </summary>
        [Test]
        public void ConaddressTest()
        {
            // TODO unit test for the property 'Conaddress'
        }
        /// <summary>
        /// Test the property 'TalkDetected'
        /// </summary>
        [Test]
        public void TalkDetectedTest()
        {
            // TODO unit test for the property 'TalkDetected'
        }
        /// <summary>
        /// Test the property 'SubLayout'
        /// </summary>
        [Test]
        public void SubLayoutTest()
        {
            // TODO unit test for the property 'SubLayout'
        }
        /// <summary>
        /// Test the property 'AudioRtcpRelay'
        /// </summary>
        [Test]
        public void AudioRtcpRelayTest()
        {
            // TODO unit test for the property 'AudioRtcpRelay'
        }
        /// <summary>
        /// Test the property 'AudioRecvLocalMute'
        /// </summary>
        [Test]
        public void AudioRecvLocalMuteTest()
        {
            // TODO unit test for the property 'AudioRecvLocalMute'
        }
        /// <summary>
        /// Test the property 'Name'
        /// </summary>
        [Test]
        public void NameTest()
        {
            // TODO unit test for the property 'Name'
        }
        /// <summary>
        /// Test the property 'VideoLocalAddress'
        /// </summary>
        [Test]
        public void VideoLocalAddressTest()
        {
            // TODO unit test for the property 'VideoLocalAddress'
        }
        /// <summary>
        /// Test the property 'AudioLocalRtcpAddress'
        /// </summary>
        [Test]
        public void AudioLocalRtcpAddressTest()
        {
            // TODO unit test for the property 'AudioLocalRtcpAddress'
        }
        /// <summary>
        /// Test the property 'ContentRtpRelay'
        /// </summary>
        [Test]
        public void ContentRtpRelayTest()
        {
            // TODO unit test for the property 'ContentRtpRelay'
        }
        /// <summary>
        /// Test the property 'ContentLocalRtcpAddress'
        /// </summary>
        [Test]
        public void ContentLocalRtcpAddressTest()
        {
            // TODO unit test for the property 'ContentLocalRtcpAddress'
        }
        /// <summary>
        /// Test the property 'RemoteConnectionCount'
        /// </summary>
        [Test]
        public void RemoteConnectionCountTest()
        {
            // TODO unit test for the property 'RemoteConnectionCount'
        }
        /// <summary>
        /// Test the property 'Callrate'
        /// </summary>
        [Test]
        public void CallrateTest()
        {
            // TODO unit test for the property 'Callrate'
        }
        /// <summary>
        /// Test the property 'MixerGuid'
        /// </summary>
        [Test]
        public void MixerGuidTest()
        {
            // TODO unit test for the property 'MixerGuid'
        }
        /// <summary>
        /// Test the property 'Transport'
        /// </summary>
        [Test]
        public void TransportTest()
        {
            // TODO unit test for the property 'Transport'
        }
        /// <summary>
        /// Test the property 'AudioCapSelectID'
        /// </summary>
        [Test]
        public void AudioCapSelectIDTest()
        {
            // TODO unit test for the property 'AudioCapSelectID'
        }
        /// <summary>
        /// Test the property 'CountryCode'
        /// </summary>
        [Test]
        public void CountryCodeTest()
        {
            // TODO unit test for the property 'CountryCode'
        }
        /// <summary>
        /// Test the property 'RDCControllerCapable'
        /// </summary>
        [Test]
        public void RDCControllerCapableTest()
        {
            // TODO unit test for the property 'RDCControllerCapable'
        }
        /// <summary>
        /// Test the property 'Pairedname'
        /// </summary>
        [Test]
        public void PairednameTest()
        {
            // TODO unit test for the property 'Pairedname'
        }
        /// <summary>
        /// Test the property 'VideoRtcpRelay'
        /// </summary>
        [Test]
        public void VideoRtcpRelayTest()
        {
            // TODO unit test for the property 'VideoRtcpRelay'
        }
        /// <summary>
        /// Test the property 'EndpointCpuParams'
        /// </summary>
        [Test]
        public void EndpointCpuParamsTest()
        {
            // TODO unit test for the property 'EndpointCpuParams'
        }
        /// <summary>
        /// Test the property 'VideoRemoteAddress'
        /// </summary>
        [Test]
        public void VideoRemoteAddressTest()
        {
            // TODO unit test for the property 'VideoRemoteAddress'
        }
        /// <summary>
        /// Test the property 'Version'
        /// </summary>
        [Test]
        public void VersionTest()
        {
            // TODO unit test for the property 'Version'
        }
        /// <summary>
        /// Test the property 'ContentRecv'
        /// </summary>
        [Test]
        public void ContentRecvTest()
        {
            // TODO unit test for the property 'ContentRecv'
        }
        /// <summary>
        /// Test the property 'LocalName'
        /// </summary>
        [Test]
        public void LocalNameTest()
        {
            // TODO unit test for the property 'LocalName'
        }
        /// <summary>
        /// Test the property 'BJNUserId'
        /// </summary>
        [Test]
        public void BJNUserIdTest()
        {
            // TODO unit test for the property 'BJNUserId'
        }
        /// <summary>
        /// Test the property 'ContentRemoteAddress'
        /// </summary>
        [Test]
        public void ContentRemoteAddressTest()
        {
            // TODO unit test for the property 'ContentRemoteAddress'
        }
        /// <summary>
        /// Test the property 'AudioSend'
        /// </summary>
        [Test]
        public void AudioSendTest()
        {
            // TODO unit test for the property 'AudioSend'
        }
        /// <summary>
        /// Test the property 'ParticipantDTMFMenus'
        /// </summary>
        [Test]
        public void ParticipantDTMFMenusTest()
        {
            // TODO unit test for the property 'ParticipantDTMFMenus'
        }
        /// <summary>
        /// Test the property 'VideoRtcpTranspor'
        /// </summary>
        [Test]
        public void VideoRtcpTransporTest()
        {
            // TODO unit test for the property 'VideoRtcpTranspor'
        }
        /// <summary>
        /// Test the property 'AudioRtcpTransport'
        /// </summary>
        [Test]
        public void AudioRtcpTransportTest()
        {
            // TODO unit test for the property 'AudioRtcpTransport'
        }
        /// <summary>
        /// Test the property 'RelayNodeId'
        /// </summary>
        [Test]
        public void RelayNodeIdTest()
        {
            // TODO unit test for the property 'RelayNodeId'
        }
        /// <summary>
        /// Test the property 'ContentRemoteRtcpAddress'
        /// </summary>
        [Test]
        public void ContentRemoteRtcpAddressTest()
        {
            // TODO unit test for the property 'ContentRemoteRtcpAddress'
        }
        /// <summary>
        /// Test the property 'AudioRtpRelay'
        /// </summary>
        [Test]
        public void AudioRtpRelayTest()
        {
            // TODO unit test for the property 'AudioRtpRelay'
        }
        /// <summary>
        /// Test the property 'VideoRtpTransport'
        /// </summary>
        [Test]
        public void VideoRtpTransportTest()
        {
            // TODO unit test for the property 'VideoRtpTransport'
        }
        /// <summary>
        /// Test the property 'ContentRecvLocalMute'
        /// </summary>
        [Test]
        public void ContentRecvLocalMuteTest()
        {
            // TODO unit test for the property 'ContentRecvLocalMute'
        }
        /// <summary>
        /// Test the property 'Layout'
        /// </summary>
        [Test]
        public void LayoutTest()
        {
            // TODO unit test for the property 'Layout'
        }
        /// <summary>
        /// Test the property 'ContentSend'
        /// </summary>
        [Test]
        public void ContentSendTest()
        {
            // TODO unit test for the property 'ContentSend'
        }
        /// <summary>
        /// Test the property 'Remoteaddress'
        /// </summary>
        [Test]
        public void RemoteaddressTest()
        {
            // TODO unit test for the property 'Remoteaddress'
        }
        /// <summary>
        /// Test the property 'MeetingGuid'
        /// </summary>
        [Test]
        public void MeetingGuidTest()
        {
            // TODO unit test for the property 'MeetingGuid'
        }
        /// <summary>
        /// Test the property 'Connecttime'
        /// </summary>
        [Test]
        public void ConnecttimeTest()
        {
            // TODO unit test for the property 'Connecttime'
        }
        /// <summary>
        /// Test the property 'Localaddress'
        /// </summary>
        [Test]
        public void LocaladdressTest()
        {
            // TODO unit test for the property 'Localaddress'
        }
        /// <summary>
        /// Test the property 'AudioRemoteAddress'
        /// </summary>
        [Test]
        public void AudioRemoteAddressTest()
        {
            // TODO unit test for the property 'AudioRemoteAddress'
        }
        /// <summary>
        /// Test the property 'BondedAudioGuid'
        /// </summary>
        [Test]
        public void BondedAudioGuidTest()
        {
            // TODO unit test for the property 'BondedAudioGuid'
        }
        /// <summary>
        /// Test the property 'AudioRecvRemoteMute'
        /// </summary>
        [Test]
        public void AudioRecvRemoteMuteTest()
        {
            // TODO unit test for the property 'AudioRecvRemoteMute'
        }
        /// <summary>
        /// Test the property 'SessionOutRelay'
        /// </summary>
        [Test]
        public void SessionOutRelayTest()
        {
            // TODO unit test for the property 'SessionOutRelay'
        }
        /// <summary>
        /// Test the property 'Leader'
        /// </summary>
        [Test]
        public void LeaderTest()
        {
            // TODO unit test for the property 'Leader'
        }
        /// <summary>
        /// Test the property 'ContentLocalAddress'
        /// </summary>
        [Test]
        public void ContentLocalAddressTest()
        {
            // TODO unit test for the property 'ContentLocalAddress'
        }
        /// <summary>
        /// Test the property 'MovieCapable'
        /// </summary>
        [Test]
        public void MovieCapableTest()
        {
            // TODO unit test for the property 'MovieCapable'
        }
        /// <summary>
        /// Test the property 'VideoRecvLocalMute'
        /// </summary>
        [Test]
        public void VideoRecvLocalMuteTest()
        {
            // TODO unit test for the property 'VideoRecvLocalMute'
        }
        /// <summary>
        /// Test the property 'ContentRtpTransport'
        /// </summary>
        [Test]
        public void ContentRtpTransportTest()
        {
            // TODO unit test for the property 'ContentRtpTransport'
        }
        /// <summary>
        /// Test the property 'RDCVersion'
        /// </summary>
        [Test]
        public void RDCVersionTest()
        {
            // TODO unit test for the property 'RDCVersion'
        }
        /// <summary>
        /// Test the property 'AudioRecv'
        /// </summary>
        [Test]
        public void AudioRecvTest()
        {
            // TODO unit test for the property 'AudioRecv'
        }
        /// <summary>
        /// Test the property 'ContentRelayServer'
        /// </summary>
        [Test]
        public void ContentRelayServerTest()
        {
            // TODO unit test for the property 'ContentRelayServer'
        }
        /// <summary>
        /// Test the property 'VideoRecv'
        /// </summary>
        [Test]
        public void VideoRecvTest()
        {
            // TODO unit test for the property 'VideoRecv'
        }
        /// <summary>
        /// Test the property 'Visibility'
        /// </summary>
        [Test]
        public void VisibilityTest()
        {
            // TODO unit test for the property 'Visibility'
        }
        /// <summary>
        /// Test the property 'Sessionid'
        /// </summary>
        [Test]
        public void SessionidTest()
        {
            // TODO unit test for the property 'Sessionid'
        }
        /// <summary>
        /// Test the property 'ContentRtcpRelay'
        /// </summary>
        [Test]
        public void ContentRtcpRelayTest()
        {
            // TODO unit test for the property 'ContentRtcpRelay'
        }
        /// <summary>
        /// Test the property 'Locales'
        /// </summary>
        [Test]
        public void LocalesTest()
        {
            // TODO unit test for the property 'Locales'
        }
        /// <summary>
        /// Test the property 'Medaddress'
        /// </summary>
        [Test]
        public void MedaddressTest()
        {
            // TODO unit test for the property 'Medaddress'
        }
        /// <summary>
        /// Test the property 'HtmlLayoutGuid'
        /// </summary>
        [Test]
        public void HtmlLayoutGuidTest()
        {
            // TODO unit test for the property 'HtmlLayoutGuid'
        }
        /// <summary>
        /// Test the property '_Endpoint'
        /// </summary>
        [Test]
        public void _EndpointTest()
        {
            // TODO unit test for the property '_Endpoint'
        }
        /// <summary>
        /// Test the property 'VideoDrop'
        /// </summary>
        [Test]
        public void VideoDropTest()
        {
            // TODO unit test for the property 'VideoDrop'
        }
        /// <summary>
        /// Test the property 'ContentRtcpTransport'
        /// </summary>
        [Test]
        public void ContentRtcpTransportTest()
        {
            // TODO unit test for the property 'ContentRtcpTransport'
        }
        /// <summary>
        /// Test the property 'VideoRemoteRtcpAddress'
        /// </summary>
        [Test]
        public void VideoRemoteRtcpAddressTest()
        {
            // TODO unit test for the property 'VideoRemoteRtcpAddress'
        }
        /// <summary>
        /// Test the property 'VideoRtpRelay'
        /// </summary>
        [Test]
        public void VideoRtpRelayTest()
        {
            // TODO unit test for the property 'VideoRtpRelay'
        }
        /// <summary>
        /// Test the property 'Mixaddress'
        /// </summary>
        [Test]
        public void MixaddressTest()
        {
            // TODO unit test for the property 'Mixaddress'
        }
        /// <summary>
        /// Test the property 'SIPHTTPProxyTransport'
        /// </summary>
        [Test]
        public void SIPHTTPProxyTransportTest()
        {
            // TODO unit test for the property 'SIPHTTPProxyTransport'
        }
        /// <summary>
        /// Test the property 'VideoRecvCodec'
        /// </summary>
        [Test]
        public void VideoRecvCodecTest()
        {
            // TODO unit test for the property 'VideoRecvCodec'
        }
        /// <summary>
        /// Test the property 'AudioRecvCodec'
        /// </summary>
        [Test]
        public void AudioRecvCodecTest()
        {
            // TODO unit test for the property 'AudioRecvCodec'
        }
        /// <summary>
        /// Test the property 'SessionIn'
        /// </summary>
        [Test]
        public void SessionInTest()
        {
            // TODO unit test for the property 'SessionIn'
        }
        /// <summary>
        /// Test the property 'BondedVideoGuid'
        /// </summary>
        [Test]
        public void BondedVideoGuidTest()
        {
            // TODO unit test for the property 'BondedVideoGuid'
        }
        /// <summary>
        /// Test the property 'CallQuality'
        /// </summary>
        [Test]
        public void CallQualityTest()
        {
            // TODO unit test for the property 'CallQuality'
        }
        /// <summary>
        /// Test the property 'Meetingjointime'
        /// </summary>
        [Test]
        public void MeetingjointimeTest()
        {
            // TODO unit test for the property 'Meetingjointime'
        }
        /// <summary>
        /// Test the property 'SessionInRelay'
        /// </summary>
        [Test]
        public void SessionInRelayTest()
        {
            // TODO unit test for the property 'SessionInRelay'
        }
        /// <summary>
        /// Test the property 'Pairedremoteaddress'
        /// </summary>
        [Test]
        public void PairedremoteaddressTest()
        {
            // TODO unit test for the property 'Pairedremoteaddress'
        }
        /// <summary>
        /// Test the property 'VideoSendHeight'
        /// </summary>
        [Test]
        public void VideoSendHeightTest()
        {
            // TODO unit test for the property 'VideoSendHeight'
        }
        /// <summary>
        /// Test the property 'VideoRecvHeight'
        /// </summary>
        [Test]
        public void VideoRecvHeightTest()
        {
            // TODO unit test for the property 'VideoRecvHeight'
        }
        /// <summary>
        /// Test the property 'SecureCall'
        /// </summary>
        [Test]
        public void SecureCallTest()
        {
            // TODO unit test for the property 'SecureCall'
        }
        /// <summary>
        /// Test the property 'VideoLocalRtcpAddress'
        /// </summary>
        [Test]
        public void VideoLocalRtcpAddressTest()
        {
            // TODO unit test for the property 'VideoLocalRtcpAddress'
        }
        /// <summary>
        /// Test the property 'AudioPlayName'
        /// </summary>
        [Test]
        public void AudioPlayNameTest()
        {
            // TODO unit test for the property 'AudioPlayName'
        }
        /// <summary>
        /// Test the property 'VideoCapID'
        /// </summary>
        [Test]
        public void VideoCapIDTest()
        {
            // TODO unit test for the property 'VideoCapID'
        }
        /// <summary>
        /// Test the property 'AudioRtpTransport'
        /// </summary>
        [Test]
        public void AudioRtpTransportTest()
        {
            // TODO unit test for the property 'AudioRtpTransport'
        }
        /// <summary>
        /// Test the property 'MeetingInfoMode'
        /// </summary>
        [Test]
        public void MeetingInfoModeTest()
        {
            // TODO unit test for the property 'MeetingInfoMode'
        }
        /// <summary>
        /// Test the property 'Callhostname'
        /// </summary>
        [Test]
        public void CallhostnameTest()
        {
            // TODO unit test for the property 'Callhostname'
        }
        /// <summary>
        /// Test the property 'Callguid'
        /// </summary>
        [Test]
        public void CallguidTest()
        {
            // TODO unit test for the property 'Callguid'
        }
        /// <summary>
        /// Test the property 'AudioCapID'
        /// </summary>
        [Test]
        public void AudioCapIDTest()
        {
            // TODO unit test for the property 'AudioCapID'
        }
        /// <summary>
        /// Test the property 'VideoSend'
        /// </summary>
        [Test]
        public void VideoSendTest()
        {
            // TODO unit test for the property 'VideoSend'
        }
        /// <summary>
        /// Test the property 'ContentRecvCodec'
        /// </summary>
        [Test]
        public void ContentRecvCodecTest()
        {
            // TODO unit test for the property 'ContentRecvCodec'
        }
        /// <summary>
        /// Test the property 'SessionRelay'
        /// </summary>
        [Test]
        public void SessionRelayTest()
        {
            // TODO unit test for the property 'SessionRelay'
        }
        /// <summary>
        /// Test the property 'VideoRecvRemoteMute'
        /// </summary>
        [Test]
        public void VideoRecvRemoteMuteTest()
        {
            // TODO unit test for the property 'VideoRecvRemoteMute'
        }
        /// <summary>
        /// Test the property 'Id'
        /// </summary>
        [Test]
        public void IdTest()
        {
            // TODO unit test for the property 'Id'
        }
        /// <summary>
        /// Test the property 'BondedVideoName'
        /// </summary>
        [Test]
        public void BondedVideoNameTest()
        {
            // TODO unit test for the property 'BondedVideoName'
        }
        /// <summary>
        /// Test the property 'IsInRoster'
        /// </summary>
        [Test]
        public void IsInRosterTest()
        {
            // TODO unit test for the property 'IsInRoster'
        }

    }

}
