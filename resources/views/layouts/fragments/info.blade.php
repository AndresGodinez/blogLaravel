@if (Session::has('info'))
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 ">
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">
					&times;
				</button>
				{{Session::get('info')}}
			</div>

		</div>
	</div>
</div>
@endif
