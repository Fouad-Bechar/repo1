
var pausecontent = new Array()
pausecontent[0] = '<img border="0" src="images/image001.webp" alt="image" width="225px" height="140px">'
pausecontent[1] = '<img border="0" src="images/image002.webp" alt="image" width="225px" height="140px">'
pausecontent[2] = '<img border="0" src="images/image003.webp" alt="image" width="225px" height="140px">'
pausecontent[3] = '<img border="0" src="images/image004.webp"alt="image" width="225px" height="140px">'
pausecontent[4] = '<img border="0" src="images/image005.webp" alt="image" width="225px" height="140px">'

function pausescroller(content, divId, divClass, delay) {
this.content = content
this.tickerid = divId 
this.delay = delay 
this.mouseoverBol = 0 
this.hiddendivpointer = 1
var docum
docum = document.getElementById("doc1");
docum.innerHTML = '<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>';
var scrollerinstance = this
if (window.addEventListener) 
window.addEventListener("load", function() {scrollerinstance.initialize()}, false)
else if (window.attachEvent) 
window.attachEvent("onload", function() {scrollerinstance.initialize()})
else if (document.getElementById) 
setTimeout(function() {scrollerinstance.initialize()}, 500) }
pausescroller.prototype.initialize=function() {
this.tickerdiv=document.getElementById(this.tickerid)
this.visiblediv=document.getElementById(this.tickerid+"1")
this.hiddendiv=document.getElementById(this.tickerid+"2")
this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))
this.visiblediv.style.width = this.hiddendiv.style.width=this.tickerdiv.offsetWidth-(this.visibledivtop*2)+"px"
this.getinline(this.visiblediv, this.hiddendiv)
this.hiddendiv.style.visibility = "visible"
var scrollerinstance=this
document.getElementById(this.tickerid).onmouseover=function() {scrollerinstance.mouseoverBol = 1}
document.getElementById(this.tickerid).onmouseout=function() {scrollerinstance.mouseoverBol = 0}
if (window.attachEvent) 
window.attachEvent("onunload", function() {scrollerinstance.tickerdiv.onmouseover=scrollerinstance.tickerdiv.onmouseout=null})
setTimeout(function() {scrollerinstance.animateup()}, this.delay) }
pausescroller.prototype.animateup = function() {
var scrollerinstance = this
if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){
this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"
this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"
setTimeout(function() {scrollerinstance.animateup()}, 50) }
else{
this.getinline(this.hiddendiv, this.visiblediv)
this.swapdivs()
setTimeout(function() {scrollerinstance.setmessage()}, this.delay) } }
pausescroller.prototype.swapdivs=function() {
var tempcontainer=this.visiblediv
this.visiblediv=this.hiddendiv
this.hiddendiv=tempcontainer }
pausescroller.prototype.getinline=function(div1, div2) {
div1.style.top=this.visibledivtop+"px"
div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px" }
pausescroller.prototype.setmessage=function() {
var scrollerinstance = this
if (this.mouseoverBol == 1) 
setTimeout(function() {scrollerinstance.setmessage()}, 100)
else {
var i = this.hiddendivpointer
var ceiling = this.content.length
this.hiddendivpointer = (i+1>ceiling-1)? 0 : i+1
this.hiddendiv.innerHTML = this.content[this.hiddendivpointer]
this.animateup() } }
pausescroller.getCSSpadding = function(tickerobj) { 
if (tickerobj.currentStyle)
return tickerobj.currentStyle["paddingTop"]
else if (window.getComputedStyle)
return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
else
return 0 }

new pausescroller(pausecontent, "pscroller1", "someclass", 3000)