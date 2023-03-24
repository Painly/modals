<div class="modal fade" data-backdrop="static" id="modal-delete" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title"> Delete this data?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body-delete">
          
            
            <div class="card-body">
           
                <div class="form-group">
                    <input type="hidden" name="id" id="del-id" readonly>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="del-name" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" class="form-control" name="student_id" id="del-stud-id" placeholder="Student ID" readonly>
                </div>

                <div class="form-group">
                    <label for="yearsec">Year & Section</label>
                    <input type="text" class="form-control" name="yearsec" id="del-ys" placeholder="Year & Section" readonly>
                </div>

                <div class="form-group">
                <label for="subject_id">Subject ID</label>
                <input type="text" class="form-control" name="subject_id" id="del-sub-id" placeholder="Subject ID" readonly>
                  </div>
                </div>
                <!-- /.card-body -->

               <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="delete">Delete</button>
            </div>
           
            </div>
           
          </div> 
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>