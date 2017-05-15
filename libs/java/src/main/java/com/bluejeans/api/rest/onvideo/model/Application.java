/*
 * BlueJeans onVideo REST API
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – After creating a developer application, users witll authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access token. Known as three-legged OAuth. ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use one of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.onvideo.model;

import java.util.Objects;
import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.util.ArrayList;
import java.util.List;

/**
 * Application
 */

public class Application {
  @SerializedName("description")
  private String description = null;

  @SerializedName("appName")
  private String appName = null;

  @SerializedName("appLogoUrl")
  private String appLogoUrl = null;

  @SerializedName("redirectUrls")
  private List<String> redirectUrls = new ArrayList<String>();

  @SerializedName("clientId")
  private String clientId = null;

  @SerializedName("clientSecret")
  private String clientSecret = null;

  public Application description(String description) {
    this.description = description;
    return this;
  }

   /**
   * A summary of the client application.
   * @return description
  **/
  @ApiModelProperty(example = "null", value = "A summary of the client application.")
  public String getDescription() {
    return description;
  }

  public void setDescription(String description) {
    this.description = description;
  }

  public Application appName(String appName) {
    this.appName = appName;
    return this;
  }

   /**
   * The name of the client application.
   * @return appName
  **/
  @ApiModelProperty(example = "null", value = "The name of the client application.")
  public String getAppName() {
    return appName;
  }

  public void setAppName(String appName) {
    this.appName = appName;
  }

  public Application appLogoUrl(String appLogoUrl) {
    this.appLogoUrl = appLogoUrl;
    return this;
  }

   /**
   * A URL of an image that will be displayed to users during authorization.
   * @return appLogoUrl
  **/
  @ApiModelProperty(example = "null", value = "A URL of an image that will be displayed to users during authorization.")
  public String getAppLogoUrl() {
    return appLogoUrl;
  }

  public void setAppLogoUrl(String appLogoUrl) {
    this.appLogoUrl = appLogoUrl;
  }

  public Application redirectUrls(List<String> redirectUrls) {
    this.redirectUrls = redirectUrls;
    return this;
  }

  public Application addRedirectUrlsItem(String redirectUrlsItem) {
    this.redirectUrls.add(redirectUrlsItem);
    return this;
  }

   /**
   * Get redirectUrls
   * @return redirectUrls
  **/
  @ApiModelProperty(example = "null", value = "")
  public List<String> getRedirectUrls() {
    return redirectUrls;
  }

  public void setRedirectUrls(List<String> redirectUrls) {
    this.redirectUrls = redirectUrls;
  }

   /**
   * The client ID will be generated on creation of the application. Normally, a 32 character hexidecimal numeric string.
   * @return clientId
  **/
  @ApiModelProperty(example = "null", value = "The client ID will be generated on creation of the application. Normally, a 32 character hexidecimal numeric string.")
  public String getClientId() {
    return clientId;
  }

   /**
   * The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.
   * @return clientSecret
  **/
  @ApiModelProperty(example = "null", value = "The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.")
  public String getClientSecret() {
    return clientSecret;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Application application = (Application) o;
    return Objects.equals(this.description, application.description) &&
        Objects.equals(this.appName, application.appName) &&
        Objects.equals(this.appLogoUrl, application.appLogoUrl) &&
        Objects.equals(this.redirectUrls, application.redirectUrls) &&
        Objects.equals(this.clientId, application.clientId) &&
        Objects.equals(this.clientSecret, application.clientSecret);
  }

  @Override
  public int hashCode() {
    return Objects.hash(description, appName, appLogoUrl, redirectUrls, clientId, clientSecret);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Application {\n");
    
    sb.append("    description: ").append(toIndentedString(description)).append("\n");
    sb.append("    appName: ").append(toIndentedString(appName)).append("\n");
    sb.append("    appLogoUrl: ").append(toIndentedString(appLogoUrl)).append("\n");
    sb.append("    redirectUrls: ").append(toIndentedString(redirectUrls)).append("\n");
    sb.append("    clientId: ").append(toIndentedString(clientId)).append("\n");
    sb.append("    clientSecret: ").append(toIndentedString(clientSecret)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
  
}
