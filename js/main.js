$(document).ready(function () {
  $("#country").on("change", function () {
    let country_value = $(this).val();
    $.ajax({
      method: "POST",
      url: "getData.php",
      data: {
        country: country_value,
      },
      datatype: "html",
      success: function (data) {
        if (data) $("#state").html(data);
        else $("#state").html('<option value="">Select State</option');
        $("#district").html('<option value="">Select District</option');
        $("#city").html('<option value="">Select City</option');
      },
    });
  });
  $("#state").on("change", function () {
    var state_value = $(this).val();
    $.ajax({
      method: "POST",
      url: "getData.php",
      data: {
        state: state_value,
      },
      datatype: "html",
      success: function (data) {
        if (data) $("#district").html(data);
        else $("#district").html('<option value="">Select District</option');
        $("#city").html('<option value="">Select City</option');
      },
    });
  });
  $("#district").on("change", function () {
    var district_value = $(this).val();
    $.ajax({
      method: "POST",
      url: "getData.php",
      data: {
        district: district_value,
      },
      datatype: "html",
      success: function (data) {
        if (data) $("#city").html(data);
        else $("#city").html('<option value="">Select City</option');
      },
    });
  });
  $("#form").on("submit", function (e) {
    let value =
      $("#city").val() +
      ", " +
      $("#district").val() +
      ", " +
      $("#state").val() +
      ", " +
      $("#country").val();
    $("#content").html("<h3>" + value + "</h3>");
    e.preventDefault();
  });
});
