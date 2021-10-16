import Swiper from 'swiper'

document.querySelectorAll('.incomplete-collab-list-container').forEach(
    /**
     * @param el {HTMLElement}
     */
    el => {
    new Swiper(el, {
        slidesPerView: 3,
        spaceBetween: 30
    })
})
