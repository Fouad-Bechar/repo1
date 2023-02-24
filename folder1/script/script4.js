const currentDateTime = document.getElementById("currentDateTime");
function displayDateTime() {
const now = new Date();
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
const date = now.toLocaleDateString(undefined, options); 
const time = now.toLocaleTimeString();
currentDateTime.innerHTML = date+"."+"&nbsp;"+"&nbsp;"+time;
}
setInterval(displayDateTime, 1000); 