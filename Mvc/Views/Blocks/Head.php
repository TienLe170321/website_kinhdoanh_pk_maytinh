<div class="row bg-dark ">
	<ul class="col nav">
		<li class="nav-item">
		   <a class="nav-link text-white ms-2 " href="http://localhost/<?php echo link;?>/Home/"> <h3 class="mb-0">G2T</h3> </a>
		</li>
		<li class="nav-item">
		   <a class="nav-link text-white " href="http://localhost/<?php echo link;?>/Home/">Trang chủ</a>
		</li>
		<li class="nav-item ">
		   <a class="nav-link text-white" href="http://localhost/<?php echo link;?>/Home/About/">Giới thiệu</a>
		</li>
		<li class="nav-item">
		   <a class="nav-link text-white" href="http://localhost/<?php echo link;?>/Home/Contact/">Liên hệ</a>
		</li>
		<li class="nav-item">
		   <a class="nav-link text-white" href="http://localhost/<?php echo link;?>/Promotion/List_Code/">Khuyến mãi</a>
		</li>
		<li class="nav-item">
		   <a class="nav-link text-white" href="http://localhost/<?php echo link;?>/News/">Bài viết</a>
		</li>
		
	</ul>
	<ul class="col nav d-flex justify-content-end">
		<?php if (isset($_SESSION['user']['id'])) { ?>
			<li class="nav-item ">
			   <a class="nav-link text-white" href="http://localhost/<?php echo link;?>/Logout/Show/u">Đăng xuất</a>
			</li>
		<?php }else{ ?>
			<li class="nav-item ">
			   <a class="nav-link text-white" href="http://localhost/<?php echo link;?>/Login/">Đăng nhập</a>
			</li>
		<?php } ?>
		
	</ul>
</div>