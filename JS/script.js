window.addEventListener("load", pageReady, false);

function pageReady() {

//Form input fields
var nameInput = document.getElementById('name-input');
var emailInput = document.getElementById('email-input');
var textArea = document.getElementById('message');

//when input is focused, hide the label (apply hidden class)
function hideLabel(targetParent) {
targetParent.firstChild.className = "hidden";
}

//if there's input inside, hide leave label hidden (apply hidden class)
function checkInputHideLabel(targetParent, inputField) {
  // console.log(inputField);
  if (inputField.value !== "") {
  targetParent.firstChild.className = "hidden";
  }
  else {
  // console.log('hidden placed');
  targetParent.firstChild.removeAttribute("class")
  }
}
//Listener for Form Label hide and show
nameInput.addEventListener('focus',function(){hideLabel(  this.parentElement);},false);
emailInput.addEventListener('focus',function(){hideLabel(  this.parentElement);},false);
textArea.addEventListener('focus',function(){hideLabel(  this.parentElement);},false);

nameInput.addEventListener('blur',function(){checkInputHideLabel(  this.parentElement, this);},false);
emailInput.addEventListener('blur',function(){checkInputHideLabel(  this.parentElement, this);},false);
textArea.addEventListener('blur',function(){checkInputHideLabel(  this.parentElement, this);},false);


//Hamburger Menu
var bars = document.getElementsByClassName('bar');
var hamburger = document.getElementById('nav-hamburger');
var mobileMenu = document.getElementById('main-nav').getElementsByTagName('ul');
function menuHamburger() {
  mobileMenu[0].classList.toggle("open");
  hamburger.classList.toggle("open");  
  bars[0].classList.toggle("open");
  bars[1].classList.toggle("open");
  bars[2].classList.toggle("open");
}//End of menuHamburger
hamburger.addEventListener('click', menuHamburger, false);

}//End of pageReady
