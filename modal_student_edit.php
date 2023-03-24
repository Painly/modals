<div class="modal fade" data-backdrop="static" id="modal-primary" style="padding-right: 17px;" aria-modal="true"
  role="dialog">
  <div class="modal-dialog">
    <div class="modal-content bg-primary">
      <div class="modal-header">
        <h4 class="modal-title">Edit Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body-edit">


        <div class="card-body">

          <div class="form-group">
            <input type="hidden"  id="edit-id" readonly>
            <label for="name">Name</label>
            <input type="text"  id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" class="form-control"  id="student-id" placeholder="Student ID">
          </div>

          <div class="form-group">
            <label for="yearsec">Year & Section</label>
            <input type="text" class="form-control"  id="yearsec" placeholder="Year & Section">
          </div>

          <div class="form-group">
            <label for="subject_id">Subject ID</label>
            <input type="text" class="form-control"  id="subject-id" placeholder="Subject ID">
          </div>





        </div>
        <!-- /.card-body -->

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          <button class="btn btn-outline-light"  id="update">Save changes</button>
        </div>

      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>