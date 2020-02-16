<?php
session_start();
include 'connect.php';

if(!isset($_SESSION["loggedin"]) || !($_SESSION["loggedin"] === true)){
    header("location: login.php");
    exit;
}

?>

<html>
    <head>
        <title>The Last Stand RPG | My Account</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script type="text/jscript" src="functions.js"></script>
        <style> 

        </style>
    </head>
    <body>
    <?php include '/nav.php';  ?>
        <div id="container">
        
            <main id="main">
                <div style="margin: auto;">
                    <h1>My Account</h1>
                    
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Basic Information</legend>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="firstName">First Name</label>  
                        <div class="col-md-4">
                        <input id="firstName" name="firstName" type="text" placeholder="First Name" class="form-control input-md">
                        <span class="help-block">help</span>  
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="lastName">Last Name</label>  
                        <div class="col-md-4">
                        <input id="lastName" name="lastName" type="text" placeholder="Last Name" class="form-control input-md">
                        <span class="help-block">help</span>  
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="updateBasicInfo"></label>
                        <div class="col-md-4">
                            <button id="updateBasicInfo" name="updateBasicInfo" class="btn btn-primary">Update</button>
                        </div>
                        </div>

                        </fieldset>
                    </form>

                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Contact Information</legend>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>  
                        <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md">
                        <span class="help-block">help</span>  
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="phone">Phone</label>  
                        <div class="col-md-4">
                        <input id="phone" name="phone" type="text" placeholder="Phone Number" class="form-control input-md">
                        <span class="help-block">help</span>  
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="updateContactInfo">Update Contact Info</label>
                        <div class="col-md-4">
                            <button id="updateContactInfo" name="updateContacntInfo" class="btn btn-primary">Update</button>
                        </div>
                        </div>

                        </fieldset>
                    </form>
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Login Information</legend>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="userName">Username</label>  
                        <div class="col-md-4">
                        <input id="userName" name="userName" type="text" placeholder="Username" class="form-control input-md">
                        <span class="help-block">help</span>  
                        </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="currentPassword">Current Password</label>
                        <div class="col-md-4">
                            <input id="currentPassword" name="currentPassword" type="password" placeholder="Current Password" class="form-control input-md">
                            <span class="help-block">help</span>
                        </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="newPassword">New Password</label>
                        <div class="col-md-4">
                            <input id="newPassword" name="newPassword" type="password" placeholder="New Password" class="form-control input-md">
                            <span class="help-block">help</span>
                        </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="confirmNewPassword">Confirm New Password</label>
                        <div class="col-md-4">
                            <input id="confirmNewPassword" name="confirmNewPassword" type="password" placeholder="Confirm New Password" class="form-control input-md">
                            <span class="help-block">help</span>
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="updatePassword"></label>
                        <div class="col-md-4">
                            <button id="updatePassword" name="updatePassword" class="btn btn-primary">Update</button>
                        </div>
                        </div>

                        </fieldset>
                    </form>

                    
                    
                </div>
                
            </main>
            
        </div>
    </body>
</html>