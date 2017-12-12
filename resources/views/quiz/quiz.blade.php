
<div class="col col-md-4 col-xs-12" style="padding: 10px;padding-top: 0px;margin-bottom: 10px;">
    <div class="grid panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fff;height: 125px;">
        <div class="panel-heading" style="background: #333">
            
        </div>
        <div class="details" style="padding: 0px 0px 10px 10px;">
            <h3><a href="/quiz/{{ $quiz->id }}">{{ substr($quiz->title, 0, 20) }}</a></h3>
            <span>Level : {{$quiz->level+1}} | Tokens : {{$quiz->getPoints()}} | Questions : {{ count($quiz->questions) }}</span> 
           
        </div>
    </div>
</div>

