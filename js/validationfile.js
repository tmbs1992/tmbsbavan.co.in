
													$(function () {
														$("#file").change(function () {
															if (fileExtValidate(this)) {
																if (fileSizeValidate(this)) {
																	showImg(this);
																}
															}
														});

														// File extension validation, Add more extension you want to allow
														var validExt = ".png, .gif, .jpeg, .jpg, .svg";
														function fileExtValidate(fdata) {
															var filePath = fdata.value;
															var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
															var pos = validExt.indexOf(getFileExt);
															if (pos < 0) {
																alert("This file is not allowed, please upload valid file.");
																return false;
															} else {
																return true;
															}
														}

														// file size validation
														// size in kb
														var maxSize = '1024';
														function fileSizeValidate(fdata) {
															if (fdata.files && fdata.files[0]) {
																var fsize = fdata.files[0].size / 2048;
																if (fsize > maxSize) {
																	alert('Maximum file size exceed, This file size is: ' + fsize + "KB");
																	return false;
																} else {
																	return true;
																}
															}
														}

														// display img preview before upload.
														function showImg(fdata) {
															if (fdata.files && fdata.files[0]) {
																var reader = new FileReader();

																reader.onload = function (e) {
																	$('#img').attr('src', e.target.result);
																}

																reader.readAsDataURL(fdata.files[0]);
															}
														}

													});