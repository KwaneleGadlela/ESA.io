function validation(){
    var id=document.f1.login_field.value; //variable for checking username field!!!
    var ps=document.f1.password_field.value; //variable for checking username field!!!

    //when fields are both empty
    if(id.length=="" && ps.length==""){
        alert("User Name and Password fields are empty"); 
        return false;
    }

    else{
        //when username field is empty
        if(id.length==""){
            alert("Username is empty");
            return false;
        }

        //when password field is empty
        if(ps.length==""){
            alert("Password field is empty");
            return false;
        }
    }
} 