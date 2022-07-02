

//show/hide nav menu
/*const menu = document.querySelector(".navbar");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display ="none";
})

const closeNav = () =>{
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display ="inline-block";
}
closeBtn.addEventListener('click', closeNav);*/
var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 20,
        autoplay: {
            delay: 1000,
            disableOnInteraction:false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },

            477: {
                slidesPerView: 2,
            },
            799: {
                slidesPerView: 3,
            },
            1000:{
                slidesPerView: 3,
            },
        },
        pagination: {
            e1: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextE1: ".swiper-button-next",
            prevE1: ".swiper-button-prev",
        }
  });

//show/hide nav menu
// const menu = document.querySelector(".navbar");
// const menuBtn = document.querySelector("#open-menu-btn");
// const closeBtn = document.querySelector("#close-menu-btn");
// menuBtn.addEventListener('click', () => {
//     menu.style.display = "flex";
//     closeBtn.style.display = "inline-block";
//     menuBtn.style.display ="none";
// })
// const closeNav = () =>{
//     menu.style.display = "none";
//     closeBtn.style.display = "none";
//     menuBtn.style.display ="inline-block";
// }
// closeBtn.addEventListener('click', closeNav);
