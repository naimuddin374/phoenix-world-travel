<div class="container">
    <div class="row"><br/>
        <div class="col-sm-12">
            <a href="index.php?a=adminpanel" class="btn btn-success">Deshboard</a>
            <h1 style="text-align: center">View Enquiry</h1><br/>
        </div>
    </div>
    <div class="row" >
        <div class="col-sm-12">
            <table class = "table table-bordered table-responsive" style="margin-left:-25px;" >
                <thead>
                    <tr class = "tbl-head">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Departing Form</th>
                        <th>Travelling To</th>
                        <th>Airline</th>
                        <th>Persone</th>
                        <th>Depart Date</th>
                        <th>Return Date</th>
                        <th>Cricry</th>
                        <th>Comments</th>
						<th>Delete</th>
                    </tr>
                </thead>
                <?php
                $sql = "select * from enquiry order by id desc";
                $result = $db->query($sql);
                while ($row = mysqli_fetch_object($result)) {
                    ?>
                    <tbody>
                        <tr style="font-size:17px" class="tbl-body">
                            <td><?= $row->fname; ?></td>
                            <td><?= $row->lname; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->phone_no; ?></td>
                            <td><?= $row->departing_form; ?></td>
                            <td><?= $row->travelling_to; ?></td>
                            <td><?= $row->airline; ?></td>
                            <td><?= $row->persone; ?></td>
                            <td><?= $row->departdate; ?></td>
                            <td><?= $row->returndate; ?></td>
                            <td><?= $row->critery; ?></td>
                            <td><?= $row->comments; ?></td>
							<td><a href="model/enquirydelete.php?id=<?php echo $row->id; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
  
</div>