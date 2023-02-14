let icon =document.querySelector("#icon")
let ul =document.querySelector("ul")
document.addEventListener("DOMContentLoaded",change)
function change(){
    icon.addEventListener("click" ,dam)
    function dam(){
        ul.classList.toggle('show')
    }
}
 