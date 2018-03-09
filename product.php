<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<?php include("./_func.php");?>
		<?php include("./_head.php");?>
	</head>
	<body>
		<?php include("./_header.php");?>
		<main>
			<div class="container">
				<div class="row">
					<div class="col-12">
					<br><br>
					<?php echo $page->body;?>
					</div>
				</div>
			</div>
		</main>
		<?php include("./_footer.php");?>
		<?php include("./_scripts.php");?>
		<?php // for an edit link when loggind in add:   if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
	</body>
</html>
