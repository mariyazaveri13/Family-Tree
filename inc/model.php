<?php
    require_once 'db.php';

    /**
     * call logout function
     */
    if(isset($_GET['logout'])) {
        logout();
    }
    if(isset($_POST['signup']) && signupValidation()) {
        registerUser();
    }
    if(isset($_POST['save']) && profileValidation()) {
        updateProfile();
    }
    if(isset($_POST['login']) && loginValidation()) {
        loginUser();
    }
    if(isset($_POST['forgotPassword'])) {
        forgotPassword();
    }
    if(isset($_POST['contactForm'])) {
        contactForm();
    }
    if(isset($_POST['updateMember'])) {
        updateMember();
    }
    if(isset($_POST['changePassword']) && changePasswordValidation())
    {
        changePassword();
    }
    if(isset($_POST['addMember']))
    {
        addMember();
    }
    if(isset($_POST['deleteMember']))
    {
        deleteMember();
    }

    function fileUpload(){
        $target_dir = "img/user-profiles/";
        $target_file = $target_dir.basename($_FILES["avatar"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
        {
            $GLOBALS['avatarErr'] = "Sorry, only JPG, JPEG and PNG files are allowed.";
            return false;
        } else {
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                return 'user-profiles/'.$_FILES["avatar"]["name"];
            } else {
                $GLOBALS['avatarErr'] = "Sorry, there was an error uploading your file.";
                return false;
            }
        }
    }

    /**
     * Register New User
     */
    function registerUser(){
        global $db;
        if(checkEmail($_POST['email']))
        {
            $insert_user = $db->prepare("INSERT INTO `user` (`id`, `fname`, `lname`, `profile`, `email`, `password`, `role`, `status`, `created_date`) VALUES (NULL, '".$_POST['fname']."','".$_POST['lname']."','".AVATAR."','".$_POST['email']."','".password_hash($_POST['pass'], PASSWORD_DEFAULT)."','".USERROLE."','".ACTIVE."', CURRENT_TIMESTAMP)");
            $insert_user->execute();
            $inserted_user_id = $db->lastInsertId();
            $create_family = $db->prepare("INSERT INTO `family`(`id`, `user_id`) VALUES (NULL,".$inserted_user_id.")");
            $create_family->execute();
            $family_id = $db->lastInsertId();
            $add_member = $db->prepare("INSERT INTO `members`(`id`, `family_id`, `fname`, `lname`, `profile`) VALUES (NULL,$family_id,'".$_POST['fname']."','".$_POST['lname']."','".AVATAR."')");
            $add_member->execute();
            startSession($inserted_user_id);
        }
    }

    /**
     * Login User
     */
    function loginUser(){
        global $db;
        $get_email = $db->prepare("SELECT id,email,password FROM user WHERE email = '".$_POST['email']."'");
        $get_email->execute();
        if($user_details = $get_email->fetch())
        {
            if(password_verify($_POST['pass'],$user_details['password']))
            {
                startSession($user_details['id']);
            }
            $GLOBALS['LoginErrorMsg'] = "Incorrect Password.";
        }
        $GLOBALS['LoginErrorMsg'] = "Incorrect Email.";
        
    }

    /**
     * Start Session for login and registration both
     */
    function startSession($id)
    {
        session_start();
        $_SESSION['userId'] = $id;
        $_SESSION['familyId'] = getFamilyId($id);
        header("Location: familyinfo.php");
    }

    /**
     * get family id
     */
    function getFamilyId($id)
    {
        global $db;
        $get_family_id = $db->prepare("SELECT `id` FROM `family` WHERE user_id =".$id);
        $get_family_id->execute();
        return $get_family_id->fetch()['id'];
    }

    /**
     * get user avatar
     */
    function getUserAvatar()
    {
        global $db;
        $get_avatar = $db->prepare("SELECT profile from user where id = ".$_SESSION['userId']);
        $get_avatar->execute();
        return $get_avatar->fetch()['profile'];
    }

    /**
     * get user's email
     */
    function getUserEmail()
    {
        global $db;
        $get_email = $db->prepare("SELECT email from user where id = ".$_SESSION['userId']);
        $get_email->execute();
        return $get_email->fetch()['email'];
    }

    /**
     * get user's full name
     */
    function getUserName()
    {
        return getUserFname()." ". getUserLname();
    }

    /**
     * get user's first name
     */
    function getUserFname()
    {
        global $db;
        $get_fname = $db->prepare("SELECT fname from user where id = ".$_SESSION['userId']);
        $get_fname->execute();
        return $get_fname->fetch()['fname'];
    }

    /**
     * get user's last name
     */
    function getUserLname()
    {
        global $db;
        $get_lname = $db->prepare("SELECT lname from user where id = ".$_SESSION['userId']);
        $get_lname->execute();
        return $get_lname->fetch()['lname'];
    }

    /**
     * logout
     */
    function logout()
    {
        session_destroy();
        header("Location: index.php");
    }

    function getAllMembers()
    {
        global $db;
        $get_members = $db->prepare("SELECT `id`, `family_id`,`father_id`, `mother_id`, `spouse_id`, `fname`, `lname`, `gender`, `dob`, `profile` FROM `members` WHERE family_id = ".$_SESSION['familyId']);
        $get_members->execute();
        return $get_members->fetchAll();
    }

    function getUserDetails()
    {
        global $db;
        $get_user_details = $db->prepare("SELECT `fname`, `lname`, `gender`, `profile`, `password`, `email` FROM `user` WHERE id = ".$_SESSION['userId']);
        $get_user_details->execute();
        return $get_user_details->fetch();
    }

    function updateProfile()
    {
        global $db;
        $update_user_query = "UPDATE `user` SET `fname`='". $_POST['fname'] ."',`lname`='". $_POST['lname'] ."',`gender`='". $_POST['gender'] ."'";
        if($_FILES['avatar'])
        {
            if($path = fileUpload())
                $update_user_query .= ",`profile`='". $path ."'";
        }
        $update_user_query .= " WHERE id = ".$_SESSION['userId'];
        $update_user = $db->prepare($update_user_query);
        $update_user->execute();
        if($update_user->errorInfo()[0] == "00000")
        {
            $GLOBALS['successMsg'] = "Updated Successfully.";
        } else {
            $GLOBALS['errorMsg'] = "Update failed.";
        }
    }

    function changePassword()
    {
        global $db;
        $change_password = $db->prepare("UPDATE `user` SET `password`='".password_hash($_POST['newPassword'], PASSWORD_DEFAULT)."' WHERE id = ". $_SESSION['userId']);
        $change_password->execute();
        if($change_password->errorInfo()[0] == "00000")
        {
            $GLOBALS['successMsg'] = "Password Changed.";
        } else {
            $GLOBALS['errorMsg'] = "Password not Changed.";
        }
    }

    /**
     * check if email is already registered or not
     */
    function checkEmail($email)
    {
        global $db;
        $check_email = $db->prepare("SELECT email FROM user WHERE email ='".$email."'" );
        $check_email->execute();
        if($check_email->fetch())
        {
            $GLOBALS['errorMsg'] = "already registerd.";
            return false;
        }
        return true;
    }

    /**
     * login form validation
     */
    function loginValidation()
    {
        $hasError = false;
        if(empty($_POST['email']))
        {
            $GLOBALS['loginEmailErr'] = 'Email is Required.';
            $hasError = true;
        } 
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $GLOBALS['loginEmailErr'] = 'Invalid Email';
            $hasError = true;
        }
        if(empty($_POST['pass']))
        {
            $GLOBALS['loginPassErr'] = 'Password is Required.';
            $hasError = true;
        }
        return !$hasError;
    }

    /**
     * signup form validation
     */
    function signupValidation(){
        $hasError = false;
        if(empty($_POST['fname']))
        {
            $GLOBALS['fnameErr'] = 'First Name is Required.';
            $hasError = true;
        }
        if(empty($_POST['lname']))
        {
            $GLOBALS['lnameErr'] = 'Last Name is Required.';
            $hasError = true;
        }
        // if(empty($_POST['gender']))
        // {
        //     $GLOBALS['genderErr'] = 'Gender is Required.';
        //     $hasError = true;
        // }
        if(empty($_POST['email']))
        {
            $GLOBALS['emailErr'] = 'Email is Required.';
            $hasError = true;
        } 
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $GLOBALS['emailErr'] = 'Invalid Email';
            $hasError = true;
        }
        if(empty($_POST['pass']))
        {
            $GLOBALS['passErr'] = 'Password is Required.';
            $hasError = true;
        }
        if(empty($_POST['cpass']))
        {
            $GLOBALS['cpassErr'] = 'Confirm Password is Required.';
            $hasError = true;
        }
        if($_POST['pass'] != $_POST['cpass'])
        {
            $GLOBALS['cpassErr'] = 'Password not matched.';
            $hasError = true;
        }
        return !$hasError;
    }

    function changePasswordValidation()
    {
        $hasError = false;
        if(empty($_POST['oldPassword']))
        {
            $GLOBALS['oldPassErr'] = 'Old Password is Required.';
            $hasError = true;
        } elseif(!verifyUserPassword($_POST['oldPassword']))
        {
            $GLOBALS['oldPassErr'] = 'Old Password not matched.';
            $hasError = true;
        }
        if(empty($_POST['newPassword']))
        {
            $GLOBALS['newPassErr'] = 'New Password is Required.';
            $hasError = true;
        }
        if(empty($_POST['cPassword']))
        {
            $GLOBALS['cPassErr'] = 'Confirm Password is Required.';
            $hasError = true;
        }
        if($_POST['newPassword'] != $_POST['cPassword'])
        {
            $GLOBALS['cPassErr'] = 'Confirm Password not matched.';
            $hasError = true;
        }
        return !$hasError;
    }
    function verifyUserPassword($pass)
    {
        global $db;
        $get_password = $db->prepare("SELECT `password` FROM `user` WHERE id = ".$_SESSION['userId']);
        $get_password->execute();
        return password_verify($pass, $get_password->fetch()['password']);
    }

    function profileValidation(){
        $hasError = false;
        if(empty($_POST['fname']))
        {
            $GLOBALS['fnameErr'] = 'First Name is Required.';
            $hasError = true;
        }
        if(empty($_POST['lname']))
        {
            $GLOBALS['lnameErr'] = 'Last Name is Required.';
            $hasError = true;
        }
        if(empty($_POST['gender']))
        {
            $GLOBALS['genderErr'] = 'Gender is Required.';
            $hasError = true;
        }
        return !$hasError;
    }
    function getMemberName($id)
    {
        global $db;
        $member_name = $db->prepare("SELECT `fname` FROM `members` WHERE id =".$id);
        $member_name->execute();
        return $member_name->fetch()['fname'];
    }
    function updateSpouse($spouseId, $memberId)
    {
        global $db;
        $spouse1 = $db->prepare("UPDATE `members` SET `spouse_id`=".$spouseId." WHERE id = ".$memberId);
        $spouse1->execute();
        $spouse2 = $db->prepare("UPDATE `members` SET `spouse_id`=".$memberId." WHERE id = ".$spouseId);
        $spouse2->execute();
    }
    function updateFather($fatherId, $memberId)
    {
        global $db;
        $father = $db->prepare("UPDATE `members` SET `father_id`=".$fatherId." WHERE id=".$memberId);
        $father->execute();
    }
    function updateMother($motherId, $memberId)
    {
        global $db;
        $mother = $db->prepare("UPDATE `members` SET `mother_id`=".$motherId." WHERE id=".$memberId);
        $mother->execute();
    }
    function addMember()
    {
        global $db;
        $add_member = $db->prepare("INSERT INTO `members`(`id`, `family_id`, `father_id`, `mother_id`, `spouse_id`, `fname`, `lname`, `gender`, `dob`, `profile`) VALUES (NULL,".$_SESSION['familyId'].",NULL,NULL,NULL,'".$_POST['fname']."','".$_POST['lname']."','".$_POST['gender']."','".$_POST['dob']."', '".AVATAR."')");
        $add_member->execute();
        if($add_member->errorInfo()[0] == "00000")
        {
            $GLOBALS['successMsg'] = "Add Member Successfully.";
        } else {
            $GLOBALS['errorMsg'] = "Add Member Failed.";
        }
    }
    function updateMember()
    {
        global $db;
        $update_member_query = "UPDATE `members` SET `fname`='". $_POST['fname'] ."',`lname`='". $_POST['lname'] ."',`gender`='". $_POST['gender'] ."',`dob`='". $_POST['dob'] ."'";
        if($_FILES['avatar'])
        {
            if($path = fileUpload())
                $update_member_query .= ",`profile`='". $path ."'";
        }
        if(isset($_POST['spouseId']))
        {
            updateSpouse($_POST['spouseId'], $_POST['memberId']);
        }
        if(isset($_POST['fatherId']))
        {
            updateFather($_POST['fatherId'], $_POST['memberId']);
        }
        if(isset($_POST['motherId']))
        {
            updateMother($_POST['motherId'], $_POST['memberId']);
        }
        $update_member_query .= " WHERE id = ".$_POST['memberId'];
        $update_member = $db->prepare($update_member_query);
        $update_member->execute();
        if($update_member->errorInfo()[0] == "00000")
        {
            $GLOBALS['successMsg'] = "Update Member Successfully.";
        } else {
            $GLOBALS['errorMsg'] = "Update Member Failed.";
        }
    }
    function getMemberPhotos()
    {
        global $db;
        $get_member_photos = $db->prepare("SELECT `fname`, `lname`, `profile` FROM `members` WHERE family_id = ".$_SESSION['familyId']);
        $get_member_photos->execute();
        return $get_member_photos->fetchAll();
    }
    function getMembersDropdownOptions(){
        global $db;
        $get_members = $db->prepare("SELECT `id`, `fname`, `lname` FROM `members` WHERE family_id = ".$_SESSION['familyId']);
        $get_members->execute();
        return $get_members->fetchAll();
    }

    function forgotPassword(){
        global $db;
        $random = rand();
        $password = password_hash($random, PASSWORD_DEFAULT);
        $to = $_POST['email'];
        $subject = "New Password from YourClan";
        $message = "your new password is ".$random;
        $headers = array(
                    'From' => 'info@yourclan.com'
                    );
        $query = $db->prepare("UPDATE `user` SET `password`='". $password ."' WHERE `email`='". $_POST['email'] ."'");
        $query->execute();
        if($query->errorInfo()[0] == "00000")
        {
            if(mail($to , $subject , $message , $headers))
            {
                $GLOBALS['successMail'] = "Mail sent successfully";
            } 
            else
            {
                $GLOBALS['errorMail'] = "Mail not sent";
            }
        } else {
            $GLOBALS['errorMail'] = "Mail not sent";
        }
    }

    function contactForm(){
        $to = CONTACTEMAIL;
        $subject = $_POST['name']." : ".$_POST['subject'];
        $message = $_POST['message'];
        $headers = array(
                    'From' => $_POST['email']
                    );
        
        if(mail($to , $subject , $message , $headers))
        {
            $GLOBALS['contactSuccessMsg'] = "Mail sent successfully";
        } 
        else
        {
            $GLOBALS['contactErrorMsg'] = "Mail not sent";
        }
    }

    function deleteMember()
    {
        global $db;
        $query = $db->prepare("DELETE FROM `members` WHERE id = ".$_POST['memberId']);
        $query->execute();
        if($query->errorInfo()[0] == "00000")
        {
            $update_spouse = $db->prepare("UPDATE `members` SET `spouse_id`=NULL WHERE spouse_id  = ".$_POST['memberId']);
            $update_spouse->execute();
            $update_father = $db->prepare("UPDATE `members` SET `father_id`=NULL WHERE father_id  = ".$_POST['memberId']);
            $update_father->execute();
            $update_mother = $db->prepare("UPDATE `members` SET `mother_id`=NULL WHERE mother_id  = ".$_POST['memberId']);
            $update_mother->execute();
            $GLOBALS['successMsg'] = "Delete Member Successfully";
        } else {
            $GLOBALS['errorMsg'] = "Delete Member Failed.";
        }
    }

    function searchMembers()
    {
        global $db;
        $query_string = "SELECT `fname`, `lname`, `gender`, `dob`, `profile` FROM `members` WHERE `fname` LIKE '%".$_GET['fname']."%' and `lname` LIKE '%".$_GET['lname']."%' and family_id=".$_SESSION['familyId'];
        if(isset($_GET['gender']) && !empty($_GET['gender']))
        {
            $query_string .= " and `gender` = '".$_GET['gender']."'";
        }
        if(isset($_GET['dob']) && !empty($_GET['dob']))
        {
            $query_string .= " and `dob` = '".$_GET['dob']."'";
        }
        $query = $db->prepare($query_string);
        $query->execute();
        return $query->fetchAll();
    }