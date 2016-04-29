# HasSms
Simple website to send SMS Messages using smsgateway.me API and your Android phone

**Its Free**

**Make sure you have a server running on your machine.**

# Setup
##### Only works with Andoid phones and working messaging service

1. Goto: https://smsgateway.me/ and Signup.
  * The email and password you signup with will be used later so make sure to note it down.

2. Open Google Play Store on your Android phones and search for "SMS Gateway API" (made by CodeOn). Download and Install it.

3. Login to the app using the email and password.
  * You should see a screen simit to this:
    
    <img src="http://ahmadhas.com/hassms/images/LaunchScreen.png" height="400px">

4. Create a directory folder where you can run php files on your server (e.g., n mac os x, its "Sites" folder) and clone/download this git 

5. Open config.php in a text editor and edit this line `$smsGateway = new SmsGateway('username03@smsgateway.me', 'password');`
  * replace `username03@smsgateway.me` and `password` with you own `email` and `password` that you signed up on https://smsgateway.me/
  
6. Launch you server and you should see your phone number from Android app.


##### This project is under **development** and more features will be added in the future.
###### Note: I am not affiliated/work for smsgateway.me
#### ENJOY



