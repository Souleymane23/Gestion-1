$('#Valider').click(function())
{
	if(option == "add")
	{
		$.ajax({
			type:"post",
			url:"addpointage",
			data:{
				recipient-date: $('#recipient-date').val(),
				recipient-time: $('#recipient-time').val(),
				recipient-timesortie: $('#recipient-timesortie').val(),
				defaultUnchecked: $('#defaultUnchecked').val(),
				message-text: $('#message-text').val()
			},
			headers:{
				'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
			},
			success: function(){
				alert('ok');
			}
		})
	}else{

	}$('#data').slideToggle();
	$('#form').slideToggle();
});