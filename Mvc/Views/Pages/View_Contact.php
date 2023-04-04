<div class="container-fuid containerr w-75 mx-auto">
	<h3 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h3>
	<div class="w-75 mx-auto">
        <form method="post" action="http://localhost/<?php echo link;?>/Home/Contact/">
            <div class="form-group m-2">
                <label for="title">Tiêu đề của bạn</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề của bạn">
            </div>
            <div class="form-group m-2">
                <label for="message">Lời nhắn của bạn</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary m-2 rounded-0" name="btn-contact">Gởi lời nhắn</button>
        </form>
    </div>
</div>