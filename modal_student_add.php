<div class="modal fade" data-backdrop="static" id="modal-add" style="padding-right: 17px;" aria-modal="true"
    role="dialog">
    <div class="modal-dialog">
      <div class="modal-content bg-primary">
        <div class="modal-header">
          <h4 class="modal-title">Add Student</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">

          <div class="card-body">
            
              <div class="form-group" name="myFormname">
                <label for="namea">Name</label>
                <input type="Text" class="form-control" id="namea"  placeholder="Name">
              </div>
              <div class="form-group">
                <label for="student_ida1">Student ID</label>
                <input type="text" class="form-control" id="stud_ida1"  placeholder="Student ID">
              </div>

              <div class="form-group">
                <label for="yearseca">Year & Section</label>
                <input type="text" class="form-control" id="yearseca"  placeholder="Year & Section">
              </div>

              <div class="form-group">
                <label for="subject_ida1">Subject ID</label>
                <input type="text" class="form-control" id="subj_ida1"  placeholder="Subject ID">
              </div>





          </div>
          <!-- /.card-body -->

          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button  class="btn btn-outline-light" id="save" >Save changes</button>
          </div>
         
        </div>



      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<script>
  function validateForm() {
  var x = document.forms["myFormName"]["namea"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>