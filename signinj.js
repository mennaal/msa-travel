

                function myfunction(){

                    var pass = document.getElementById('pass').value;
                    var confirm_pass = document.getElementById('confirm_pass').value;
                    if (pass != confirm_pass) {
                        alert("Use same password")
                    } else {
                        alert("Password matched")
                    }

                  

                    if(document.signin.username.value == "")
                    {
                        alert('username must be fillrd out ')
                    }
                    if(document.signin.password.value == "")
                    {
                        alert('password must be fillrd out ')
                    }
                    if(document.signin.confirmpassword.value == "")
                    {
                        alert('confirmpassword must be fillrd out ')
                    }
                    if(document.signin.age.value == "")
                    {
                        alert('age must be fillrd out ')
                    }
                    
                }


                function checkPwd(str) {
                    if (str.length < 8) {
                        alert("too_short");
                    }  else if (str.search(/[a-zA-Z]/) == -1) {
                        alert("no_letter");
                    }  else if (str.search(/[A-Z]/) == -1) {
                        alert("Your password needs an upper case letter")
                    }  else if (str.search(/[a-z]/) == -1) {
                        alert("Your password needs an lower case letter")
                    }  else if (str.search(/\d/) == -1) {
                        alert("no_num");
                    }  else if (str.search(/[!@#$%^&*]/) == -1) {
                        alert("no_special_charcter");
                    }
                  }

                  
                  function checkAge(age) {
                    if (age < 16){
                      alert("This website requires you to be 16 years or older to enter")
                    }
                    else if (age > 100){
                      alert("Your age is not valid")
                    }
                }
                  


                