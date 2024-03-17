var menuItems = document.getElementById("menuItems");
menuItems.style.maxHeight = "0px";

function menutoggle() {
    if (menuItems.style.maxHeight == "0px") {
        menuItems.style.maxHeight = "200px";
    } else {
        menuItems.style.maxHeight = "0px";
    }
}

var productImg = document.getElementById("productImg");
    var SmallImg = document.getElementsByClassName("small-img-col");

    for (var i = 0; i < SmallImg.length; i++) {
        SmallImg[i].addEventListener("click", function () {
            productImg.src = this.querySelector("img").src;
        });
    }
