<div class="p-1 bg-dark d-flex">
	<h4 class="text-white pt-2 me-2 ">Quản lý bài viết > Cập nhật bài viết</h5>
</div>
<div class="content p-2 bg-light d-flex justify-content-center">
		<?php 
			if (isset($data['post'])) {
				$row = mysqli_fetch_row($data['post']);
		?>
	<form class="w-75 p-3 border bg-white" action="http://localhost/<?php echo link;?>/Post/Update_Post/<?php echo $row[0] ?>" method="post">
		<div class="mb-3 mt-3 d-flex justify-content-center">
			<h3>Cập nhật bài viết</h3>
		</div>
		
		<div class=" m-3">
			<label class="form-label my-2">Tiêu đề :</label>
			<input pattern="^{5,200}$" title="Tiêu đề từ 5 đến 200 ký tự " class="form-control " type="text" name="post_name" required value="<?php echo $row[1] ?>">
		</div>
		<div class="m-3">
			<label class="form-label my-2">Nội dung :</label>
			<textarea style="min-height: 250px;" class="form-control" name="post_content"><?php echo $row[2] ?></textarea>
		</div>
		<div class="m-3">
			<label class="form-label">Hình ảnh :</label>
			<img class=" h-75 img-fluid" src="http://localhost/<?php echo link;?>/Public/Image/<?php echo $row[3] ?>">
		</div>
		<div class="m-3">
			<label  class="form-label my-2">Chọn ảnh mới</label>
			<input type="file" class="form-control" name="post_img" accept="image/*">
			<input type="hidden" name="post_old_img" value="<?php echo $row[3] ?>">
		</div>
		<?php
			}
		?>
		<div class="m-3 ">
			<button  name="bt_update_post" type="submit" class="mt-3 btn btn-primary w-100" >Cập nhật</button> 
		</div>
	</form>
</div>