<body>
<div class="container" style="padding-top: 20vh;">
	<div class="card mb-4">
		<div class="card-body">
			<?php foreach ($biaya_transport as $row) {
		$url = "home/edit_transport/".$row->id;
		echo "
			<form action=".base_url($url)." method=\"post\">
			<div class=\"card-body mx-5\">
			<div class=\"md-form mb-4\">
			<input type=\"text\" class=\"form-control\" name=\"provinsi\" value=\"$row->provinsi\">
			<label data-error=\"wrong\" data-success=\"right\">Provinsi</label>
			</div>

			<div class=\"md-form mb-4\">
			<input type=\"text\" class=\"form-control\" name=\"besaran\" value='$row->besaran'>
			<label data-error=\"wrong\" data-success=\"right\">Besaran</label>
			</div>

			<div class=\"d-flex row\">
			<a href=\"../biaya_transport\"><button class=\"btn btn-indigo\"><i class=\"fa fa-angle-left\" arria-hidden=\"true\"></i>  Kembali</button></a>
			<div class=\"col\"></div>
			<button class=\"btn btn-indigo\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i>  Edit</button>
			</div>
			</div>
		</form>";
	}
	?>		
		</div>
	</div>
</div>
</body>
