   <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Basic table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Admin list</strong>
                             <strong class="card-title float-right text-danger">
                              <a href="addadmin">
                              Yeni Admin
                              </a>
                              </strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">id</th>                     
                                  <th scope="col">Ad</th>
                                  <th scope="col">Soyad</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">qeydiyyatdan</th>
                                  <th scope="col">giris</th>
                                  <th scope="col">cixis</th>
                                  <th scope="col">Edit/Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $sql=Controller::$conn->select('admin');
                           while ($row=mysqli_fetch_assoc($sql)) {
                             ?>


                            <tr>
                              <th scope="row"><?php echo $row["id"]; ?></th>
                              <td><?php echo $row["name"]; ?></td>
                              <td><?php echo $row["sname"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                              <td><?php 

                              if ($row["status"]==1) {
                                 echo "Super Admin";
                               } 
                               else{
                                echo "Admin";
                               }



                              ?></td>
                              <td><?php echo $row["r_date"]; ?></td>
                              <td><?php echo $row["giris"]; ?></td>
                            <td><?php echo $row["cixis"]; ?></td>
                         
                              <td>
                                <button class="btn btn-primary"><a href="<?php echo $site_url.'order_pages/'.$row["id"]; ?>">Sehifeler</a></button>

                                <a href="">
                                  <button class="btn btn-success"><a href="editadmin/<?php echo $row["id"]; ?>">Edit</a></button>
                                </a>
                                <button class="btn btn-warning">Passiv et</button>
                                 <a href="<?php echo $site_url.'delete/admin_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Delete</button></a>

                                <script>
                                  deletee.addEventListener("click",function(e){
                                    if (confirm("Silmek istediyinize eminsiniz?")) {

                                    }
                                    else{
                                      e.preventDefault();
                                    }
                                  });
                                </script>
                             
                            </td>
                              
                          </tr>
                      <?php } ?>   
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

   