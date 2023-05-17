// let handleFormSubmit = () => {
//     let ref = document.referrer
//     let modified = document.lastModified
//     alert(`last modified: ${modified}   by: ${ref}`)
// }

let onImageOver = () => {
    let quote= document.getElementById("quote");
    let logo = document.getElementById("logo");
    quote.style.opacity = "0.1"
    logo.style.cursor = "pointer"
    document.logo.src = "images/icon-earth.gif"
}

let onImageOut = () => {
    let quote= document.getElementById("quote");
    document.logo.src = "images/icon-globe.png"
    quote.style.opacity = "1"
}
