<div>
    <div class="">
    <h3 class="info-fill my-5">Creat Your Jobs Post</h3>
          <div class="container mb-5">
            @if(Session::has('success_message'))
                <div class="alert alert-success">{{Session::get('success_message')}}</div>
            @endif
            <form wire:submit.prevent="storeJob">
              <div class="card p-5 shadow">
                <div class="row ">
                  <div class="col-4">
                        <label for="job title">Job Title</label>
                        <input type="text" id="job title" class="form-control" wire:model="job_title">
                    </div>
                    <div class="col-4">
                      <label for="name">Company Name</label>
                      <input type="text" id="name" class="form-control" wire:model="company">
                    </div>
                  <div class="col-4">
                    <label for="salary">Salary</label>
                    <input type="number" id="salary" class="form-control" wire:model="salary">
                  </div>
                  <div class="col-12 my-3">
                    <label for="job description">Job Description</label>
                    <textarea name="" id="job description" class="form-control" wire:model='job_description'></textarea>
                  </div>
                  <div class="col-4">
                    <label for="job location">Job Location</label>
                    <input type="text" id="job location" class="form-control" wire:model="job_location">
                  </div>
                  <div class="col-4">
                    <label for="category">Category</label>
                    <input type="text" id="category" class="form-control" wire:model="job_category">
                  </div>
                  <div class="col-4">
                    <label for="">Type of Role</label>
                      <select class="form-control" wire:model="job_type_role">
                          <option value="Full Time">Full Time</option>
                          <option value="Part Time">Part-Time</option>
                          <option value="Internship" selected>Internship</option>
                      </select>
                  </div>
                  <div class="col-12 my-3">
                    <label for="url">Company URL</label>
                    <input type="text" id="url" class="form-control" wire:model="company_url_link">
                  </div>
                  <h6 >This is to Post for your jobs</h6>
                  <div class="d-grid gap-2 col-2">
                    <input type="submit" value="Create Post" class="btn btn-outline-primary mt-3 float-left">
                  </div>
                  <div class="d-grid gap-2 col-2">
                    <input type="submit" value="Delete" class="btn btn-outline-primary mt-3 float-left">
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
