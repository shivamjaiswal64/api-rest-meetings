/* 
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – After creating a developer application, users witll authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access token. Known as three-legged OAuth. ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use one of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make. 
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
    /// GrantPasswordScope
    /// </summary>
    [DataContract]
    public partial class GrantPasswordScope :  IEquatable<GrantPasswordScope>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="GrantPasswordScope" /> class.
        /// </summary>
        /// <param name="User">The ID of your user..</param>
        /// <param name="PartitionName">The name of the partition you are on..</param>
        /// <param name="Partition">Partition.</param>
        public GrantPasswordScope(int? User = default(int?), string PartitionName = default(string), Partition Partition = default(Partition))
        {
            this.User = User;
            this.PartitionName = PartitionName;
            this.Partition = Partition;
        }
        
        /// <summary>
        /// The ID of your user.
        /// </summary>
        /// <value>The ID of your user.</value>
        [DataMember(Name="user", EmitDefaultValue=false)]
        public int? User { get; set; }
        /// <summary>
        /// The name of the partition you are on.
        /// </summary>
        /// <value>The name of the partition you are on.</value>
        [DataMember(Name="partitionName", EmitDefaultValue=false)]
        public string PartitionName { get; set; }
        /// <summary>
        /// Gets or Sets Partition
        /// </summary>
        [DataMember(Name="partition", EmitDefaultValue=false)]
        public Partition Partition { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class GrantPasswordScope {\n");
            sb.Append("  User: ").Append(User).Append("\n");
            sb.Append("  PartitionName: ").Append(PartitionName).Append("\n");
            sb.Append("  Partition: ").Append(Partition).Append("\n");
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
            return this.Equals(obj as GrantPasswordScope);
        }

        /// <summary>
        /// Returns true if GrantPasswordScope instances are equal
        /// </summary>
        /// <param name="other">Instance of GrantPasswordScope to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(GrantPasswordScope other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.User == other.User ||
                    this.User != null &&
                    this.User.Equals(other.User)
                ) && 
                (
                    this.PartitionName == other.PartitionName ||
                    this.PartitionName != null &&
                    this.PartitionName.Equals(other.PartitionName)
                ) && 
                (
                    this.Partition == other.Partition ||
                    this.Partition != null &&
                    this.Partition.Equals(other.Partition)
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
                if (this.User != null)
                    hash = hash * 59 + this.User.GetHashCode();
                if (this.PartitionName != null)
                    hash = hash * 59 + this.PartitionName.GetHashCode();
                if (this.Partition != null)
                    hash = hash * 59 + this.Partition.GetHashCode();
                return hash;
            }
        }

        public IEnumerable<ValidationResult> Validate(ValidationContext validationContext)
        { 
            yield break;
        }
    }

}