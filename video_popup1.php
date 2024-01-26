<!DOCTYPE html>
<html>
<head>
<style>
.popup .popuptext {
visibility: hidden;
background-color: #555;
color: #fff;
text-align: center;
border-radius: 6px;
padding: 8px 0;
z-index: 1;
bottom: 125%;
left: 50%;
margin-left: -80px;
}
.popup .show {
visibility: visible;
-webkit-animation: fadeIn 1s;
animation: fadeIn 1s;
}
@-webkit-keyframes fadeIn {
from {opacity: 0;} 
to {opacity: 1;}
}
@keyframes fadeIn {
from {opacity: 0;}
to {opacity:1 ;}
}
</style>
</head>
<body style="text-align:center">
<div class="popup" onclick="myFunction()" ><button>Preview</button>
<video class="popuptext" id="myPopup" style="width:800px;" >
<source src="https://www.youtube.com/watch?v=YXxQPmxq56Y" type="video/mp4">
</video>
</div>
<script>
function myFunction() {
var popup = document.getElementById("myPopup");
popup.classList.toggle("show");

if (popup.paused){ 
    popup.play(); 
    }
  else{ 
    popup.pause();
    }
 
}
</script>
</body>
</html>
