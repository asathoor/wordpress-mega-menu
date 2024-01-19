// test 
console.log("Ok, I'm connected to: ./assets/js/js.js")

// show the menu (will also take: click, touch)
try {
    openMegaMenu.onmouseover = (event) => {
        megaMenu.style.display = "block"
    }
}
catch(error){
    console.error(error)
}
  
// hide the menu
try {
hideMega.onclick = (event) => {
        megaMenu.style.display = "none"
}
}
catch(error){
    console.error(error)
}
  