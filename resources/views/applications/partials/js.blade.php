<script>
	$(document).ready(function(){

		// AJAX para buscar el representante
		$('#search').on('click', function(e){
            e.preventDefault();

            var nationality = $('#nationality').val();
            var dni = $('#dni').val();

            if(nationality == null || dni == null)
            {
            	message('Ingrese la nacionalidad y cédula para buscar');

            }else {

	            $.get('/search/' + nationality + '/' + dni + '/representatives', function(data){
	            	if(data != ''){
	            		message('Representante encontrado, registre al atleta');

	            		$('#nationality').attr('disabled', true);
	            		$('#dni').attr('readonly', true);
	            		$('#athleteForm').removeClass('hide');
	            		$('#name').val(data.name);
	            		$('#surname').val(data.surname);
	            	}else{
	            		message('Representante no encontrado, proceda a registrarlo');
	            		

	            		// Desabilitar nationality y dni
	            		$('#nationality').attr('disabled', true);
	            		$('#dni').attr('readonly', true);
	            		$('#search').attr('readonly', true);
	            		$('#name').removeAttr('disabled');
	            		$('#surname').removeAttr('disabled');
	            		$('#representative-form').removeClass('hide');
	            	}
	            });
            	
            }

        });

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

		        	message('Se registro el representante, registre al atleta');
		        	$('#representative-form').empty();
		        	$('#athleteForm').removeClass('hide');
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
        });

        $('#me').on('click', function(e){
			if($(this).prop('checked')){
				message('Ingrese los datos');
				$('#athleteForm').removeClass('hide');
				$('#representative-form').addClass('hide');
				$('#searchForm').addClass('hide');
				$('#inputMe').val(1);
			}else{
				message('Ingrese los datos');
				$('#athleteForm').addClass('hide');
				$('#representative-form').removeClass('hide');
				$('#searchForm').removeClass('hide');
				$('#inputMe').val(1);
			}
        })
		
		// Validación terminos y condiciones
		$('#register').on('click', function(e){
			if(!$('#terms').prop('checked')){
				e.preventDefault();
				message('Debe aceptar los terminos y condiciones');
			}
		});

		$('.datepicker').pickadate({
		    selectYears: 15, 
			closeOnSelect: false,
		});

		$('#acept').on('click', function(){
			$('#terms').prop('checked', true);	
		});
		
		$('#termsAndCoditions').modal();
		$('.tooltipped').tooltip();

	}); // Fin .ready

	// Mensajes
	function message(m, t = 4000, c = 'red darken-3')
	{
		Materialize.toast(m, t, c);
	}

	@if(session('exists'))
        message('Error! el atleta ya se encuentra registrado');
    @else
    	message('Llene el siguiente formulario');
    @endif
</script>