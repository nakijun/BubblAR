				
				<div class="box box-100">
					<div class="boxin">
						<div class="header">
							<h3><?php __('Create new user') ?></h3>
							<a class="button" href="<?php e($html->url('/user')) ?>">&laquo;&nbsp;<?php __('back to list') ?></a>
						</div>
						
						<?php echo $form->create('User',array('url' => '/user/add','type'=>'post','class'=>'basic','enctype' =>"multipart/form-data")); ?>
						
							<div class="inner-form">

								<?php if(isset($okmsg)) { ?>
									<div class="msg msg-ok"><p><?php e($okmsg) ?></p></div>
								<?php } ?>
								
								<?php if(isset($errmsg)) { ?>
									<div class="msg msg-error"><p><?php e($errmsg) ?></p></div>
								<?php } ?>

								<?php if(isset($infomsg)) { ?>
									<div class="msg msg-info"><p><?php e($infomsg) ?></p></div>
								<?php } ?>
	
								<dl>
										<dt><label for="some1"><?php __('ID') ?></label></dt>
										<dd>
											<?php echo $form->input('loginname',array('type'=>'text','class'=>'txt','label'=>false,'div'=>false,
												'error' => array(
													'required' => __('Please input this field.',true),
													'format' => __('Only alphabet and numbers are allowed.',true),
													'min' => __('Please input more than 4 characters.',true),
													'duplicated' => __('This id is already teken.',true),
													'class' => 'error'
											)));?>
										</dd>

										<dt class="ttop"><label for="some2"><?php e(__('Password')) ?></label></dt>
										<dd>
								
											<?php echo $form->input('password',array('type'=>'text','class'=>'txt','label'=>false,'div'=>false,
												'error' => array(
													'required' => __('Please input this field.',true),
													'format' => __('Only alphabet and numbers are allowed.',true),
													'min' => __('Please input more than 4 characters.',true),
													'class' => 'error'
											)));?>
											
										</dd>	


										<dt class="ttop"><label for="some2"><?php e(__('Email')) ?></label></dt>
										<dd>
								
											<?php echo $form->input('email',array('type'=>'text','class'=>'txt','label'=>false,'div'=>false,
												'error' => array(
													'required' => __('Please input this field.',true),
													'format' => __('Invalid email address',true),
													'min' => __('Please input more than 4 characters.',true),
													'class' => 'error'
											)));?>
											
										</dd>


										<dt class="ttop"><label for="some2"><?php e(__('Permission')) ?></label></dt>
										<dd>
								
											<?php echo $form->input('permission',array('type'=>'select',
												'options' => array(
													PERMISSION_USER => __('user',true),
													PERMISSION_ADMIN => __('admin',true),
												),
												'class'=>'txt','label'=>false,'div'=>false,
												'error' => array(
													'required' => __('Please input this field.',true),
													'format' => __('Invalid email address',true),
													'min' => __('Please input more than 4 characters.',true),
													'class' => 'error'
											)));?>
											
										</dd>	
										
										<dt></dt>
										<dd>
											<input class="button altbutton" type="submit" value="<?php e(__('Save')) ?>" />
										</dd>
									</dl>
							</div>
						</form>
					</div>
				</div>
				
