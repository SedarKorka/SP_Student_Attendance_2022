
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
  