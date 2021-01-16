// alert('Hello'); Testing Purpose

/*  
  1.Get the Input
  2.Convert to Numbers if Needed
  3.Validate my Inputs
  4.If errors Inform user
  5.if No error Process and display results */


//Getting the Input

function BMIcalc() {
    let ht_txt = document.getElementById("height");
    let wt_txt = document.getElementById("weight");


    //Converting to Number

    let ht = parseInt(ht_txt.value);

    //Convert the Height  to metres
    ht = ht / 100;

    let wt = parseInt(wt_txt.value);

    //Validate my Inputs

    let errMsg = "";

    if (wt <= 0) {
        errMsg = errMsg + "Weight cannot be Negative  \n";
    }

    if (ht <= 0) {
        errMsg = errMsg + "Height cannot be negative  \n";
    }
    //If errors Inform user

    if (errMsg != "") {
        alert(errMsg);
    }
    // 5.if No error Process and display results 
    else {
        let BMI = ((wt) / (ht * ht));

        var resultMsg = ""
        let display ="";
        
        if (BMI < 19) {
            
            display="Kindly try this exercise so that You become Healthy so please signup";
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are UnderWeight " + display;

        } else if (BMI < 25) {
            
            display="Kindly try this exercise so that You can be more fit so please signup";
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are Healthy \n"+display;
        } else if (BMI < 30) {
            
            display="Kindly try this exercise so that You become Healthy so please signup";
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are OverWeight \n" +display;
        } else {
           
            display="Kindly try this exercise so that You become Healthy so please signup";
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are Obese \n" +display;
        }
        // alert(resultMsg);
        // alert(display);
        document.getElementById("Message").innerHTML = resultMsg;
        
        
    }
}