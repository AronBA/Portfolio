const scrollTop = document.getElementById('topbutton')
window.onload = () => {
    scrollTop.style.opacity = 0;
}
window.onscroll = () => {
    if (window.scrollY > 200) {
        scrollTop.style.opacity = 1;

    } else {
        scrollTop.style.opacity = 0;
    }
};
const obsv = new IntersectionObserver((entries => {
    entries.forEach((entry) =>{
        if (entry.isIntersecting){
            entry.target.classList.add("show");
        } else{
            entry.target.classList.remove("show");
        }
    });
}))
const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => obsv.observe(el));