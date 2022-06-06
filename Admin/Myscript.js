
  Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});
function myFunction() {
  document.getElementById("date").value = new Date().toDateInputValue();
 }

 function toggleTable() {
  document.getElementById("myTable").classList.toggle("hidden");
}
  
function oldPassfunction() {
  var x = document.getElementById("oldPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function newPassfunction() {
  var x = document.getElementById("newPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function retypePassfunction() {
  var x = document.getElementById("rePass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}