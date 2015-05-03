
<label>email</label>
 <select class="form-control" name="email">
     <? foreach($email as $row): ?>
        <option value="<?=$row['email']; ?>"><?=$row['email']; ?></option>
     <? endforeach; ?>
    </select> 
