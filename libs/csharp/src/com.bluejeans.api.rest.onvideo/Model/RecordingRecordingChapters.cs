/* 
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 3 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to the user. * Authorization Code Grant – Authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access code. (\"three-legged OAuth\") * Password Credentials Grant – Authenticate with a Username and password and receives an access code. (\"two-legged OAuth\"); * Client Credentials Grant – Similar to Password Grant (\"two-legged OAuth\").  ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – scope of APIs is limited to individual meetings. * User-level – scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users.  All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use on of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make. 
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

namespace com.bluejeans.api.rest.onvideo.Model
{
    /// <summary>
    /// RecordingRecordingChapters
    /// </summary>
    [DataContract]
    public partial class RecordingRecordingChapters :  IEquatable<RecordingRecordingChapters>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="RecordingRecordingChapters" /> class.
        /// </summary>
        /// <param name="ChapterId">ChapterId.</param>
        /// <param name="Id">Id.</param>
        /// <param name="StartTimeOffset">StartTimeOffset.</param>
        /// <param name="EndTimeOffset">EndTimeOffset.</param>
        /// <param name="ChapterName">ChapterName.</param>
        /// <param name="TotalSize">TotalSize.</param>
        /// <param name="CompositeContentId">CompositeContentId.</param>
        /// <param name="CompositeContentStatus">CompositeContentStatus.</param>
        /// <param name="ParentRecordingId">ParentRecordingId.</param>
        /// <param name="ViewCount">ViewCount.</param>
        /// <param name="RecordingSessions">RecordingSessions.</param>
        public RecordingRecordingChapters(string ChapterId = default(string), int? Id = default(int?), int? StartTimeOffset = default(int?), int? EndTimeOffset = default(int?), string ChapterName = default(string), int? TotalSize = default(int?), int? CompositeContentId = default(int?), string CompositeContentStatus = default(string), int? ParentRecordingId = default(int?), int? ViewCount = default(int?), List<RecordingSession> RecordingSessions = default(List<RecordingSession>))
        {
            this.ChapterId = ChapterId;
            this.Id = Id;
            this.StartTimeOffset = StartTimeOffset;
            this.EndTimeOffset = EndTimeOffset;
            this.ChapterName = ChapterName;
            this.TotalSize = TotalSize;
            this.CompositeContentId = CompositeContentId;
            this.CompositeContentStatus = CompositeContentStatus;
            this.ParentRecordingId = ParentRecordingId;
            this.ViewCount = ViewCount;
            this.RecordingSessions = RecordingSessions;
        }
        
        /// <summary>
        /// Gets or Sets ChapterId
        /// </summary>
        [DataMember(Name="chapterId", EmitDefaultValue=false)]
        public string ChapterId { get; set; }
        /// <summary>
        /// Gets or Sets Id
        /// </summary>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public int? Id { get; set; }
        /// <summary>
        /// Gets or Sets StartTimeOffset
        /// </summary>
        [DataMember(Name="startTimeOffset", EmitDefaultValue=false)]
        public int? StartTimeOffset { get; set; }
        /// <summary>
        /// Gets or Sets EndTimeOffset
        /// </summary>
        [DataMember(Name="endTimeOffset", EmitDefaultValue=false)]
        public int? EndTimeOffset { get; set; }
        /// <summary>
        /// Gets or Sets ChapterName
        /// </summary>
        [DataMember(Name="chapterName", EmitDefaultValue=false)]
        public string ChapterName { get; set; }
        /// <summary>
        /// Gets or Sets TotalSize
        /// </summary>
        [DataMember(Name="totalSize", EmitDefaultValue=false)]
        public int? TotalSize { get; set; }
        /// <summary>
        /// Gets or Sets CompositeContentId
        /// </summary>
        [DataMember(Name="compositeContentId", EmitDefaultValue=false)]
        public int? CompositeContentId { get; set; }
        /// <summary>
        /// Gets or Sets CompositeContentStatus
        /// </summary>
        [DataMember(Name="compositeContentStatus", EmitDefaultValue=false)]
        public string CompositeContentStatus { get; set; }
        /// <summary>
        /// Gets or Sets ParentRecordingId
        /// </summary>
        [DataMember(Name="parentRecordingId", EmitDefaultValue=false)]
        public int? ParentRecordingId { get; set; }
        /// <summary>
        /// Gets or Sets ViewCount
        /// </summary>
        [DataMember(Name="viewCount", EmitDefaultValue=false)]
        public int? ViewCount { get; set; }
        /// <summary>
        /// Gets or Sets RecordingSessions
        /// </summary>
        [DataMember(Name="recordingSessions", EmitDefaultValue=false)]
        public List<RecordingSession> RecordingSessions { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class RecordingRecordingChapters {\n");
            sb.Append("  ChapterId: ").Append(ChapterId).Append("\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  StartTimeOffset: ").Append(StartTimeOffset).Append("\n");
            sb.Append("  EndTimeOffset: ").Append(EndTimeOffset).Append("\n");
            sb.Append("  ChapterName: ").Append(ChapterName).Append("\n");
            sb.Append("  TotalSize: ").Append(TotalSize).Append("\n");
            sb.Append("  CompositeContentId: ").Append(CompositeContentId).Append("\n");
            sb.Append("  CompositeContentStatus: ").Append(CompositeContentStatus).Append("\n");
            sb.Append("  ParentRecordingId: ").Append(ParentRecordingId).Append("\n");
            sb.Append("  ViewCount: ").Append(ViewCount).Append("\n");
            sb.Append("  RecordingSessions: ").Append(RecordingSessions).Append("\n");
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
            return this.Equals(obj as RecordingRecordingChapters);
        }

        /// <summary>
        /// Returns true if RecordingRecordingChapters instances are equal
        /// </summary>
        /// <param name="other">Instance of RecordingRecordingChapters to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(RecordingRecordingChapters other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.ChapterId == other.ChapterId ||
                    this.ChapterId != null &&
                    this.ChapterId.Equals(other.ChapterId)
                ) && 
                (
                    this.Id == other.Id ||
                    this.Id != null &&
                    this.Id.Equals(other.Id)
                ) && 
                (
                    this.StartTimeOffset == other.StartTimeOffset ||
                    this.StartTimeOffset != null &&
                    this.StartTimeOffset.Equals(other.StartTimeOffset)
                ) && 
                (
                    this.EndTimeOffset == other.EndTimeOffset ||
                    this.EndTimeOffset != null &&
                    this.EndTimeOffset.Equals(other.EndTimeOffset)
                ) && 
                (
                    this.ChapterName == other.ChapterName ||
                    this.ChapterName != null &&
                    this.ChapterName.Equals(other.ChapterName)
                ) && 
                (
                    this.TotalSize == other.TotalSize ||
                    this.TotalSize != null &&
                    this.TotalSize.Equals(other.TotalSize)
                ) && 
                (
                    this.CompositeContentId == other.CompositeContentId ||
                    this.CompositeContentId != null &&
                    this.CompositeContentId.Equals(other.CompositeContentId)
                ) && 
                (
                    this.CompositeContentStatus == other.CompositeContentStatus ||
                    this.CompositeContentStatus != null &&
                    this.CompositeContentStatus.Equals(other.CompositeContentStatus)
                ) && 
                (
                    this.ParentRecordingId == other.ParentRecordingId ||
                    this.ParentRecordingId != null &&
                    this.ParentRecordingId.Equals(other.ParentRecordingId)
                ) && 
                (
                    this.ViewCount == other.ViewCount ||
                    this.ViewCount != null &&
                    this.ViewCount.Equals(other.ViewCount)
                ) && 
                (
                    this.RecordingSessions == other.RecordingSessions ||
                    this.RecordingSessions != null &&
                    this.RecordingSessions.SequenceEqual(other.RecordingSessions)
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
                if (this.ChapterId != null)
                    hash = hash * 59 + this.ChapterId.GetHashCode();
                if (this.Id != null)
                    hash = hash * 59 + this.Id.GetHashCode();
                if (this.StartTimeOffset != null)
                    hash = hash * 59 + this.StartTimeOffset.GetHashCode();
                if (this.EndTimeOffset != null)
                    hash = hash * 59 + this.EndTimeOffset.GetHashCode();
                if (this.ChapterName != null)
                    hash = hash * 59 + this.ChapterName.GetHashCode();
                if (this.TotalSize != null)
                    hash = hash * 59 + this.TotalSize.GetHashCode();
                if (this.CompositeContentId != null)
                    hash = hash * 59 + this.CompositeContentId.GetHashCode();
                if (this.CompositeContentStatus != null)
                    hash = hash * 59 + this.CompositeContentStatus.GetHashCode();
                if (this.ParentRecordingId != null)
                    hash = hash * 59 + this.ParentRecordingId.GetHashCode();
                if (this.ViewCount != null)
                    hash = hash * 59 + this.ViewCount.GetHashCode();
                if (this.RecordingSessions != null)
                    hash = hash * 59 + this.RecordingSessions.GetHashCode();
                return hash;
            }
        }

        public IEnumerable<ValidationResult> Validate(ValidationContext validationContext)
        { 
            yield break;
        }
    }

}
