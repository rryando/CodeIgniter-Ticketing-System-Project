
<html>
<head>
	<title></title>

	<link href="<?=base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/css/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/css/datepicker.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?=base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/css/animate.css'); ?>" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?=base_url('assets/css/style.css'); ?>" rel="stylesheet">
	<link href="<?=base_url('assets/color/default.css'); ?>" rel="stylesheet">
</head>
<body>

 	<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">About</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="#price">Price</a></li>
		<li><a href="#gallery">Gallery</a></li>
		<li><a href="#fasilitas">Fasilitas</a></li>				
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reservation <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#Booking">Booking</a></li>
            <li><a href="#CekBooking">Cek Booking</a></li>
				<li><a href="#">Example menu</a></li> 
          </ul>
        </li>
      </ul>
     </div> 
	


<!-- 
    <section id="CekBooking" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Cek Booking</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
	<div class="col-md-3" ></div>	
    <div class="container">
		
        <div class="col-md-6">
			
            <div class="boxed-grey">
                <form id="cekbooking-form" action="<?php echo 'booking/cek_booking'?>" method="post">
                <div class="row">
                    <div class="col-md-12">
						 <div class="form-group" >							
                        </div>
                        
                         <input type="text" class="form-control" id="name" value="<?php echo '$booking->nama'; ?>" placeholder="" required="required" name="name" disabled/>
                        
							<br>
							<br>
                         <input type="text" class="form-control" id="phone" value="<?php echo '$booking->hp'; ?>" placeholder="" required="required" name="phone "disabled />
				</form>
						<div class="form-group">
							<p class="help-block align-left">Upload Bukti Transfer</p>
							<label for="exampleInputFile">File input</label>
									<input type="file" id="exampleInputFile">
									
						</div>
						<div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            submit</button>
                    </div>
                    </div>

                </div>

            </div>
        </div>

    </div>	

		</div>
	</section> -->
	

			<div class="container">
				
				<div class="col-lg-8">
				<div class="boxed-grey">
				<table class="table table-bordered ">
					
			   <thead>
                <tr>
                  <th width="60px">Nama</th>
                  <th class="col-md-3">no identitas</th>
                  <th class="col-md-3">hp</th>
                  <th class="col-md-3">alamat</th>
				  <th class="col-md-3">email</th>
				  <th class="col-md-3">jumlah orang</th>
				  <th class="col-md-3">tanggal</th>
				  <th class="col-md-3">total biaya</th>
                </tr>
              </thead>
            <tbody>
<!--             
            	 <tr>
            	<td class="col-md-3"><?php echo $booking['nama']?></td>
            	<td class="col-md-3"><?php echo $booking['no_identias']?></td>
            	<td class="col-md-3"><?php echo $booking['hp']?></td>
            	<td class="col-md-3"><?php echo $booking['alamat']?></td>
            	<td class="col-md-3"><?php echo $booking['email']?></td>
            	<td class="col-md-3"><?php echo $booking['jumlah']?></td>
            	<td class="col-md-3" ><?php echo $booking['tanggal']?></td>	
 				<td class="col-md-3"></th>
            	</tr>
 -->

            		</tbody>
				</table>
        	<br />
    	</div>
    </div>
</div>
     

</body>
</html>
