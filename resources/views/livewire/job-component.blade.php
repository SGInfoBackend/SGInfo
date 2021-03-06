<div>
    <style>
        nav svg{
            height: 20px;
        }
    </style>
    <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="row">
                <div class="col-12 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4>Job Type</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="full_time" checked>
                                <label class="form-check-label" for="full_time">
                                    Full Time
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="part_time" >
                                <label class="form-check-label" for="part_time">
                                  Part Time
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="internship" >
                                <label class="form-check-label" for="internship">
                                  Internship
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card shadow ">
                        <div class="card-body">
                            <h4>Position</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="andorid" checked>
                                <label class="form-check-label" for="andorid">
                                    Android Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="web" >
                                <label class="form-check-label" for="web">
                                  Web Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="odoo" >
                                <label class="form-check-label" for="odoo">
                                  Odoo Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ios" checked>
                                <label class="form-check-label" for="ios">
                                    IOS Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="react" >
                                <label class="form-check-label" for="react">
                                  React Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="swip" >
                                <label class="form-check-label" for="swip">
                                  Swip Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="python" checked>
                                <label class="form-check-label" for="python">
                                    Python Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="c#" >
                                <label class="form-check-label" for="c#">
                                  C# Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notejs" >
                                <label class="form-check-label" for="notejs">
                                  Notejs Developer
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-2">
                  <div class="card shadow">
                      <div class="card-body">
                          <h4>Experience Level</h4>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="full_time" checked>
                              <label class="form-check-label" for="">
                                  Fresher/Entry
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="part_time" >
                              <label class="form-check-label" for="part_time">
                                Manager
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="internship" >
                              <label class="form-check-label" for="internship">
                                Director Above
                              </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="internship" >
                            <label class="form-check-label" for="internship">
                             1year_Exp & Above
                            </label>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="col-12 my-2">
                  <div class="card my-2 shadow">
                    <div class="card-body workfromhome">
                      <a href="" class="text-decoration-none">
                         <p class="mb-0">Search only <span class="fw-bold">Work from Home OR Remote Jobs</span></p>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="col-12 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4>Salary</h4>

                              <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="Min" aria-label="Min" value="0" id="salaryMin">
                                  <span class="input-group-text">-</span>
                                  <input type="text" class="form-control" placeholder="Max" aria-label="Max" value="0" id="salaryMax">
                                  </div>
                            </div>
                    </div>
                </div>
            </div>

          </div>
          <div class="col-12 col-md-9">
              @foreach ($jobs as $job )
                <div class="card my-2 shadow">
                    <div class="card-body p-3">
                        <a href="jobdetail.html" class="text-decoration-none">{{$job->Job_title}}</a>
                        <p class="mt-2">{{$job->Job_Description}}</p>
                        <a href="jobdetail.html" class="text-decoration-none">Swip</a>
                    </div>
                </div>
                @endforeach
            {{$jobs->links()}}
          </div>
        </div>
    </div>
</div>
