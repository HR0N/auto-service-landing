class Callback_form extends father{
    constructor(elem) {
        super(elem);
        this.input = this.el.find('input');
        this.submit = this.el.find('.submit');
        this.input_value = '';



        this.events();
    }

    inputHandler(e){
        this.input_value = $(e.currentTarget).val();
        if(this.input_value === '+38 '){
            this.input_value = '';
        }

        $(e.currentTarget).val(this.input_value.trim());
    }

    events(){
        $(this.input).mask('+38 000 000 00 00');
        this.input.on('input', this.inputHandler.bind(this));
    };
}