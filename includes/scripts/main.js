let scrollPos = 0;

function checkPosition() {
    const nav = document.querySelector('.desktop-nav');
    const mobileNavBar = document.querySelector('.mobile-nav');
    let windowY = window.scrollY;
    // If scrolling up show nav
    if (windowY < scrollPos) {
        nav.classList.add('is-visible');
        nav.classList.remove('is-hidden');
        mobileNavBar.classList.add('is-visible');
        mobileNavBar.classList.remove('is-hidden');
        
    // Else hide nav
    } else {
        nav.classList.add('is-hidden');
        nav.classList.remove('is-visible');
        mobileNavBar.classList.add('is-hidden');
        mobileNavBar.classList.remove('is-visible');
    }
  scrollPos = windowY;
}

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