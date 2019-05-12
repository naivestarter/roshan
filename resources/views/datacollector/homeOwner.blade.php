<div class="widget ">
	      			
	<div class="widget-header">
		<i class="icon-user"></i>
		<h3>घर धनीको विवरण</h3>
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
			<form id="add-profile" class="form-horizontal" action="{{ route('homeowner.store') }}" method="POST">
				{{ csrf_field() }}
				<fieldset>
					
					<div class="control-group">											
						<label class="control-label" for="unique">युनिक आइडि</label>
						<div class="controls">
							<input type="text" class="span9 disabled" name="unique_id" id="unique" value="03080711" required>
							<p class="help-block">This is the auto generated uniqueID.</p>
							@if($errors->has('unique_id'))<p class="red">{{$errors->first('unique_id')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					<div class="control-group">
						<label class="control-label" for="firstname">घर धनीको</label>
					</div>
					<div class="control-group">											
						<label class="control-label" for="firstname">नाम</label>
						<div class="controls">
							<input type="text" class="span9" name="first_name" id="firstname" value="{{ isset($data->first_name)?$data->first_name:old('first_name') }}" >						
							@if($errors->has('first_name'))<p class="red">{{$errors->first('first_name')}}</p>@endif	
						</div> <!-- /controls -->
								
					</div> <!-- /control-group -->
					
					
					<div class="control-group">											
						<label class="control-label" for="lastname">थर</label>
						<div class="controls">
							<input type="text" class="span9" name="last_name" id="lastname" value="{{ isset($data->last_name)?$data->last_name:old('last_name') }}" required>
							@if($errors->has('last_name'))<p class="red">{{$errors->first('last_name')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="fname">बाबुको नाम</label>
						<div class="controls">
							<input type="text" class="span9" name="father_name" id="fname" value="{{  isset($data->father_name)?$data->father_name:old('father_name') }}" required>
							@if($errors->has('father_name'))<p class="red">{{$errors->first('father_name')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="mname">आमाको नाम</label>
						<div class="controls">
							<input type="text" class="span9" name="mother_name" id="mname" value="{{  isset($data->mother_name)?$data->mother_name:old('mother_name') }}" required>
							@if($errors->has('mother_name'))<p class="red">{{$errors->first('mother_name')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="gname">बाजेको नाम</label>
						<div class="controls">
							<input type="text" class="span9" name="grandfather_name" id="gname" value="{{  isset($data->grandfather_name)?$data->grandfather_name:old('grandfather_name') }}" required>
							@if($errors->has('grandfather_name'))<p class="red">{{$errors->first('grandfather_name')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<label class="control-label" for="age">उमेर</label>
						<div class="controls">
							<input type="text" class="span9" name="age" id="age" value="{{ isset($data->age)?$data->age:old('age') }}" required>
							@if($errors->has('age'))<p class="red">{{$errors->first('age')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">
					    <label class="control-label" for="homeownereducation">शिक्षा</label>
					    <div class="controls">
					       	<select class="span9" name="education" id="homeownereducation" >
                                <option value="">Select</option>
                                <option value="सामान्य लेखपढ">सामान्य लेखपढ</option>
                                <option value="प्राथमिक">प्राथमिक</option>
                                <option value="निम्न माध्यमिक">निम्न माध्यमिक</option>
                                <option value="माध्यमिक">माध्यमिक</option>
                                <option value="उच्च माध्यमिक">उच्च माध्यमिक</option>
                                <option value="स्नातक">स्नातक</option>
                                <option value="स्नातकोत्तर">स्नातकोत्तर</option>
                                <option value="विद्यावारीधी">विद्यावारीधी</option>
                                <option value="प्रौढ शिक्षा">प्रौढ शिक्षा</option>
                            </select>
					    </div>
					</div>

					<div class="control-group">
				      	<label class="control-label" for="homeownerspecialtraining">विशेष दक्षताा</label>
				      	<div class="controls">
					        <select class="span9" name="speaciality" id="homeownerspecialtraining" >
                                <option value="">Select</option>
                                <option value="सूचना प्रविधि">सूचना प्रविधि</option>
                                <option value="पाइलट">पाइलट</option>
                                <option value="कृषि">कृषि</option>
                                <option value="पशु">पशु</option>
                                <option value="इन्जिनियरिंग">इन्जिनियरिंग</option>
                                <option value="वन">वन</option>
                                <option value="मेडिसिन">मेडिसिन</option>
                                <option value="खाद्य प्रसोधन">खाद्य प्रसोधन</option>
                                <option value="वकिल">वकिल</option>
                                <option value="पत्रकार">पत्रकार</option>
                                <option value="अन्य">अन्य</option>
                            </select>
					        
					    </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="gender">लिङ्ग</label>
						<div class="controls">
							<select class="span9" name="gender" id="gender" >
						        <option value="">Select</option>
						        <option value="महिला">महिला</option>
						        <option value="पुरुष">पुरुष</option>
						        <option value="अन्य">अन्य</option>
					      	</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="religion">पारिवारिक धर्म</label>
						<div class="controls">
							<select class="span9" name="family_religion" id="homeownerreligion" >
						        <option value="">Select</option>
						        <option value="हिन्दु">हिन्दु</option>
						        <option value="बौद्ध">बौद्ध</option>
						        <option value="इस्लाम">इस्लाम</option>
						        <option value="सिख">सिख</option>
						        <option value="जैन">जैन</option>
						        <option value="किराँत">किराँत</option>
						        <option value="प्राकृत">प्राकृत</option>
						        <option value="इशाई">इशाई</option>
						        <option value="अन्य">अन्य</option>
						    </select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="caste">जात</label>
						<div class="controls">
							<select class="span9" name="caste" id="homeownercasteonly" >
                                <option value="">Select</option>
                                <option value="ब्राह्मण (पहाडी)">ब्राह्मण (पहाडी)</option>
                                <option value="ब्राह्मण (तराई)">ब्राह्मण (तराई)</option>
                                <option value="क्षेत्री">क्षेत्री</option>
                                <option value="ठकुरी">ठकुरी</option>
                                <option value="मगर">मगर</option>
                                <option value="तामांग">तामांग</option>
                                <option value="गुरुङ">गुरुङ</option>
                                <option value="नेवार">नेवार</option>
                                <option value="कामि">कामि</option>

                                <option value="कुमाल1">कुमाल</option>
                                <option value="घर्ति">घर्ति</option>
                                <option value="यादव">यादव</option>
                                <option value="केवट">केवट</option>
                                <option value="मुसहर">मुसहर</option>
                                <option value="हरिजन">हरिजन</option>
                                <option value="चौहान">चौहान</option>
                                <option value="धोबी">धोबी</option>
                                <option value="राई">राई</option>

                                <option value="दमाइ">दमाइ</option>
                                <option value="लिम्बु">लिम्बु</option>
                                <option value="सार्की">सार्की </option>
                                <option value="शेर्पा">शेर्पा</option>
                                <option value="घले">घले</option>
                            </select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="homeownermothertongue">मातृभाषा</label>
						<div class="controls">
							<select class="span9" name="mother_language" id="homeownermothertongue" >
                                <option value="">Select</option>
                                <option value="नेपाली">नेपाली</option>
                                <option value="नेवारी">नेवारी</option>
                                <option value="अवधि">अवधि</option>
                                <option value="अंग्रेजी">अंग्रेजी</option>
                                <option value="उर्दु">उर्दु</option>
                                <option value="खाम">खाम</option>
                                <option value="खास">खास</option>
                                <option value="गुरुङ">गुरुङ</option>
                                <option value="घले">घले</option>

                                <option value="चाम्लिङ्ग">चाम्लिङ्ग</option>
                                <option value="छन्त्याल">छन्त्याल</option>
                                <option value="डोटेली">डोटेली</option>
                                <option value="तामांग">तामांग</option>
                                <option value="तिबेतन">तिबेतन</option>
                                <option value="थकाली5">थकाली</option>
                                <option value="थामी">थामी</option>
                                <option value="थारु">थारु</option>
                                <option value="थाहा नभएको">थाहा नभएको</option>

                                <option value="दनुवार">दनुवार</option>
                                <option value="दुरा">दुरा</option>
                                <option value="पहरी">पहरी</option>
                                <option value="बान्तवा">बान्तवा</option>
                                <option value="बैतडेली">बैतडेली</option>
                                <option value="बोटे">बोटे</option>
                                <option value="बंगला">बंगला</option>
                                <option value="भोजपुरी">भोजपुरी</option>
                                <option value="मगर">मगर</option>
                                <option value="माझि">माझि</option>
                                <option value="मैथली">मैथली</option>
                                <option value="राई">राई</option>
                                <option value="लाप्चा">लाप्चा</option>
                                <option value="लिम्बु">लिम्बु</option>
                                <option value="लोहोरुंग">लोहोरुंग</option>
                                <option value="शेर्पा">शेर्पा</option>
                                <option value="सम्पांग">सम्पांग</option>
                                <option value="सांकेतिक भाषा">सांकेतिक भाषा</option>
                                <option value="सुनुवार">सुनुवार</option>
                                <option value="संस्कृत">संस्कृत</option>
                                <option value="हिन्दि">हिन्दि</option>
                                <option value="ह्योल्मो">ह्योल्मो </option>
                                <option value="अन्ये">अन्ये</option>
                            </select>
						</div>
					</div>

					<div class="control-group">											
						<label class="control-label">अपांगता</label>
                        <div class="controls">
                        <label class="radio inline">
                          	<input id="yesDisabled" type="radio"  name="disability" value="1" onclick="javascript:displayCheck();"> छ
                        </label>
                        
                        <label class="radio inline">
                          	<input type="radio" name="disability" value="2" onclick="javascript:displayCheck();"> छैन
                        </label>
                      </div>	<!-- /controls -->			
					</div> <!-- /control-group -->

					<span class="hidden-form" id="disablitiy-form"> 
						{{-- <div class="control-group">											
							<label class="control-label">अपांग परिचय पत्र</label>
	                        <div class="controls">
	                        <label class="radio inline">
	                          	<input id="yesIdentity" type="radio"  name="disabled_identity_card" value="1" onclick="javascript:identityCheck();"> छ
	                        </label>
	                        
	                        <label class="radio inline">
	                          	<input type="radio" name="disabled_identity_card" value="2" onclick="javascript:identityCheck();"> छैन
	                        </label>
	                      </div>	<!-- /controls -->			
						</div> <!-- /control-group --> --}}

						{{-- <span class="hidden-form" id="identity-form"> --}}
							<div class="control-group">
								<label class="control-label" for="mother_language">परिचय पत्र प्रकार</label>
								<div class="controls">
									<select class="span9" name="disabled_identity_type" id="homeownercitizentype">
		                                <option value="">Select</option>
		                                <option value="रातो(पूर्ण)"> छैन</option>
		                                <option value="रातो(पूर्ण)"> रातो(पूर्ण)</option>
		                                <option value="निलो(अति)"> निलो(अति)</option>
		                                <option value="पहेंलो(मध्यम)"> पहेंलो(मध्यम)</option>
		                                <option value="सेतो (सामान्य)">सेतो (सामान्य)</option>
		                            </select>
		                        </div>
		                    </div> 
	                	{{-- </span> --}}
                	</span>

					<div class="control-group">											
						<label class="control-label">स्थायी ठेगाना</label>
                        <div class="controls">
                        <label class="radio inline">
                          	<input type="radio"  name="permanent_residence" value="यहीं"> यहीं
                        </label>
                        
                        <label class="radio inline">
                          	<input type="radio" name="permanent_residence" value="अन्यत्र"> अन्यत्र
                        </label>
                      </div>	<!-- /controls -->			
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<label class="control-label" for="province">प्रदेश</label>
						<div class="controls">
							<input type="text" class="span9" name="province" id="province" value="{{  isset($data->province)?$data->province:old('province') }}">
							@if($errors->has('province'))<p class="red">{{$errors->first('province')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="district">जिल्ला</label>
						<div class="controls">
							<input type="text" class="span9" name="district" id="district" value="{{  isset($data->district)?$data->district:old('district') }}">
							@if($errors->has('district'))<p class="red">{{$errors->first('district')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="municipality">नगर</label>
						<div class="controls">
							<input type="text" class="span9" name="municipality" id="municipality" value="{{  isset($data->municipality)?$data->municipality:old('municipality') }}">
							@if($errors->has('municipality'))<p class="red">{{$errors->first('municipality')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="village">गाउ</label>
						<div class="controls">
							<input type="text" class="span9" name="village" id="village" value="{{  isset($data->village)?$data->village:old('village') }}">
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="ward">वडा</label>
						<div class="controls">
							<input type="text" class="span9" name="ward" id="ward" value="{{  isset($data->ward)?$data->ward:old('ward') }}">
							@if($errors->has('ward'))<p class="red">{{$errors->first('ward')}}</p>@endif
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label">घर छ ?</label>
                        <div class="controls">
                        <label class="radio inline">
                          	<input type="radio"  name="has_house" value="1"> छ
                        </label>
                        
                        <label class="radio inline">
                          	<input type="radio" name="has_house" value="2"> छैन
                        </label>
                      </div>	<!-- /controls -->			
					</div> <!-- /control-group -->
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