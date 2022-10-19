<?php 
include_once("conn/conn.php");
include_once("response.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Get vaccine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

</head>
<body>  
    <section class="back-ground">
    <div class="container text-center">
        <img class="text-center" src="logo.jpg">
    </div>
    <?php 
    if (isset($_SESSION['registered'])) {
            echo $_SESSION['registered'];
            unset($_SESSION['registered']);
         } ?>
        <div class="container">
            
            <h2 class="text-center">Fill this form to register for vaccination</h2>
            <form action="vaccineRegister.php" method="POST" class="vaccine">
                
                <fieldset>
                    <legend>Enter your Details</legend>
                    <div class="mb-3">
                    <div class="form-label">1.First Name</div>
                    <input type="text" name="firstname" placeholder="Enter your first name" class="form-control" required></div>

                    <div class="mb-3">
                    <div class="form-label">2.Second Name</div>
                    <input type="text" name="secondname" placeholder="Enter your second name" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                    <div class="form-label">3.Phone Number</div>
                    <input type="tel" name="contact" placeholder="0712435678" class="form-control" required>
                    </div>

                    <div class="mb-3">
                    <div class="form-label">4.Email</div>
                    <input type="email" name="email" placeholder="username@gmail.com" class="form-control" required>
                    </div>
                     
                    <div class="row g-3 mb-3">
                    <div class="form-label">5.Select County to register</div>
                    <!-- county -->
                    <select class="col-sm-3 m-3" id="county" name="county">
                        <option value="">Select County</option>
                            <?php

                            $query = "select * from counties";
                            // $query = mysqli_query($con, $qr);
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                    <option value="<?php echo $row['county_id']; ?>"><?php echo $row['county_name']; ?></option>
                            <?php
                                }
                            }

                            ?>

                        </select>

                    <!-- sub county-->
                    <select id="Subcounty" name="subcounty" class="col-sm-3 m-3" required>
                        <option value="">Select subcounty</option>
                    </select>

                    <!-- station-->
                    <select id="station" class="col-sm-3 m-3" name="station" required>
                        <option value="">Select station</option>
                    </select>
                    </div>
                    
                    
                    <div class="mb-3">
                    <div class="form-label">6.Select date for vaccination</div>
                    <input type="date" id="start" name="vaccine_date" min="2022-01-01" max="2022-12-31" class="form-control"><span class="validity"></span>
                    </div>

                    <input type="submit" name="submit" value="Confirm Registration" class="btn btn-primary" onclick="">

                    
                </fieldset>

            </form>

           

        </div>
    </section>
    
<script>
        $(document).ready(function() {
            $("#county").on('change', function() {
                var county_id = $(this).val();

                $.ajax({
                    method: "POST",
                    url: "response.php",
                    data: {
                        id: county_id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#Subcounty").html(data);
                        $("#station").html('<option value="">Select station</option');

                    }
                });
            });
            $("#Subcounty").on('change', function() {
                var subcounty_id = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "response.php",
                    data: {
                        sid: subcounty_id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#station").html(data);

                    }

                });
            });
        });
    </script>
</body>
</html>

   