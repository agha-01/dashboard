



<div class="col-lg-10">
                    <div class="card">
                      <div class="card-header">
                        <strong>Yeni Xeber</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="newsadd" method="post" enctype="multipart/form-data" class="form-horizontal">
                    
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Xeberin adi</label></div>
                            <div class="col-12 col-md-9">

                            	<input type="text" id="text-input" name="basliq" placeholder="Xeberin adi" class="form-control">

                            	<small class="form-text text-muted">Xeberin adi</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Xeberin texti</label></div>
                            <div class="col-12 col-md-9">

                            	<textarea name="text" id="textarea-input" rows="9" placeholder="Xeberin texti" class="form-control"></textarea>

                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Kateqoriya</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" id="select" class="form-control">
                                <option value="0">Kateqoriya</option>
                                <option value="1">Olke</option>
                                <option value="2">Siyaset</option>
                                <option value="3">Kriminal</option>
                                <option value="4">Sou-biznes</option>
                                <option value="5">Idman</option>
                                <option value="6">Maraqli</option>
                      
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" id="select" class="form-control">
                                <option value="1">Aktiv</option>
                                <option value="2">Passiv</option>
                     	
                              </select>
                            </div>
                          </div>

                          
                          
                          
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Xeberin Sekili</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                          </div>
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