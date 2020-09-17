<!DOCTYPE html>
<html lang="en" id="home">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Portofolio Usep Gunawan</title>
	<link rel="shortcut icon" href="<?php echo base_url();?>file/images/s.jpg">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/portofolio/cssz/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/portofolio/cssz/fa/css/all.min.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/portofolio/cssz/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/portofolio/cssz/animate.css">
</head>
<body>
<!-- navbar menu -->

 <nav class="navbar  fixed-top  navbar-expand-lg navbar-light bg-light ">
 	<div class="container-fluid">
	 	<a href="#home" class="navbar-brand text-white">

		<?php foreach ($data_about as $key):?>
	 		<img src="<?php echo base_url()?>file/images/<?php echo $key->foto?> " class="d-inline-block align-center " width="30" height="30"> <?php echo $key->nama?>
	 	</a>
		 	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		   	<!--  <span class="navbar-toggler-icon" style=""></span> -->
		   	 <i class="fa fa-bars" style="font-size:28px; color: #fff;"></i>
		   	 
		   	</button>
	 <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto  ">
	      <li class="nav-item  ">
	        <a class="nav-link text-white  page-scroll" href="#home" >Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item ">
	        <a class="nav-link text-white page-scroll" href="#about" >About <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-white page-scroll" href="#education">Education</a>
	      </li>	      
	      <li class="nav-item ">
	        <a class="nav-link text-white page-scroll" href="#skill">Skill</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-white page-scroll" href="#experience" onclick="counting()">Experience</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-white  page-scroll" href="#contact">Contact</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-white  page-scroll" href="<?= $data_blog['alamat_blog']; ?>">Blog</a>
	      </li>

	    </ul>
	   
	  </div>
 	</div>

 </nav> 
<!-- penutup navbar menu
jumbotron -->
<div class="jumbotron banner" id="jumbotron">

		<div class="row"> 
		<div class="col-md-7 tag " >
		<h2 class="nama-h2">HI, I'M</h2>
		<h1 class="nama-h2"><?php echo $key->nama?> </h1>
		<h3 class="nama-h2"><?php echo $key->profesi?> </h3>
		<a  target="blank" href="<?php echo base_url()?>file/cv/<?php echo $key->cv?>" ><button class="nama-h2"> Get CV</button></a>
		</div>
		<div class="col-md-5 foto-jb"><img src="<?php echo base_url()?>file/images/test.png"></div>
		</div>


</div>

			<div class="notifications "><?php echo $this->session->flashdata('msg'); ?></div>
			<a href="#home"><div class="arrow-up shadow "><i class="fas fa-arrow-up" ></i>	</div></a>
<!-- akhir jumbotron -->
<!-- about --> 
<section class="about" id="about">
 <div class="container">
	<div class="row">
		<div class="col-md-5 offset-1 text-center photo-about animasi-foto"   >
		<img class="image-profil " src="<?php echo base_url()?>file/images/<?php echo $key->foto?>" align="center">
		</div>
		<div class=" col-md-5 animasi-biodata">
		<h2>ABOUT ME</h2>
		<p class="moto"><?php echo $key->moto?> </p>
			<div class="biodata ">
				<div class="row">
					<div class="tag-biodata">Name :</div>
					<div class="isi-biodata"> <?php echo $key->nama?></div>
				</div>
				<div class="row">
					<div class="tag-biodata">Date of birth :</div>
					<div class="isi-biodata"> <?php echo $key->ttl?></div>
				</div>
				<div class="row">
					<div class="tag-biodata">Address :</div>
					<div class="isi-biodata"><?php echo $key->address?></div>
				</div>
				<div class="row">
					<div class="tag-biodata">Email :</div>
					<div class="isi-biodata"> <?php echo $key->email?></div>
				</div>
				<div class="row">
					<div class="tag-biodata">Phone :</div>
					<div class="isi-biodata"> <?php echo $key->phone?></div>
				</div>
			</div>
	        	
	      <a target="blank" href="<?php echo base_url()?>file/cv/<?php echo $key->cv?>"><button>Download CV</button></a>
		</div>
		</div>

	<?php endforeach ?>
		
	</div>
  </div>
</section>
<!--akhir about -->
<!--akhir edukasi -->
<section class="education" id="education"> 
<div class="container">
	<div class="row  tag-education"  >
		<div class="col-md-12 text-center">
			<h3 class="animasi-education">EDUCATION</h3>
			<hr class="animasi-education">
		</div>
	</div>
	<div class="row mb-5">
          <div class="col-md-6 col-lg-3 ">
          	<div class=" text-center p-8 shadow box-edu animasi-education " >

          		<div>
	          		<h5 class="mb-4">Elementary School</h5> 
	                  		<div class="icon d-flex align-items-center justify-content-center">
			          			<i class="fas fa-school" ></i>			   
			          		</div>
	          			  <p><div class="name-education"><a href="#">SDN SUKAMAJU</a></div> <br> <div class="address-education"> Major : -  <br>Address: - </div> </p>

	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
          	<div class=" text-center p-8 shadow box-edu animasi-education" >

          		<div class="">
	          		<h5 class="mb-4">Junior High School</h5>
		          		<div class="icon d-flex align-items-center justify-content-center">
		          			<i class="fas fa-book-reader" ></i>
		          		</div>	
		          		 <p><div class="name-education"><a href="#">MTS AL-MUKHTARIYAH RAJAMANDALA</a></div> <br> <div class="address-education"> Major : -  <br>Address: - </div> </p>         		
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 " >
          	<div class=" text-center p-8 shadow box-edu animasi-education" >

          		<div>
	          		<h5 class="mb-4">Senior High Scool</h5>
		          		<div class="icon d-flex align-items-center justify-content-center">
		          			<i class="fas fa-graduation-cap" ></i>
		          		</div>	          		
		          		 <p><div class="name-education"><a href="#">SMAN 1 CIPATAT</a></div> <br> <div class="address-education"> Major : Science  <br>Address: - </div> </p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
          	<div class="text-center p-8 shadow box-edu animasi-education">

	          		<h5 class="mb-4">College</h5>
	              		<div class="icon d-flex align-items-center justify-content-center">
        		  			<i class="fas fa-user-graduate"></i>
          				</div>
		            <p><div class="name-education"><a href="#">SEKOLAH TINGGI TEKNOLOGI BANDUNG</a></div> <br> <div class="address-education"> Major : Informatics Engineering  <br>Address: - </div> </p>
	           
	          </div>
          </div>
        </div>

</div>
</section>
<!--akhir edukasi -->

<!--akhir edukasi -->
<section class="skill" id="skill"> 
<div class="container">
	<div class="row "  >
		<div class="col-md-6 " >
			<h2 class="text-center animasi-skill-kiri "  >SKILLS</h2>
			<?php foreach ($data_skill as $key): ?>
			<div class="form-group animasi-skill-kiri">
				<label class=""><?php echo $key->label?></label>
				<div class="progress " id="progress">
					<div class="progress-bar" role="progressbar" style="width:<?php echo $key->jumlah?>%"  aria-valuenow="<?php echo $key->jumlah?>" aria-valuemin="0" aria-valuemax="100"><p align="right" class="tag-progress"><?php echo $key->jumlah?>%</p></div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
		<div class="col-md-6" >
		
			<h2 align="center" class="animasi-skill-kanan">LANGUAGES</h2>
			<?php foreach ($data_bahasa as $key): ?>
				<div class="form-group animasi-skill-kanan">
				<label><?php echo $key->label?></label>
				<div class="progress" id="progress">
					<div class="progress-bar" role="progressbar" style="width: <?php echo $key->jumlah?>%" aria-valuenow="<?php echo $key->jumlah?>" aria-valuemin="0" aria-valuemax="100"><p align="right" class="tag-progress"><?php echo $key->jumlah?>%</p></div>
				</div>
			</div>
		<?php endforeach ?>
		</div>
	</div>
</div>
</section>
<!--akhir edukasi -->
<!-- experience -->
<section class="experience" id="experience">
	<div class="container-fluid">
		<div class="row tag-experience">
			<div class="col-md-12 text-center">
				<h3 class="animasi-experience">Experience</h3>
				<hr class="animasi-experience">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 ">
				<div class="p-2 box-experience animasi-experience" >
					<div class="card  project-exp shadow">
  						<img class="card-img-top" src="<?php echo base_url()?>file/images/ex2.jpg" alt="Card image cap">
	  					<div class="card-body">
	  						<h5 class="card-title">Student Interenship BUMN (FHCI)</h5>
	    					<p class="card-text">I have participated in a student internship program, This program was initiated by the Forum Human Capital Indonesia (FHCI). I participated in this program for 4 months from October 2018 to January 2019. In this program i worked for the Industri Telekomunikasi Indonesia (INTI) in the IT & UMUM division. me and team were given the task to creat an internal system (SKI Online). </p>
	    					<p class="card-text muted-spaci"><small class="text-muted">Address : Jl. Moh. Toha No. 77 Cigereleng Regol Bandung Jawa Barat</small></p>
	  					</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="p-2  box-experience animasi-experience">

					<div class="card  project-exp shadow">
  						<img class="card-img-top" src="<?php echo base_url()?>file/images/ex1.jpg" alt="Card image cap">
	  					<div class="card-body">
	  						<h5 class="card-title">Student Interenship Program in Taiwan</h5>
	    					<p class="card-text">I have participated in an internship program which is on of the flagship program on campus. I took the oppurtunity to learn how to work in developed countries, i participated in this program for 5 months from July 2019 to December 2019, I worked in the departement at the marcoware company is a company engaged in technology. </p>
	    					<p class="card-text muted-spaci"><small class="text-muted">Address : Marcoware Co., Ltd Tianzhong Township. Changua Country. Taiwan</small></p>
	  					</div>
					</div>
				</div>				
			</div>
			<div class="col-md-6 col-lg-4">				
				<div class="p-2 box-experience animasi-experience">
					<div class="project-exp shadow">
				          <div class="justify-content-center d-flex align-items-center" >
	          				<div class="icon d-flex align-items-center justify-content-center box-icon-exp">
		          				<h1> <span class="count"> <?php foreach ($data_project as $key ): ?><?php echo $key->jumlah?><?php endforeach?></span></h1>
		          			</div>
		          		</div>	

		          		 <p><div class="name-exp-project"><h5 class="card-title text-center ">Project Complete</h5></div> <br> <div class="box-button text-center"> <a href="<?php echo $key->alamat; ?>"><button class=""> View</button></a> </div> </p>  
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--akhir experience -->

<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
	<div class="row mb-5 ">
          <div class="col-md-6 col-lg-3 sosial-media animasi-contact">
          	<div class=" text-center p-8 shadow box-contact" >

          		
	          			  <div class="justify-content-center d-flex align-items-center" >
	          				<div class="icon d-flex align-items-center justify-content-center box-icon-contact">
			          			<i class="fab fa-whatsapp" ></i>			   
			          		</div>	
	          			  </div>
	                  		
	          			  <p><div class="name-education"><h5 style="color: black; font-weight: bold;">Contact Number</h5></div> <br> <div class="address-education"><?php foreach ($data_about as $key):?><?php echo $key->phone?><?php endforeach ?></div> </p>

	        
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
          	<div class=" text-center p-8 shadow box-contact animasi-contact" >

          				<div class="justify-content-center d-flex align-items-center" >
	          				<div class="icon d-flex align-items-center justify-content-center box-icon-contact">
		          				<i class="fab fa-instagram" ></i>
		          			</div>
		          		</div>	
		          		 <p><div class="name-education"><h5 style="color: black; font-weight: bold;">Instagram</h5></div> <br> <div class="tag-sosmed"> @usepgnwan<br><a href="http://instagram.com/usepgnwan/" target="blank"><button class=""> View</button></a> </div> </p>         		
	      
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 " >
          	<div class=" text-center p-8 shadow box-contact animasi-contact" >

          	
          				<div class="justify-content-center d-flex align-items-center" >
	          				<div class="icon d-flex align-items-center justify-content-center box-icon-contact">
		          				<i class="fab fa-facebook-f" ></i>
		          			</div>	
		          		</div>
		          		 <p><div class="name-education"><h5 style="color: black; font-weight: bold;">Facebook</h5></div> <br> <div class="tag-sosmed"> Usep Gunawan<br><a href="https://www.facebook.com/zep.gnwan" target="blank"><button class=""> View</button></a> </div> </p>
		          
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
          	<div class="text-center p-8 shadow box-contact animasi-contact">

          				<div class="justify-content-center d-flex align-items-center" >
	          				<div class="icon d-flex align-items-center justify-content-center box-icon-contact">
        		  				<i class="fab fa-linkedin-in"></i>
          					</div>
          				</div>
		             <p><div class="name-education"><h5 style="color: black; font-weight: bold;">Linkedin</h5></div> <br> <div class="tag-sosmed"> Usep Gunawan<br><a href="https://www.linkedin.com/in/usep-gunawan-76912a1a0" target="blank"><button class=""> View</button></a> </div> </p>
	           
	          </div>
          </div>
        </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 animasi-contact">
				<div class=" text-center p-8  send-email" >
			
		
            <form action="<?php echo base_url();?>halaman/sendemail" class=" p-4 p-md-5 contact-form" method="post" id="formemail">
              <div class="form-group">
                <input name="nama" type="text" class="form-control" placeholder="Your Name" required="true">
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control"  placeholder="Your Email"required="true">
              </div>
              <div class="form-group">
                <input name="subjek" type="text" class="form-control" placeholder="Subject"required="true">
              </div>
              <div class="form-group">
                <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Message"required="true"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
  
          </div>

        </div>
				</div>
			</div>
		
</section>

<!--akhir contact -->
<footer>
	<div class="container">
		<div class="row ">
			<div class="col-md-12 text-center">
			<p>&copy; copyright <?php echo date("Y"); ?> | My Portopolio by usepgnwan</p></div>
		</div>
		
	</div>
		

</footer>
<!--akhir contact -->

</body>
<script type="text/javascript" src="<?php echo base_url();?>dist/portofolio/jsz/jquery.3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>dist/portofolio/jsz/jueryanimatenumber.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>dist/portofolio/jsz/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>dist/portofolio/jsz/portofolio.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>dist/portofolio/jsz/jquery.easing.1.3.js"></script>
</html>