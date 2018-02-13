<script>
    $('.status').on('click', function(e){

        var id = $(this).val();
        var text;
        var placementFrom = $(this).data('placement-from');
        var placementAlign = $(this).data('placement-align');
        var animateEnter = $(this).data('animate-enter');
        var animateExit = $(this).data('animate-exit');
        var colorName = $(this).data('color-name');
        var page = $(this).data('page');

        if( $(this).is(':checked') ){
            $.get('/promotions/' + id + '/1/status', function(data){
                
            });
            text = 'Se activó la promoción ' + page;
        }else {    
            $.get('/promotions/' + id + '/0/status', function(data){
            
            });
            text = 'Se desactivó la promoción ' + page;
        }
            showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit);
 
    });
</script>