<?php
return [

    'isCN' => env('IS_CN', true),
    /*
    * the clientId is set from the Microsoft portal to identify the application
    * https://apps.dev.microsoft.com
    */
    'clientId' => env('MSGRAPH_CLIENT_ID'),

    /*
    * set the application secret
    */

    'clientSecret' => env('MSGRAPH_SECRET_ID'),

    /*
    * Set the url to trigger the oauth process this url should call return MsGraph::connect();
    */
    'redirectUri' => env('MSGRAPH_OAUTH_URL'),

    /*
    * set the url to be redirected to once the token has been saved
    */

    'msgraphLandingUri'  => env('MSGRAPH_LANDING_URL'),

    /*
    set the tenant authorize url
    */

    'tenantUrlAuthorize' => env('MSGRAPH_TENANT_AUTHORIZE'),

    /*
    set the tenant token url
    */
    'tenantUrlAccessToken' => env('MSGRAPH_TENANT_TOKEN'),

    /*
    set the authorize url
    */



    'urlAuthorize' =>  env('MSGRAPH_URL_AUTHORIZE', 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize'),

    /*
    set the token url
    */
    'urlAccessToken' => env('MSGRAPH_URL_AUTHORIZE_TOKEN', 'https://login.microsoftonline.com/common/oauth2/v2.0/token'),


    /*
    set the scopes to be used, Microsoft Graph API will accept up to 20 scopes
    */

    'scopes' => 'offline_access openid files.read files.read.all files.read.selected files.readwrite files.readwrite.all files.readwrite.appfolder files.readwrite.selected user.read',

    /*
    The default timezone is set to Europe/London this option allows you to set your prefered timetime
    */
    'preferTimezone' => env('MSGRAPH_PREFER_TIMEZONE', 'outlook.timezone="Asia/Shanghai"'),
];
