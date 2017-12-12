$(document).ready(function(){
answers = new Object();
points = new Object();
var correct = 0;
var wrong = 0;
 var qid = $('#qid').val();
$('.option').change(function(){
    var point = ($(this).data('points'));
    var answer = ($(this).attr('value'));
    var question = ($(this).attr('name'));
    answers[question] = answer;
    points[question] = point;

})
var item1 = document.getElementById('questions');

var totalQuestions = $('.questions').size();
var currentQuestion = 0;
$questions = $('.questions');
$questions.hide();
$($questions.get(currentQuestion)).fadeIn();
$('#next').click(function(){
    $($questions.get(currentQuestion)).fadeOut(function(){
        currentQuestion = currentQuestion + 1;
        if(totalQuestions-currentQuestion == 1){
            $('#next').html('Finish Quiz');
        }

        if(currentQuestion == totalQuestions){
               var points = sum_values()


               $.post("/tokens/add",
         {
             tokens: points,
         },
         function(data, status){

              
                   swal("Quiz Solved!","You gain " + points + " tokens to your profile!", "success", {
  buttons: {
    home: "Go Home!",
    
  },
}).then((value) => {
  switch (value) {
 
    case "home":
      window.location = "/quiz";
      break;
 
    
 
    default:
      swal("Click on home!");
  }
});;


             
         });
              
            
                  
                
        }else{

           $q =  parseInt(currentQuestion+1) 
           $('#question_no').html('Question #' + $q);
           $('#points').html($('.points').attr('value')); 
           $($questions.get(currentQuestion)).fadeIn();

        }
    });

});






});


function sum_values(){
var the_sum = 0;
for (question in points){
    the_sum = the_sum + parseInt(points[question])
}
return the_sum
}

