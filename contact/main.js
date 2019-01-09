$(document).ready(function(){
    var yourArray = [];
    var uniqueNames = [];
    $("#Showstate").css("display", "none");
    $("#ShowCity").css("display", "none");
    $.getJSON( "countries.php", function( data ) {
      var items = [];
      $.each(data, function( key, val ) {
        items.push( "<option value='" + val + "'>" + val + ', ' + key + "</option>" );
        items.sort();
      });
        $("#country").append(items);
    });

    $("input:checkbox[name=desc]").on("change", function(){
                    if($(this).prop("checked") === false)
                    {
                         var y = yourArray;
                        yourArray = [];
                         var removeItem = $(this).val();

                         //alert('Array before removing the element = '+y);
                         y = jQuery.grep(y, function(value) {
                           return value != removeItem;
                         });
                        //alert('Array after removing the element = '+y);
                        yourArray =y;
                    }
            else {
                $("input:checkbox[name=desc]:checked").each( function() {
       // It is not checked, show your div...
                      yourArray.push($(this).val());

                    });
            }
});

    $("#country").on("change", function(){
        if($("#country").val() == "United States")
            {
                $("#Showstate").css("display", "block");
                $("#ShowCity").css("display", "block");
                $.getJSON( "states.php", function( data ) {
                  var items = [];
                  $.each( data, function( key, val ) {
                    items.push( "<option id='" + val + "'>" + val + ', ' + key + "</option>" );
                    items.sort();
                  });
                    $("#state").append(items);
                });
            }
        else
            {
                $("#Showstate").css("display", "none");
                $("#ShowCity").css("display", "none");
            }
    });
  
    $("#FormId").validate({
      errorClass: 'custom-error',
      rules: {
           fname: "required",
           lname: "required",
           Email: "required",
           company: "required",
           city: "required",
           othertext:
           {
             required: "#other:checked"
           },
           // country: {
           //   required: true,
           //   checkIfZero: true
           // },
           needs: {
             required: true,
             maxlength: 255
           },
           phone: {
              required: true,
              phoneUS: true
           }
       },
        messages: {
          city:
          {
            required: "Please enter a City."
          },
          state:
          {
            required: "Please enter a State"
          },
            Email:
            {
                required: "Please enter an email.",
                email: "Please enter a valid email."
            },
            company: {
              required: "Please Specify a Company Name."
            },
            needs: {
              required: "Please Specify your needs."
            },
            country: {
              required: "Please select country."
            },
            phone: {
              required: "Please enter a phone number."
            },
            fname: {
              required: "Please enter a first name."
            },
            lname:
            {
              required: "Please enter a last name."
            }
        },
        submitHandler: function(form) {
          const data = formToJSON(form.elements);

          $.each(yourArray, function(i, el){
    if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
});
  var object = JSON.stringify(data, null, "  ");

    var jstr = JSON.parse(object);
    jstr.desc = uniqueNames;
    jstr.worked = document.getElementById("yes").checked === true ? document.getElementById("yes").value : document.getElementById("no").value;

    // console.log(jstr.fname);
    // console.log(jstr.desc);
    //console.log(JSON.stringify(jstr));
    //https://rileyandcoemailapp.herokuapp.com/sendEmail
    $.ajax({
      url:"https://rileyandcoemailapp.herokuapp.com/sendEmail",
      type: "POST",
      dataType: "json",
      contentType:"application/json;charset=utf-8",
      data: JSON.stringify(jstr),
      success: function(data) {
          if(data.resultCode === 0) {
                  document.getElementById("FormId").reset();
                  grecaptcha.reset();
                  $("#server-error").css("display", "none");
                  $("#error-list-items").html("");
                  $('html, body').animate({ scrollTop: 0 }, 'slow');
                  $("#server-success").css("display", "block");
            }

            if(data.resultCode === 1) {
              // document.getElementById("FormId").reset();
              // grecaptcha.reset();
              $('html, body').animate({ scrollTop: 0 }, 'slow');
              $("#server-error").css("display", "block");
              $("#error-list-items").html("");
              $("#error-list-items").append("<li>" + data.responseDesc + "</li>");
            }
              }, error: function(error, err, e) {
                  // think of something clever to print to user as a friendly error message
                  //advising the user to contact Carter's Lawn Service Company.
                  document.getElementById("FormId").reset();
                  grecaptcha.reset();
                  $("#server-error").css("display", "none");
                  $("#error-list-items").html("");
                  $('html, body').animate({ scrollTop: 0 }, 'slow');
                  $("#server-error").css("display", "block");
                  $("#server-error").append("We appologize for the inconvience, please contact <a href='mailto:g.velez@rileyandco.com;l.riley@rileyandco.com;d.burns@rileyandco.com'>support</a> for help with request.");
              }
      });
          return false; // required to block normal submit since you used ajax
  }
});
const formToJSON = elements => [].reduce.call(elements, (data, element) => {

  data[element.name] = element.value;
  return data;

}, {});
});
