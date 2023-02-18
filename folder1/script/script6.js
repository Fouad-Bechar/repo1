var text ="The majority of mankind clings to absurd goals: wealth, power, greatness, comfort, fame...";
var text1 ="I despise these things and respect man only for his positive knowledge and actions. Albert Einstein.";
var i = 0;
var j = 0;
function typeWriter2() {
setTimeout (
function typeWriter() {
if (i < text.length) {
document.getElementById("demoo").innerHTML += text.charAt(i);
i++;
setTimeout(typeWriter, 100); }
else if (j < text1.length ) {   
 document.getElementById("demoo1").innerHTML += text1.charAt(j);
j++;
setTimeout(typeWriter, 100); }
else{  
document.getElementById("demoo").innerHTML = "";
document.getElementById("demoo1").innerHTML = ""; 
i = 0;
j = 0; } }, 100 ); }