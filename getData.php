<?php
include_once("DB/config.php");
if (!empty($_POST["country"])) {
    $country = $_POST['country'];
    $query = "SELECT DISTINCT state FROM country_data WHERE country = '$country' ORDER BY state ASC";
    $result = $connect_webapps->query($query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select State</option>';
        while ($rows = $result->fetch_assoc()) {
            echo '<option value="' . $rows['state'] . '">' . $rows['state'] . '</option>';
        }
    }
} elseif (!empty($_POST['state'])) {
    $state = $_POST['state'];
    $query = "SELECT DISTINCT district FROM country_data where state='$state' ORDER BY district ASC";
    $result = $connect_webapps->query($query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select District</option>';
        while ($rows = $result->fetch_assoc()) {
            echo '<option value="' . $rows['district'] . '">' . $rows['district'] . '</option>';
        }
    }
} elseif (!empty($_POST['district'])) {
    $district = $_POST['district'];
    $query = "SELECT DISTINCT city FROM country_data where district='$district' ORDER BY city ASC";
    $result = $connect_webapps->query($query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select City</option>';
        while ($rows = $result->fetch_assoc()) {
            echo '<option value="' . $rows['city'] . '">' . $rows['city'] . '</option>';
        }
    }
}
