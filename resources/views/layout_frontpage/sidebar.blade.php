<div class="col-md-3">
    <div class="card card-refine card-plain">
        <div class="card-content">
            <h4 class="card-title">
                Refine
                <a class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right" rel="tooltip" title=""
                        data-original-title="Reset Filter"
                href="{{route('applicant.index')}}">
                    <i class="material-icons">cached</i>
                </a>
            </h4>
            <form>
                <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingOne">

                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title">Salary</h4>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <input type="hidden" name="min_salary" value="{{ $minSalary }}" id="input-min-salary">
                        <input type="hidden" name="max_salary" value="{{ $maxSalary }}" id="input-max-salary">
                        <div class="panel-body panel-refine">
                            <span class="pull-left">
                                $<span id="span-min-salary">{{ $minSalary }}</span>
                            </span>
                            <span class="pull-right">
                                $<span id="span-max-salary">{{ $maxSalary }}</span>
                            </span>
                            <div class="clearfix"></div>
                            <div id="sliderRefine"
                                 class="slider slider-rose noUi-target noUi-ltr noUi-horizontal"></div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title">Types of work</h4>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" data-toggle="checkbox"
                                           @if($searchPartTime == 1)
                                               checked
                                           @endif
                                           name="part_time"><span
                                        class="checkbox-material"><span class="check"></span></span>
                                    Part time
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" data-toggle="checkbox"
                                           @if($searchRemote == 1)
                                               checked
                                           @endif
                                           name="remote"><span
                                        class="checkbox-material"><span class="check"></span></span>
                                    Remote
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title">Location</h4>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            @foreach($cities as $city)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="{{$city}}" data-toggle="checkbox" name="cities[]"
                                               @if (in_array($city, $searchCities))
                                                   checked
                                            @endif
                                        ><span
                                            class="checkbox-material"><span class="check"></span></span>
                                        {{$city}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <label>
                        <button class="btn btn-rose btn-round row">
                            <i class="material-icons">search</i>
                            Search
                        </button>
                    </label>
                </div>
            </form>

        </div>
    </div><!-- end card -->
</div>
