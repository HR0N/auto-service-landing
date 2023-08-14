class SliderSettings {
    constructor(elem) {
        this.el = $(elem);

        this.slider();
    }

    slider(){
        this.el.slick({
            autoplay: true,
            autoplaySpeed: 4000,
            infinite: true,
            dots: true,
            // fade: true,
            cssEase: 'ease-in-out',
            speed: 800,
            slidesToShow: 1,
        });
    }
}