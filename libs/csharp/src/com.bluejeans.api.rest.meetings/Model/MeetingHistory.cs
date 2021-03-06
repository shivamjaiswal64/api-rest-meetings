/* 
 * BlueJeans Meetings REST API
 *
 *  ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.   <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr> 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using SwaggerDateConverter = com.bluejeans.api.rest.meetings.Client.SwaggerDateConverter;

namespace com.bluejeans.api.rest.meetings.Model
{
    /// <summary>
    /// MeetingHistory
    /// </summary>
    [DataContract]
    public partial class MeetingHistory :  IEquatable<MeetingHistory>, IValidatableObject
    {
        /// <summary>
        /// Gets or Sets MeetingStatus
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum MeetingStatusEnum
        {
            
            /// <summary>
            /// Enum Complete for "Complete"
            /// </summary>
            [EnumMember(Value = "Complete")]
            Complete
        }

        /// <summary>
        /// Gets or Sets ProcessingStatus
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum ProcessingStatusEnum
        {
            
            /// <summary>
            /// Enum PROCESSED for "PROCESSED"
            /// </summary>
            [EnumMember(Value = "PROCESSED")]
            PROCESSED
        }

        /// <summary>
        /// Gets or Sets MeetingStatus
        /// </summary>
        [DataMember(Name="meetingStatus", EmitDefaultValue=false)]
        public MeetingStatusEnum? MeetingStatus { get; set; }
        /// <summary>
        /// Gets or Sets ProcessingStatus
        /// </summary>
        [DataMember(Name="processingStatus", EmitDefaultValue=false)]
        public ProcessingStatusEnum? ProcessingStatus { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingHistory" /> class.
        /// </summary>
        /// <param name="MeetingGuid">MeetingGuid.</param>
        /// <param name="MeetingNumericId">MeetingNumericId.</param>
        /// <param name="Title">Title.</param>
        /// <param name="Description">Description.</param>
        /// <param name="LeaderInfo">LeaderInfo.</param>
        /// <param name="UserId">UserId.</param>
        /// <param name="MeetingDuration">MeetingDuration.</param>
        /// <param name="MaxParticipantCount">MaxParticipantCount.</param>
        /// <param name="TotalParticipantMinutes">TotalParticipantMinutes.</param>
        /// <param name="MaxParticipantMinutes">MaxParticipantMinutes.</param>
        /// <param name="ExtraParticipantMinutes">ExtraParticipantMinutes.</param>
        /// <param name="IsdnEndpoints">IsdnEndpoints.</param>
        /// <param name="TotalDialoutMinutes">TotalDialoutMinutes.</param>
        /// <param name="TotalTollFreeMinutes">TotalTollFreeMinutes.</param>
        /// <param name="CallDIDMinutes">CallDIDMinutes.</param>
        /// <param name="StartTime">StartTime.</param>
        /// <param name="EndTime">EndTime.</param>
        /// <param name="MeetingStatus">MeetingStatus.</param>
        /// <param name="MeetingThumbnail">MeetingThumbnail.</param>
        /// <param name="StartTimeZone">StartTimeZone.</param>
        /// <param name="ProcessingStatus">ProcessingStatus.</param>
        /// <param name="ConcurrentCalls">ConcurrentCalls.</param>
        /// <param name="UploadStatus">UploadStatus.</param>
        /// <param name="Pstnonly">Pstnonly.</param>
        /// <param name="ParticipantList">ParticipantList.</param>
        public MeetingHistory(string MeetingGuid = default(string), string MeetingNumericId = default(string), string Title = default(string), string Description = default(string), MeetingHistoryLeaderInfo LeaderInfo = default(MeetingHistoryLeaderInfo), int? UserId = default(int?), int? MeetingDuration = default(int?), int? MaxParticipantCount = default(int?), int? TotalParticipantMinutes = default(int?), int? MaxParticipantMinutes = default(int?), int? ExtraParticipantMinutes = default(int?), int? IsdnEndpoints = default(int?), int? TotalDialoutMinutes = default(int?), int? TotalTollFreeMinutes = default(int?), int? CallDIDMinutes = default(int?), int? StartTime = default(int?), int? EndTime = default(int?), MeetingStatusEnum? MeetingStatus = default(MeetingStatusEnum?), string MeetingThumbnail = default(string), string StartTimeZone = default(string), ProcessingStatusEnum? ProcessingStatus = default(ProcessingStatusEnum?), string ConcurrentCalls = default(string), string UploadStatus = default(string), bool? Pstnonly = default(bool?), List<MeetingHistoryParticipantList> ParticipantList = default(List<MeetingHistoryParticipantList>))
        {
            this.MeetingGuid = MeetingGuid;
            this.MeetingNumericId = MeetingNumericId;
            this.Title = Title;
            this.Description = Description;
            this.LeaderInfo = LeaderInfo;
            this.UserId = UserId;
            this.MeetingDuration = MeetingDuration;
            this.MaxParticipantCount = MaxParticipantCount;
            this.TotalParticipantMinutes = TotalParticipantMinutes;
            this.MaxParticipantMinutes = MaxParticipantMinutes;
            this.ExtraParticipantMinutes = ExtraParticipantMinutes;
            this.IsdnEndpoints = IsdnEndpoints;
            this.TotalDialoutMinutes = TotalDialoutMinutes;
            this.TotalTollFreeMinutes = TotalTollFreeMinutes;
            this.CallDIDMinutes = CallDIDMinutes;
            this.StartTime = StartTime;
            this.EndTime = EndTime;
            this.MeetingStatus = MeetingStatus;
            this.MeetingThumbnail = MeetingThumbnail;
            this.StartTimeZone = StartTimeZone;
            this.ProcessingStatus = ProcessingStatus;
            this.ConcurrentCalls = ConcurrentCalls;
            this.UploadStatus = UploadStatus;
            this.Pstnonly = Pstnonly;
            this.ParticipantList = ParticipantList;
        }
        
        /// <summary>
        /// Gets or Sets MeetingGuid
        /// </summary>
        [DataMember(Name="meetingGuid", EmitDefaultValue=false)]
        public string MeetingGuid { get; set; }

        /// <summary>
        /// Gets or Sets MeetingNumericId
        /// </summary>
        [DataMember(Name="meetingNumericId", EmitDefaultValue=false)]
        public string MeetingNumericId { get; set; }

        /// <summary>
        /// Gets or Sets Title
        /// </summary>
        [DataMember(Name="title", EmitDefaultValue=false)]
        public string Title { get; set; }

        /// <summary>
        /// Gets or Sets Description
        /// </summary>
        [DataMember(Name="description", EmitDefaultValue=false)]
        public string Description { get; set; }

        /// <summary>
        /// Gets or Sets LeaderInfo
        /// </summary>
        [DataMember(Name="leaderInfo", EmitDefaultValue=false)]
        public MeetingHistoryLeaderInfo LeaderInfo { get; set; }

        /// <summary>
        /// Gets or Sets UserId
        /// </summary>
        [DataMember(Name="userId", EmitDefaultValue=false)]
        public int? UserId { get; set; }

        /// <summary>
        /// Gets or Sets MeetingDuration
        /// </summary>
        [DataMember(Name="meetingDuration", EmitDefaultValue=false)]
        public int? MeetingDuration { get; set; }

        /// <summary>
        /// Gets or Sets MaxParticipantCount
        /// </summary>
        [DataMember(Name="maxParticipantCount", EmitDefaultValue=false)]
        public int? MaxParticipantCount { get; set; }

        /// <summary>
        /// Gets or Sets TotalParticipantMinutes
        /// </summary>
        [DataMember(Name="totalParticipantMinutes", EmitDefaultValue=false)]
        public int? TotalParticipantMinutes { get; set; }

        /// <summary>
        /// Gets or Sets MaxParticipantMinutes
        /// </summary>
        [DataMember(Name="maxParticipantMinutes", EmitDefaultValue=false)]
        public int? MaxParticipantMinutes { get; set; }

        /// <summary>
        /// Gets or Sets ExtraParticipantMinutes
        /// </summary>
        [DataMember(Name="extraParticipantMinutes", EmitDefaultValue=false)]
        public int? ExtraParticipantMinutes { get; set; }

        /// <summary>
        /// Gets or Sets IsdnEndpoints
        /// </summary>
        [DataMember(Name="isdnEndpoints", EmitDefaultValue=false)]
        public int? IsdnEndpoints { get; set; }

        /// <summary>
        /// Gets or Sets TotalDialoutMinutes
        /// </summary>
        [DataMember(Name="totalDialoutMinutes", EmitDefaultValue=false)]
        public int? TotalDialoutMinutes { get; set; }

        /// <summary>
        /// Gets or Sets TotalTollFreeMinutes
        /// </summary>
        [DataMember(Name="totalTollFreeMinutes", EmitDefaultValue=false)]
        public int? TotalTollFreeMinutes { get; set; }

        /// <summary>
        /// Gets or Sets CallDIDMinutes
        /// </summary>
        [DataMember(Name="callDIDMinutes", EmitDefaultValue=false)]
        public int? CallDIDMinutes { get; set; }

        /// <summary>
        /// Gets or Sets StartTime
        /// </summary>
        [DataMember(Name="startTime", EmitDefaultValue=false)]
        public int? StartTime { get; set; }

        /// <summary>
        /// Gets or Sets EndTime
        /// </summary>
        [DataMember(Name="endTime", EmitDefaultValue=false)]
        public int? EndTime { get; set; }


        /// <summary>
        /// Gets or Sets MeetingThumbnail
        /// </summary>
        [DataMember(Name="meetingThumbnail", EmitDefaultValue=false)]
        public string MeetingThumbnail { get; set; }

        /// <summary>
        /// Gets or Sets StartTimeZone
        /// </summary>
        [DataMember(Name="startTimeZone", EmitDefaultValue=false)]
        public string StartTimeZone { get; set; }


        /// <summary>
        /// Gets or Sets ConcurrentCalls
        /// </summary>
        [DataMember(Name="concurrentCalls", EmitDefaultValue=false)]
        public string ConcurrentCalls { get; set; }

        /// <summary>
        /// Gets or Sets UploadStatus
        /// </summary>
        [DataMember(Name="uploadStatus", EmitDefaultValue=false)]
        public string UploadStatus { get; set; }

        /// <summary>
        /// Gets or Sets Pstnonly
        /// </summary>
        [DataMember(Name="pstnonly", EmitDefaultValue=false)]
        public bool? Pstnonly { get; set; }

        /// <summary>
        /// Gets or Sets ParticipantList
        /// </summary>
        [DataMember(Name="participantList", EmitDefaultValue=false)]
        public List<MeetingHistoryParticipantList> ParticipantList { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class MeetingHistory {\n");
            sb.Append("  MeetingGuid: ").Append(MeetingGuid).Append("\n");
            sb.Append("  MeetingNumericId: ").Append(MeetingNumericId).Append("\n");
            sb.Append("  Title: ").Append(Title).Append("\n");
            sb.Append("  Description: ").Append(Description).Append("\n");
            sb.Append("  LeaderInfo: ").Append(LeaderInfo).Append("\n");
            sb.Append("  UserId: ").Append(UserId).Append("\n");
            sb.Append("  MeetingDuration: ").Append(MeetingDuration).Append("\n");
            sb.Append("  MaxParticipantCount: ").Append(MaxParticipantCount).Append("\n");
            sb.Append("  TotalParticipantMinutes: ").Append(TotalParticipantMinutes).Append("\n");
            sb.Append("  MaxParticipantMinutes: ").Append(MaxParticipantMinutes).Append("\n");
            sb.Append("  ExtraParticipantMinutes: ").Append(ExtraParticipantMinutes).Append("\n");
            sb.Append("  IsdnEndpoints: ").Append(IsdnEndpoints).Append("\n");
            sb.Append("  TotalDialoutMinutes: ").Append(TotalDialoutMinutes).Append("\n");
            sb.Append("  TotalTollFreeMinutes: ").Append(TotalTollFreeMinutes).Append("\n");
            sb.Append("  CallDIDMinutes: ").Append(CallDIDMinutes).Append("\n");
            sb.Append("  StartTime: ").Append(StartTime).Append("\n");
            sb.Append("  EndTime: ").Append(EndTime).Append("\n");
            sb.Append("  MeetingStatus: ").Append(MeetingStatus).Append("\n");
            sb.Append("  MeetingThumbnail: ").Append(MeetingThumbnail).Append("\n");
            sb.Append("  StartTimeZone: ").Append(StartTimeZone).Append("\n");
            sb.Append("  ProcessingStatus: ").Append(ProcessingStatus).Append("\n");
            sb.Append("  ConcurrentCalls: ").Append(ConcurrentCalls).Append("\n");
            sb.Append("  UploadStatus: ").Append(UploadStatus).Append("\n");
            sb.Append("  Pstnonly: ").Append(Pstnonly).Append("\n");
            sb.Append("  ParticipantList: ").Append(ParticipantList).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="obj">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object obj)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            return this.Equals(obj as MeetingHistory);
        }

        /// <summary>
        /// Returns true if MeetingHistory instances are equal
        /// </summary>
        /// <param name="other">Instance of MeetingHistory to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(MeetingHistory other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.MeetingGuid == other.MeetingGuid ||
                    this.MeetingGuid != null &&
                    this.MeetingGuid.Equals(other.MeetingGuid)
                ) && 
                (
                    this.MeetingNumericId == other.MeetingNumericId ||
                    this.MeetingNumericId != null &&
                    this.MeetingNumericId.Equals(other.MeetingNumericId)
                ) && 
                (
                    this.Title == other.Title ||
                    this.Title != null &&
                    this.Title.Equals(other.Title)
                ) && 
                (
                    this.Description == other.Description ||
                    this.Description != null &&
                    this.Description.Equals(other.Description)
                ) && 
                (
                    this.LeaderInfo == other.LeaderInfo ||
                    this.LeaderInfo != null &&
                    this.LeaderInfo.Equals(other.LeaderInfo)
                ) && 
                (
                    this.UserId == other.UserId ||
                    this.UserId != null &&
                    this.UserId.Equals(other.UserId)
                ) && 
                (
                    this.MeetingDuration == other.MeetingDuration ||
                    this.MeetingDuration != null &&
                    this.MeetingDuration.Equals(other.MeetingDuration)
                ) && 
                (
                    this.MaxParticipantCount == other.MaxParticipantCount ||
                    this.MaxParticipantCount != null &&
                    this.MaxParticipantCount.Equals(other.MaxParticipantCount)
                ) && 
                (
                    this.TotalParticipantMinutes == other.TotalParticipantMinutes ||
                    this.TotalParticipantMinutes != null &&
                    this.TotalParticipantMinutes.Equals(other.TotalParticipantMinutes)
                ) && 
                (
                    this.MaxParticipantMinutes == other.MaxParticipantMinutes ||
                    this.MaxParticipantMinutes != null &&
                    this.MaxParticipantMinutes.Equals(other.MaxParticipantMinutes)
                ) && 
                (
                    this.ExtraParticipantMinutes == other.ExtraParticipantMinutes ||
                    this.ExtraParticipantMinutes != null &&
                    this.ExtraParticipantMinutes.Equals(other.ExtraParticipantMinutes)
                ) && 
                (
                    this.IsdnEndpoints == other.IsdnEndpoints ||
                    this.IsdnEndpoints != null &&
                    this.IsdnEndpoints.Equals(other.IsdnEndpoints)
                ) && 
                (
                    this.TotalDialoutMinutes == other.TotalDialoutMinutes ||
                    this.TotalDialoutMinutes != null &&
                    this.TotalDialoutMinutes.Equals(other.TotalDialoutMinutes)
                ) && 
                (
                    this.TotalTollFreeMinutes == other.TotalTollFreeMinutes ||
                    this.TotalTollFreeMinutes != null &&
                    this.TotalTollFreeMinutes.Equals(other.TotalTollFreeMinutes)
                ) && 
                (
                    this.CallDIDMinutes == other.CallDIDMinutes ||
                    this.CallDIDMinutes != null &&
                    this.CallDIDMinutes.Equals(other.CallDIDMinutes)
                ) && 
                (
                    this.StartTime == other.StartTime ||
                    this.StartTime != null &&
                    this.StartTime.Equals(other.StartTime)
                ) && 
                (
                    this.EndTime == other.EndTime ||
                    this.EndTime != null &&
                    this.EndTime.Equals(other.EndTime)
                ) && 
                (
                    this.MeetingStatus == other.MeetingStatus ||
                    this.MeetingStatus != null &&
                    this.MeetingStatus.Equals(other.MeetingStatus)
                ) && 
                (
                    this.MeetingThumbnail == other.MeetingThumbnail ||
                    this.MeetingThumbnail != null &&
                    this.MeetingThumbnail.Equals(other.MeetingThumbnail)
                ) && 
                (
                    this.StartTimeZone == other.StartTimeZone ||
                    this.StartTimeZone != null &&
                    this.StartTimeZone.Equals(other.StartTimeZone)
                ) && 
                (
                    this.ProcessingStatus == other.ProcessingStatus ||
                    this.ProcessingStatus != null &&
                    this.ProcessingStatus.Equals(other.ProcessingStatus)
                ) && 
                (
                    this.ConcurrentCalls == other.ConcurrentCalls ||
                    this.ConcurrentCalls != null &&
                    this.ConcurrentCalls.Equals(other.ConcurrentCalls)
                ) && 
                (
                    this.UploadStatus == other.UploadStatus ||
                    this.UploadStatus != null &&
                    this.UploadStatus.Equals(other.UploadStatus)
                ) && 
                (
                    this.Pstnonly == other.Pstnonly ||
                    this.Pstnonly != null &&
                    this.Pstnonly.Equals(other.Pstnonly)
                ) && 
                (
                    this.ParticipantList == other.ParticipantList ||
                    this.ParticipantList != null &&
                    this.ParticipantList.SequenceEqual(other.ParticipantList)
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            // credit: http://stackoverflow.com/a/263416/677735
            unchecked // Overflow is fine, just wrap
            {
                int hash = 41;
                // Suitable nullity checks etc, of course :)
                if (this.MeetingGuid != null)
                    hash = hash * 59 + this.MeetingGuid.GetHashCode();
                if (this.MeetingNumericId != null)
                    hash = hash * 59 + this.MeetingNumericId.GetHashCode();
                if (this.Title != null)
                    hash = hash * 59 + this.Title.GetHashCode();
                if (this.Description != null)
                    hash = hash * 59 + this.Description.GetHashCode();
                if (this.LeaderInfo != null)
                    hash = hash * 59 + this.LeaderInfo.GetHashCode();
                if (this.UserId != null)
                    hash = hash * 59 + this.UserId.GetHashCode();
                if (this.MeetingDuration != null)
                    hash = hash * 59 + this.MeetingDuration.GetHashCode();
                if (this.MaxParticipantCount != null)
                    hash = hash * 59 + this.MaxParticipantCount.GetHashCode();
                if (this.TotalParticipantMinutes != null)
                    hash = hash * 59 + this.TotalParticipantMinutes.GetHashCode();
                if (this.MaxParticipantMinutes != null)
                    hash = hash * 59 + this.MaxParticipantMinutes.GetHashCode();
                if (this.ExtraParticipantMinutes != null)
                    hash = hash * 59 + this.ExtraParticipantMinutes.GetHashCode();
                if (this.IsdnEndpoints != null)
                    hash = hash * 59 + this.IsdnEndpoints.GetHashCode();
                if (this.TotalDialoutMinutes != null)
                    hash = hash * 59 + this.TotalDialoutMinutes.GetHashCode();
                if (this.TotalTollFreeMinutes != null)
                    hash = hash * 59 + this.TotalTollFreeMinutes.GetHashCode();
                if (this.CallDIDMinutes != null)
                    hash = hash * 59 + this.CallDIDMinutes.GetHashCode();
                if (this.StartTime != null)
                    hash = hash * 59 + this.StartTime.GetHashCode();
                if (this.EndTime != null)
                    hash = hash * 59 + this.EndTime.GetHashCode();
                if (this.MeetingStatus != null)
                    hash = hash * 59 + this.MeetingStatus.GetHashCode();
                if (this.MeetingThumbnail != null)
                    hash = hash * 59 + this.MeetingThumbnail.GetHashCode();
                if (this.StartTimeZone != null)
                    hash = hash * 59 + this.StartTimeZone.GetHashCode();
                if (this.ProcessingStatus != null)
                    hash = hash * 59 + this.ProcessingStatus.GetHashCode();
                if (this.ConcurrentCalls != null)
                    hash = hash * 59 + this.ConcurrentCalls.GetHashCode();
                if (this.UploadStatus != null)
                    hash = hash * 59 + this.UploadStatus.GetHashCode();
                if (this.Pstnonly != null)
                    hash = hash * 59 + this.Pstnonly.GetHashCode();
                if (this.ParticipantList != null)
                    hash = hash * 59 + this.ParticipantList.GetHashCode();
                return hash;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
