@extends('layoutadmin')
@section('contentadmin')
    
<!-- Content main ('viết code ở đây') -->
 <form action="#" method="post">

   <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Create ...</h3>

       <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
           <i class="fas fa-minus"></i>
         </button>
       </div>
     </div>
     <div class="card-body" style="display: block;">
       <div class="form-group">
         <label for="inputName">Project Name</label>
         <input type="text" id="inputName" class="form-control">
       </div>
       <div class="form-group">
         <label for="inputDescription">Project Description</label>
         <textarea id="inputDescription" class="form-control" rows="4"></textarea>
       </div>
       <div class="form-group">
         <label for="inputStatus">Status</label>
         <select id="inputStatus" class="form-control custom-select">
           <option selected="" disabled="">Select one</option>
           <option>On Hold</option>
           <option>Canceled</option>
           <option>Success</option>
         </select>
       </div>
       <div class="form-group">
         <label for="inputClientCompany">Client Company</label>
         <input type="text" id="inputClientCompany" class="form-control">
       </div>
       <div class="form-group">
         <label for="inputProjectLeader">Project Leader</label>
         <input type="text" id="inputProjectLeader" class="form-control">
       </div>
       <div class="form-group">
         <input type="submit" value="Create new Project" class="btn btn-success float-right">
       </div>
     </div>

   </div>
 </form>
 <!-- End Content main  ('viết code ở trên') -->     
@endsection
     
 