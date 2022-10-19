<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "hci";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    if(isset($_POST['submit'])){

    if(!empty($_POST['fname']) && !empty($_POST['lname']) 
    && !empty($_POST['email']) && !empty($_POST['code']) 
    && !empty($_POST['phoneno']) && !empty($_POST['city']) 
    && !empty($_POST['state']) && !empty($_POST['zip']) 
    && !empty($_POST['bloodgroup']) && !empty($_POST['occupation'])
    && !empty($_POST['priordonor']) && !empty($_POST['disease']) && !empty($_POST['allergy']))
     {
        $fname = $_POST['fname'] ;
        $lname = $_POST['lname'] ;
        $email = $_POST['email'] ;
        $code = $_POST['code'] ;
        $phoneno = $_POST['phoneno'] ;
        $city = $_POST['city'] ;
        $state = $_POST['state'] ;
        $zip = $_POST['zip'] ;
        $bloodgroup = $_POST['bloodgroup'] ;
        $occupation = $_POST['occupation'] ;
        $priordonor = $_POST['priordonor'] ;
        $disease = $_POST['disease'] ;
        $allergy = $_POST['allergy'] ;

        $query = "insert into damuform(first name, last name, email address,code, phone number, city, state, zip, bloodgroup, occupation, previous donor, chronic ilness, allergies ) 
        values('$fname','$lname','$email','$code','$phoneno','$city','$state','$zip','$bloodgroup','$occupation','$priordonor','$disease','$allergy')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "Form submitted sucessfully";
        }
        else{
            echo "Form not submitted";
        }
     }
     else{
        echo "all fields required";
    }
    }
?>