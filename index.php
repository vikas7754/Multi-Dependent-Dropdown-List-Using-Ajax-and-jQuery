<?php
include "DB/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Ajax Dropdown</title>
    <style>
        body {
            background: #010454;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 600px;
        }

        .box {
            background: #a803ab;
            padding: 25px 15px;
            border: 1px solid #fff;
            border-radius: 10px;
        }

        label,
        h2 {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box mt-3">
            <h2 class="text-center">Ajax Dropdown</h2>
            <div class="form-group py-2">
                <label for="year">Year :</label>
                <select class="form-select" id="year">
                    <option value=""> Select Year</option>
                    <?php
                    $query = "SELECT DISTINCT year FROM car ORDER BY year DESC";
                    $result = $connect_webapps->query($query);
                    while ($rows = $result->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $rows['year']; ?>"><?php echo $rows['year']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group py-2">
                <label for="make">Make :</label>
                <select class="form-select" id="make">
                    <option value="">Select Make</option>
                </select>
            </div>
            <div class="form-group py-2 ">
                <label for="model">Model :</label>
                <select class="form-select" id="model">
                    <option value="">Select Model</option>
                </select>
            </div>
            <div class="form-group py-2 ">
                <label for="style">Style :</label>
                <select class="form-select" id="style">
                    <option value="">Select Style</option>
                </select>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#year").on('change', function() {
                let car_year = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "getData.php",
                    data: {
                        year: car_year
                    },
                    datatype: "html",
                    success: function(data) {
                        if (data)
                            $("#make").html(data);
                        else
                            $("#make").html('<option value="">Select Make</option');
                        $("#model").html('<option value="">Select Model</option');
                        $("#style").html('<option value="">Select Style</option');
                    }
                });
            });
            $("#make").on('change', function() {
                var car_make = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "getData.php",
                    data: {
                        make: car_make
                    },
                    datatype: "html",
                    success: function(data) {
                        if (data)
                            $("#model").html(data);
                        else
                            $("#model").html('<option value="">Select Model</option');
                        $("#style").html('<option value="">Select Style</option');
                    }
                });
            });
            $("#model").on('change', function() {
                var car_model = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "getData.php",
                    data: {
                        model: car_model
                    },
                    datatype: "html",
                    success: function(data) {
                        if (data)
                            $("#style").html(data);
                        else
                            $("#style").html('<option value="">Select Style</option');
                    }
                });
            });
        });
    </script>
</body>

</html>