<script>
	// AJAX para buscar el representante
		$('#search').on('click', function(e){
            e.preventDefault();

            var nationality = $('#nationality').val();
            var dni = $('#dni').val();
            if(nationality == null || dni == null)
            {
            	swal("Cuidado", "Ingrese la nacionalidad y la cedula antes de buscar", "warning");

            }else {

	            $.get('/search/' + nationality + '/' + dni + '/representatives', function(data){
	            	if(data != ''){
	            		
						swal("Perfecto!", "Representante encontrado, registre al atleta", "success");

	            		$('#nationality').attr('disabled', true);
	            		$('#dni').attr('readonly', true);
	            		$('#athleteForm').removeClass('hide');
	            		$('#title').removeClass('hide');
	            		$('#name').val(data.name);
	            		$('#surname').val(data.surname);
	            		$('#search').attr('disabled', true);

	            	}else{
	            		swal("Representante no encontrado!", "Proceda a registrarlo");
	            		

	            		// Desabilitar nationality y dni
	            		$('#nationality').attr('disabled', true);
	            		$('#dni').attr('readonly', true);
	            		$('#search').attr('readonly', true);
	            		$('#name').removeAttr('disabled');
	            		$('#surname').removeAttr('disabled');
	            		$('#representative-form').removeClass('hide');
	            		$('#search').attr('disabled', true);
	            	}
	            });
            	
            }

        });

        $('#positions').on('change', function(){
        	var id = $(this).val();

        	$.get('/positions/'+ id + '/individuals', function(data){
        		$('#functions').empty();

        		$('#functions').append('<option value="" selected disabled>SELECCIONE</option>');
        		$.each(data, function(index, position){
        			var option = '<option value="' + position.id +'">' + position.position +' </option>';
        			$('#functions').append(option);
        		});
        	});
        });

        $('#categories').on('change', function(){
        	var id = $(this).val();

        	$.get('/categories/'+ id + '/teams', function(data){
        		console.log(data);
        		$('#teams').empty();
        		if(data == ''){
        			var option = '<option value="">NO HAY EQUIPOS EN ESTA CATEGORÍA</option>';
        			$('#teams').append(option);	
        		}else{
        			$('#teams').append('<option value="" selected disabled>SELECCIONE</option>');	
	        		$.each(data, function(index, team){
	        			var option = '<option value="' + team.id +'">' + team.name +' </option>';
	        			$('#teams').append(option);
	        		});	
        		}
        	});
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

		        	$('#representative-form').empty();
		        	$('#athleteForm').removeClass('hide');
		    		$('#dni').attr('disabled', true);
                	$('#nationality').attr('disabled', true);
                	$('#search').attr('disabled', true);
		        	swal("Perfecto!", "Se registro al representante, registre al atleta", "success");
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


		var $demoMaskedInput = $('.demo-masked-input');

        //Mobile Phone Number
	    $demoMaskedInput.find('.mobile-phone-number').inputmask('(99) 999-9999', { placeholder: '(___) ___-____' });
	    //Phone Number
	    $demoMaskedInput.find('.phone-number').inputmask('(999) 999-9999', { placeholder: '(____) ___-____' });

	   	//Dni
	    $demoMaskedInput.find('.dni').inputmask('999999999-9', { placeholder: '_________-_' });
</script>