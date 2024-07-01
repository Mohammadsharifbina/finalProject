"use strict";

let fullName = document.getElementById("name");
let mobileNum = document.getElementById("mobile-number");
let emailAdd = document.getElementById("email-address");
let studentId = document.getElementById("student-id");
const submit = document.getElementById("button");

const form = document.getElementById("form");
const checkBox = document.getElementById("checkbox");

function validation() {
  // for name
  if (fullName.value === "" || fullName.value == null) {
    document.getElementById("full-name").innerHTML =
      "Please write the full name";
    return false;
  }
  if (fullName.value.length > 1) {
    document.getElementById("full-name").innerHTML = "";
  }

  //   for mobile number
  if (mobileNum.value.length !== 11) {
    document.getElementById("mobile").innerHTML =
      "Please enter correct mobile number";
    return false;
  }
  if (mobileNum.value.length === 11) {
    document.getElementById("mobile").innerHTML = "";
  }

  //   for email
  if (emailAdd.value === "" || emailAdd.value === null) {
    document.getElementById("email").innerHTML =
      "Please write the correct email";
    return false;
  }
  if (emailAdd.value.length >= 7) {
    document.getElementById("email").innerHTML = "";
  }

  //   for student id

  if (studentId.value === null || studentId.value === "") {
    document.getElementById("student").innerHTML =
      "Please enter 4 digit student id";
    return false;
  }

  if (studentId.value.length !== 4) {
    document.getElementById("student").innerHTML =
      "Please enter 4 digit student id";
    return false;
  }

  if (studentId.value.length === 4) {
    document.getElementById("student").innerHTML = "";
  }

  if (checkBox.checked) {
    document.getElementById("check").innerHTML = "";
  } else {
    document.getElementById("check").innerHTML =
      "Please agree to terms and conditions";
    return false;
  }
}

function reset() {
  document.querySelectorAll("body").reset();
}
