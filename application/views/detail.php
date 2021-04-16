<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('template/header');
 ?>

	<div class="row">
		<div class="container">
			<div class="col-8 offset-2 mt-5 text-center head">

			</div>

			<div class="col-md-8 col-xs-6 offset-md-2 mt-5 mb-5">
        <div class="col-8 offset-2 mt-5 text-center">
  				<!-- <h3>Surah</h3> -->
  			</div>

				<div class="list-group verses">

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

      var surah = '<?php echo $surah; ?>';

      $.ajax({
				url: '<?php echo site_url("detail") ?>',
				type: 'POST',
				dataType: 'json',
				data: {param: surah}
			})
			.done(function(response) {
				console.log(response);
				var html = "";
        // var d = jQuery.parseJSON(response);
        // console.log(d);
        $(".head").html('<h2><span class="badge badge-dark">'+ response.number_of_surah +'</span></h2><h3>'+ response.name +' - '+ response.name_translations.ar +'</h3><p>'+ response.number_of_ayah +' Verses</p>');

				$.each(response.verses, function(key, value) {
					// console.log(key);
					html += '<div class="mb-3 shadow-sm ">'
					html += '<a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">';
					html += '<div class="d-flex w-100 justify-content-between ">';
          html += '<small>'+ value.number +'</small>';
					html += '<h5 class="mb-1"></h5>';
					html += '</div>';
					html += '<p class="mb-1 text-right" style="font-size: 23px;">'+ value.text +'</p>';
          html += '<hr>'
					html += '<small style="font-size: 10px;">'+ value.translation_id +'. </small>';
					html += '</a>';
					html += '</div>';

					$('.verses').html(html);
          //

				});

			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				// console.log("complete");
				$("body").loading('stop');
			});

		});
	</script>

<?php
	$this->load->view('template/footer');
 ?>
