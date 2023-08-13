class ServicesList extends father{
    constructor(elem) {
        super(elem);
        this.services_list = this.find('.service-list');


        this.events();
    }

    serviceClickHandler(e){
        const cur_service = $(e.currentTarget).find('.chevron');
        this.services_list.map((k, v)=>{
            if($(e.currentTarget).index() - 1 !== k){
                $(v).find('.chevron').removeClass('rotate180');
                $(v).css({'maxHeight': `48px`});
            }
        });
        if(cur_service.hasClass('rotate180')){
            cur_service.removeClass('rotate180');
            $(e.currentTarget).css({'maxHeight': `48px`});
        }else{
            cur_service.addClass('rotate180');

            let cur_element_height = 48;
            const sub_items = $(e.currentTarget).find('.sub-item');
            sub_items.map((k, v)=>{
                cur_element_height += $(v).outerHeight(true) + 4;
            });
            $(e.currentTarget).css({'maxHeight': `${cur_element_height}px`});
        }
    }


    events(){
        this.services_list.on('click', this.serviceClickHandler.bind(this))
    };
}