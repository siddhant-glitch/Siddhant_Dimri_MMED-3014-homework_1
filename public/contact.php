<?php

session_start();

include '../includes/functions.php';
include '../includes/partials/footer.php';


$firstName = getSubmissionFromSession('first_name');
$lastName = getSubmissionFromSession('last_name');
$email = getSubmissionFromSession('email');
$comments = getSubmissionFromSession('comments');


$shouldShowSubmission = shouldShowSubmissionData();

$firstNameError = getErrorMessageFromSession('first_name');
$lastNameError = getErrorMessageFromSession('last_name');
$emailError = getErrorMessageFromSession('email');
$commentError = getErrorMessageFromSession('comments');

$_SESSION['errors'] = [];
$_SESSION['submission'] = [];

?>

<html>
    <head></head>
    <body>

    <?php
    
    include '../includes/partials/header.php';

    ?>



<section class="container">

    <div class="heading">
        <h1>WE WOULD LOVE TO HEAR FROM YOU!</h1>
        <p>We're budding in the community too so we take all honest opinions and feedbacks with gratitude!</p>
    </div>

    <div class="form-container">

        <form name="frmContact" id="" frmContact"" method="post" action="../includes/submit.php" enctype="multipart/form-data">

            <div class="input-row">
                <label style="padding-top: 20px;">First Name</label> 
                <span id="userName-info" class="info"></span><br/> 
                <input
                    type="text" 
                    class="input-field" 
                    name="first_name"  
                    value="<?php echo $firstName; ?>"
                    id="userName" 
                />
                <span style="color: red"> <?php echo $firstNameError; ?> </span>
            </div>

            <div class="input-row">
                <label style="padding-top: 20px;">Last Name</label> 
                <span id="userName-info" class="info"></span><br/> 
                <input
                    type="text" 
                    class="input-field" 
                    name="last_name" 
                    value="<?php echo $lastName; ?>"
                    id="userName" 
                />
                <span style="color: red"> <?php echo $lastNameError; ?> </span>
            </div> 

            <div class="input-row">
                <label>Email</label> 
                <span id="userEmail-info" class="info"></span><br/> 
                <input type="email"
                       class="input-field" 
                       name="email" 
                       id="userEmail"
                       value="<?php echo $email; ?>"
                       />
                <span style="color: red">
                    <?php echo $emailError; ?>
                </span>
            </div>

            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <input type="text"
                    id="txtbox"
                    class="input-field"
                    name="comments"
                    />

                <span style="color: red; padding-left:20px;"> <?php echo $commentError; ?> </span>

                


            </div>
            <div class="submitButton">
                
                <button type="submit" class="btn-submit">Submit</button>
            </div>
            <h6>THANK YOU.</h6>
        </form>
    </div>

    </section>

    

       

    </body>
</html>