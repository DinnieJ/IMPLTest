<h1>Laravel test for IMPL</h1>
<p>Before anything, run <strong>composer install</strong>
<p>If you don't have composer, you can install it <a href="https://getcomposer.org/download/">here</a>
<p>The application still has flaw in the authentication at login so to use the application,please register a new user,if the register is successful, it will automatically login with the new registered user and go to the homepage

<h4>Path in the application</h4>
<p>/login: login page
<p>/register: Register page
<p>/home: Home page
<p>/request: add request to be come seller page
<p>/viewrequest: show the status of your request
<p>/requesthandler: handling the request
<h4>The application use authentication so unless you are logged in, you can only access the request handler page, login and register</h4>