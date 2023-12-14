const btn = document.querySelector('.show_rane_btn')
const cards = document.querySelectorAll('.product_card')

btn.addEventListener('click', function() {
    for(let card of cards) {
        card.style.display = 'flex'
    }
    btn.style.display = 'none '
})