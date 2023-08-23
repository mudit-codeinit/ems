@extends('layouts.header3')

@section('content')

   <style>.privacy-container a{color: #0056b3;word-break:break-word;}</style>

   <div class="container-fluid">
      <div class="row top_bg">
         <div class="col-md-12 text-center">
            <h1 class="font-poiret font-white text-uppercase">Cookies Policy</h1>
         </div>
      </div>
   </div>
   
   <section class="bg-grey abt-section">
      <div class="container privacy-container">
         <div class="row mb-5">
            <div class="col-12">
               <h5 class="text-uppercase mt-3 mb-3">What are cookies?</h5>
               <p>A cookie is a simple text file stored on your computer or mobile device by a website’s server, and only that server will be able to retrieve or read the contents of that cookie. Each cookie is unique to your web browser. It will contain some anonymous information such as a unique identifier and the site name, and some digits and numbers. It allows a website to remember things like your preferences or what’s in your shopping basket.</p>
            </div>
            <div class="col-12">
               <h5 class="text-uppercase mt-3 mb-3">What cookies are used on this website?</h5>
               <table class="table table-striped table-responsive mt-4">
                  <thead>
                     <tr>
                        <th scope="col">Cookie</th>
                        <th scope="col">Purpose</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td scope="row"><b>PHPSESSID</b></td>
                        <td>This is a session cookie used to preserve data across subsequent accesses. It is a temporary cookie that remains in the cookie file of your browser until you close the browser. It is mainly used to maintain your identity.</td>
                     </tr>
                     <tr>
                        <td scope="row"><b>wordpress_test_cookie</b></td>
                        <td>Checks if cookies are enabled to provide appropriate user experience.</td>
                     </tr>
                     <tr>
                        <td scope="row"><b>wordpress_logged_in_x</b></td>
                        <td>A core system cookie that is used to maintain website logins.</td>
                     </tr>
                     <tr>
                        <td scope="row"><b>wordpress_sec_x</b></td>
                        <td>A core system cookie that is used to maintain website logins.</td>
                     </tr>
                     <tr>
                        <td scope="row"><b>CookiesDirective</b></td>
                        <td>Used by the website to notify cookies are in use</td>
                     </tr>
                     <tr>
                        <td scope="row"><b>Google Analytics</b></td>
                        <td>This is a web analytics service provided by Google, Inc. Google Analytics sets a cookie in order to evaluate your use and compile meaningful site traffic reports. Read more here: <a href="http://code.google.com/apis/analytics/docs/concepts/gaConceptsCookies.html" target="_blank">http://code.google.com/apis/analytics/docs/concepts/gaConceptsCookies.html</a></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="col-12">
               <h5 class="text-uppercase mt-3 mb-3">How to enable and disable cookies using your browser?</h5>
               <h6>Google Chrome</h6>
               <ul class="ml-3 mr-3">
                  <li>Click on the ‘wrench’ icon on the browser (usually found top-right corner) to open the tools menu</li>
                  <li>From the Tools menu, select ‘Options’</li>
                  <li>Click the ‘Under the Hood’ tab from the menu on the left.</li>
                  <li>In the ‘Privacy’ section, select the ‘Content settings’ button</li>
                  <li>To enable cookies: select ‘Allow local data to be set’ option</li>
                  <li>To disable cookies: Move the slider to the top to block all cookies</li>
                  <li>Note there are various levels of cookie enablement and disablement in Chrome. For more information on other cookie settings offered in Chrome, refer to the following page from Google <a href="http://support.google.com/chrome/bin/answer.py?hl=en&answer=95647" target="_blank">http://support.google.com/chrome/bin/answer.py?hl=en&answer=95647</a></li>
               </ul>
               <h6>Mozilla Firefox</h6>
               <ul class="ml-3 mr-3">
                  <li>Click on ‘Tools’ at the browser menu and select ‘Options’</li>
                  <li>Select the Privacy panel</li>
                  <li>To enable cookies: Check ‘Accept cookies for sites,’</li>
                  <li>To disable cookies: Uncheck at ‘Accept cookies for sites.’</li>
                  <li>Note there are various levels of cookie enablement and disablement in Firefox. For more information, refer to the following page from Mozilla: <a href="http://support.mozilla.org/en-US/kb/Enabling%20and%20disabling%20cookies" target="_blank">http://support.mozilla.org/en-US/kb/Enabling%20and%20disabling%20cookies</a></li>
               </ul>
               <h6>Opera</h6>
               <ul class="ml-3 mr-3">
                  <li>Click on ‘Setting’ at the browser menu and select ‘Settings’</li>
                  <li>Select ‘Quick Preferences’</li>
                  <li>To enable cookies: check “Enable Cookies”</li>
                  <li>To disable cookies: uncheck “Enable Cookies”</li>
                  <li>Note there are various levels of cookie enablement and disablement in Opera. For more information on other cookie settings offered in Opera, refer to the following page from Opera Software: <a href="http://www.opera.com/browser/tutorials/security/privacy/" target="_blank">http://www.opera.com/browser/tutorials/security/privacy/</a></li>
               </ul>
               <h6>Safari on OSX</h6>
               <ul class="ml-3 mr-3">
                  <li>Click on ‘Safari’ at the menu bar and select the ‘Preferences’ option</li>
                  <li>Click on ‘Security’</li>
                  <li>To enable cookies: In the ‘Accept cookies’ section, select ‘Only from site you navigate to.’</li>
                  <li>To disable cookies: In the ‘Accept cookies’ section, select ‘Never.’</li>
                  <li>Note there are various levels of cookie enablement and disablement in Safari. For more information on other cookie settings offered in Safari, refer to the following page from Apple: <a href="https://support.apple.com/en-ae/guide/safari/aside/glos0126d795/15.1/mac/12.0" target="_blank">https://support.apple.com/en-ae/guide/safari/aside/glos0126d795/15.1/mac/12.0</a></li>
               </ul>
               <h6>All other browsers</h6>
               <ul class="ml-3 mr-3">
                  <li>Please look for a “help” function in the browser or contact the browser provider. You can also find more information on the following page: <a href="http://www.allaboutcookies.org/manage-cookies/" target="_blank">http://www.allaboutcookies.org/manage-cookies/</a></li>
               </ul>
               <h6>Changes to this policy</h6>
               <ul class="ml-3 mr-3">
                  <li>We reserve the right to update this policy from time to time. You should check this page occasionally to ensure you are familiar with any changes.</li>
               </ul>
            </div>
         </div>
      </div>
   </section>

@endsection