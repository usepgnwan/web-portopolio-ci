
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">

                            <?php foreach ($data_about as $key):?>
                                <form action="<?php echo base_url()?>Admin/update_biodata" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input name="id" type="hidden" class="form-control"  placeholder="Name" value="<?php echo $key->id_biodata; ?>" >
                                                <input name="nama" type="text" class="form-control"  placeholder="Name" value="<?php echo $key->nama; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input name="ttl" type="text" class="form-control" placeholder="date of birth" value="<?php echo $key->ttl; ?>">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $key->email; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input name="phone" type="text" class="form-control" placeholder="Phone" value="<?php echo $key->phone; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input name="address" type="text" class="form-control" placeholder="Home Address" value="<?php echo $key->address; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Profesi</label>
                                                <input name="profesi" type="text" class="form-control" placeholder="Profesi" value="<?php echo $key->profesi; ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea name="moto" rows="9" class="form-control" placeholder="Here can be your description" value=""><?php echo $key->moto; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>

                        <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="<?php echo base_url();?>file/images/banner-bg.jpg" alt="..."/>
                            </div>
                            <?php foreach ($data_about as $key):?>
                               
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="<?php echo base_url();?>file/images/<?php echo $key->foto; ?>" alt="..."/>

                                      <h4 class="title"><?php echo $key->nama; ?><br />
                                         <small><?php echo $key->profesi; ?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> <b>Date of Birth :</b> <?php echo $key->ttl; ?> <br>
                                                    <b>Address :</b> <?php echo $key->address; ?>  <br>
                                                    <b>Email :</b> <?php echo $key->email; ?> <br>
                                                    <b>Phone :</b> <?php echo $key->phone; ?>  <br>
                                                    <a href="<?php echo base_url()?>file/cv/<?php echo $key->cv?>"> get cv</a>
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <p>"<?php echo $key->moto; ?>"</p>
                            </div>
                        <?php endforeach ?>
                        </div>
                    </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                            <div class="header">
                                <h4 class="title">Edit CV & Foto</h4>
                            </div>
                            <div class="content"> 
                            <div class="form-group">
                            <?php echo form_open_multipart('admin/update_foto');?>
                            <label>Foto</label> : <?= $data_foto['foto']; ?>
                            <br><?php if($error!== null): echo  $error; endif;?>
                            <?php echo $this->session->flashdata('gagal')?>
                            <input type="hidden" value="<?= $data_foto['id_biodata']; ?>" placeholder="id" name="id_biodata"> </input>
                            <input type="file" name="userfile" size="20" />
                              <button type="submit" class="btn btn-info btn-fill pull-right">Update Foto</button>
                                    <div class="clearfix"></div>
                            </form>
                            </div>
                              <div class="form-group">
                            <?php echo form_open_multipart('admin/update_cv');?>
                            <label>CV (Pdf)</label> : <?= $data_foto['cv']; ?>
                            <br><?php if($error!== null): echo  $error; endif;?>
                            <?php echo $this->session->flashdata('gagalcv')?>
                            <input type="hidden" value="<?= $data_foto['id_biodata']; ?>" placeholder="id" name="id_biodata"> </input>
                            <input type="file" name="userfile" size="20" />
                              <button type="submit" class="btn btn-info btn-fill pull-right">Update Cv</button>
                                    <div class="clearfix"></div>
                            </form>
                            </div>
                         
                            </div>
                    </div>
                   
                </div>
            </div>