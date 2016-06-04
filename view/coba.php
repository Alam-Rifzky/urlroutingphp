<body>


	<div class='container'>
		<form action=<?php echo "'".getBaseUrl().$command[0]."'" ?> method='post'>
			<div class='row'>
				<div class='form-group'>
					<label>Name</label>
					<input type='text' class='form-control' name='data[nama]'/>
				</div>
			</div>
			<button class='btn btn-md btn-primary'>Submit</button>
		</form>
	</div>

</body>