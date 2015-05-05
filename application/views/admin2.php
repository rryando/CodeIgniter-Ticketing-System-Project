<? $this->load->view('includes/header');?>
<a href="#" class="glyphicon glyphicon-th-list toogleside pull-right" id="menu-toggle"></a>
<div class="container">
    
    <div class="content" style="display:none">
	<div class="row clearfix">

            
            <div id="wrapper">

    <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <img class="img-circle img-responsive img-brand" src="<?=base_url('files/1.jpg'); ?>"/>
                <ul class="sidebar-nav">

                    <li>
                        <span class="text-success">
                            <?=anchor('admin2', $this->session->userdata('username')); ?> 
                        </span>
                    </li>
                    <li>
                        <a class="text-danger" style="color:#BA1919;" href="<?=site_url('login/logout'); ?>">Logout</a>
                    </li>
                    
                    <li role="presentation" class="active"> 
                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tabel Kamar</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#assign" id="assign-tab" role="tab" data-toggle="tab" aria-controls="assign" aria-expanded="true">Tabel Customer</a>
                    </li>
                </ul>
            </div>
            
           
			
                    
            
            <div id="showdata"></div>
                <br>
            <h4 class="text-center headercoeg">Sistem Administrasi Kamar</h4>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

<a href="#" class="glyphicon glyphicon-refresh pull-right" style="font-weight:800;font-size:20px;font-face:'Montserrat',sans-serif;" id="refreshData"></a>
                  <!--
                    <li role="presentation" class="dropdown">
                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                      <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
                      <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
                    </ul>
                  </li>
-->

                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                      <h2 class="text-center">Manajemen Kamar</h2>
<h4 class="text-center">Data Kamar Yang Telah Di-apply</h4>

                      <br>
                     <table id="roomTable" class="table table-hover table-striped table-condensed"> 
                        <thead style="background-color:#FF6666;"> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nomor</th> 
                            <th>Kapasitas</th> 
                            <th>Harga</th> 
                            <th>Email</th> 
                            <th>Status</th> 
                            <th>Pembayaran</th>

                        </tr> 
                        </thead> 
                        <tbody> 
                        <? foreach($kamar as $row): ?>
                    <!--BEGIN Modal For Edit Ticket-->
                        <div class="modal fade" id="editKamarModal<?=$row['id_kamar']; ?>" tabindex="-1" role="dialog" aria-labelledby="editKamarModal" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Kamar ID : <?=$row['id_kamar']; ?></h4>
                              </div>
                              <div class="modal-body">
                                <div class="container-fluid">
                                <!--BEGIN message for showing error/sucess in editing ticket-->
                                <div id="editSuccess" class="row" style="display: none">
                                      <div id="editSuccessMessage" class="alert alert-info text-center"></div>
                                </div>
                                <div id="editError" class="row" style="display: none">
                                      <div id="editErrorMessage" class="alert alert-danger text-center"></div>
                                </div>
                                <!--END message for showing error/sucess in editing ticket-->

                                <!--BEGIN EDIT ticket form-->
                                <form class="formEdit" role="form" accept-charset="utf-8">
                                    <div class="form-group hidden">
                                         <label>ID kamar</label>
                                         <input class="form-control hidden" type="text" name="id_kamar" placeholder="id kamar" value="<?=$row['id_kamar']; ?>" />
                                    </div>
                                    <div class="form-group">
                                         <label>nomor</label>
                                         <input class="form-control" name="nomor" type="text" placeholder="nomor kamar" value="<?=$row['nomor']; ?>" />
                                    </div>
                                    <div class="form-group">
                                         <label>kapasitas</label>
                                         <input class="form-control" name="kapasitas" type="text" placeholder="kapasitas kamar" value="<?=$row['kapasitas']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>harga</label>
                                         <input class="form-control" name="harga" type="text" placeholder="harga kamar" value="<?=$row['harga']; ?>"/>       
                                    </div>
                                    <div class="form-group" id="getEmail<?=$row['id_kamar']; ?>">
   
                                    </div>
                                    <!-- edit for room procesing, dont delete
                                    <div class="form-group">
                                        <div class="col-md-6 column">
                                            <label>Status Tiket</label>
                                            <select class="form-control" name="Status">
                                                <option></option>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                      </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 column">
                                            <label>Tanggal Expired</label>
                                            <input class="form-control datepicker" type="text" name="Expired" />
                                        </div>
                                    </div>
                                    <div class="form-group">

                                      <label>Pesan</label>
                                      <textarea class="form-control" rows="2" name="Pesan"></textarea>
                                   
                                    </div>
                                
                                    <br>
                                -->
                                <button type="submit" id="formSubmit" class="btn btn-success btn-large pull-right">Submit</button>
                                </form>
                                <!--END EDIT Ticket form-->
                              </div>
                               </div>
                            </div>
                          </div>
                        </div>
                        <!--END Modal For EDIT Ticket-->
                    <? endforeach; ?>
                        </tbody> 
                    </table> 
                  </div>

              
                <div role="tabpanel" class="tab-pane fade" id="assign" aria-labelledby="assign-tab">
                    <h2 class="text-center">Manajemen Customer</h2>
                    <table id="customerTable" class="table table-hover table-striped table-condensed"> 
                        <thead style="background-color:#FF6666;"> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nama</th> 
                            <th>No_identitas</th> 
                            <th>HP</th> 
                            <th>Alamat</th> 
                            <th>Email</th>
                            <th>Jumlah</th>
                            <th>Date in</th>
                            <th>Date out</th>
                            <th>Gambar</th>
                            <th>Biaya</th>
                            <th>Kamar</th>
                            <th>Status</th>

                        </tr> 
                        </thead>
                        <tbody>
                        <? foreach($customer as $cust): ?>
                        <div class="modal fade" id="editCustomerModal<?=$cust['id_customer']; ?>" tabindex="-1" role="dialog" aria-labelledby="editCustomerModal" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Customer ID : <?=$cust['id_customer']; ?></h4>
                              </div>
                              <div class="modal-body">
                                  <div class="container-fluid">
                                <!--BEGIN message for showing error/sucess in editing ticket-->
                                <div id="editSuccess" class="row" style="display: none">
                                      <div id="editCustSuccessMessage" class="alert alert-info text-center"></div>
                                </div>
                                <div id="editError" class="row" style="display: none">
                                      <div id="editCustErrorMessage" class="alert alert-danger text-center"></div>
                                </div>
                                <!--END message for showing error/sucess in editing ticket-->

                                <!--BEGIN EDIT ticket form-->
                                <form class="formEditCustomer" role="form" accept-charset="utf-8">
                                    <div class="form-group hidden">
                                         <label>ID Customer</label>
                                         <input class="form-control hidden" type="text" name="id_customer" value="<?=$cust['id_customer']; ?>" />
                                    </div>
                                    
                                    <div class="form-group">
                                         <label>harga</label>
                                         <input class="form-control" name="harga" type="text" placeholder="harga kamar"/>       
                                    </div>
                                    <label>Status Customer</label>
                                            <select class="form-control" name="status">
                                                <option></option>
                                                <option value="Lunas">Lunas</option>
                                                <option value="Belum Lunas">Belum Lunas</option>
                                            </select>
                                    <!-- edit for room procesing, dont delete
                                    <div class="form-group">
                                        <div class="col-md-6 column">
                                            <label>Status Tiket</label>
                                            <select class="form-control" name="Status">
                                                <option></option>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                      </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 column">
                                            <label>Tanggal Expired</label>
                                            <input class="form-control datepicker" type="text" name="Expired" />
                                        </div>
                                    </div>
                                    <div class="form-group">

                                      <label>Pesan</label>
                                      <textarea class="form-control" rows="2" name="Pesan"></textarea>
                                   
                                    </div>
                                
                                    <br>
                                -->
                                <button type="submit" id="formSubmit" class="btn btn-success btn-large pull-right">Submit</button>
                                </form>
                                <!--END EDIT Ticket form-->
                              </div>
                               </div>
                            </div>
                          </div>
                        </div>
                        <!--END Modal For EDIT Ticket-->
                    <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="pembayaran" aria-labelledby="pembayaran-tab">
                    <h2 class="text-center">Manajemen pembayaran</h2>    
                </div>
                
                
            </div>
                </div>
        </div>
    </div>
        
</div>
<script src="<?=base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
<script>

    
 $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
    
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$("#refreshData").click(function(e) {
    e.preventDefault();
    loadTable();
});

function get_email(x,y)
    {
        $.get('./admin2/get_email/'+x)
        .success(function (data){
        $('#getEmail'+y).html(data);
    });
    }
    
    
function Delete(x)
{
    var confMsg =  confirm("apakah kamu yakin ingin menghapus data ini ?");
    var deleteURL = '<?=site_url("admin2/deleteKamar"); ?>'+'/'+x;
     if (confMsg == true)
     {
         console.log(deleteURL);
         $.post(deleteURL);
     }
    else
    {
        console.log('b');
    }
    loadTable();
};
    
function DeleteCust(x)
{
    var confMsg =  confirm("apakah kamu yakin ingin menghapus data ini ?");
    var deleteURL = '<?=site_url("admin2/deleteCust"); ?>'+'/'+x;
     if (confMsg == true)
     {
         console.log(deleteURL);
         $.post(deleteURL);
     }
    else
    {
        console.log('b');
    }
    loadTable();
};
    
function loadTable()
{
    $('#roomTable tbody').empty();
    var url = '<?=site_url("admin2/getKamarData"); ?>';
    $.get(url, function(data){
        var kamarData = jQuery.parseJSON(data);
        var data = kamarData['kamar'];
        $.each(kamarData['kamar'], function (i,d) {

            var row='<tr class="danger">';
            row+='<tr class="danger">';
           
           $.each(d, function(j, e) {
                row+='<td>'+e+'</td>';
           })
           


           row+='</tr>';
           $('#roomTable tbody').append(row);

        })
    }); 
    
    $('#customerTable tbody').empty();
    var url = '<?=site_url("admin2/getCustomerData"); ?>';
    $.get(url, function(data){
        var customerData = jQuery.parseJSON(data);
        var data = customerData['customer'];
        $.each(customerData['customer'], function (i,d) {

            var row='<tr class="danger">';
            row+='<tr class="danger">';
           
           $.each(d, function(j, e) {
                row+='<td>'+e+'</td>';
           })
           


           row+='</tr>';
           $('#customerTable tbody').append(row);

        })
    });
};
    

    /*
    */
$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    

    loadTable();
    


    $('.content').fadeIn(1000);
});
</script>