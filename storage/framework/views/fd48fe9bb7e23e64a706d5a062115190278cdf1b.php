<div class="widget ">
	      			
	<div class="widget-header">
		<i class="icon-user"></i>
		<h3>घरको विवरण</h3>
	</div> <!-- /widget-header -->
	
	<div class="widget-content">

		<div class="" id="formcontrols">
			<?php if(session()->has('success')): ?>
				<div class="alert alert-success">
				    <?php echo e(session()->get('success')); ?>

				</div>
			<?php endif; ?>
			<?php if(session()->has('failure')): ?>
				<div class="alert alert-danger">
				    <?php echo e(session()->get('failure')); ?>

				</div>
			<?php endif; ?>
			<form id="add-profile" class="form-horizontal" action="<?php echo e(route('housedetail.store')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<fieldset>
					<div class="control-group">											
						<label class="control-label" for="unique">घर नम्बर</label>
						<div class="controls">
							<input type="text" class="span9 disabled" name="house_id" id="unique" value="03080711" required>
							<p class="help-block">This is the auto generated uniqueID.</p>
							<?php if($errors->has('house_id')): ?><p class="red"><?php echo e($errors->first('house_id')); ?></p><?php endif; ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					<div class="control-group">											
						<label class="control-label" for="area">घरले ओगटेको क्षेत्रफल</label>
						<div class="controls">
							<input type="text" class="span9" name="area" id="area" value="<?php echo e(isset($data->area)?$data->area:old('area')); ?>" required>						
							<?php if($errors->has('area')): ?><p class="red"><?php echo e($errors->first('area')); ?></p><?php endif; ?>	
						</div> <!-- /controls -->
								
					</div> <!-- /control-group -->
					<div class="control-group">
					    <label class="control-label" for="homestructure">घरको बनावट </label>
					    <div class="controls">
					       	<select class="span9" name="structure" id="homestructure" >
                                <option value="">Select</option>
							    <option value="आर. सी. सी.">आर. सी. सी.</option>
							    <option value="ढुंगा सिमेन्ट">ढुंगा सिमेन्ट</option>
							    <option value="इट्टा माटो">इट्टा माटो</option>
							    <option value="इट्टा सिमेन्ट">इट्टा सिमेन्ट</option>
							    <option value="प्रि फ्याब">प्रि फ्याब</option>
							    <option value="बाँस माटो">बाँस माटो</option>
							    <option value="सिमेन्ट ब्लक">सिमेन्ट ब्लक</option>
                            </select>
					    </div>
					</div>
					<div class="control-group">
					    <label class="control-label" for="homeownereducation">घरको छानाको प्रकार </label>
					    <div class="controls">
					       	<select class="span9" name="roof_type" id="homeownereducation" >
                                <option value="">Select</option>
							    <option value="आर. सी. सी.">आर. सी. सी.</option>
							    <option value="जस्ता र च्यादर">जस्ता र च्यादर</option>
							    <option value="ढुंगा">ढुंगा</option>
							    <option value="टायल">टायल</option>
							    <option value="स्लेट">स्लेट</option>
							    <option value="काठ">काठ</option>
							    <option value="माटो">माटो</option>
							    <option value="फुस तथा खर">फुस तथा खर</option>
                            </select>
					    </div>
					</div>

					<div class="control-group">											
						<label class="control-label">घर भुकम्प प्रतिरोधी हो?</label>
                        <div class="controls">
                        <label class="radio inline">
                          	<input type="radio"  name="earthquake_resistant" value="1" > हो
                        </label>
                        
                        <label class="radio inline">
                          	<input type="radio" name="earthquake_resistant" value="2" > होइन
                        </label>
                      </div>	<!-- /controls -->			
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label" for="lastname">तला संख्या</label>
						<div class="controls">
							<input type="text" class="span9" name="storey_count" id="lastname" value="<?php echo e(isset($data->storey_count)?$data->storey_count:old('storey_count')); ?>" required>
							<?php if($errors->has('storey_count')): ?><p class="red"><?php echo e($errors->first('storey_count')); ?></p><?php endif; ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->

					<div class="control-group">											
						<label class="control-label">भाडामा दिइएको छ ?</label>
                        <div class="controls">
                        <label class="radio inline">
                          	<input id="yesDisabled" type="radio"  name="is_rented" value="1" onclick="javascript:displayCheck();"> छ
                        </label>
                        
                        <label class="radio inline">
                          	<input type="radio" name="is_rented" value="2" onclick="javascript:displayCheck();"> छैन
                        </label>
                      </div>	<!-- /controls -->			
					</div> <!-- /control-group -->

					<span class="hidden-form" id="disablitiy-form"> 
						<div class="control-group">											
							<label class="control-label" for="fname">भाडामा दिइएको कोठा संख्या</label>
							<div class="controls">
								<input type="text" class="span9" name="rented_room_count" id="fname" value="<?php echo e(isset($data->rented_room_count)?$data->rented_room_count:old('rented_room_count')); ?>" >
								<?php if($errors->has('rented_room_count')): ?><p class="red"><?php echo e($errors->first('rented_room_count')); ?></p><?php endif; ?>
							</div> <!-- /controls -->				
						</div> <!-- /control-group -->

						<div class="control-group">											
							<label class="control-label" for="mname">भाडामा बस्नेको कुल जनसंख्या</label>
							<div class="controls">
								<input type="text" class="span9" name="rented_person_count" id="mname" value="<?php echo e(isset($data->rented_person_count)?$data->rented_person_count:old('rented_person_count')); ?>" >
								<?php if($errors->has('rented_person_count')): ?><p class="red"><?php echo e($errors->first('rented_person_count')); ?></p><?php endif; ?>
							</div> <!-- /controls -->				
						</div> <!-- /control-group -->

						<div class="control-group">											
							<label class="control-label" for="gname">मासिक भाडादर</label>
							<div class="controls">
								<input type="text" class="span9" name="monthly_rent" id="gname" value="<?php echo e(isset($data->monthly_rent)?$data->monthly_rent:old('monthly_rent')); ?>" >
								<?php if($errors->has('monthly_rent')): ?><p class="red"><?php echo e($errors->first('monthly_rent')); ?></p><?php endif; ?>
							</div> <!-- /controls -->				
						</div> <!-- /control-group -->
					</span>

					<div class="control-group">
					    <label class="control-label" for="homeownereducation">घरको स्वामित्व </label>
					    <div class="controls">
					       	<select class="span9" name="ownership" id="homeownereducation" >
                                <option value="">Select</option>
							    <option value="निजि">निजि</option>
							    <option value="संस्थागत">संस्थागत</option>
							    <option value="भाडामा">भाडामा</option>
							    <option value="अन्य">अन्य</option>
                            </select>
					    </div>
					</div>

					<div class="control-group">											
						<label class="control-label">स्वामित्व प्रकार</label>
                        <div class="controls">
                        <label class="radio inline">
                          	<input type="radio"  name="ownership_type" value="1" > एकल
                        </label>
                        
                        <label class="radio inline">
                          	<input type="radio" name="ownership_type" value="2" > साझेदारी
                        </label>
                      </div>	<!-- /controls -->			
					</div> <!-- /control-group -->

					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<p><?php echo e($e); ?></p>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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