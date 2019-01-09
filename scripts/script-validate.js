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
         file: {
           required: true,
           accept: "application/pdf"
         },
         phone: {
            required: true,
            phoneUS: true
         }
     },
      messages: {
        file: {
          accept: "Please ony upload a PDF document"
        },
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
      submitHandler: function() {
       
       var myForm = document.getElementById('FormId')
        var data = new FormData(myForm)

        axios.post('https://rileyandcoemailapp.herokuapp.com/sendEmail', data)
        .then(function (response) {
          if(response.data.resultCode === 0) {
            document.getElementById("FormId").reset();
            grecaptcha.reset();
            $("#server-error").css("display", "none");
            $("#error-list-items").html("");
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            $("#server-success").css("display", "block");
      }

      if(response.data.resultCode === 1) {
        // document.getElementById("FormId").reset();
        // grecaptcha.reset();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#server-error").css("display", "block");
        $("#error-list-items").html("");
        $("#error-list-items").append("<li>" + data.responseDesc + "</li>");
      }
        })
        .catch(function (error) {
          // think of something clever to print to user as a friendly error message
          //advising the user to contact Carter's Lawn Service Company.
          document.getElementById("FormId").reset();
          grecaptcha.reset();
          $("#server-error").css("display", "none");
          $("#error-list-items").html("");
          $('html, body').animate({ scrollTop: 0 }, 'slow');
          $("#server-error").css("display", "block");
          $("#server-error").append("We appologize for the inconvience, please contact <a href='mailto:g.velez@rileyandco.com;l.riley@rileyandco.com;d.burns@rileyandco.com'>support</a> for help with request.");
        });
            
           return false; // required to block normal submit since you used ajax
      }
  });
});

