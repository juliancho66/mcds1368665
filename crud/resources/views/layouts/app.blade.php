<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
</head>
<body>
	<div class="container">
	@yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>

<script>

	$(document).ready(function(){

		$('#loading').hide();

		$('#doUpload').click(function(event){
			$('#upload').click();

		});

		$('form').on('click','.btn-delete',function(event){
			event.preventDefault();
			if(confirm('Realmente desea eliminar este usuario?')){
				$(this).parent().submit();

			}
 		});

 		$('form').on('keyup','#email',function(event) {
			event.preventDefault();
			$email= $(this).val();		
			$token= $('input[name="_token"]').val();

		
			$.post('checkmail',{email: $email, _token: $token}, function(data) {
				if(data == 'ok'){
					$('#email').parent()
								.removeClass('has-error has-feedback')
								.addClass('has-success has-feedback');
				
					$('#check').removeClass('fa-times').addClass('fa-check fa-2x');

					

				}else{
					$('#email').parent()
								.removeClass('has-success has-feedback')
								.addClass('has-error has-feedback');
					$('#check').removeClass('fa-check').addClass('fa-times');
					//$('#check').text('No Disponible');
				}
			});
		});		


		$('form').on('change','#departments',function(event) {
			event.preventDefault();
			$id_dep= $(this).val();		
			$token= $('input[name="_token"]').val();

			$('#loading').show();
			$('#municipalities').hide();

		
			$.post('loadmuns',{id_dep: $id_dep, _token: $token}, function(data) {
				
				setTimeout(function(){
					$('#municipalities').removeAttr('readonly');
				    $('#municipalities').html(data); 
				    $('#municipalities').show();
				    $('#municipalities').show();
			        $('#loading').hide();

				},1000);
				
				
			});
		});	


	});
	
</script>
</body>
</html>