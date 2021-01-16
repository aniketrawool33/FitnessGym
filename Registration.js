function Validate() {

    //Accept the Input

    let email = document.getElementById('email').value; //document ye whole page
    if (email.indexOf('@') <= 0) {
        document.getElementById("Message").innerHTML = "**Invalid @ position";
        return false; //so server wapas aaye nahi // action.php chala jaayega with wrong values
    }

    if ((email.charAt(email.length - 4) != '.' && email.charAt(email.length - 3) != '.')) {
        document.getElementById("Message").innerHTML = "**Invalid . position at 4  aor 3";
        return false;
    } //thapa@gmail.com   //15-4=11 But charAt starts from 0 // ya .com or .co but .c nahi and .commmerce nahi

    let password = document.getElementById('pwd').value;
    if ((password.length < 5) || (password.length > 20)) {
        document.getElementById("password").innerHTML = "** Password length must be between 5 and 20 ";
        return false;
    }

    let confirmPassword = document.getElementById('con_pwd').value; //Copy Paste Tech id
    if (password != confirmPassword) {
        document.getElementById("ConfirmPassword").innerHTML = "** Password and Confirm Password is Not Matching ";
        return false;
    }

    //Advance email validation using Regex
    // let reg=/^([A-z-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/ ; //Regex Explained
    //  console.log(reg);   
      
    //let reg=/^[A-Za-z._]{3,}@[A_Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
    //let email1 = document.getElementById('email').value
    // let address=document.email_form.email.value;
    // console.log(address);
    
    if(reg.test(email1)) //Address Variable is tested against Regular expression
    {
        document.getElementById("Message").innerHTML = "**Valid Email address";
         
    }
    else{
        
        document.getElementById("Message").innerHTML = "**Invalid Email address";
        return false;
    }

    //regex
    //  Step1 :/  / //Regex Expression in between
    //  Step2:/^$/ //Start and End
    //  Step3:/[A-Za-z]/
    //  Step4:{2,6}--Min 2 characters and Max 6 characters 
    //  Step5:\ --Escape Character

} 