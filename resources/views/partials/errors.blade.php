@if ($errors->any())
	 <div style="margin-bottom: 15px;border: 1px solid red;padding: 5px;border-radius: 10px;background-color: rgba(255,0,0,0.2);">
		@foreach ($errors->all() as $error)
			<div style="color: red;font-weight: bold;">{{ $error }}</div>
		@endforeach
	</div>
@endif