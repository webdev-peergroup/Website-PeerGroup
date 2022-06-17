/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});


const mediaQuery = window.matchMedia('(min-width: 576px)')

function handleTabletChange(e) {
    // Check if the media query is true
    if (e.matches) {
        // Then log the following message to the console
        // console.log('Media Query Matched!')
        
        /*===== GSAP ANIMATION =====*/
        // NAV
        gsap.from('.nav__logo, .nav__toggle', {opacity: 0, duration: 1, delay:2, y: 10})
        gsap.from('.nav__item', {opacity: 0, duration: 1, delay: 2.1, y: 30, stagger: 0.2,})

        // HOME
        gsap.from('.home__title', {opacity: 0, duration: 1, delay:1.6, y: 30})
        gsap.from('.home__description', {opacity: 0, duration: 1, delay:1.8, y: 30})
        gsap.from('.home__button', {opacity: 0, duration: 1, delay:2.1, y: 30})
        gsap.from('.home__img', {opacity: 0, duration: 1, delay:1.3, y: 30})

        /*SCROLL HOME*/
        sr.reveal('.title',{});
        sr.reveal('.desc',{delay: 400});
        sr.reveal('.kepoin', {delay: 400});
        
        /*SCROLL ABOUT*/
        sr.reveal('.about__img',{}); 
        sr.reveal('.siapa',{delay: 400}); 
        sr.reveal('.about__text',{delay: 400});
        
        /*SCROLL ABOUT*/
        sr.reveal('.title-artikel-mobile',{}); 
        sr.reveal('.box-artikel-mobile',{delay: 400});    
    }
}

// Register event listener
mediaQuery.addListener(handleTabletChange)

// Initial check
handleTabletChange(mediaQuery)
