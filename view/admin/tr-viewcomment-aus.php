<div class="container">
    <div class="row"><br/>
        <div class="col-sm-12">
            <a href="index.php?a=adminpanel" class="btn btn-success">Deshboard</a>
            <h1 style="text-align: center">View Comments</h1><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class = "table table-bordered table-responsive">
                <thead>
                    <tr class = "tbl-head">
                        <th>Picture</th>
                        <th>Comments</th>
                        <th>Rating</th>
						<th>Delete</th>
                    </tr>
                </thead>
                <?php
                $sql = "select * from feedback order by id desc";
                $result = $db->query($sql);
                while ($row = mysqli_fetch_object($result)) {
                    ?>
                    <tbody>
                        <tr style="font-size:18px" class="tbl-body">
                            <td>
                                <?php
                                if ($row->picture != '') {
                                    echo "<img src=\"view/admin/feedback/picture/comment-{$row->id}.{$row->picture}\" width='80' />";
                                }
                                ?>
                            </td>
                            <td>
                                <?= readfile("view/admin/feedback/files/comment-".$row->id.".txt"); ?>
                            </td>
                            <td><?= $row->rating; ?> Star</td>
							<td><a href="model/feedbackdelete.php?id=<?php echo $row->id; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>