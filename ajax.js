function yuj() {
  var mylist=document.getElementById('dde');
  var text= mylist.options[mylist.selectedIndex].text;
  var t=text.split("|");
  document.getElementById('no').value=t[0];
  document.getElementById('esm').value=t[1];
  document.getElementById('vah').value=t[2];
}
function modal(){
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("setting");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}
function modal1(){
// Get the modal
var modal = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("setting1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}
function loadDoc(url, cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
function sqlbox(xhttp) {
  document.getElementById("sqlbox").innerHTML =xhttp.responseText;
}
function set(xhttp){
  document.getElementById("xcxc").innerHTML =xhttp.responseText;
}
function cv(xhttp) {
}
function seter(xhttp) {
  document.getElementById("yhyh").innerHTML =xhttp.responseText;
}
function sabt(xhttp) {
  document.getElementById("sabt").innerHTML =xhttp.responseText;
  window.location="table.php";
}
function filterjadval(xhttp) {
  document.getElementById("filter").innerHTML =xhttp.responseText;
}
function shownote(xhttp) {
  document.getElementById("fg").innerHTML =xhttp.responseText;
}
function insertdars(xhttp) {
  document.getElementById("tghy").innerHTML=xhttp.responseText;
}
function insertostad(xhttp) {
  document.getElementById("uuux").innerHTML=xhttp.responseText;
  loadDoc("asatidupdate.php?f="+document.getElementById("fghj").value,deleteasatid)
}

function sqlbox1(xhttp) { 
      document.getElementById("sqlbox1").innerHTML=xhttp.responseText;
}
function deleteasatid(xhttp) { 
      document.getElementById("err").innerHTML=xhttp.responseText;
}
function updatedars(xhttp) { 
      document.getElementById("darsdeleteselect").innerHTML=xhttp.responseText;
}
function examday(xhttp) { 
      document.getElementById("njo").innerHTML=xhttp.responseText;
      window.location="exam.php";
}

$(function () {
  $("#text1, #text2, #text3, #text4").farsiInput();
});
$(document).ready(function(){
    $("#durus").click(function(){
      $("#showdurus").toggle(1000);
    });
    $("#asatidy").click(function(){
      $("#showasatid").toggle(1000);
    });
});
function yu(cv){
  if (cv=="drr") {
    window.location="table.php";
  }else{
    loadDoc("set.php?x="+cv,set);
  }
}


























