<!-- Button trigger modal -->
<button type="button" class="btn border border-1 rounded-0" 
data-bs-toggle="modal" data-bs-target="#exampleModal">
 Create UserRole Category
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create UserRole Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Start Form -->
        <form class="row g-3" action="/view-role-category" method="POST">
        @csrf
            <div class="col-md-6">
                <p>Only allow words admin | creator | publisher</p>
                <span>
                    If your are write any name place country name that not work 
                    Example : india and add role that not work
                </span>
                <label for="Rolecategory" class="mt-2  form-label">Role category *</label>
               
                <input type="text" 
                name="Role_Category_title"
                class="form-control border border-1 rounded-0
                @error('Role_Category_title') is-invalid @enderror" 
                placeholder="Role Category" required>
                @error('Role_Category_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
             
            <div class="col-12">
                <button type="submit" class="btn border border-1 rounded-0">
                    Add Role Category
                </button>
           </div>
       </form>
      </div>
       
    </div>
  </div>
</div>