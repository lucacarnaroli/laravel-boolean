require('./bootstrap');

const $ = require('jquery');

$(document).ready(function(){

    $('#filter').change(function(){
        console.log($(this).val());
        

        $.ajax({
            'url': window.location.protol + '//' + window.location.host + 'api/students/genders',
            'method': 'POST',
            'data': {
                'gender': $(this).val()
            },
            'success': function(data){
                console.log(data.response);
                if (data.response.length > 0) {
                    console.log(data.response);
                }
                
            },
            'error': function(){
                console.log('error');
                
            }
        })
        
    });
});