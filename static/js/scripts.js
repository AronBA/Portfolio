

const scrollTop = document.getElementById('topbutton');


const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting || entries[0].boundingClientRect.y < 0){

        scrollTop.add("buttonshow");


    } else {

        scrollTop.remove("buttonshow");

    }
})
observer.observe(document.getElementById("projects"));