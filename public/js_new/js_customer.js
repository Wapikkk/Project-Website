var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
    this.setTimeout(() => {
        loader.classList.add("hidden");
    }, 500);
});