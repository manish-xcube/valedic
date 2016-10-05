<?php include "header.php"; ?>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>				</a>

<?php include "side.php"; ?>

				<div class="main-content">
					<!--<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">Admin Panel</li>
						</ul>
					</div>-->

					<!--page-content-->
					<div class="page-content">
						<div class="col-xs-12">
							<div class="table-responsive">
<?php

$results =  file_get_contents("$api_url/posts/posts_list/done");

$results = json_decode($results);

?>							
							
								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Sl. No.</th>
											<th>Data</th>
											<th>Created On</th>
											<th>City</th>
											<th>State</th>
											<th>Country</th>
											<th>Category</th>
											<th>Topic</th>
											<th>Emotion</th>
											<th>Sentiment</th>
											<th>Language</th>
											<th>Up Counts</th>
											<th>Down Counts</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
								<?php foreach($results as $k=>$v){ ?>									
										<tr>
											<td>1</td>
											<td style="width:12% !important"><?php echo substr($v->PO->data,0,20); ?></td>
											<td><?php echo $v->PO->create_date; ?></td>
											<td><?php echo $v->CI->city; ?></td>
											<td><?php echo $v->S->state; ?></td>
											<td><?php echo $v->CO->country; ?></td>
											<td><?php echo $v->CAT->category; ?></td>
											<td><?php echo $v->TP->topic; ?></td>
											<td><?php echo $v->EM->emotion; ?></td>
											<td><?php echo $v->ST->sentiment; ?></td>
											<td><?php echo $v->LG->language; ?></td>
											<td><?php echo $v->PO->up_counts; ?></td>
											<td><?php echo $v->PO->down_counts; ?></td>
											<td>
												<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
													<a class="green" href="edit-post.php?id=<?php echo $v->PO->id; ?>">
														<i class="icon-pencil bigger-130"></i>													</a>
													<a class="red" href="#">
														<i class="icon-trash bigger-130"></i>													</a>												</div>											  </td>
										</tr>
									<?php } ?>	
										
										
									</tbody>
								</table>
							</div><!-- /.table-responsive -->
						</div><!-- /span -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				</div><!-- /.main-container-inner -->
				
				<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
					<i class="icon-double-angle-up icon-only bigger-110"></i>				</a>
		</div><!-- /.main-container -->
<?php include "footer.php"; ?>