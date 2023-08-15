class Faq extends father{
    constructor(elem) {
        super(elem);
        this.faq_items = this.find('.faq-item');


        this.events();
    }

    serviceClickHandler(e){


        this.faq_items.map((k, v)=>{
            if($(e.currentTarget).index() !== k){
                $(v).removeClass('active');
                $(v).find('.faq-item__sub-item').css({'max-height':`0`});
            }
        });

        const cur_sub_item_height = $(e.currentTarget).find('.faq-item__sub-item')[0].scrollHeight;
        if($(e.currentTarget).hasClass('active')){
            $(e.currentTarget).removeClass('active');
            $(e.currentTarget).find('.faq-item__sub-item').css({'max-height':`0`});
        }else{
            $(e.currentTarget).addClass('active');
            $(e.currentTarget).find('.faq-item__sub-item').css({'max-height':`${cur_sub_item_height}px`});
        }

    }


    events(){
        this.faq_items.on('click', this.serviceClickHandler.bind(this))
    };
}