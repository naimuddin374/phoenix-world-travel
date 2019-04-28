<div class="container">
    <div class="row"><br/>
        <div class="col-sm-12">
            <a href="index.php?a=adminpanel" class="btn btn-success">Deshboard</a>
            <h1 style="text-align: center">View Messages</h1><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class = "table table-bordered table-responsive">
                <thead>
                    <tr class = "tbl-head">
                        <th>Messages</th>
                        <th>Email</th>
                        <th>Date and Time</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                $sql = "select * from chat order by id desc";
                $result = $db->query($sql);
                while ($row = mysqli_fetch_object($result)) {
                    ?>
                    <tbody>
                        <tr style="font-size:17px" class="tbl-body">
                            <td><?= $row->message; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->datetime; ?></td>
                            <td><a href="model/delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>