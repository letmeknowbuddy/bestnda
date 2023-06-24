$( document ).ready(function() {

});
    var read_more_flag = 0;

    function readMoreDiv(){

        console.log('1')

        if(read_more_flag === 0){

            console.log('2')

            $("#read_more_div_id").removeClass('read_more_div');

            read_more_flag = 1;    

        }else if(read_more_flag === 1){

            console.log('3')

            $("#read_more_div_id").addClass('read_more_div');

            read_more_flag = 0;

        }

    }