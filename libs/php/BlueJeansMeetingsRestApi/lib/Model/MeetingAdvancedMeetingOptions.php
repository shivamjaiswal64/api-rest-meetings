<?php
/**
 * MeetingAdvancedMeetingOptions
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
 * MeetingAdvancedMeetingOptions Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansMeetingsRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeetingAdvancedMeetingOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Meeting_advancedMeetingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_record' => 'bool',
        'mute_participants_on_entry' => 'bool',
        'encryption_type' => 'string',
        'moderator_less' => 'bool',
        'video_best_fit' => 'bool',
        'disallow_chat' => 'bool',
        'publish_meeting' => 'bool',
        'show_all_attendees_in_meeting_invite' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_record' => null,
        'mute_participants_on_entry' => null,
        'encryption_type' => null,
        'moderator_less' => null,
        'video_best_fit' => null,
        'disallow_chat' => null,
        'publish_meeting' => null,
        'show_all_attendees_in_meeting_invite' => null
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
        'auto_record' => 'autoRecord',
        'mute_participants_on_entry' => 'muteParticipantsOnEntry',
        'encryption_type' => 'encryptionType',
        'moderator_less' => 'moderatorLess',
        'video_best_fit' => 'videoBestFit',
        'disallow_chat' => 'disallowChat',
        'publish_meeting' => 'publishMeeting',
        'show_all_attendees_in_meeting_invite' => 'showAllAttendeesInMeetingInvite'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'auto_record' => 'setAutoRecord',
        'mute_participants_on_entry' => 'setMuteParticipantsOnEntry',
        'encryption_type' => 'setEncryptionType',
        'moderator_less' => 'setModeratorLess',
        'video_best_fit' => 'setVideoBestFit',
        'disallow_chat' => 'setDisallowChat',
        'publish_meeting' => 'setPublishMeeting',
        'show_all_attendees_in_meeting_invite' => 'setShowAllAttendeesInMeetingInvite'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'auto_record' => 'getAutoRecord',
        'mute_participants_on_entry' => 'getMuteParticipantsOnEntry',
        'encryption_type' => 'getEncryptionType',
        'moderator_less' => 'getModeratorLess',
        'video_best_fit' => 'getVideoBestFit',
        'disallow_chat' => 'getDisallowChat',
        'publish_meeting' => 'getPublishMeeting',
        'show_all_attendees_in_meeting_invite' => 'getShowAllAttendeesInMeetingInvite'
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

    const ENCRYPTION_TYPE_NO_ENCRYPTION = 'NO_ENCRYPTION';
    const ENCRYPTION_TYPE_ENCRYPTED_ONLY = 'ENCRYPTED_ONLY';
    const ENCRYPTION_TYPE_ENCRYPTED_OR_PSTN_ONLY = 'ENCRYPTED_OR_PSTN_ONLY';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEncryptionTypeAllowableValues()
    {
        return [
            self::ENCRYPTION_TYPE_NO_ENCRYPTION,
            self::ENCRYPTION_TYPE_ENCRYPTED_ONLY,
            self::ENCRYPTION_TYPE_ENCRYPTED_OR_PSTN_ONLY,
        ];
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
        $this->container['auto_record'] = isset($data['auto_record']) ? $data['auto_record'] : null;
        $this->container['mute_participants_on_entry'] = isset($data['mute_participants_on_entry']) ? $data['mute_participants_on_entry'] : null;
        $this->container['encryption_type'] = isset($data['encryption_type']) ? $data['encryption_type'] : null;
        $this->container['moderator_less'] = isset($data['moderator_less']) ? $data['moderator_less'] : null;
        $this->container['video_best_fit'] = isset($data['video_best_fit']) ? $data['video_best_fit'] : null;
        $this->container['disallow_chat'] = isset($data['disallow_chat']) ? $data['disallow_chat'] : null;
        $this->container['publish_meeting'] = isset($data['publish_meeting']) ? $data['publish_meeting'] : null;
        $this->container['show_all_attendees_in_meeting_invite'] = isset($data['show_all_attendees_in_meeting_invite']) ? $data['show_all_attendees_in_meeting_invite'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getEncryptionTypeAllowableValues();
        if (!in_array($this->container['encryption_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'encryption_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getEncryptionTypeAllowableValues();
        if (!in_array($this->container['encryption_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets auto_record
     * @return bool
     */
    public function getAutoRecord()
    {
        return $this->container['auto_record'];
    }

    /**
     * Sets auto_record
     * @param bool $auto_record
     * @return $this
     */
    public function setAutoRecord($auto_record)
    {
        $this->container['auto_record'] = $auto_record;

        return $this;
    }

    /**
     * Gets mute_participants_on_entry
     * @return bool
     */
    public function getMuteParticipantsOnEntry()
    {
        return $this->container['mute_participants_on_entry'];
    }

    /**
     * Sets mute_participants_on_entry
     * @param bool $mute_participants_on_entry
     * @return $this
     */
    public function setMuteParticipantsOnEntry($mute_participants_on_entry)
    {
        $this->container['mute_participants_on_entry'] = $mute_participants_on_entry;

        return $this;
    }

    /**
     * Gets encryption_type
     * @return string
     */
    public function getEncryptionType()
    {
        return $this->container['encryption_type'];
    }

    /**
     * Sets encryption_type
     * @param string $encryption_type
     * @return $this
     */
    public function setEncryptionType($encryption_type)
    {
        $allowed_values = $this->getEncryptionTypeAllowableValues();
        if (!is_null($encryption_type) && !in_array($encryption_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'encryption_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['encryption_type'] = $encryption_type;

        return $this;
    }

    /**
     * Gets moderator_less
     * @return bool
     */
    public function getModeratorLess()
    {
        return $this->container['moderator_less'];
    }

    /**
     * Sets moderator_less
     * @param bool $moderator_less
     * @return $this
     */
    public function setModeratorLess($moderator_less)
    {
        $this->container['moderator_less'] = $moderator_less;

        return $this;
    }

    /**
     * Gets video_best_fit
     * @return bool
     */
    public function getVideoBestFit()
    {
        return $this->container['video_best_fit'];
    }

    /**
     * Sets video_best_fit
     * @param bool $video_best_fit
     * @return $this
     */
    public function setVideoBestFit($video_best_fit)
    {
        $this->container['video_best_fit'] = $video_best_fit;

        return $this;
    }

    /**
     * Gets disallow_chat
     * @return bool
     */
    public function getDisallowChat()
    {
        return $this->container['disallow_chat'];
    }

    /**
     * Sets disallow_chat
     * @param bool $disallow_chat
     * @return $this
     */
    public function setDisallowChat($disallow_chat)
    {
        $this->container['disallow_chat'] = $disallow_chat;

        return $this;
    }

    /**
     * Gets publish_meeting
     * @return bool
     */
    public function getPublishMeeting()
    {
        return $this->container['publish_meeting'];
    }

    /**
     * Sets publish_meeting
     * @param bool $publish_meeting
     * @return $this
     */
    public function setPublishMeeting($publish_meeting)
    {
        $this->container['publish_meeting'] = $publish_meeting;

        return $this;
    }

    /**
     * Gets show_all_attendees_in_meeting_invite
     * @return bool
     */
    public function getShowAllAttendeesInMeetingInvite()
    {
        return $this->container['show_all_attendees_in_meeting_invite'];
    }

    /**
     * Sets show_all_attendees_in_meeting_invite
     * @param bool $show_all_attendees_in_meeting_invite
     * @return $this
     */
    public function setShowAllAttendeesInMeetingInvite($show_all_attendees_in_meeting_invite)
    {
        $this->container['show_all_attendees_in_meeting_invite'] = $show_all_attendees_in_meeting_invite;

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


