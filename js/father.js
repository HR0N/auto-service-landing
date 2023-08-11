class father{
    constructor(elem) {
        this.el = $(elem);
    }

    scroll_on(){
        if(typeof window === 'undefined') return;
        document.body.style.overflow = "visible";
    }


    scroll_off(){
        if(typeof window === 'undefined') return;
        document.body.style.overflow = "hidden";
    }

    find(selector){return this.el.find(selector);}
}