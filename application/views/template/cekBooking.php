
<html>
<head>
	<title>View Cek</title>

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
        <li class="active"><a href="<?php echo site_url('booking');?>">Home</a></li>
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
	



	

			<div class="container">
				
				<div class="col-lg-10">
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
              <?php foreach ($Booking as $cek )   :?>
             	
             	<tr>
            	<td class="col-md-3"><?php echo $cek['nama']?></td>
            	<td class="col-md-3"><?php echo $cek['no_identitas']?></td>
            	<td class="col-md-3"><?php echo $cek['hp']?></td>
            	<td class="col-md-3"><?php echo $cek['alamat']?></td>
            	<td class="col-md-3"><?php echo $cek['email']?></td>
            	<td class="col-md-3"><?php echo $cek['jumlah']?></td>
            	<td class="col-md-3" ><?php echo $cek['date']?></td>	
 				<td class="col-md-3"></th>
            

            	</tr>
            

           <?php endforeach;?>
              
            	 
  

            		</tbody>
				</table>
        	<br />

        	<div class="form-group">
						<p class="help-block align-left">Upload Bukti Transfer</p>
							<label for="exampleInputFile">File input</label>
									<input type="file" id="exampleInputFile">
									
						</div>
    	</div>

    </div>

</div>
</div>
</div>
     

</body>
</html>
