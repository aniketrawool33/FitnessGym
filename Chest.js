// // Get the video
// var video = document.getElementById("myVideo");

// // Get the button
// var btn = document.getElementById("myBtn");

// // Pause and play the video, and change the button text
// function myFunction() {
//     if (video.paused) {
//         video.play();
//         btn.innerHTML = "Pause";
//     } else {
//         video.pause();
//         btn.innerHTML = "Play";
//     }
// }

let video = document.getElementsByTagName("video");
let btn = document.getElementsByTagName("button");
console.log(video.length);

function myFunction() {
    for (let i = 0; i < video.length; i++) {
        if (video[i].paused) {
            video[i].play();
            btn[i].innerHTML = "Pause";
         } else {
            video[i].pause(); 
            btn[i].innerHTML = "Play";
        }
    }

}  //Problem :Several videos and one to play at a time Use Jquery