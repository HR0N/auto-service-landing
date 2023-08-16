class Header extends father{
    constructor(elem) {
        super(elem);

        this.mobileMenuShow = false;
        this.burgerButton = this.find('.burgerButton');
        this.nav = this.el.find('.header-nav ul');


        this.events();
    }

    mobileMenuToggle(){
        this.mobileMenuShow = !this.mobileMenuShow;
        if(this.mobileMenuShow){
            this.burgerButton.removeClass('icon-bars-solid');
            this.burgerButton.addClass('icon-xmark-solid');
            this.nav.parent().addClass('show');
        }else{
            this.burgerButton.addClass('icon-bars-solid');
            this.burgerButton.removeClass('icon-xmark-solid');
            this.nav.parent().removeClass('show');
        }
    }

    events(){
        this.burgerButton.on('click', this.mobileMenuToggle.bind(this));
    };
}