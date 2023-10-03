// tanpa jquery
// const mode = document.getElementById('mode')
// mode.addEventListener('click', () => {
//     var light = document.getElementById('light')
//     var night = document.getElementById('night')
//     if (light.style.display == 'none') {
//         light.style.display = 'inline'
//         night.style.display = 'none'
//     } else {
//         light.style.display = 'none'
//         night.style.display = 'inline'
//     }
//     document.body.classList.toggle('dark')
// })

// dengan jquery
$('#mode').on('click', () => {
    var light = $('#light')
    var night = $('#night')

    if (light.css('display') == 'none') {
        light.css('display', 'inline')
        night.css('display', 'none')
    } else {
        light.css('display', 'none')
        night.css('display', 'inline')
    }

    $(document.body).toggleClass('dark')
})

const logo = document.getElementById('logo')
const desc = document.getElementById('desc')

logo.addEventListener('mouseover', () => {
    logo.style.color = '#FACBEA'
})

desc.addEventListener('click', () => {
    desc.style.rotate = '2deg'
})