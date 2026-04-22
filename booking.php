<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="container layout_padding">
        <div class="heading_container heading_center">
            <h2>Booking <span>Confirmed</span></h2>
        </div>
        
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="box p-4 shadow-sm bg-light">
                    <p>Thank you for choosing Mico Hospital! Your booking is accepted.</p>
                    <hr>
                    <h4>Appointment Details:</h4>
                    <ul>
                        <li><strong>Patient:</strong> <?php echo $_POST['patient_name']; ?></li>
                        <li><strong>Doctor:</strong> <?php echo $_POST['doctor_name']; ?></li>
                        <li><strong>Department:</strong> <?php echo $_POST['department_name']; ?></li>
                        <li><strong>Phone:</strong> <?php echo $_POST['phone']; ?></li>
                        <li><strong>Symptoms:</strong> <?php echo $_POST['symptoms']; ?></li>
                        <li><strong>Date:</strong> <?php echo $_POST['appointment_date']; ?></li>
                    </ul>
                    <a href="index.php" class="btn btn-primary mt-3">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>