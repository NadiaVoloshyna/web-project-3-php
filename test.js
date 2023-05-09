let handleMouseOver = () => {
    let header = document.getElementById("header");
    let p1= document.getElementById("p1");
    p1.style.color = "blue"
    header.style.opacity = "0.5"
}

let handleMouseOut = () => {
    let p1= document.getElementById("p1");
    p1.style.color = "black"
    header.style.opacity = "1"
}

let handleFormSubmit = () => {
    let ref = document.referrer
    let modified = document.lastModified
    alert(`last modified: ${modified}   by: ${ref}`)
}

let onMouseOver = () => {
    document.image.src = "image_extended.jpg"
}

let onMouseOut = () => {
    document.image.src = "image.jpg"
}