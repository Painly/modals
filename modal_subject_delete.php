<div class="modal fade" data-backdrop="static" id="modal-delete1" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body-delete1">
           
            
            <div class="card-body">
            Delete this data?
                <div class="form-group">
                    <input type="hidden"  id="del-id1" readonly>
               
                </div>
                <div class="form-group">
                    <label for="del-subj-code">Student ID</label>
                    <input type="text" class="form-control"  id="del-subj-code" placeholder="Subject Code" readonly>
                </div>

                <div class="form-group">
                    <label for="del-subj-desc">Year & Section</label>
                    <input type="text" class="form-control" id="del-subj-desc" placeholder="Subject Description" readonly>
                </div>

                <div class="form-group">
                <label for="del-sched">Subject ID</label>
                <input type="text" class="form-control"  id="del-sched" placeholder="Schedule" readonly>
                  </div>
                </div>
                <!-- /.card-body -->

               <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button  class="btn btn-outline-light" id="deletem">Delete</button>
            </div>
            
            </div>
           
          </div> 
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>