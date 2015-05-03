<!--BEGIN Modal For Add Room-->
<button class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#addKamarModal"> Tambah Kamar</button>
<br>

<div class="modal fade" id="addKamarModal" tabindex="-1" role="dialog" aria-labelledby="addKamarModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Kamar ke Sistem</h4>
      </div>
      <div class="modal-body">
        <!--BEGIN message for showing error/sucess in adding room-->
        <div id="addSuccess" class="row" style="display: none">
              <div id="addSuccessMessage" class="alert alert-info text-center"></div>
        </div>
        <div id="addError" class="row" style="display: none">
              <div id="addErrorMessage" class="alert alert-danger text-center"></div>
        </div>
        <!--END message for showing error/sucess in adding room-->

        <!--BEGIN insertion room form-->
        <form id="formAddKamar" role="form" accept-charset="utf-8">
            <div class="form-group">
                 <label>Nomor kamar</label>
                 <input class="form-control" name="nomor" type="text" placeholder="Nomor kamar" />
            </div>
            <div class="form-group">
                 <label>Kapasitas kamar : </label>
                 <label class="radio-inline"><input type="radio" name="kapasitas" value="1"> 1</label>
                 <label class="radio-inline"><input type="radio" name="kapasitas" value="2"> 2</label>
                 <label class="radio-inline"><input type="radio" name="kapasitas" value="3"> 3</label>
                 <label class="radio-inline"><input type="radio" name="kapasitas" value="4"> 4</label>
            </div>
            <div class="form-group">
                 <label>harga Kamar</label>
                 <input class="form-control disabled" name="harga" type="text" placeholder="harga Kamar"/>
            </div>

            <div class="form-group">
                 <label>status kamar</label>
                 <input class="form-control" name="status" type="text" placeholder="status kamar"/>
            </div>

            
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" id="formSubmit" class="btn btn-success btn-large pull-right">Submit</button>
        </form>
        <!--END insertion room form-->
      </div>
    </div>
  </div>
</div>

<script>
$('#formAddKamar').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#addSucess').hide();
      $('#addError').hide();

      var faction = '<?=site_url('admin1/addKamar'); ?>';
      var fdata = form.serialize();

      $.post(faction, fdata, function(rdata) {
          var json = jQuery.parseJSON(rdata);
          if (json.isSuccessful) {
              $('#addSuccessMessage').html(json.message);
              $('#addSuccess').show();
              $('#addKamarModal').modal('hide');
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
    

</script>

<!--END Modal For Add Room-->