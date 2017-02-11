<script>
$(function(){


        $.ajax({
            url: '/test',
            type: 'get',

            dataType: 'JSON',
            success: function (data) {





                $.each( data, function( key,value ) {
                    if (key == 0) {
                    $('#tags').append('<option selected="selected" value="' + value + '">' + value + '</option>');
                } else {
                    $('#tags').append('<option value="' + value + '">' + value + '</option>');
                }
                });

            }});






   });






</script>
