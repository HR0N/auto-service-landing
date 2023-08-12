class ServicesList extends father{
    constructor(elem) {
        super(elem);
        this.services_list = this.find('.service-list');


        this.events();
    }

    serviceClickHandler(e){
        const cur_service = $(e.currentTarget).find('.chevron');
        this.services_list.map((k, v)=>{
            if(cur_service.index() === k) return;
            $(v).find('.chevron').removeClass('rotate180');
        });
        if(cur_service.hasClass('rotate180')){
            cur_service.removeClass('rotate180');
        }else{
            cur_service.addClass('rotate180');
        }
    }


    events(){
        this.services_list.on('click', this.serviceClickHandler.bind(this))
    };
}