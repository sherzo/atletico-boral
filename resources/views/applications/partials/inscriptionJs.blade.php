<script>
	
$(document).ready(function(){
	// AJAX para buscar el representante
	@if(!session('error'))
        message('Llene el siguiente formulario');
	@endif

	// AJAX para registrar el representante
    $('#registerRepresentative').on('click', function(e){
    	e.preventDefault();

        var nationality = $('#nationality').val();
        var dni = $('#dni').val();
        var token = $('#token').val();
        var name = $('#name').val();
        var surname = $('#surname').val();
        var phone = $('#phone').val();
        var movil = $('#movil').val();
        var relationship = $('input[name=relationship]').val();
        var address = $('#address').val();
        var url = $('#url').val();

        if (nationality == null || dni == null || name == null || surname == null || phone == null || movil == null || address == null) {
    
            message('Llene todo los campos');
        
        }else {
            $.ajax({
    	        type: 'POST',
    	        url: url,
    	        dataType: 'json',
    	        data: {
    	            _method: 'POST', 
    	            _token : token,
    	            nationality: nationality,
    	            dni: dni,
    	            name: name,
    	            surname: surname,
    	            phone: phone,
    	            movil: movil,
    	            relationship: relationship,
    	            address: address 
    	        },
    	        success: function (data) {
    	        	$('#name').attr('readonly', true);
    	        	$('#surname').attr('readonly', true);

    	        	message('Se registro el representante, seleccione el numero de atletas');
    	        	$('#representative-form').empty();
    	        	$('#select').removeClass('hide');
    	    		$('#forMe').addClass('hide');
                    $('#dni').attr('disabled', true);
                    $('#nationality').attr('disabled', true);
    	        },
    	        error: function (data) {
    	            var errors = data.responseJSON;
    	            if (errors) {
    	                $.each(errors, function (i) {
    	                    console.log(errors[i]);
    	                });
    	            }
    	        }
    	    });
        }

    });

    $('#nAthletes').on('change', function(e){
    	var athletes = parseInt(this.value);

    	message('Llene los datos');

    	$('#athletesForm').empty();
    	var i = 1;
    	var form ='</p><div class="row"><div class="input-field col s12 m4"><select class="browser-default" name="nationality[]" id="aNationality" required=""><option value="" disabled selected>Seleccione</option><option value="N">Nacional</option><option value="E">Extranjero</option></select></div><div class="input-field col s12 m4"><input id="aDni" type="text" name="dni[]"  placeholder="Cedula" required="" class="dni" /></div><div class="input-field col m4"><input id="birth" type="text" class="datepicker" name="birth[]" placeholder="Fecha de nacimiento" required=""/></div></div><div class="row"><div class="input-field col s12 m4"><input id="name" type="text" name="name[]" placeholder="Nombres" required></div><div class="input-field col s12 m4"><input id="surname" type="text" name="surname[]"  placeholder="Apellidos" required=""/></div><div class="input-field col m4"><select name="dicipline[]" id="dicipline" class="browser-default"><option value="INSCRIPCIÓN">Futbol</option><option value="NATACIÓN">Natación</option></select></div></div></div></div>';

    	var buttons = '<a class="btn waves-effect waves-light clear-text btn-flat" href="/">CANCELAR</a><button class="btn waves-effect waves-light red darken-3 clear-text" type="submit" id="register">Registrar</button>';
    	for(i = 1; i <= athletes; i++){
    		$('#athletesForm').append('<div class="card"><div class="card-content"><p><b>Atleta: ' + i + '</b>' + form);
    	}

    	$('#athletesForm').append(buttons);

    	$('.datepicker').pickadate({
		    selectYears: 15, 
			closeOnSelect: false,
            format: 'yyyy-mm-dd',
            formatSubmit: false,
		});

        var $demoMaskedInput = $('.demo-masked-input');

        //Dni
        $demoMaskedInput.find('.dni').inputmask('999999999-9', { placeholder: '_________-_' });     
    });
     

	// Mensajes
	function message(m, t = 4000, c = 'red darken-3')
	{
		Materialize.toast(m, t, c);
	}

    var $demoMaskedInput = $('.demo-masked-input');

    //Mobile Phone Number
    $demoMaskedInput.find('.movil').inputmask('(99) 999-9999', { placeholder: '(___) ___-____' });
    //Phone Number
    $demoMaskedInput.find('.phone').inputmask('(999) 999-9999', { placeholder: '(____) ___-____' });

    //Dni
    $demoMaskedInput.find('.dni').inputmask('999999999-9', { placeholder: '_________-_' });     

    @if(session('error'))
        message('Error! los atletas ya estan registrados');
    @endif
 });
</script>