selectClass = (btn)=>{
    console.log(btn)
    Array.from(document.querySelectorAll(".darkbtn")).forEach((e, i) => {
        e.classList.remove("btn-dark")
        e.classList.add("btn-outline-dark")
        e.firstElementChild.classList.remove("fa-check-circle")
        e.firstElementChild.classList.add("fa-circle-notch")
    })
    btn.classList.add("btn-dark")
    btn.classList.remove("btn-outline-dark")
    btn.firstElementChild.classList.add("fa-check-circle")
    btn.firstElementChild.classList.remove("fa-circle-notch")
}