<?php
class redditConfig{
    //standard, oauth token fetch, and api request endpoints
    static $ENDPOINT_STANDARD = 'http://www.reddit.com';
    static $ENDPOINT_OAUTH = 'https://oauth.reddit.com';
    static $ENDPOINT_OAUTH_AUTHORIZE = 'https://ssl.reddit.com/api/v1/authorize';
    static $ENDPOINT_OAUTH_TOKEN = 'https://ssl.reddit.com/api/v1/access_token';
    static $ENDPOINT_OAUTH_REDIRECT = 'http://localhost/reddit/test.php';
    
    //access token configuration from https://ssl.reddit.com/prefs/apps
    static $CLIENT_ID = 'YuysQsY6CKcwdw';
    static $CLIENT_SECRET = 'asVYaRAKYF5VvAdxwP93sP0-tlg';
    
    //access token request scopes
    //full list at http://www.reddit.com/dev/api/oauth
    static $SCOPES = 'save,modposts,identity,edit,flair,history,modconfig,modflair,modlog,modposts,modwiki,mysubreddits,privatemessages,read,report,submit,subscribe,vote,wikiedit,wikiread';
}
?>
