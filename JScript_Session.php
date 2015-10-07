<script>
function myFunction4() {
	clearFunction()
   document.getElementById("p9-2").innerHTML = "Now Showing";
   document.getElementById("p9-3").innerHTML = "Now Showing";
   document.getElementById("p1-4").innerHTML = "Now Showing";
   document.getElementById("p1-5").innerHTML = "Now Showing";
   document.getElementById("p1-6").innerHTML = "Now Showing";
   document.getElementById("p6-7").innerHTML = "Now Showing";
   document.getElementById("p6-0").innerHTML = "Now Showing";
	
}
function myFunction3() {
	clearFunction()
   document.getElementById("p3-2").innerHTML = "Now Showing";
   document.getElementById("p3-3").innerHTML = "Now Showing";
   document.getElementById("p3-7").innerHTML = "Now Showing";
   document.getElementById("p3-0").innerHTML = "Now Showing";
	
}

function myFunction2() {
	clearFunction()
   document.getElementById("p1-2").innerHTML = "Now Showing";
   document.getElementById("p1-3").innerHTML = "Now Showing";
   document.getElementById("p6-4").innerHTML = "Now Showing";
   document.getElementById("p6-5").innerHTML = "Now Showing";
   document.getElementById("p6-6").innerHTML = "Now Showing";
   document.getElementById("p12-7").innerHTML = "Now Showing";
   document.getElementById("p12-0").innerHTML = "Now Showing";
	
}
function myFunction1() {
	clearFunction()
   document.getElementById("p9-4").innerHTML = "Now Showing";
   document.getElementById("p9-5").innerHTML = "Now Showing";
   document.getElementById("p9-6").innerHTML = "Now Showing";
   document.getElementById("p9-7").innerHTML = "Now Showing";
   document.getElementById("p9-0").innerHTML = "Now Showing";
    
}
function clearFunction() { 
    var a = document.getElementsByClassName("a");
	var len = a.length;
	for (i=0;i< len;i++){
		a[i].innerHTML = "";
	}
    
}





</script>
