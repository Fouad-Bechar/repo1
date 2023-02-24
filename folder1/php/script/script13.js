var text ="We thank you for contacting us and we will answer you as soon as possible.";
var text1 ="Thank you.";
var i = 0;
var j = 0;
setTimeout ( function typeWriter() {
if (i < text.length) {
document.getElementById("demoo").innerHTML += text.charAt(i);
i++;
setTimeout(typeWriter, 100); }
else if (j < text1.length ) {   
 document.getElementById("demoo1").innerHTML += text1.charAt(j);
j++;
setTimeout(typeWriter, 100); }
else { i = 0;
j = 0; } } , 1000);