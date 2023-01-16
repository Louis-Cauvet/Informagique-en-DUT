const navigation = document.querySelector('nav');

window.addEventListener('scroll',() => {

    if(window.scrollY > 1100){
        navigation.classList.add('anime-nav')
    }else {
        navigation.classList.remove('anime-nav')
    }
})

AOS.init({
    offset: 400, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1000 // values from 0 to 3000, with step 50ms
  });