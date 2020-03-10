<button data-toggle="modal" style="outline: none;" data-target="#add-modal" class="btn-add-abs"><i class="fa fa-plus my-float"></i></button>
<div class="modal fade " id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Add Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" >
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="firstname">Firstname: </label>
              <input type="text" name="firstname" class="form-control" id="firstname" required>
            </div>
            <div class="form-group col-md-2">
              <label for="middle-initial">M.I:</label>
              <input type="text" name="mi" class="form-control" id="middle-initial" required>
            </div>
            <div class="form-group col-md-5">
              <label for="lastname">Lastname: </label>
              <input type="text" name="lastname" class="form-control" id="lastname" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="contact">Contact Number:</label>
              <input type="number" name="contact" class="form-control" id="contact" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="address">Address:</label>
              <textarea rows="2" name="address" class="form-control" id="address" required ></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="submit" name="add-contact-btn" class="btn btn-success">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>