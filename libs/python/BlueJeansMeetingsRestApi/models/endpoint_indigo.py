# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class EndpointIndigo(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'id': 'int',
        'callguid': 'str',
        'name': 'str',
        'endpoint': 'str',
        'vendor': 'str',
        'version': 'str',
        'uniq_id': 'str',
        'remote_address': 'str',
        'leader': 'bool',
        'secure_call': 'bool',
        'nat_detected': 'bool',
        'proxy': 'bool',
        'roi_distance': 'float',
        'mpls': 'bool',
        'video_share': 'bool',
        'recording': 'bool',
        'creation_time': 'int',
        'meeting_join_time': 'int',
        'meeting_leave_time': 'int',
        'did_number': 'str',
        'location': 'EndpointIndigoLocation',
        'summary_stats': 'EndpointIndigoSummaryStats',
        'endpoint_attributes1': 'EndpointIndigoEndpointAttributes1',
        'traceroute': 'EndpointIndigoTraceroute',
        'mhtask_stopped': 'bool'
    }

    attribute_map = {
        'id': 'id',
        'callguid': 'callguid',
        'name': 'name',
        'endpoint': 'endpoint',
        'vendor': 'vendor',
        'version': 'version',
        'uniq_id': 'uniqId',
        'remote_address': 'remoteAddress',
        'leader': 'leader',
        'secure_call': 'secureCall',
        'nat_detected': 'natDetected',
        'proxy': 'proxy',
        'roi_distance': 'roiDistance',
        'mpls': 'mpls',
        'video_share': 'videoShare',
        'recording': 'recording',
        'creation_time': 'creationTime',
        'meeting_join_time': 'meetingJoinTime',
        'meeting_leave_time': 'meetingLeaveTime',
        'did_number': 'didNumber',
        'location': 'location',
        'summary_stats': 'summaryStats',
        'endpoint_attributes1': 'endpointAttributes1',
        'traceroute': 'traceroute',
        'mhtask_stopped': 'mhtaskStopped'
    }

    def __init__(self, id=None, callguid=None, name=None, endpoint=None, vendor=None, version=None, uniq_id=None, remote_address=None, leader=None, secure_call=None, nat_detected=None, proxy=None, roi_distance=None, mpls=None, video_share=None, recording=None, creation_time=None, meeting_join_time=None, meeting_leave_time=None, did_number=None, location=None, summary_stats=None, endpoint_attributes1=None, traceroute=None, mhtask_stopped=None):
        """
        EndpointIndigo - a model defined in Swagger
        """

        self._id = None
        self._callguid = None
        self._name = None
        self._endpoint = None
        self._vendor = None
        self._version = None
        self._uniq_id = None
        self._remote_address = None
        self._leader = None
        self._secure_call = None
        self._nat_detected = None
        self._proxy = None
        self._roi_distance = None
        self._mpls = None
        self._video_share = None
        self._recording = None
        self._creation_time = None
        self._meeting_join_time = None
        self._meeting_leave_time = None
        self._did_number = None
        self._location = None
        self._summary_stats = None
        self._endpoint_attributes1 = None
        self._traceroute = None
        self._mhtask_stopped = None

        if id is not None:
          self.id = id
        if callguid is not None:
          self.callguid = callguid
        if name is not None:
          self.name = name
        if endpoint is not None:
          self.endpoint = endpoint
        if vendor is not None:
          self.vendor = vendor
        if version is not None:
          self.version = version
        if uniq_id is not None:
          self.uniq_id = uniq_id
        if remote_address is not None:
          self.remote_address = remote_address
        if leader is not None:
          self.leader = leader
        if secure_call is not None:
          self.secure_call = secure_call
        if nat_detected is not None:
          self.nat_detected = nat_detected
        if proxy is not None:
          self.proxy = proxy
        if roi_distance is not None:
          self.roi_distance = roi_distance
        if mpls is not None:
          self.mpls = mpls
        if video_share is not None:
          self.video_share = video_share
        if recording is not None:
          self.recording = recording
        if creation_time is not None:
          self.creation_time = creation_time
        if meeting_join_time is not None:
          self.meeting_join_time = meeting_join_time
        if meeting_leave_time is not None:
          self.meeting_leave_time = meeting_leave_time
        if did_number is not None:
          self.did_number = did_number
        if location is not None:
          self.location = location
        if summary_stats is not None:
          self.summary_stats = summary_stats
        if endpoint_attributes1 is not None:
          self.endpoint_attributes1 = endpoint_attributes1
        if traceroute is not None:
          self.traceroute = traceroute
        if mhtask_stopped is not None:
          self.mhtask_stopped = mhtask_stopped

    @property
    def id(self):
        """
        Gets the id of this EndpointIndigo.

        :return: The id of this EndpointIndigo.
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this EndpointIndigo.

        :param id: The id of this EndpointIndigo.
        :type: int
        """

        self._id = id

    @property
    def callguid(self):
        """
        Gets the callguid of this EndpointIndigo.

        :return: The callguid of this EndpointIndigo.
        :rtype: str
        """
        return self._callguid

    @callguid.setter
    def callguid(self, callguid):
        """
        Sets the callguid of this EndpointIndigo.

        :param callguid: The callguid of this EndpointIndigo.
        :type: str
        """

        self._callguid = callguid

    @property
    def name(self):
        """
        Gets the name of this EndpointIndigo.

        :return: The name of this EndpointIndigo.
        :rtype: str
        """
        return self._name

    @name.setter
    def name(self, name):
        """
        Sets the name of this EndpointIndigo.

        :param name: The name of this EndpointIndigo.
        :type: str
        """

        self._name = name

    @property
    def endpoint(self):
        """
        Gets the endpoint of this EndpointIndigo.

        :return: The endpoint of this EndpointIndigo.
        :rtype: str
        """
        return self._endpoint

    @endpoint.setter
    def endpoint(self, endpoint):
        """
        Sets the endpoint of this EndpointIndigo.

        :param endpoint: The endpoint of this EndpointIndigo.
        :type: str
        """

        self._endpoint = endpoint

    @property
    def vendor(self):
        """
        Gets the vendor of this EndpointIndigo.

        :return: The vendor of this EndpointIndigo.
        :rtype: str
        """
        return self._vendor

    @vendor.setter
    def vendor(self, vendor):
        """
        Sets the vendor of this EndpointIndigo.

        :param vendor: The vendor of this EndpointIndigo.
        :type: str
        """

        self._vendor = vendor

    @property
    def version(self):
        """
        Gets the version of this EndpointIndigo.

        :return: The version of this EndpointIndigo.
        :rtype: str
        """
        return self._version

    @version.setter
    def version(self, version):
        """
        Sets the version of this EndpointIndigo.

        :param version: The version of this EndpointIndigo.
        :type: str
        """

        self._version = version

    @property
    def uniq_id(self):
        """
        Gets the uniq_id of this EndpointIndigo.

        :return: The uniq_id of this EndpointIndigo.
        :rtype: str
        """
        return self._uniq_id

    @uniq_id.setter
    def uniq_id(self, uniq_id):
        """
        Sets the uniq_id of this EndpointIndigo.

        :param uniq_id: The uniq_id of this EndpointIndigo.
        :type: str
        """

        self._uniq_id = uniq_id

    @property
    def remote_address(self):
        """
        Gets the remote_address of this EndpointIndigo.

        :return: The remote_address of this EndpointIndigo.
        :rtype: str
        """
        return self._remote_address

    @remote_address.setter
    def remote_address(self, remote_address):
        """
        Sets the remote_address of this EndpointIndigo.

        :param remote_address: The remote_address of this EndpointIndigo.
        :type: str
        """

        self._remote_address = remote_address

    @property
    def leader(self):
        """
        Gets the leader of this EndpointIndigo.

        :return: The leader of this EndpointIndigo.
        :rtype: bool
        """
        return self._leader

    @leader.setter
    def leader(self, leader):
        """
        Sets the leader of this EndpointIndigo.

        :param leader: The leader of this EndpointIndigo.
        :type: bool
        """

        self._leader = leader

    @property
    def secure_call(self):
        """
        Gets the secure_call of this EndpointIndigo.

        :return: The secure_call of this EndpointIndigo.
        :rtype: bool
        """
        return self._secure_call

    @secure_call.setter
    def secure_call(self, secure_call):
        """
        Sets the secure_call of this EndpointIndigo.

        :param secure_call: The secure_call of this EndpointIndigo.
        :type: bool
        """

        self._secure_call = secure_call

    @property
    def nat_detected(self):
        """
        Gets the nat_detected of this EndpointIndigo.

        :return: The nat_detected of this EndpointIndigo.
        :rtype: bool
        """
        return self._nat_detected

    @nat_detected.setter
    def nat_detected(self, nat_detected):
        """
        Sets the nat_detected of this EndpointIndigo.

        :param nat_detected: The nat_detected of this EndpointIndigo.
        :type: bool
        """

        self._nat_detected = nat_detected

    @property
    def proxy(self):
        """
        Gets the proxy of this EndpointIndigo.

        :return: The proxy of this EndpointIndigo.
        :rtype: bool
        """
        return self._proxy

    @proxy.setter
    def proxy(self, proxy):
        """
        Sets the proxy of this EndpointIndigo.

        :param proxy: The proxy of this EndpointIndigo.
        :type: bool
        """

        self._proxy = proxy

    @property
    def roi_distance(self):
        """
        Gets the roi_distance of this EndpointIndigo.

        :return: The roi_distance of this EndpointIndigo.
        :rtype: float
        """
        return self._roi_distance

    @roi_distance.setter
    def roi_distance(self, roi_distance):
        """
        Sets the roi_distance of this EndpointIndigo.

        :param roi_distance: The roi_distance of this EndpointIndigo.
        :type: float
        """

        self._roi_distance = roi_distance

    @property
    def mpls(self):
        """
        Gets the mpls of this EndpointIndigo.

        :return: The mpls of this EndpointIndigo.
        :rtype: bool
        """
        return self._mpls

    @mpls.setter
    def mpls(self, mpls):
        """
        Sets the mpls of this EndpointIndigo.

        :param mpls: The mpls of this EndpointIndigo.
        :type: bool
        """

        self._mpls = mpls

    @property
    def video_share(self):
        """
        Gets the video_share of this EndpointIndigo.

        :return: The video_share of this EndpointIndigo.
        :rtype: bool
        """
        return self._video_share

    @video_share.setter
    def video_share(self, video_share):
        """
        Sets the video_share of this EndpointIndigo.

        :param video_share: The video_share of this EndpointIndigo.
        :type: bool
        """

        self._video_share = video_share

    @property
    def recording(self):
        """
        Gets the recording of this EndpointIndigo.

        :return: The recording of this EndpointIndigo.
        :rtype: bool
        """
        return self._recording

    @recording.setter
    def recording(self, recording):
        """
        Sets the recording of this EndpointIndigo.

        :param recording: The recording of this EndpointIndigo.
        :type: bool
        """

        self._recording = recording

    @property
    def creation_time(self):
        """
        Gets the creation_time of this EndpointIndigo.

        :return: The creation_time of this EndpointIndigo.
        :rtype: int
        """
        return self._creation_time

    @creation_time.setter
    def creation_time(self, creation_time):
        """
        Sets the creation_time of this EndpointIndigo.

        :param creation_time: The creation_time of this EndpointIndigo.
        :type: int
        """

        self._creation_time = creation_time

    @property
    def meeting_join_time(self):
        """
        Gets the meeting_join_time of this EndpointIndigo.

        :return: The meeting_join_time of this EndpointIndigo.
        :rtype: int
        """
        return self._meeting_join_time

    @meeting_join_time.setter
    def meeting_join_time(self, meeting_join_time):
        """
        Sets the meeting_join_time of this EndpointIndigo.

        :param meeting_join_time: The meeting_join_time of this EndpointIndigo.
        :type: int
        """

        self._meeting_join_time = meeting_join_time

    @property
    def meeting_leave_time(self):
        """
        Gets the meeting_leave_time of this EndpointIndigo.

        :return: The meeting_leave_time of this EndpointIndigo.
        :rtype: int
        """
        return self._meeting_leave_time

    @meeting_leave_time.setter
    def meeting_leave_time(self, meeting_leave_time):
        """
        Sets the meeting_leave_time of this EndpointIndigo.

        :param meeting_leave_time: The meeting_leave_time of this EndpointIndigo.
        :type: int
        """

        self._meeting_leave_time = meeting_leave_time

    @property
    def did_number(self):
        """
        Gets the did_number of this EndpointIndigo.

        :return: The did_number of this EndpointIndigo.
        :rtype: str
        """
        return self._did_number

    @did_number.setter
    def did_number(self, did_number):
        """
        Sets the did_number of this EndpointIndigo.

        :param did_number: The did_number of this EndpointIndigo.
        :type: str
        """

        self._did_number = did_number

    @property
    def location(self):
        """
        Gets the location of this EndpointIndigo.

        :return: The location of this EndpointIndigo.
        :rtype: EndpointIndigoLocation
        """
        return self._location

    @location.setter
    def location(self, location):
        """
        Sets the location of this EndpointIndigo.

        :param location: The location of this EndpointIndigo.
        :type: EndpointIndigoLocation
        """

        self._location = location

    @property
    def summary_stats(self):
        """
        Gets the summary_stats of this EndpointIndigo.

        :return: The summary_stats of this EndpointIndigo.
        :rtype: EndpointIndigoSummaryStats
        """
        return self._summary_stats

    @summary_stats.setter
    def summary_stats(self, summary_stats):
        """
        Sets the summary_stats of this EndpointIndigo.

        :param summary_stats: The summary_stats of this EndpointIndigo.
        :type: EndpointIndigoSummaryStats
        """

        self._summary_stats = summary_stats

    @property
    def endpoint_attributes1(self):
        """
        Gets the endpoint_attributes1 of this EndpointIndigo.

        :return: The endpoint_attributes1 of this EndpointIndigo.
        :rtype: EndpointIndigoEndpointAttributes1
        """
        return self._endpoint_attributes1

    @endpoint_attributes1.setter
    def endpoint_attributes1(self, endpoint_attributes1):
        """
        Sets the endpoint_attributes1 of this EndpointIndigo.

        :param endpoint_attributes1: The endpoint_attributes1 of this EndpointIndigo.
        :type: EndpointIndigoEndpointAttributes1
        """

        self._endpoint_attributes1 = endpoint_attributes1

    @property
    def traceroute(self):
        """
        Gets the traceroute of this EndpointIndigo.

        :return: The traceroute of this EndpointIndigo.
        :rtype: EndpointIndigoTraceroute
        """
        return self._traceroute

    @traceroute.setter
    def traceroute(self, traceroute):
        """
        Sets the traceroute of this EndpointIndigo.

        :param traceroute: The traceroute of this EndpointIndigo.
        :type: EndpointIndigoTraceroute
        """

        self._traceroute = traceroute

    @property
    def mhtask_stopped(self):
        """
        Gets the mhtask_stopped of this EndpointIndigo.

        :return: The mhtask_stopped of this EndpointIndigo.
        :rtype: bool
        """
        return self._mhtask_stopped

    @mhtask_stopped.setter
    def mhtask_stopped(self, mhtask_stopped):
        """
        Sets the mhtask_stopped of this EndpointIndigo.

        :param mhtask_stopped: The mhtask_stopped of this EndpointIndigo.
        :type: bool
        """

        self._mhtask_stopped = mhtask_stopped

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, EndpointIndigo):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
