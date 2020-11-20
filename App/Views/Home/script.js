function menuBar() {
    let w = window.innerWidth;
    let h = window.innerHeight;
    let getMenuVisib = document.querySelector(".menu");
    let getPopUpMenuVisib = document.querySelector(".popUpMenuButtom")
    let getPopMenuVisib = document.querySelector(".popUpMenu");
    if (w < 800 || h < 400) {
        getMenuVisib.style.visibility = "hidden";
        getPopUpMenuVisib.style.visibility = "visible";
    } else {
        getMenuVisib.style.visibility = "visible";
        getPopUpMenuVisib.style.visibility = "hidden";
        getPopMenuVisib.style.visibility = "hidden";
    }
}

function popUpMenu() {
    let getMenuVisib = document.querySelector(".popUpMenu");
    if (getMenuVisib.style.visibility.toString() == "visible") {
        getMenuVisib.style.visibility = "hidden";
    } else {
        getMenuVisib.style.visibility = "visible";
    }
}

