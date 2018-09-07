     <style>
       #bootstrap-data-table_filter{
        display: flex!important;
        justify-content: flex-end !important;
       }
     </style>

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
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Xəbərlər</strong>
                             <a href="addnews">
                               <h4 class="card-title float-right text-danger">Yeni xəbər əlavə et</h4>
                             </a>
                        </div>
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Şəkil</th>
                        <th>Başlıq</th>
                        <th>Yerləşdirilmə tarixi </th>
                        <th>Status</th>
                        <th>Baxış sayı</th>
                        <th>Beyenme sayı</th>
                        <th>Beyenmeme sayı</th>                    
                        <th>edit/delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $sql=Controller::$conn->Select('news');
                      while ($row=mysqli_fetch_assoc($sql)) {
                       ?>

                      <tr>
                        <td><?php echo $row["id"]; ?></td>
                         <td><img src="<?php echo $row["image"]; ?>" width="150"></td>
                        <td><?php echo $row["basliq"]; ?></td>
                        <td><?php echo $row["tarix"]; ?></td>
                        <?php if ($row["status"]==1) {
                                echo '<td class="text-success">Aktiv</td>';
                              }
                              else{
                                echo '<td class="text-secondary">Passiv</td>';
                              } ?>  
                        <td>50</td>
                        <td>100</td>
                        <td>23</td>
                        <td>
                          <a href="editnews/<?php echo $row["id"]; ?>"><button class="btn btn-success">Düzəliş et</button>
                            </a>
                           <a href="<?php echo $site_url.'delete/news_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Sil</button></a>

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

    <!-- Right Panel -->


  