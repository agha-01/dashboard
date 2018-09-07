
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Yeni Admin</strong> 
                      </div>
                      <div class="card-body card-block">
                        <form action="adminadd" method="POST" enctype="multipart/form-data" class="form-horizontal">




                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="name" class="form-control"><small class="form-text text-muted">name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">surname</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="sname" placeholder="surname" class="form-control"><small class="form-text text-muted">surname</small></div>
                          </div>



                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control"><small class="help-block form-text">email</small></div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="pass" placeholder="Password" class="form-control"><small class="help-block form-text">password</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Again Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="repass" placeholder="Again Password" class="form-control"><small class="help-block form-text">again password</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                              </select>
                            </div>
                          </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
                            </button>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>