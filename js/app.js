document.addEventListener("DOMContentLoaded",(e)=>{
    console.log("ok")
    e.preventDefault();
    let el = null;

    el = {
        btn:document.querySelector("h1"),
        element:document.querySelector("ul"),
            getDisplay(){
                    this.element.classList.toggle("appear");
            }
        
    }
    el.btn.addEventListener("click",()=>{
        el.getDisplay()
    })
    
    //console.log(el.el)


})