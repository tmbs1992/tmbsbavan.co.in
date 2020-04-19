<!DOCTYPE html>
<html>
<style>
.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
<body>

<h2>Filter DIV Elements</h2>
                  <div class="col-md-2 p0 book_bottun">
                        <a href="#" class="button_all" data-toggle="modal" data-target="#myModal" data-title="" >Click Now</a>
						 <!-- Click Ads Form -->		
											 
								<!-- Button HTML (to Trigger Modal) -->
								<div id="myModal" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
										
											<form method="post" action="post" enctype="multipart/form-data">
												<div class="modal-header">
												<h1> Sign Up </h1>
													<h5 class="modal-title">Modal Window</h5>
													<button type="button" class="close" data-dismiss="modal">&times;</button>		
												</div>
												<div class="modal-body">                        
													<div class="form-group">
														<label class="control-label">Name:</label>
														<input type="text" name="first_name" maxlength="50"  pattern="[a-zA-Z]+" class="form-control">
													</div>
													<div class="form-group">
														<label class="control-label">Phone:</label>
														<input type="text" name="phone" maxlength="10" size="30" pattern="[0-9]{10}" class="form-control">
													</div>		
													<div class="form-group">
														<label class="control-label">Email:</label>
														<input type="text" name="email" maxlength="50" size="30" pattern="[^ @]*@[^ @]*" class="form-control">
													</div>
													<div class="form-gp">
														<label class="control-label">Upload Image:</label>
														<input class="control-label type="file" data-max-size="2097152" name="image_location" id="image_location" accept=".jpg, .jpeg, .gif, .png">
														<P> Only allowed .jpg, .jpeg, .gif, .png formats and max Image size is 5 MB. </p>
													</div>	
																	<script>
																$(function(){
																	var fileInput = $('.image_location');
																	var maxSize = fileInput.data('max-size');
																	$('.form').submit(function(e){
																		if(fileInput.get(0).files.length){
																			var fileSize = fileInput.get(0).files[0].size; // in bytes
																			if(fileSize>maxSize){
																				alert('file size is more then' + maxSize + ' bytes');
																				return false;
																			}else{
																				alert('file size is correct- '+fileSize+' bytes');
																			}
																		}else{
																			alert('choose file, please');
																			return false;
																		}

																	});
																});
																	</script>													
												</div>
												<div class="modal-footer">
													<button type="submit" class="button_ad">Submit</button>
													<button type="button" class="button_ad" data-dismiss="modal">Cancel</button>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
						<script>
							$(document).ready(function(){
							$("#myModal").on("show.bs.modal", function(event){
							// Get the button that triggered the modal
							var button = $(event.relatedTarget);

							// Extract value from the custom data-* attribute
							var titleData = button.data("title");
							$(this).find(".modal-title").text(titleData);
								});
									});
						</script>
							<!-- End Our Click Ads Form -->

</body>
</html>
