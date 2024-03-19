function validation(){
    var name1=document.reg_form.first_name.value; //variable for checking first name field.
    var name2=document.reg_form.last_name.value; //variable for checking second name field.
    var email_addr=document.reg_form.email_addr.value; //variable for checking email field.
    var pass=document.reg_form.password_field.value; //variable for checking Password field.
    var pass2=document.reg_form.confirm_password_field.value; //variable for checking Password field.

    //when fields are both empty
    if(name1.length=="" && name2.length=="" && email_addr.length=="" && pass.length==""){
        alert("All are fields are empty. Please fill out all the fields below!"); 
        return false;
    }

    else{

        //when first name field is empty
        if(name1.length==""){
            alert("First name field is empty.");
            return false;
        }

        //when second name field is empty
        if(name2.length==""){
            alert("Second name field is empty.");
            return false;
        }

        //when email field is empty
        if(email_addr.length==""){
            alert("Email field is empty.");
            return false;
        }

        //when password field is empty
        if(pass.length==""){
            alert("Password field is empty.");
            return false;
        }

        //when confirm password field is empty
        if(confirm_password_field.lenght==""){
            alert("Please confirm your password.");
            return false;
        }

        //to check if password characters are greater than 8
        if(pass.length<8){
            alert("Password must be 8 or more characters.");
            return false;
        }

        //to check if passwords match
        if(pass2 != pass){
            alert("Password does not match.");
            return false;
        }

    }
}       