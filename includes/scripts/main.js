// ------ Nav Bar ------
// show nav bar when scrolling up and hide when scrolling down
let scrollPos = 0;
function checkPosition() {
    const nav = document.querySelector('.desktop-nav');
    const mobileNavBar = document.querySelector('.mobile-nav');
    let windowY = window.scrollY;
    // if scrolling up show nav on desktop and mobile
    if (windowY < scrollPos) {
        nav.classList.add('is-visible');
        nav.classList.remove('is-hidden');
        mobileNavBar.classList.add('is-visible');
        mobileNavBar.classList.remove('is-hidden');
        
    // hide nav on desktop and mobile
    } else {
        nav.classList.add('is-hidden');
        nav.classList.remove('is-visible');
        mobileNavBar.classList.add('is-hidden');
        mobileNavBar.classList.remove('is-visible');
    }
  scrollPos = windowY;
}
// delay on showing/hiding the nav bar to prevent the event tiggering
// too much when scrolling constantly
function scrollCheckDelay(func, wait = 10, immediate = true) {
    let timeout;
    return function() {
        let context = this, args = arguments;
        let later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        let callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};
window.addEventListener('scroll', scrollCheckDelay(checkPosition));

// ------ Contact Form ------
// focus on name field when contact page is loaded

let senderName = document.getElementById('sender-name');

if (senderName !== null){
    function FocusInputOnLoad() {
        document.getElementById('sender-name').focus();
    }
    window.onload = FocusInputOnLoad;
}


// validate e-mail
var email = document.getElementById('sender-email');

if (email !== null){
    email.addEventListener("input", function (event) {
        if (email.validity.typeMismatch) {
          email.setCustomValidity("Please enter a valid e-mail.");
        } else {
          email.setCustomValidity("");
        }
    });
}
