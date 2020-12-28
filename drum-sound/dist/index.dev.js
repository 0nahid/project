"use strict";

var numberOfdrumButtons = document.querySelectorAll(".drum").length;

for (var i = 0; i < numberOfdrumButtons; i++) {
  document.querySelectorAll(".drum")[i].addEventListener("click", function () {
    this.style.color = "red";
  });
} // var audio= new Audio("sounds/tom-1.mp3");
//         audio.play();