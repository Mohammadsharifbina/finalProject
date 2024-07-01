const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const arrowBtn = document.querySelectorAll(".wrapper i");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children];

let isDragging = false, startX, startScrollleft, timeoutId;
// go the number of cards that can fit in carousel at once
let cardPreview = Math.random(carousel.offsetWidth / firstCardWidth);
// Insert of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPreview).reverse().forEach(card =>{
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copie of the first few cards to end of carousel for infinite scroling
carouselChildrens.slice(0,cardPreview).forEach(card =>{
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

//Add event listners for the arrow button to scroll the carousel left and right
arrowBtn.forEach(btn =>{
btn.addEventListener("click", ()=>{
    carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    // carousel.scrollLeft += btn.id === "right" ? firstCardWidth : firstCardWidth;
})
});

//draggin
const dragStart = (e)=>{
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollleft = carousel.scrollLeft;
}

const dragging = (e) =>{
    if(!isDragging) return;   //if isDragging is false return from here
    // Updating the scroll position of the carousel bassed on the cursor movement
    carousel.scrollLeft = startScrollleft - (e.pageX - startX);
}
const dragStop = ()=>{
    isDragging = false;
    carousel.classList.remove("dragging");

}

const autoPlay =() =>{
    if(window.innerWidth<800) return;  //return if windwo smallest than 800
    // AutoPlay the carousel after every 2500ms
    timeoutId = setTimeout(() =>carousel.scrollLeft +=firstCardWidth, 2500);
}
autoPlay();

const infiniteScroll = ()=>{
    // if the carousel is at the beggaining scroll to the end
    if(carousel.scrollLeft===0){
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // if the carousel is at th scroll to the end, scroll to the begginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth){
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");

    }
// Clear existing timeout & start autoplay if mouse is not hoveing over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

carousel.addEventListener("mousedown", dragStop);
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("mouseup", dragStart);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () =>clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
