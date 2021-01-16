function validate() {
    //Accept the Input

    let user = document.getElementById('email').value;
    let pass = document.getElementById('pwd').value;
    


    //Validating the Input
    let attempt = 3;
    if (user == null || pass == "") {
        alert("Please enter the username.");

    } else if (user == null || pass == "") {
        alert("Please enter the password.");
    } 
    else if (user === 'asingh@1248' && pass === '123') {
        alert('Login Successfully');
        // window.location = "success.html"; Concept of the PHP AJAX, .href,redirect in 
        return true;
    }
    //Using the Logic of the Attempt
    // else {
    //     // attempt--;
    //     // alert('You have ' + attempt + ' left');
    //     // console.log(attempt);
        
    //     // if (attempt === 2) {
    //     //     document.getElementById("email").disabled = true;
    //     //     document.getElementById("pwd").disabled = true;
    //     //     document.getElementById("submit").disabled = true;
    //     //     return false;
    //     // }
    //     alert("Login was unsuccessful, please check your username and password");
    // }
}