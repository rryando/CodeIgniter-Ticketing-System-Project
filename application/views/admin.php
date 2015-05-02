<? $this->load->view('includes/header');?>
<a href="#" class="glyphicon glyphicon-th-list toogleside pull-right" id="menu-toggle"></a>
<h3 class="text-center wuaso">Sistem Manajemen Ticket</h3>
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
                            <?=anchor('admin', $this->session->userdata('username')); ?> 
                        </span>
                    </li>
                    <li>
                        <a class="text-danger" style="color:#BA1919;" href="<?=site_url('login/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
            
           
			
                    
            
            <div id="showdata"></div>
                <br>
            <h4 class="text-center headercoeg">Sistem Informasi Manajemen Tiket</h4>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Manajemen Ticket</a></li>

                  <!--
                    <li role="presentation" class="dropdown">
                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                      <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
                      <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
                    </ul>
                  </li>
-->
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
<h4 class="text-center">Data Tiket Yang Telah Di-apply</h4>
                     <table id="roomTable" class="table table-hover table-striped table-condensed"> 
                        <thead style="background-color:#FF6666;"> 
                        <tr> 
                            <th>ID</th> 
                            <th>Nomor</th> 
                            <th>Kapasitas</th> 
                            <th>Harga</th> 
                            <th>Email</th> 
                            <th>Tool</th>
                        </tr> 
                        </thead> 
                        <tbody> 
                        <? foreach($kamar as $row): ?>
                    <!--BEGIN Modal For Edit Ticket-->
                        <div class="modal fade" id="editKamarModal<?=$row['id_kamar']; ?>" tabindex="-1" role="dialog" aria-labelledby="editTicketModal" aria-hidden="true">
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
                                         <label>nomor Ticket</label>
                                         <input class="form-control" name="nomor" type="text" placeholder="nomor kamar" value="<?=$row['nomor']; ?>" />
                                    </div>
                                    <div class="form-group">
                                         <label>kapasitas Ticket</label>
                                         <input class="form-control" name="kapasitas" type="text" placeholder="kapasitas kamar" value="<?=$row['kapasitas']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>harga</label>
                                         <input class="form-control" name="harga" type="text" placeholder="harga kamar" value="<?=$row['harga']; ?>"/>       
                                    </div>
                                    <div class="form-group">
                                         <label>email</label>
                                         <input class="form-control" name="email" type="text" placeholder="email user" value="<?=$row['email']; ?>"/>       
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
    


function Delete(x)
{
    var confMsg =  confirm("apakah kamu yakin ingin menghapus data ini ?");
    var deleteURL = '<?=site_url("admin1/deleteKamar"); ?>'+'/'+x;
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
    $('#roomTable tbody').fadeOut(200).empty();
    var url = '<?=site_url("admin1/getKamarData"); ?>';
    $.get(url, function(data){
        var kamarData = jQuery.parseJSON(data);
        var data = kamarData['kamar'];
        $.each(kamarData['kamar'], function (i,d) {

            var row='<tr class="danger">';
            row+='<tr class="danger">';
           
           $.each(d, function(j, e) {
                row+='<td>'+e+'</td>';
           })
           
            row+='<td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editKamarModal'+d['id_kamar']+'" >PROSES</button> <button class="btn btn-sm btn-danger delete" name="id_kamar" value="'+d['id_kamar']+'" onclick="return Delete('+d['id_kamar']+')">HAPUS</button></td>';

           row+='</tr>';
           $('#roomTable tbody').fadeIn(1000).append(row);

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
    
    
    /* getting table data with json*/
    
    /*END getting table data with json*/
    /*
    $('#formAdd').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#addSucess').hide();
      $('#addError').hide();

      var faction = '<?=site_url('admingrace/addRoom'); ?>';
      var fdata = form.serialize();
        var notif = '<?=site_url('admingrace/addRoom'); ?>';

      $.post(faction, fdata, function(rdata) {
          var json = jQuery.parseJSON(rdata);
          if (json.isSuccessful) {
              $('#addSuccessMessage').html(json.message);
              $('#addSuccess').show();
              $('#addDormModal').modal('hide');
              loadTable();

          } else {
              $('#addErrorMessage').html(json.message);
              $('#addError').show();
          }

          form.children('button').prop('disabled', false);
          form.children('input[name="name"]').select();
      });

      return false;
    });
    
    $('.formEdit').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#editSucess').hide();
      $('#editError').hide();

      var faction = '<?=site_url('admingrace/editTicket'); ?>';
      var fdata = form.serialize();

      $.post(faction, fdata, function(rdata) {
          var json = jQuery.parseJSON(rdata);
          if (json.isSuccessful) {
              $('#editSuccessMessage').html(json.message);
              $('#editSuccess').show();
              $('#editTicketModal').modal('hide');
              loadTable();

          } else {
              $('#editErrorMessage').html(json.message);
              $('#editError').show();
          }

          form.children('button').prop('disabled', false);
          form.children('input[name="name"]').select();
      });

      return false;
    });
    */

    $('.content').fadeIn(1000);
});
</script>