$(document).ready(function () {

  // Name Validation
  $("#firstName").blur(function () {

    var name = $("#firstName").val();
    var filter = /^[a-zA-Z\s]+$/i;
    if (name.length === 0) {
      $("#name_error").text("");
      $('#submitBtn').attr('disabled', false);
    } else if (!filter.test(name)) {
      $("#name_error").text("Please enter valid name.");
      $('#submitBtn').attr('disabled', true);
      name.focus;
    } else {
      $("#name_error").text("");
      $('#submitBtn').attr('disabled', false);
    }
  });

  $("#lname").blur(function () {

    var lname = $("#lname").val();
    var filter = /^[a-zA-Z\s]+$/i;
    if (lname.length === 0) {
      $("#lname_error").text("");
      $('#submitBtn').attr('disabled', false);
    } else if (!filter.test(lname)) {
      $("#lname_error").text("Please enter valid name.");
      $('#submitBtn').attr('disabled', true);
      lname.focus;
    } else {
      $("#lname_error").text("");
      $('#submitBtn').attr('disabled', false);
    }
  });
  // E-mail Validation
  $("#email").blur(function () {

    var email = $("#email").val();
    var filter = /^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/;
    if (email.length === 0) {
      $("#email_error").text("");
      $('#submitBtn').attr('disabled', false);
    } else if (!filter.test(email)) {
      $("#email_error").text("Please enter valid email address.");
      $('#submitBtn').attr('disabled', true);
      email.focus;
    } else {
      $("#email_error").text("");
      $('#submitBtn').attr('disabled', false);
    }
  });

  // Phone Validation
  $("#phoneNumber").blur(function () {

    var ph = $("#phoneNumber").val();
    var filter = /^[0-9]{10}$/;
    if (ph.length === 0) {
      $("#phone_error").text("");
      $('#submitBtn').attr('disabled', false);
    } else if (!filter.test(ph)) {
      $("#phone_error").text("Please enter valid Phone Number.");
      $('#submitBtn').attr('disabled', true);
      ph.focus;
    } else {
      $("#phone_error").text("");
      $('#submitBtn').attr('disabled', false);
    }
  });

  // username Validation
  $("#username").blur(function () {

    var username = $("#username").val();
    var filter = /^[a-zA-Z\d\_]+$/i;

    if (username.length === 0) {
      $("#username_error").html("");
      $('#submitBtn').attr('disabled', false);
    } else if (!filter.test(username)) {
      $('#submitBtn').attr('disabled', true);
      // $("#username_error").text("Please enter valid username. \n Note : \n * Must use only letters, number,underscore and space not allow in the usrname");
      $("#username_error").text("Please enter valid username.");
      username.focus;
    } else {
      $("#username_error").text("");
      $('#submitBtn').attr('disabled', false);
    }
  });

  // Password Validation
  $("#password").blur(function () {

    var pass = $("#password").val();
    var filter = /^[a-zA-Z\d\-_]+$/i;
    if (pass.length === 0) {
      $("#password_error").html("");
      $('#submitBtn').attr('disabled', false);
    } else if (!filter.test(pass)) {
      $('#submitBtn').attr('disabled', true);
      // $("#password_error").html("Please enter valid Password. <br> note : <br>> * Must use only letters, number,underscore and space not allow in the password");
      $("#password_error").html("Please enter valid Password.");
      pass.focus;
    } else {
      $("#password_error").text("");
      $('#submitBtn').attr('disabled', false);
    }
  });

  // // submit registration_form
  $('#registration_form').submit(function (event) {
    $("#loading").show();
    event.preventDefault(); // prevent the default form submission
    var formData = $(this).serialize(); // serialize the form data

    $.ajax({
      url: 'account_verification.php', 
      method: 'POST',
      data: formData,
      success: function (response) {
        console.log(response);
        if (response == 1) {
          window.location.href = 'otp_form.php'; // redirect to login page
          $("#loading").hide();
        } else {
          $('#errorMsg').text(response); // display error message
          $('.notification').show();
          setTimeout(function () {
            $(".notification").hide();
          }, 100000);
        }

      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText, error);
        $('#errorMsg').text(error);
        // handle the error
        $('.notification').show();
        setTimeout(function () {
          $(".notification").hide();
        }, 20000);
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });



  
// submit OTP Form

  $('#OTP_form').submit(function (event) {
    $("#loading").show();
    event.preventDefault(); // prevent the default form submission
    var formData = $(this).serialize();
     // serialize the form data

    $.ajax({
      url: 'account_create.php',
      method: 'POST',
      data: formData,
      success: function (response) {
        console.log(response);
        if (response == 1) {
          window.location.href = 'congratulations_page.html'; // redirect to congratulations_page
          $("#loading").hide();
        } else {
          alert(response);
          $("#otp").val('');
          // $('#errorMsg').text(response); // display error message
          $('.notification').show();
          setTimeout(function () {
            $(".notification").hide();
          }, 20000);
        }

      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText, error);
        $('#errorMsg').text(error);
        // handle the error
        $('.notification').show();
        setTimeout(function () {
          $(".notification").hide();
        }, 20000);
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });















  // submit login form 
  $('#Login_form').submit(function (event) {
    $("#loading").show();
    event.preventDefault(); // prevent the default form submission
    var formData = $(this).serialize();
     // serialize the form data

    $.ajax({
      url: 'login_page.php',
      method: 'POST',
      data: formData,
      success: function (response) {
        console.log(response);
        if (response == 1) {
          window.location.href = '../dashboard'; // redirect to dashboard page
          // $("#loading").hide();
        } else {
          $('#errorMsg').text(response); // display error message
          $('.notification').show();
          setTimeout(function () {
            $(".notification").hide();
          }, 20000);
        }

      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText, error);
        $('#errorMsg').text(error);
        // handle the error
        $('.notification').show();
        setTimeout(function () {
          $(".notification").hide();
        }, 20000);
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });

  // display the demo service url
  $("#service_name").keyup(function (e) {
    var service_name = $("#service_name").val();
    $("#final_service_name").text(service_name + ".erppr.xyz");
  });

  // Servce Name Validation
  $("#service_form input").keydown(function (event) {
    var service_name = $("#service_name").val();
    var filter = /^[a-z\d\-_]+$/i;

    if (event.keyCode === 13) {
      event.preventDefault();
      if (service_name.length === 0) {
        $("#validation_errors").text("");
      } else if (!filter.test(service_name)) {
        $("#validation_errors").text(" Please enter valid service name.");
        $("#submit_service_name").attr("disabled", true);
        service_name.focus;
      } else {
        $("#submit_service_name").attr("disabled", false);

      }
    }
  });

  // Servce Name Validation 
  $("#submit_service_name").click(function () {
    var service_name = $("#service_name").val();
    var filter = /^[a-z\d\-_]+$/i;

    if (service_name.length === 0) {
      $("#validation_errors").text(" ");
    } else if (!filter.test(service_name)) {
      $("#validation_errors").text(" Please enter valid service name.");
      $("#submit_service_name").attr("disabled", true);
      service_name.focus;
    } else {
      $("#submit_service_name").attr("disabled", false);

    }
  });
  
  // submit service_form 
  $('#service_form').submit(function (event) {
    $("#loading").show();
    event.preventDefault(); // prevent the default form submission
    var formData = $(this).serialize(); // serialize the form data

    $.ajax({
      url: 'new_service_create.php',
      method: 'POST',
      data: formData,
      success: function (response) {
        console.log(response);
        if (response == 1) {
          window.location.href = '../dashboard.php'; // redirect to dashboard page
          $("#loading").hide();
        } else {
          $('#validation_errors').text(response); // display error message
        }

      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText, error);
        $('#validation_errors').text(error);
        // handle the error
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });


  /*
  * This script triggers the service tab when 
  * the service button is clicked in the dashboard page.
  */
  $("#view_service").click(function (e) {
    $("#v-pills-services-tab").trigger("click");
  });

  /*
  * JavaScript code to show/hide the loading spinner
  */
  $(document)
    .ajaxStart(function () {
      $("#loading").show();
    })
    .ajaxStop(function () {
      $("#loading").hide();
    });


  /**
 * Display the details of all the services in the table.
 */

  $("#v-pills-services-tab").click(function () {
    // Show the loading spinner
    $("#loading").show();

    // Send an AJAX request to the server
    $.ajax({
      url: "functions/service_page.php",
      type: "GET",
      dataType: "json",
      success: function (response) {
        output = "";
        if (response) {
          service = response;
        } else {
          service = " ";
        }
        for (i = 0; i < service.length; i++) {
          let service_state = service[i].state;
          output +=
            "<tr> " +
            "<td data_sname='" +
            service[i].service_name +
            "' > " +
            service[i].service_name +
            "</td>" +
            "<td> <a class='text-dark' target='_blank' href='"+
            service[i].service_url+
            "'>"+
            service[i].service_url +
            "</a></td>";
          switch (service_state) {

            case "draft":
              output +=
                "<td> <span class='badge bg-secondary'>" +
                service[i].state +
                "</span></td>" +
                "<td> <button type='button' class='btn btn-danger' data-sid='" +
                service[i].id +
                "' disabled>Waiting</button></td>";
              break;

            case "waiting":
              output +=
                "<td> <span class='badge bg-secondary'>" +
                service[i].state +
                "</span></td>" +
                "<td> <button type='button' class='btn btn-danger' data-sid='" +
                service[i].id +
                "'  disabled>Waiting</button></td>";
              break;

            case "ready":
              output +=
                "<td> <span class='badge bg-primary'>" +
                service[i].state +
                "</span></td>" +
                "<td> <button type='button' class='btn btn-success' data-sid='" +
                service[i].id +
                "' id='startBtn'>Start</button></td>";;
              break;

            case "running":
              output +=
                "<td> <span class='badge bg-success'>" +
                service[i].state +
                "</span></td>" +
                "<td> <button type='button' class='btn btn-danger' data-sid='" +
                service[i].id +
                "' id='stopBtn'>Stop</button></td>";
              break;

            case "stop":
              output +=
                "<td> <span class='badge bg-warning text-dark'>" +
                service[i].state +
                "</span></td>" +
                "<td> <button type='button' class='btn btn-success' data-sid='" +
                service[i].id +
                "' id='startBtn'>Start</button></td>";
              break;

            case "deleted":
              output +=
                "<td> <span class='badge bg-dark text-light'>" +
                service[i].state +
                "</span></td>" +
                "<td> <button type='button' class='btn btn-dark' data-sid='" +
                service[i].id +
                "' disabled>Deleted</button></td>";

          }
          output +=
            '<td style="text-align: right;"> <button data-sid="' +
            service[i].id +
            '" id="deleteBtn" class="btn btn-light"><span class="material-symbols-outlined">delete</span></button></td> </tr>';
        }
        $("#service_tbody").html(output);
      },
      error: function (xhr, status, error) {
        // Handle any errors that occurred during the request
        console.log(error);
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });

  /*
  * Delete service process
  */
  $("#service_tbody").on("click", "#deleteBtn", function () {
    let id = $(this).attr("data-sid");
    let text =
      "Warning ! Once your service is deleted all files and data will be lost, it cannot be restored. Are you sure you want to remove this service? ";
    if (confirm(text) == true) {
      $("#loading").show();
      $.ajax({
        type: "POST",
        url: "functions/actions.php",
        data: { service_id: id, action: "delete" },
        success: function (response) {
          // console.log(response);
          $("#v-pills-services-tab").trigger("click");
          $("#msg").html(response);
        },
        error: function (xhr, status, error) {
          // Handle any errors that occurred during the request
          console.log(error);
          $("#msg").html(error);
        },
        complete: function () {
          // Hide the loading spinner
          $("#loading").hide();
        },
      });
    }
  });

  /*
  * Start Service Process 
  */
  $("#service_tbody").on("click", "#startBtn", function () {
    let id = $(this).attr("data-sid");
    $("#loading").show();
    $.ajax({
      type: "POST",
      url: "functions/actions.php",
      data: { service_id: id, action: "start" },
      success: function (response) {
        // console.log(response);
        $("#v-pills-services-tab").trigger("click");
        $("#msg").html(response);
      },
      error: function (xhr, status, error) {
        // Handle any errors that occurred during the request
        console.log(error);
        $("#msg").html(error);
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });

  /*
  * Stop Service Process
  */
  $("#service_tbody").on("click", "#stopBtn", function () {
    $("#loading").show();
    let id = $(this).attr("data-sid");
    $.ajax({
      type: "POST",
      url: "functions/actions.php",
      data: { service_id: id, action: "stop" },
      // dataType: "dataType",
      success: function (response) {
        // console.log(response)
        $("#v-pills-services-tab").trigger("click");
        $("#msg").html(response);
      },
      error: function (xhr, status, error) {
        // Handle any errors that occurred during the request
        console.log(error);
        $("#msg").html(error);
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });

/*
* Forgotten search account
*/

  $('#search_account_form').submit(function (event) {
    $("#loading").show();
    event.preventDefault(); // prevent the default form submission
    var formData = $(this).serialize(); // serialize the form data

    $.ajax({
      url: 'search_account.php',
      method: 'POST',
      data: formData,
      success: function (response) {
        console.log(response);
        $(".card").html(response);
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText, error);
        $('#errorMsg').text(error);
        // handle the error
        $('.notification').show();
        setTimeout(function () {
          $(".notification").hide();
        }, 20000);
      },
      complete: function () {
        // Hide the loading spinner
        $("#loading").hide();
      },
    });
  });

  
});