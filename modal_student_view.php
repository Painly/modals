<div class="modal fade" data-backdrop="static" id="modal-view" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">View</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body-view">
            <form action="../../ams/backend/delete.php" method="post">
            
            <div class="card-body">
          
                <div class="form-group">
                    <input type="hidden" name="id" id="view-id" readonly>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="namev" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" class="form-control" name="student_id" id="student-id-v" placeholder="Student ID" readonly>
                </div>

                <div class="form-group">
                    <label for="yearsec">Year & Section</label>
                    <input type="text" class="form-control" name="yearsec" id="yearsec-v" placeholder="Year & Section" readonly>
                </div>

                <div class="form-group">
                <label for="subject_id">Subject ID</label>
                <input type="text" class="form-control" name="subject_id" id="subject-id-v" placeholder="Subject ID" readonly>
                  </div>
                </div>
                <!-- /.card-body -->

               <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
             
            </div>
              </form>
            </div>
           
          </div> 
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>