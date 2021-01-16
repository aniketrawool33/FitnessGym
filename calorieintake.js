// function CalorieCal(){
// alert('Connected');
// }
/*  
  1.Get the Input
  2.Convert to Numbers if Needed
  3.Validate my Inputs
  4.If errors Inform user
  5.if No error Process and display results */

function CalorieCal() {
    //1.Getting the Input
    let age_txt = document.getElementById('Age');
    // let age_txt = document.getElementById('Age'); //grey variable not used log it future use display
    let wt_txt = document.getElementById('Weight');
    let ht_txt = document.getElementById('Height');
    let activity = parseInt(document.getElementById('activity').value);
    // console.log(activity) Testing Purpose;

    //2.Convert to Numbers if Needed
    let age = parseInt(age_txt.value)
    // console.log(age);
    let wt = parseInt(wt_txt.value);
    let ht = parseInt(ht_txt.value);

    //3.Validate my Inputs
    let errMsg = ""
    if (age < 0) {
        errMsg = "Age " + age + " Cannot be Negative";
    } else if (wt < 0) {
        errMsg = "Weight " + wt + " Cannot be Negative"
    } else if (ht < 0) {
        errMsg = "Height" + ht + " Cannot Be Negative"
    }
    //4.If errors Inform user
    if (errMsg != "") {
        alert(errMsg);
    }

    //5.if No error Process and display results
    let BMR;
    if (document.getElementById('Male').checked) {
        BMR = Math.round(10 * wt + 6.25 * ht - 5 * age + 5);

        // alert('Your Basal Metabolic Rate is '+BMR);

    } else {
        BMR = Math.round(10 * wt + 6.25 * ht - 5 * age - 161);

    }


    switch (activity) {
        case 1:
            BMR = Math.round(BMR * 1.0);
            mydisplay();
            // alert('Your Basal Metabolic Rate is ' + BMR);
            break;
        case 2:
            BMR = Math.round(BMR * 1.2);
            alert('You need ' + BMR + ' to maintain your weight');
            break;

        case 3:
            BMR = Math.round(BMR * 1.375);
            alert('Your need' + BMR + ' to maintain your weight');
            break;

        case 4:
            BMR = Math.round(BMR * 1.418);
            alert('Your need' + BMR + ' to maintain your weight');
            break;

        case 5:
            BMR = Math.round(BMR * 1.462);
            alert('Your need' + BMR + ' to maintain your weight');
            break;

    }

    function mydisplay() {
        let para = document.createElement("p");
        // console.log(para); new type grey display;
        let text = document.createTextNode('Your Basal Metabolic Rate is ' + BMR);
        para.appendChild(text);
        para.style.color = 'blue'; //Multiple Times its coming

        let element = document.getElementById('display');
        element.appendChild(para);

    }
}