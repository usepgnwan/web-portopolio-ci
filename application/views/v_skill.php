                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Skill</h4>
                                <p class="category">You can add new skill, update and delete</p>
                                <div class=" float-right"><button type="button" class="btn btn-primary" data-toggle="modal" onclick="add_skill()" style="float: right; margin-top: 10px; margin-bottom: 10px;"><i class="fa fa-plus-circle"></i> Tambah </button></div>

                            </div>
                            <div class="content table-responsive">
                             <table class="table table-hover table-striped tb_skill" >
                                    <thead>
                                        <th>No</th>
                                        <th>Label</th>
                                        <th>Persentase</th>
                                        <th >Action</th>
                                    </thead>
                                    <tbody>
                                  
                                    </tbody>
                                     <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Label</th>
                                        <th>Persentase</th>
                                        <th >Action</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">language</h4>
                                <p class="category">You can add new language, update and delete</p>
                                  <div class=" float-right"><button type="button" class="btn btn-primary" data-toggle="modal" onclick="add_bahasa()" style="float: right; margin-top: 10px; margin-bottom: 10px;"><i class="fa fa-plus-circle"></i> Tambah </button></div>

                            </div>
                            <div class="content table-responsive ">
                                       <table class="table table-hover table-striped tb_bahasa" >
                                    <thead>
                                        <th>No</th>
                                        <th>Label</th>
                                        <th>Persentase</th>
                                        <th >Action</th>
                                    </thead>
                                    <tbody>
                                  
                                    </tbody>
                                     <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Label</th>
                                        <th>Persentase</th>
                                        <th >Action</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                     <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Project</h4>
                                <form action="<?php echo base_url()?>Admin/update_project" method="post">

                                <?php foreach ($data_project as $key ): ?>
                                    
                               
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Jumlah Project</label>
                                                <input name="id" type="hidden" class="form-control" placeholder="Profesi" value="<?php echo $key->id_project; ?>">
                                                <input name="jumlah" type="text" class="form-control" placeholder="Profesi" value="<?php echo $key->jumlah; ?>">
                                            </div>
                                        </div>

                                           <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Alamat Blog</label>
                                                <input name="alamat_blog" type="text" class="form-control" placeholder="Profesi" value="<?php echo $key->alamat_blog; ?>">
                                            </div>
                                        </div>
                                             <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Alamat Project</label>
                                               
                                                <input name="alamat" type="text" class="form-control" placeholder="Profesi" value="<?php echo $key->alamat; ?>">
                                            </div>
                                            <div class="form-group">                     
                                                <button type="submit" class="btn btn-info btn-fill pull-right">Update Project</button>
                                            </div>
                                            </div>
                                        </div>
                                         <?php endforeach ?>
                                </form>

                            </div>
                            <div class="content table-responsive table-full-width">
                               
                            </div>
                        </div>
                    </div>

                </div>


