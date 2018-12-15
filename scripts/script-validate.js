$(document).ready(function() {
  $("#FormId").validate({
    errorClass: 'custom-error',
    rules: {
         fname: "required",
         lname: "required",
         pname: "required",
         plocation: "required",
         pdetails1: "required",
         pdetails2: "required",
         pdetails3: "required",
         pdetails4: "required",
         pdetails5: "required",
         pdetails6: "required",
         pdetails7: "required",
         pdetails8: "required",
         pdetails9: "required",
         pdetails10: "required",
         Email: "required",
         company: "required",
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
           $.ajax({
               type: "POST",
               url: "https://rileyandcoemailapp.herokuapp.com/sendEmail",
               data: JSON.stringify(data),
			   dataType: "json",
			   crossDomain:true,
			   contentType:"application/json;charset=utf-8",
			   cache: false,
               success: function (data) {
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
