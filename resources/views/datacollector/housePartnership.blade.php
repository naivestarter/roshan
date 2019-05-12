<div class="widget ">
	      			
	<div class="widget-header">
		<i class="icon-user"></i>
		<h3>साझेदारको विवरण</h3>
	</div> <!-- /widget-header -->
	
	<div class="widget-content">

		<div class="" id="formcontrols">
			@if(session()->has('success'))
				<div class="alert alert-success">
				    {{ session()->get('success') }}
				</div>
			@endif
			@if(session()->has('failure'))
				<div class="alert alert-danger">
				    {{ session()->get('failure') }}
				</div>
			@endif
			<form id="add-profile" class="form-horizontal" action="{{ route('housedetail.store') }}" method="POST">
				{{ csrf_field() }}
				<fieldset>
					<div class="control-group">											
						<label class="control-label" for="unique">घर नम्बर</label>
						<div class="controls">
							<input type="text" class="span9 disabled" name="house_id" id="unique" value="03080711" required disabled>
							<p class="help-block">This is the auto generated uniqueID.</p>
							@if($errors->has('house_id'))<p class="red">{{$errors->first('house_id')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="area">नाम</label>
						<div class="controls">
							<input type="text" class="span9" name="name[]" id="area" value="{{ isset($data->name)?$data->name:old('name') }}" required>						
							@if($errors->has('name'))<p class="red">{{$errors->first('name')}}</p>@endif	
						</div> <!-- /controls -->			
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="area">बाबु/पति को नाम</label>
						<div class="controls">
							<input type="text" class="span9" name="father_spouse_name[]" id="area" value="{{ isset($data->father_spouse_name)?$data->father_spouse_name:old('father_spouse_name') }}" required>						
							@if($errors->has('father_spouse_name'))<p class="red">{{$errors->first('father_spouse_name')}}</p>@endif	
						</div> <!-- /controls -->			
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="area">बाजेको नाम</label>
						<div class="controls">
							<input type="text" class="span9" name="grandfather_name[]" id="area" value="{{ isset($data->grandfather_name)?$data->grandfather_name:old('grandfather_name') }}" required>						
							@if($errors->has('grandfather_name'))<p class="red">{{$errors->first('grandfather_name')}}</p>@endif	
						</div> <!-- /controls -->			
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="area">नागरीकता नम्बर</label>
						<div class="controls">
							<input type="text" class="span9" name="citizenship_number[]" id="area" value="{{ isset($data->citizenship_number)?$data->citizenship_number:old('citizenship_number') }}" required>						
							@if($errors->has('citizenship_number'))<p class="red">{{$errors->first('citizenship_number')}}</p>@endif	
						</div> <!-- /controls -->			
					</div> <!-- /control-group -->

					<b>साझेदार थप्नुहोस् + </b><br><br>

					@foreach($errors->all() as $e)
					<p>{{ $e }}</p>
					@endforeach
					<br />
                  					
					<div class="form-actions">
						<button type="submit" class="btn pull-left">Previous</button> 
						<button type="submit" class="btn pull-right">Next</button>

						
					</div> <!-- /form-actions -->
					<div class="progress progress-striped active">
                      	<div class="bar" style="width: 40%;"></div>
                    </div>
				</fieldset>
			</form>			
		</div>
	</div> <!-- /widget-content -->
		
</div> <!-- /widget -->
<script type="text/javascript">

function displayCheck() {
    if (document.getElementById('yesDisabled').checked) {
        document.getElementById('disablitiy-form').style.display = 'block';
    }
    else document.getElementById('disablitiy-form').style.display = 'none';
}

// function identityCheck() {
//     if (document.getElementById('yesIdentity').checked) {
//         document.getElementById('identity-form').style.display = 'block';
//     }
//     else document.getElementById('identity-form').style.display = 'none';
// }

</script>