<div class="container">
	<div class="row">
    	<div class="col-sm-2 pull-right">
        	<?php 
				if(isset($_SESSION['myid'])){
					echo "<a href='index.php?a=logout' class='btn btn-danger'>Log out</a>";
				}
			?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="modal-header">Dashboard</h1>
            <a href="index.php?a=viewenquiry" class="btn btn-info">Enquiry View</a>
            <a href="index.php?a=viewcomment" class="btn btn-info">Comment View</a>
            <a href="index.php?a=viewmessage" class="btn btn-info">Messages View</a><br/><br/>
        </div>
    </div>
	<br/><br/>
</div>
