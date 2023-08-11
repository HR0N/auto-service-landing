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
            this.burgerButton.find('img').attr('src', 'img/icons/xmark-solid.svg');
            this.nav.parent().addClass('show');
        }else{
            this.burgerButton.find('img').attr('src', 'img/icons/bars-solid.svg');
            this.nav.parent().removeClass('show');
        }
    }

    events(){
        this.burgerButton.on('click', this.mobileMenuToggle.bind(this));
    };
}