@extends('layouts.parent')
@section('content')
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary md-5">All Running Classes</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th>
                            Rank
                          </th>
                          <th>
                            Class name
                          </th>
                          <th>
                            Students
                          </th>
                          <th>
                            Assignments
                          </th>
                          <th>
                            Videos
                          </th>
                          <th>
                            Class Code
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php $no = 1; ?>

                        @if(!empty($classlist))

                            @foreach($classlist as $class)

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
                                    200
                                  </td>
                                  <td>
                                    60
                                  </td>
                                  <td>
                                    20
                                  </td>
                                  <td>
                                    {{$class->code}}
                                  </td>
                                </tr>

                            @endforeach

                        @else

                            Sorry,No Running Classes found.

                        @endif

                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@stop