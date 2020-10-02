load_data();
$("#action").val("Insert");
$("#add").click(function () {
  $("#user_form")[0].reset();
  $("#uploaded_image").html("");
  $("#button_action").val("Insert");
});
function load_data() {
  var action = "load";
  $.ajax({
    url: "action.php",
    method: "POST",
    data: { action: action },
    success: function (data) {
      $("#user_table").html(data);
    },
  });
}

$("#user_form").on("submit", function (event) {
  event.preventDefault();
  var firstName = $("#first_name").val();
  var lastName = $("#last_name").val();
  var extension = $("#user_image").val().split(".").pop().toLowerCase();
  if (extension != "") {
    if (jQuery.inArray(extension, ["gif", "png", "jpg", "jpeg"]) == -1) {
      alert("Invalid Image File");
      $("#user_image").val("");
      return false;
    }
  }
  if (firstName != "" && lastName != "") {
    $.ajax({
      url: "action.php",
      method: "POST",
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (data) {
        alert(data);
        $("#user_form")[0].reset();
        load_data();
        $("#action").val("Insert");
        $("#button_action").val("Insert");
        $("#uploaded_image").html("");
      },
    });
  } else {
    alert("Both Fields are Required");
  }
});

$(document).on("click", ".update", function () {
  var user_id = $(this).attr("id");
  var action = "fetch single userdata";
  $.ajax({
    url: "action.php",
    method: "post",
    data: { user_id: user_id, action: action },
    dataType: "Json",
    success: function (data) {
      $(".collapse").collapse("show");
      $("#first_name").val(data.first_name);
      $("#last_name").val(data.last_name);
      $("#uploaded_image").html(data.image);
      $("#hidden_user_image").val(data.user_image);
      $("#button_action").val("Edit");
      $("#action").val("Edit");
      $("#user_id").val(user_id);
    },
  });
});
$(document).on("click", ".delete", function () {
  var user_id = $(this).attr("id");
  var action = "Delete";
  $.ajax({
    url: "action.php",
    method: "POST",
    data: { user_id: user_id, action: action },
    dataType: "Json",
    success: function (data) {
      alert(data);
    },
  });
});
