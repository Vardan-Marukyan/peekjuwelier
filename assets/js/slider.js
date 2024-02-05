const sliderImages = document.querySelectorAll(".slider-image__item")
const right = document.querySelector(".icon-right")
const left = document.querySelector(".icon-left")
const circlesContainer = document.querySelector(".slider-controllers__circles")

let currentImageIndex = 0
const totalImages = sliderImages.length - 1

const setImageStyle = (imageIndex) => {
  sliderImages.forEach((element, index) => {
    element.style.display = index === imageIndex ? "block" : "none"
  });
};

const showSlides = (imageIndex) => {
  if (imageIndex > totalImages || imageIndex < 0) {
    currentImageIndex = imageIndex < 0 ? totalImages : 0
    return setImageStyle(currentImageIndex)
  }
  setImageStyle(imageIndex)
};

const createCircles = () => {
  for (let i = 0; i <= totalImages; i++) {
    const circle = document.createElement("div")
    circle.className = "circles__item";
    circlesContainer.appendChild(circle)
    circle.addEventListener("click", () => {
      currentImageIndex = i
      showSlides(currentImageIndex)
      updateCircles()
    })
  }
}

const updateCircles = () => {
  const circleAll = document.querySelectorAll(".circles__item");
  circleAll.forEach((element, index) => {
    element.style.background = index === currentImageIndex ? "#000" : "#fff"
  });
};

window.addEventListener("load", () =>{
    setImageStyle(currentImageIndex)
    createCircles()
    updateCircles()
})

right.addEventListener("click", () => {
  currentImageIndex += 1
  showSlides(currentImageIndex)
  updateCircles()
});

left.addEventListener("click", () => {
  currentImageIndex -= 1
  showSlides(currentImageIndex)
  updateCircles()
})

