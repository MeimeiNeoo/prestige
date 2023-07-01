
// scroll reveal Animation
// require('scrollreveal')().reveal('.sreveal');
// require('ScrollReveal')
// import ScrollReveal from 'scrollreveal';
// require('scrollreveal')().reveal('.sreveal');
// import 'scrollreveal';       //kalau di uncomment error.
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 380,
    reset: true //animation repeat
})
// sr.reveal('.footerContainer')
// sr.reveal(`.homeData, .menu3Data`, {origin: 'right'})
// sr.reveal(`.menu3Img, .homeImg`,{origin: 'left'})

// sr.reveal(`.home_data, .home_social, .contact_container, .footer_container`)
// sr.reveal(`.home_img`, {origin: 'bottom'})
// sr.reveal(`.about_data, .skills_data`, {origin: 'right'})
// sr.reveal(`.about_img, .skills_content`, {origin: 'left'})
// sr.reveal(`.projects_card`, {interval: 200})


// ulang animation onscroll 
// let sectionsections = document.querySelectorAll('section[id]');
// window.onscroll = () => {
//     sectionsections.forEach(sec => {
//         let top = window.scrollY;
//         let offset = sec.offsetTop - 150;
//         let height = sec.offsetHeight;

//         if(top >= offset && top < offset + height){
//             sec.classList.add('show-animate');
//         }else{
//             sec.classList.remove('show-animate');
//         }
//     })
// }
