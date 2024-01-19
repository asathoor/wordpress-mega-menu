// test 
console.log("Ok, I'm connected to: ./assets/js/js.js")

// show the menu (will also take: click, touch)
try {

    function hideNav(){
        navMega.style.display = "none"
    }

    openMegaMenu.onclick = (event) => {
        megaMenu.style.display = "block"
        hideNav()
    }
}
catch(error){
    console.error(error)
}
  
// hide the menu
try {
function showHideMega(){
    navMega.style.display = "block" 
}

hideMega.onclick = (event) => {
        megaMenu.style.display = "none"
        showHideMega()
}
}
catch(error){
    console.error(error)
}
  