@extends('layouts.student')

@section('content')

<div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Classes Joined</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                            
                            <?php  $count = 0; ?>

                            @if(!empty($classes))
    
                                @foreach($classes as $myclass)

                                    <?php $count++; ?>
                                           
                                @endforeach

                            @endif

                            <?php echo $count; ?>

                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Attend more classes to learn more
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Pending Assignment</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">5</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> It is necessary to submit assignments before deadline to get scroed higher.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Assignment Submitted</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">3</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Your Submitted Assignments will be reviewed within 24 hours by your class teacher.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Grade</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">AB Grade</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Total score : 60/100
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="progress">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Your Progress</h2>
                  <div class="wrapper">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Total Score</p>
                      <p class="mb-2 text-primary">60/100</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Assignment Submitted</p>
                      <p class="mb-2 text-success">8/10</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <br>
                  <div class="wrapper d-flex justify-content-between">
                    <div class="side-left">
                      <p class="mb-2">The best performance</p>
                      <p class="display-3 mb-4 font-weight-light">30/30</p>
                    </div>
                    <div class="side-right">
                      <small class="text-muted">In Assignment : Assignment_Name</small>
                    </div>
                  </div>
                  <div class="wrapper d-flex justify-content-between">
                    <div class="side-left">
                      <p class="mb-2">Worst performance</p>
                      <p class="display-3 mb-5 font-weight-light">5/30</p>
                    </div>
                    <div class="side-right">
                      <small class="text-muted">In Assignment : Assignment_Name</small>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="score">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Your Running Classes</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Class name
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Score
                          </th>
                          <th>
                            Grade
                          </th>
                          <th>
                            Class Rank
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php $no = 1; ?>

                        @if(!empty($classes))
    
                            @foreach($classes as $myclass)

                                <tr>
                                  <td class="font-weight-medium">
                                    <?php 
                                        echo $no; 
                                        $no++;
                                    ?>
                                  </td>
                                  <td>
                                    Maths
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="40" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td>
                                    20/80
                                  </td>
                                  <td class="text-danger"> BB 
                                    
                                  </td>
                                  <td>
                                    260
                                  </td>
                                </tr>

                                <p>Joined new class : {{ $myclass->main_class->code }}</p>
                                <p>Class Assignment : {{ $myclass->main_class->assignment }}</p>


                            @endforeach

                        @endif
                       
                          
                          
                         
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

@stop