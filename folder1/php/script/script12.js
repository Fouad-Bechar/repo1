function myFunction01() {
    var text = "Are you sure about the information !";
    var but =  document.getElementById("b1");
    if (confirm (text) == true ) {
    but.type ="submit";
    } else {
    but.type ="button";    
    }
  }
//function myfunction01() { confirm ("Are you sure about the information"); }