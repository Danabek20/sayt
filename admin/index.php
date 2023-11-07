<?php
include("layout/header.php");
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
                        body {
                        	color: #566787;
                        	background: #f5f5f5;
                        	font-family: 'Varela Round', sans-serif;
                        	font-size: 13px;
                        }
                        .table-responsive {
                            margin: 30px 0;
                        }
                        .table-wrapper {
                        	background: #fff;
                        	padding: 20px 25px;
                        	border-radius: 3px;
                        	min-width: 1000px;
                        	box-shadow: 0 1px 1px rgba(0,0,0,.05);
                        }
                        .table-title {        
                        	padding-bottom: 15px;
                        	background: #435d7d;
                        	color: #fff;
                        	padding: 16px 30px;
                        	min-width: 100%;
                        	margin: -20px -25px 10px;
                        	border-radius: 3px 3px 0 0;
                        }
                        .table-title h2 {
                        	margin: 5px 0 0;
                        	font-size: 24px;
                        }
                        .table-title .btn-group {
                        	float: right;
                        }
                        .table-title .btn {
                        	color: #fff;
                        	float: right;
                        	font-size: 13px;
                        	border: none;
                        	min-width: 50px;
                        	border-radius: 2px;
                        	border: none;
                        	outline: none !important;
                        	margin-left: 10px;
                        }
                        .table-title .btn i {
                        	float: left;
                        	font-size: 21px;
                        	margin-right: 5px;
                        }
                        .table-title .btn span {
                        	float: left;
                        	margin-top: 2px;
                        }
                        table.table tr th, table.table tr td {
                        	border-color: #e9e9e9;
                        	padding: 12px 15px;
                        	vertical-align: middle;
                        }
                        table.table tr th:first-child {
                        	width: 60px;
                        }
                        table.table tr th:last-child {
                        	width: 100px;
                        }
                        table.table-striped tbody tr:nth-of-type(odd) {
                        	background-color: #fcfcfc;
                        }
                        table.table-striped.table-hover tbody tr:hover {
                        	background: #f5f5f5;
                        }
                        table.table th i {
                        	font-size: 13px;
                        	margin: 0 5px;
                        	cursor: pointer;
                        }	
                        table.table td:last-child i {
                        	opacity: 0.9;
                        	font-size: 22px;
                        	margin: 0 5px;
                        }
                        table.table td a {
                        	font-weight: bold;
                        	color: #566787;
                        	display: inline-block;
                        	text-decoration: none;
                        	outline: none !important;
                        }
                        table.table td a:hover {
                        	color: #2196F3;
                        }
                        table.table td a.edit {
                        	color: #FFC107;
                        }
                        table.table td a.delete {
                        	color: #F44336;
                        }
                        table.table td i {
                        	font-size: 19px;
                        }
                        table.table .avatar {
                        	border-radius: 50%;
                        	vertical-align: middle;
                        	margin-right: 10px;
                        }
                        .pagination {
                        	float: right;
                        	margin: 0 0 5px;
                        }
                        .pagination li a {
                        	border: none;
                        	font-size: 13px;
                        	min-width: 30px;
                        	min-height: 30px;
                        	color: #999;
                        	margin: 0 2px;
                        	line-height: 30px;
                        	border-radius: 2px !important;
                        	text-align: center;
                        	padding: 0 6px;
                        }
                        .pagination li a:hover {
                        	color: #666;
                        }	
                        .pagination li.active a, .pagination li.active a.page-link {
                        	background: #03A9F4;
                        }
                        .pagination li.active a:hover {        
                        	background: #0397d6;
                        }
                        .pagination li.disabled i {
                        	color: #ccc;
                        }
                        .pagination li i {
                        	font-size: 16px;
                        	padding-top: 6px
                        }
                        .hint-text {
                        	float: left;
                        	margin-top: 10px;
                        	font-size: 13px;
                        }    
                        /* Custom checkbox */
                        .custom-checkbox {
                        	position: relative;
                        }
                        .custom-checkbox input[type="checkbox"] {    
                        	opacity: 0;
                        	position: absolute;
                        	margin: 5px 0 0 3px;
                        	z-index: 9;
                        }
                        .custom-checkbox label:before{
                        	width: 18px;
                        	height: 18px;
                        }
                        .custom-checkbox label:before {
                        	content: '';
                        	margin-right: 10px;
                        	display: inline-block;
                        	vertical-align: text-top;
                        	background: white;
                        	border: 1px solid #bbb;
                        	border-radius: 2px;
                        	box-sizing: border-box;
                        	z-index: 2;
                        }
                        .custom-checkbox input[type="checkbox"]:checked + label:after {
                        	content: '';
                        	position: absolute;
                        	left: 6px;
                        	top: 3px;
                        	width: 6px;
                        	height: 11px;
                        	border: solid #000;
                        	border-width: 0 3px 3px 0;
                        	transform: inherit;
                        	z-index: 3;
                        	transform: rotateZ(45deg);
                        }
                        .custom-checkbox input[type="checkbox"]:checked + label:before {
                        	border-color: #03A9F4;
                        	background: #03A9F4;
                        }
                        .custom-checkbox input[type="checkbox"]:checked + label:after {
                        	border-color: #fff;
                        }
                        .custom-checkbox input[type="checkbox"]:disabled + label:before {
                        	color: #b8b8b8;
                        	cursor: auto;
                        	box-shadow: none;
                        	background: #ddd;
                        }
                        /* Modal styles */
                        .modal .modal-dialog {
                        	max-width: 400px;
                        }
                        .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                        	padding: 20px 30px;
                        }
                        .modal .modal-content {
                        	border-radius: 3px;
                        	font-size: 14px;
                        }
                        .modal .modal-footer {
                        	background: #ecf0f1;
                        	border-radius: 0 0 3px 3px;
                        }
                        .modal .modal-title {
                        	display: inline-block;
                        }
                        .modal .form-control {
                        	border-radius: 2px;
                        	box-shadow: none;
                        	border-color: #dddddd;
                        }
                        .modal textarea.form-control {
                        	resize: vertical;
                        }
                        .modal .btn {
                        	border-radius: 2px;
                        	min-width: 100px;
                        }	
                        .modal form label {
                        	font-weight: normal;
                        }	
</style>

<div class="container-fluid">
  <div class="row">
            <?php 
                include("layout/nav.php");
            ?>

        </div>
      </div>
      </div>
    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
      </div>


      <h2>Section title</h2>
      <div class="table-responsive small">
      <table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>Thomas Hardy</td>
						<td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
						<td>(171) 555-2222</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>Dominique Perrier</td>
						<td>dominiqueperrier@mail.com</td>
						<td>Obere Str. 57, Berlin, Germany</td>
						<td>(313) 555-5735</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>Maria Anders</td>
						<td>mariaanders@mail.com</td>
						<td>25, rue Lauriston, Paris, France</td>
						<td>(503) 555-9931</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>Fran Wilson</td>
						<td>franwilson@mail.com</td>
						<td>C/ Araquil, 67, Madrid, Spain</td>
						<td>(204) 619-5731</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>					
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td>Martin Blank</td>
						<td>martinblank@mail.com</td>
						<td>Via Monte Bianco 34, Turin, Italy</td>
						<td>(480) 631-2097</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr> 
				</tbody>
			</table>
      </div>
    </main>
  </div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
