# coding: utf-8

"""
    BlueJeans onVideo REST API

     Video That Works Where You Do. This site provides developers access to APIs from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you should be able to quickly integrate **BlueJeans** video administration into your applications.   ## Getting Started Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact [BlueJeans Support](mailto:Support@BlueJeans.com) for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br /> ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. ## About onVideo Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. 

    OpenAPI spec version: 1.0.0
    Contact: brandon@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class GrantCodeScope(object):
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
        'user': 'int',
        'app_permissions': 'list[GrantCodeScopeAppPermissions]',
        'partition_name': 'str',
        'partition': 'Partition',
        'bearer_permissions': 'str',
        'client_id': 'str'
    }

    attribute_map = {
        'user': 'user',
        'app_permissions': 'appPermissions',
        'partition_name': 'partitionName',
        'partition': 'partition',
        'bearer_permissions': 'bearerPermissions',
        'client_id': 'clientId'
    }

    def __init__(self, user=None, app_permissions=None, partition_name=None, partition=None, bearer_permissions=None, client_id=None):
        """
        GrantCodeScope - a model defined in Swagger
        """

        self._user = None
        self._app_permissions = None
        self._partition_name = None
        self._partition = None
        self._bearer_permissions = None
        self._client_id = None

        if user is not None:
          self.user = user
        if app_permissions is not None:
          self.app_permissions = app_permissions
        if partition_name is not None:
          self.partition_name = partition_name
        if partition is not None:
          self.partition = partition
        if bearer_permissions is not None:
          self.bearer_permissions = bearer_permissions
        if client_id is not None:
          self.client_id = client_id

    @property
    def user(self):
        """
        Gets the user of this GrantCodeScope.
        The ID of your user.

        :return: The user of this GrantCodeScope.
        :rtype: int
        """
        return self._user

    @user.setter
    def user(self, user):
        """
        Sets the user of this GrantCodeScope.
        The ID of your user.

        :param user: The user of this GrantCodeScope.
        :type: int
        """

        self._user = user

    @property
    def app_permissions(self):
        """
        Gets the app_permissions of this GrantCodeScope.

        :return: The app_permissions of this GrantCodeScope.
        :rtype: list[GrantCodeScopeAppPermissions]
        """
        return self._app_permissions

    @app_permissions.setter
    def app_permissions(self, app_permissions):
        """
        Sets the app_permissions of this GrantCodeScope.

        :param app_permissions: The app_permissions of this GrantCodeScope.
        :type: list[GrantCodeScopeAppPermissions]
        """

        self._app_permissions = app_permissions

    @property
    def partition_name(self):
        """
        Gets the partition_name of this GrantCodeScope.
        The name of the partition you are on.

        :return: The partition_name of this GrantCodeScope.
        :rtype: str
        """
        return self._partition_name

    @partition_name.setter
    def partition_name(self, partition_name):
        """
        Sets the partition_name of this GrantCodeScope.
        The name of the partition you are on.

        :param partition_name: The partition_name of this GrantCodeScope.
        :type: str
        """

        self._partition_name = partition_name

    @property
    def partition(self):
        """
        Gets the partition of this GrantCodeScope.

        :return: The partition of this GrantCodeScope.
        :rtype: Partition
        """
        return self._partition

    @partition.setter
    def partition(self, partition):
        """
        Sets the partition of this GrantCodeScope.

        :param partition: The partition of this GrantCodeScope.
        :type: Partition
        """

        self._partition = partition

    @property
    def bearer_permissions(self):
        """
        Gets the bearer_permissions of this GrantCodeScope.
        Comma-delimited list of scopes authorized by this token.

        :return: The bearer_permissions of this GrantCodeScope.
        :rtype: str
        """
        return self._bearer_permissions

    @bearer_permissions.setter
    def bearer_permissions(self, bearer_permissions):
        """
        Sets the bearer_permissions of this GrantCodeScope.
        Comma-delimited list of scopes authorized by this token.

        :param bearer_permissions: The bearer_permissions of this GrantCodeScope.
        :type: str
        """

        self._bearer_permissions = bearer_permissions

    @property
    def client_id(self):
        """
        Gets the client_id of this GrantCodeScope.
        The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string.

        :return: The client_id of this GrantCodeScope.
        :rtype: str
        """
        return self._client_id

    @client_id.setter
    def client_id(self, client_id):
        """
        Sets the client_id of this GrantCodeScope.
        The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string.

        :param client_id: The client_id of this GrantCodeScope.
        :type: str
        """

        self._client_id = client_id

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
        if not isinstance(other, GrantCodeScope):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other