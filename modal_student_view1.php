<div class="modal fade" data-backdrop="static" id="modal-view1" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">View</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body-view">
            <form action="../../ams/backend/delete1.php" method="post">
            
            <div class="card-body">
          
            <div class="form-group">
                    <input type="hidden" name="id" id="view-id1" readonly>
              
                
                </div>
                <div class="form-group">
                    <label for="subj-cd-v1">Subject Code</label>
                    <input type="text" class="form-control" name="subj-cd-v1" id="subj-cd-v1" placeholder="Subject Code" readonly>
                </div>

                <div class="form-group">
                    <label for="subj-desc-v1">Subject Description</label>
                    <input type="text" class="form-control" name="subj-desc-v1" id="subj-desc-v1" placeholder="Subject Description" readonly>
                </div>

                <div class="form-group">
                <label for="sched-v1">Schedule</label>
                <input type="text" class="form-control" name="sched-v1" id="sched-v1" placeholder="Schedule" readonly>
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