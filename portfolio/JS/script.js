document.addEventListener("DOMContentLoaded", pageReady, false);

//CONTACT FORM VARIABLES
var formHandler = document.forms.contact;
var feedback = document.querySelector('#feedback');
var inputElements = document.querySelectorAll('input[id$="-input"], #message');
var labelElements = document.querySelectorAll('label[id$="-lbl"]');

//HAMBURGER MENU
var bars = document.getElementsByClassName('bar');
var hamburger = document.getElementById('nav-hamburger');
var mobileMenu = document.getElementById('main-nav').getElementsByTagName('ul');

function pageReady() {
    //ADD LISTENERS FOR FORM FIELDS
    addListener(inputElements, 'focus', function () {
        var inputFocus = this;
        hideLabel(inputFocus)
    });
    addListener(inputElements, 'blur', function () {
        var inputFocus = this;
        checkInputHideLabel(inputFocus)
    });

    hamburger.addEventListener('click', menuHamburger, false);
    if (feedback.innerHTML !== "") {
        feedback.focus();
    }
} //END OF PAGEREADY


/**
 * HELPER FUNCTION - ADD EVENT LISTENERS TO ELEMENTS
 * @param {array} listVar - LIST OF ELEMENTS TO ADD LISTENER TO
 * @param {string} eventString - EVENT TO LISTEN FOR
 * @param {function} funcName - NAME OF FUNCTION OR ANONYMOUS FUNCTION BLOCK 
 */
function addListener(listVar, eventString, funcName) {
    for (var i = 0; i < listVar.length; i++) {
        listVar[i].addEventListener(eventString, funcName, false);
    }
} //END OF ADDLISTENER


/**
 * TOGGLE HAMBURGER MENU OPEN AND CLOSE
 */
function menuHamburger() {
    mobileMenu[0].classList.toggle("open");
    hamburger.classList.toggle("open");
    bars[0].classList.toggle("open");
    bars[1].classList.toggle("open");
    bars[2].classList.toggle("open");
} //END OF MENUHAMBURGER


/**
 * HIDE LABEL (MAKE FONT SIZE ZERO), WHEN FOCUSED ON INPUT
 * @param {object} inputFocus - INPUT ELEMENT IN FOCUS
 */
function hideLabel(inputFocus) {
    inputFocus.previousElementSibling.style.fontSize = '0em';
} //END OF HIDELABEL

/**
 * CHECK IF INPUT IS EMPTY, IF FALSE THEN LEAVE LABEL HIDDEN (MAKE FONT SIZE ZERO)
 * @param {object} inputFocus - FOCUSED INPUT ELEMENT TO CHECK FOR CONTENT
 */
function checkInputHideLabel(inputFocus) {
    if (inputFocus.value !== "") {
        hideLabel(inputFocus);
    } else {
        inputFocus.previousElementSibling.style.fontSize = '0.9em';
    }
} //END OF CHECKINPUTHIDELABEL