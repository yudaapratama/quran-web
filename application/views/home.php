<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('template/header');
 ?>

	<div class="row">
		<div class="container">
			<div class="col-8 offset-2 mt-5 text-center">
				<h3>QUR'AN WEB</h3>
			</div>

			<div class="col-md-8 col-xs-6 offset-md-2 mt-5 mb-5">
				<div class="form-group">
					<input type="text" name="search" value="" class="form-control form-control-sm" placeholder="Type Surah in here ...">
				</div>

				<div class="list-group listSurah" id="list">
				  <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading</h5>
				      <small>3 days ago</small>
				    </div>
				    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				    <small>Donec id elit non mi porta.</small>
				  </a> -->
				</div>

			</div>


		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {

			$("body").loading({
				message: 'Loading ...',
				theme: 'dark'
			});

			$.ajax({
				url: '<?php echo site_url("list-surah") ?>',
				type: 'POST',
				dataType: 'json',
				// data: {param1: 'value1'}
			})
			.done(function(response) {
				console.log(response);
				var html = "";
				$.each(response, function(key, value) {
					// console.log(key + " : "+value);
					html += '<div class="mb-2 shadow-sm ">'
					html += '<a href="<?php echo site_url("surah/") ?>'+ value.number_of_surah +'" class="list-group-item list-group-item-action flex-column align-items-start">';
					html += '<div class="d-flex w-100 justify-content-between">';
					html += '<h5 class="mb-1">'+ value.name +' - '+ value.name_translations.ar +'</h5>';
					html += '<small><span class="badge badge-dark">'+ value.number_of_surah +'</span></small>';
					html += '</div>';
					// html += '<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>';
					html += '<small>Total Verses : '+ value.number_of_ayah +'</small>';
					html += '</a>';
					html += '</div>';

					$('.listSurah').html(html);
				});

			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				// console.log("complete");
				$("body").loading('stop');
			});

			$("input[name=search]").on('keyup', function(event) {
				event.preventDefault();
				var value = $(this).val().toLowerCase();
				$("#list div").filter(function() {
					// alert($(this).text().toLowerCase().indexOf(value) > -1);
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});

		});
	</script>

<?php
	$this->load->view('template/footer');
 ?>
