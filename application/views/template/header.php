<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>QUR'AN WEB</title>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap-4.5.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap-4.5.3/font/bootstrap-icons.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/datepicker/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/jquery/loading.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables/fixedHeader.dataTables.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/jquery-confirm/jquery-confirm.min.css" rel="stylesheet">
		<style media="screen">
			/* .autocomplete-suggestions {
				border: 1px solid grey;
				background: #FFF;
				padding: 4px 20px;
  			white-space: nowrap;
				overflow: auto;
			}

			.column-date{
				border: 1px solid grey;
				padding: 4px 20px;
  			white-space: nowrap;
			}

			table#table.dataTable tbody tr:hover {
			  background-color: #ADD9DA;
			}

			table#table.dataTable tbody tr:hover > .sorting_1 {
			  background-color: #ADD9DA;
			} */

			/* .table-th {
				th
			} */
		</style>

		<script src="<?php echo base_url() ?>assets/jquery/jquery-3.3.1.min.js" ></script>
		<script src="<?php echo base_url() ?>assets/jquery/popper.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/jquery/jquery-autocomplete.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/jquery/jquery.loading.js" ></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/jquery/jquery.number.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/jquery-confirm/jquery-confirm.min.js" ></script>
	</head>
	<body id="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Qur'an Web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">List Surah <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Full Surah</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
