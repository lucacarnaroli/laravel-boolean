require('./bootstrap');

const $ = require('jquery');

$(document).ready(function(){

    $('#filter').change(function(){
        console.log($(this).val());

        $.ajax({
            'url': Location.protocol + Location.host + '//' + 'api/students/genders',
            'method': 'POST',
            'data': {
                'gender': $(this).val()
            },
            'success': function(data){
                console.log(data);
                
            },
            'error': function(){
                console.log('error');
                
            }
        })
        
    });
});