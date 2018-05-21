// window.addEventListener("load", pageReady, false);
// document.addEventListener("ready", pageReady, false);
document.addEventListener("DOMContentLoaded", pageReady, false);
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

        if (inputField.value !== "") {
            targetParent.firstChild.className = "hidden";
        } else {
            targetParent.firstChild.removeAttribute("class");
        }
    }
    // //Listener for Form Label hide and show
    // nameInput.addEventListener('focus', function () {
    //     hideLabel(this.parentElement);
    // }, false);
    // emailInput.addEventListener('focus', function () {
    //     hideLabel(this.parentElement);
    // }, false);
    // textArea.addEventListener('focus', function () {
    //     hideLabel(this.parentElement);
    // }, false);

    // nameInput.addEventListener('blur', function () {
    //     checkInputHideLabel(this.parentElement, this);
    // }, false);
    // emailInput.addEventListener('blur', function () {
    //     checkInputHideLabel(this.parentElement, this);
    // }, false);
    // textArea.addEventListener('blur', function () {
    //     checkInputHideLabel(this.parentElement, this);
    // }, false);


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
    } //End of menuHamburger
    hamburger.addEventListener('click', menuHamburger, false);

    //Show user feedback from Contact submit FORM
    var formHandler = document.forms.contact;
    var userFeedback = document.getElementById('feedback');

    function thankYouMsg() {
        if (formHandler['user_name'].value == "" || formHandler['email'].value == "" || formHandler['message'].value == "") {
            console.log('this fired');
            userFeedback.innerHTML = "Your form is incomplete.";
            userFeedback.style.display = "inline";
            return false;
        }
        userFeedback.innerHTML = "Thanks for contacting me. We’ll be in touch!";
        userFeedback.style.display = "inline";
        console.log('form submit');
        return true;
    } //end thankYouMsg
    // formHandler.onsubmit = thankYouMsg;

    // //Update the Copyright to current year
    // var copyright = document.getElementById('year');
    // var currentYear = new Date();
    // copyright.textContent = currentYear.getFullYear();

} //End of pageReady
