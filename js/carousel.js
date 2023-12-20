const carouselImages = document.querySelectorAll(".carousel-item>img")

console.log(carouselImages)
let i = 1
carouselImages.forEach(img => {
    img.classList.add('w-100');  
    i++
});
