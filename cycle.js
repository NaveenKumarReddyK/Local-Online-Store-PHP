var oly = document.getElementsByClassName("oly-container");
var x = document.getElementsByClassName("x");
var vi = document.getElementsByClassName("vi1");

vi.onclick = function(){
    oly.style.display = "block";
}
x.onclick = function(){
    oly.style.display = "none";
}