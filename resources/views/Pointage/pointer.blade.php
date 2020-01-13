<script src="https://code.jquery.com/jquery-3.4.1.js"

integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Add</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add pointage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="Post" action="Pointage/pointer">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date du jour:</label>
            <input type="date" name="date" class="form-control" id="recipient-date">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Heure d'arrive:</label>
            <input type="Time" name="time" class="form-control" id="recipient-time">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Heure de sortie:</label>
            <input type="Time" name="timesortie" class="form-control" id="recipient-timesortie">
          </div>
          <div class="custom-control custom-checkbox">
    		<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
    		<label class="custom-control-label" for="defaultUnchecked">Absent</label>
			</div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Motif Absebt:</label>
            <textarea class="form-control" id="message-text" name="abs"></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="Valider">Pointer</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script>
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
</script>
</body>
</html>