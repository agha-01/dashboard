<div class="col-lg-10">
                    <div class="card">
                      <div class="card-header">
                        <strong>edit news</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo $site_url; ?>elanlaredit" method="post" enctype="multipart/form-data" class="form-horizontal">
                <?php 
                  $sql=Controller::$conn->Select('elanlar');
                  $row=mysqli_fetch_assoc($sql);

                 ?>
                      <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ad</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="uname" value="<?php echo $row["uname"];?>" placeholder="Basliq" class="form-control">

                              <small class="form-text text-muted">ad</small></div>
                          </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">soyad</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="sname" value="<?php echo $row["sname"];?>" placeholder="Basliq" class="form-control">

                              <small class="form-text text-muted">soyad</small></div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">basliq</label></div>
                            <div class="col-12 col-md-9">

                            	<input type="text" id="text-input" name="basliq" value="<?php echo $row["basliq"];?>" placeholder="Basliq" class="form-control">

                            	<small class="form-text text-muted">basliq</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Text</label></div>
                            <div class="col-12 col-md-9">

                            	<textarea name="text"  id="textarea-input" rows="9" placeholder="Text" class="form-control">
                              <?php echo $row["text"]; ?>
                              </textarea>

                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status"  id="select" class="form-control">
                                <option value="0" <?php 

                                  if ($row["status"]==0) {
                                    echo "selected";
                                  }
                                 ?>>Please select</option>
                                <option value="1" <?php 

                                  if ($row["status"]==1) {
                                    echo "selected";
                                  }
                                 ?>>Aktiv</option>
                                <option value="2" <?php 

                                  if ($row["status"]==2) {
                                    echo "selected";
                                  }
                                 ?>>Passiv #2</option>
                     	
                              </select>
                            </div>
                          </div>
                          
                          
                          
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" value="" class="form-control-file">


                            </div>









                          </div>
                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="uImage" value="<?php echo $row["image"] ?>">
                          <div class="card">
                    
	                      <div class="card-footer">
	                        <button type="submit" class="btn btn-primary btn-sm">
	                          <i class="fa fa-dot-circle-o"></i> Submit
	                        </button>
	                        <button type="reset" class="btn btn-danger btn-sm">
	                          <i class="fa fa-ban"></i> Reset
	                        </button>
	                      </div>
	                   	 </div>
                        </form>
                      </div>
                     
                    </div>
                    
                  </div>