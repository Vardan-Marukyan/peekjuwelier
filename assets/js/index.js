const  exclusiveJewelryDevice = document.querySelector(".exclusive-jewelry-device")
const exclusiveJewelryMobile = document.querySelector(".exclusive-jewelry-mobile")
const windowMobileSzieaa = 900
const windowSizeNow = window.innerWidth

window.addEventListener("load",() =>{
    windowSize(windowSizeNow)
})

window.addEventListener("resize", () => {
    const windowSizeNow = window.innerWidth
    windowSize(windowSizeNow)
})


const windowSize = (windowSizeNow) => {
    if(windowMobileSzieaa >= windowSizeNow){
        exclusiveJewelryDevice.style.display = "none"
        exclusiveJewelryMobile.style.display = "flex"
    }else{
        exclusiveJewelryDevice.style.display = "block"
        exclusiveJewelryMobile.style.display = "none" 
    }
}