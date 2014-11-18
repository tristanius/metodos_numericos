<html>
	<?php $this->load->view("principal/head")?>
	<body>
            <?php $this->load->view("principal/header")?>
            <hr class="hr-gray">
            <?php echo $vista ?>
            <hr>
            <?php $this->load->view("principal/aside") ?>
            <hr class="hr-gray">
            <?php $this->load->view("principal/footer") ?>
	</body>
</html>