// let handleFormSubmit = () => {
//     let ref = document.referrer
//     let modified = document.lastModified
//     alert(`last modified: ${modified}   by: ${ref}`)
// }

let onImageOver = () => {
    let quote= document.getElementById("quote");
    let image = document.getElementById("image");
    quote.style.opacity = "1"
    image.style.cursor = "pointer"
    document.image.src = "icon-globe.png"
}

let onImageClick = () => {
    let quote= document.getElementById("quote");
    document.image.src = "icon-earth.gif"
    quote.style.opacity = "0.1"
}
