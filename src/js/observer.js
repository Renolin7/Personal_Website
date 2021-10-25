const select1 = document.querySelector(".about");
const select2 = document.querySelector(".about-us")
const option = {
    root: null,
    threshold: 0,
    rootMargin: "-49.99% 0px -50% 0px",
};
const observer1 = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
        console.log(entry)
        if (entry.intersectionRatio > 0) {
            console.log('true');
            console.log(window.scrollY);
            document.getElementById("all-heading").style.left = window.scrollY + "px";
        } else {
            // document.getElementById("nav-home").style.color="#ffffff";
        }
    });
}, option);
const observer2 = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
        console.log(entry)
        if (entry.intersectionRatio > 0) {
            console.log('true')
                //  document.getElementById("nav-about").style.color="#00B0FF";
        } else {
            //  document.getElementById("nav-about").style.color="#ffffff";
        }
    });
}, option);
observer1.observe(select1);
observer2.observe(select2);