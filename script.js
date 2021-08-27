
//gets input from forms and presses submit button
var submit = document.getElementById("isubmit");
console.log(submit);
submit.addEventListener("click", getInputValue );

function getInputValue(){

  var u = document.getElementById("uname").value;
  var f = document.getElementById("fname").value;
  var l = document.getElementById("lname").value;
  alert(u + ", " + f + ", " + l);
}
