<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
  </head>
  <body >
  <div class="container" style="margin-top:50px;">
  <form action="<?= site_url("welcome/cadastrar"); ?>" method="post">
  <table class="table table-bordered" id="dynamic_field">
  <tr>
	<td><input type="text" name="name[]" placeholder="Nome" class="form-control" /></td>
  <td><input type="text" name="idade[]" placeholder="idade" class="form-control" /></td>
	<td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
  </tr>

  </table>
  <button type="submit" class="btn btn-info">salvar</button>
</form>

</div>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Nome" class="form-control" /></td><td><input type="text" name="idade[]" placeholder="idade" class="form-control" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
});
	
</script>
  </body>
</html>