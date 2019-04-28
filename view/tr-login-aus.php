<div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header rebon">
                                                        
                                                        <h4 class="modal-title">LOG IN FORM</h4>

                                                    </div>
                                                    <div class="row"><br/>
                                                        
                                                        <div class="col-sm-12">
                                                            <?php 
                                                            if(isset($_SESSION['myid'])){
                                                                echo "<a href='index.php?a=logout' class='btn btn-danger'>Log out</a>";
                                                            }
                                                            else{
                                                                ?>
                                                        </div>
    </div>
                                                    
                                                            
                                                            
                                                            
                                                            <div class="modal-body">
                                                        

                                                        <form action="model/adminmodel.php" method="post" enctype="multipart/form-data" >
                                                            <input type="email"
 name="email" placeholder="Enter Your Email" /></br></br>
                                                            <input type="password"
 name="password" placeholder="Enter Your Password" />
                                                             
                                                            <div class="feeback-submit margin-top-40 center">

                                                                <input type="submit" name="sub" value="LogIn"  class="btn btn-success modal-submit"/>
                                                            </div>

                                                        </form>
                                                    </div>
                                                            
                                                            
                                                            
                                                            <?php
														}
													?>
                                                    </br></br>

                                                    
                                                    
                                                </div><!-- /modal-content -->
                                                
                                            </div>