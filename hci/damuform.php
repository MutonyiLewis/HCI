
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate blood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="css" href="css/style.css">
</head>
<body>
    <div class="container text-center">
        <img class="text-center " src="logo.jpg" width = "300" height = "200">
    </div>
    <?php 
    if (isset($_SESSION['registered'])) {
            echo $_SESSION['registered'];
            unset($_SESSION['registered']);
         } ?>
    <div class="container">
        <h2 class="text-center">Blood Donation Registration Form</h2>

        <form action="insert.php" method="post">
            <div class="row mb-3">
            <label for="exampleInputEmail1" class="form-label">1. Full Name</label>
            <div class="col">
                <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name" required>
            </div>
            <div class="col">
                <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name" required>
            </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">2. Email address</label>
                <input type="email" name="email" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="row g-2 mb-3">
                <label for="exampleInputEmail1" class="form-label">3. Phone number</label>
            <div class="col-sm-2">
                <input type="text" name="code" class="form-control" placeholder="Code" aria-label="City" required>
            </div>
            <div class="col-sm">
                <input type="text" name="phoneno" class="form-control" placeholder="" aria-label="State" required>
            </div>
            </div>

            <div class="mb-3">
            <div class="row g-3 mb-3">
                <label for="exampleInputEmail1" class="form-label">3. What is your address?</label>
            <div class="col-sm-7">
                <input type="text" name="city" class="form-control" placeholder="City" aria-label="City" required>
            </div>
            <div class="col-sm">
                <input type="text" name="state" class="form-control" placeholder="State" aria-label="State" required>
            </div>
            <div class="col-sm">
                <input type="text" name="zip"class="form-control" placeholder="Zip" aria-label="Zip" required>
            </div>
            </div>

            <div class="mb-3">
            <div class="col-12 mb-3">
                <label class="mb-3" for="inlineFormSelectPref">4. What is your bloodgroup?</label>
                <select name="bloodgroup"class="form-select mb-3" id="inlineFormSelectPref" required>
                <option selected disabled>Please select</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="0">I'm not sure</option>
                </select>
            </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">5. Occupation?</label>
                <input type="text" name="occupation" class="form-control" id="exampleInputPassword1"required>
            </div>

            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">6. Have you donated blood before?</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="priorDonor" id="yes" value="yes" required>
            <label class="form-check-label" for="yes">
                yes
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="priorDonor" id="no" value="no" checked>
            <label class="form-check-label" for="no">
                no
            </label>
            </div>
            </div>

            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">7. Do you have any disease?</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="disease" id="yes" value="yes">
            <label class="form-check-label" for="yes" required>
                yes
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="disease" id="no" value="no" checked>
            <label class="form-check-label" for="no">
                no
            </label>
            </div>
            </div>

            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">7. Do you have any allergies?</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="allergy" id="yes" value="yes">
            <label class="form-check-label" for="yes" required>
                yes
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="allergy" id="no" value="no" checked>
            <label class="form-check-label" for="no">
                no
            </label>
            </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" required>I agree to terms and conditions</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>