<div class="p-1 bg-dark d-flex">
	<h4 class="text-white pt-2 me-2 ">Quản lý bài viết > Thêm bài viết</h5>
</div>
<div class="content p-2 bg-light d-flex justify-content-center">
	<form class="w-75 p-3 border bg-white" action="http://localhost/<?php echo link;?>/Post/Add_Post/" method="post">
		<div class="mb-3 mt-3 d-flex justify-content-center">
			<h3>Thêm bài viết</h3>
		</div>
		<div class=" m-3">
			<label class="form-label my-2">Tiêu đề :</label>
			<input pattern="^{5,200}$" title="Tiêu đề từ 5 đến 200 ký tự " class="form-control " type="text" name="post_name" required>
		</div>
		<div class="m-3">
			<label class="form-label my-2">Nội dung :</label>
			<textarea style="min-height: 250px;" class="form-control" name="post_content"></textarea>
		</div>
		<div class="m-3">
			<label  class="form-label my-2">Hình ảnh bài viết :</label>
			<input type="file" class="form-control" name="post_img" accept="image/*">
		</div>
		<div class="m-3 ">
			<button  name="bt_addpost" type="submit" class="mt-3 btn btn-primary w-100" >Thêm</button> 
		</div>
	</form>
</div>