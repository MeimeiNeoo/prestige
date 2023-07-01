
// scroll section active-link 
const sections = document.querySelectorAll('section[id]')

const scrollActive = () => {
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
                sectionTop = current.offsetTop - 58,
                sectionId = current.getAttribute('id'),
                sectionClass = document.querySelector('.collapse a[href*=' + sectionId + ']')

        if (sectionId == null){
            print("section id kosong")
        }
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            sectionClass.classList.add('active-link')
        }else{
            sectionClass.classList.remove('active-link')
        }       
    })
}
window.addEventListener('scroll', scrollActive)


// scroll reveal Animation
// require('scrollreveal')().reveal('.sreveal');
// require('ScrollReveal')
// import ScrollReveal from 'scrollreveal';
// require('scrollreveal')().reveal('.sreveal');
import 'scrollreveal';
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 380,
    reset: true //animation repeat
})
sr.reveal('.footerContainer')
sr.reveal(`.homeData. .menu3Data`, {origin: 'right'})
sr.reveal(`.menu3Img`, {origin: 'left'})

// sr.reveal(`.home_data, .home_social, .contact_container, .footer_container`)
// sr.reveal(`.home_img`, {origin: 'bottom'})
// sr.reveal(`.about_data, .skills_data`, {origin: 'right'})
// sr.reveal(`.about_img, .skills_content`, {origin: 'left'})
// sr.reveal(`.projects_card`, {interval: 200})


// ulang animation onscroll 
let sectionsections = document.querySelectorAll('section[id]');
window.onscroll = () => {
    sectionsections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;

        if(top >= offset && top < offset + height){
            sec.classList.add('show-animate');
        }else{
            sec.classList.remove('show-animate');
        }
    })
}
