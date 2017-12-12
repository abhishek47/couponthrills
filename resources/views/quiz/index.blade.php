@extends('layouts.app')


@section('content')

 <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>Quizzes</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">Quiz</a></li>
        </ul>
      </div>
    </div>
  </section>

<div style="min-height: 800px;">
 <!-- start case-studies -->
        <section class="case-studies section-padding">
            <div class="container">        
              <br><br>

              <!-- <div class="row">
                      <div class="col col-xs-12">
                        
                           
                            <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">

                            <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                <h4>Filter Quizzes</h4>
                            </div>
                            <div class="panel-body">
                             <form class="form-inline" method="get" action="/quiz"> 
                               <div class="form-group"> 
                                <label>Difficulty Level : </label> &nbsp;
                                  <select class="form-control" name="level">
                                  <option value="0" {{ $level == 0 ? 'selected' : '' }}>All</option>
                                  <option value="1" {{ $level == 1 ? 'selected' : '' }}>Level 1</option>
                                  <option value="2" {{ $level == 2 ? 'selected' : '' }}>Level 2</option>
                                  <option value="3" {{ $level == 3 ? 'selected' : '' }}>Level 3</option>
                                  <option value="4" {{ $level == 4 ? 'selected' : '' }}>Level 4</option>
                                </select>
                               </div>  &nbsp; | &nbsp;
                               <button type="submit" class="btn btn-success">Filter</button> &nbsp; | &nbsp;
                                <a href="/quiz/random" class="btn btn-social">Solve Random Quiz</a>
                            </form>
                            </div>
                        </div> 
                      
                     </div>

                 
                </div> -->
                <div class="row quizzes-grid">


                  @foreach($quizzes as $key => $quiz)
                    
                     @include('quiz.quiz')


                   @endforeach 
                    
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        
                            {{ $quizzes->links() }}
                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end case-studies -->
</div>

@endsection