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
    <link rel="stylesheet" href="css/style.css">
    <title>Ajax Dynamic Dropdown</title>
</head>

<body>
    <div class="container">
        <div class="box mt-3">
            <h2 class="text-center">Ajax Dropdown</h2>
            <form id="form">
                <div class="form-group py-2">
                    <label for="country">Country :</label>
                    <select class="form-select" id="country">
                        <option value=""> Select Country</option>
                        <?php
                        $query = "SELECT DISTINCT country FROM country_data ORDER BY country DESC";
                        $result = $connect_webapps->query($query);
                        while ($rows = $result->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $rows['country']; ?>"><?php echo $rows['country']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group py-2">
                    <label for="state">State :</label>
                    <select class="form-select" id="state">
                        <option value="">Select State</option>
                    </select>
                </div>
                <div class="form-group py-2 ">
                    <label for="district">District :</label>
                    <select class="form-select" id="district">
                        <option value="">Select District</option>
                    </select>
                </div>
                <div class="form-group py-2 ">
                    <label for="city">City :</label>
                    <select class="form-select" id="city">
                        <option value="">Select City</option>
                    </select>
                </div>
                <div class="block-btn">
                    <input type="submit" value="Submit" class="btn btn-primary submit mt-3">
                </div>
            </form>
        </div>
        <div class="content mt-5" id="content"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>