$( document ).ready( function() {
    var right = 0;
    var wrong = 0;
    var total = 0;
    var page = 0;
    var quizLength = 0;
    var loadStatus = "loading";
    var answer = "";
    var correct = "";
    var answerStatus = "";
    var questionList = new Array();
    var quizQuestion = new Object();
    // Fetch the questions and populate the array
    $.ajax({
        url: "index.php?/QuizController/fetch",
        type: "get",
        dataType: "json",
        success: function(list) {
            var i = 1;
            for (var question in list) {
                quizQuestion = {question: list[question]['question'], option1: list[question]['answer_a'], option2: list[question]['answer_b'], 
                option3: list[question]['answer_c'], option4: list[question]['answer_d'], answer: list[question]['correct_answer']};
                questionList.push(quizQuestion);
            }
        }
    });

    // Checks to see if the radio button matches the correct answer
    $('input:radio').change(function() {
        $("#submitQuestion").attr("disabled", false);
        var radioValue = $("input[name='optradio']:checked").val();
        if (radioValue == correct) {
            answerStatus = "Correct";
        }
        else if (radioValue != correct) {
            answerStatus = "Incorrect";
        }
     });

    // Event Listener for submit question
    $( document ).on('click', '#submitQuestion', function() {
        // Empty the radio buttons
        $("#option1").prop("checked", false);
        $("#option2").prop("checked", false);
        $("#option3").prop("checked", false);
        $("#option4").prop("checked", false);

        // Ensure the questions are randomized within the range of the quiz array
        quizLength = questionList.length;
        page = Math.floor((Math.random() * quizLength));
        if (loadStatus == "loading") {
            $("#submitQuestion").text('Submit Question');
            $('#quizBlock').show();
        }
        $("#submitQuestion").attr("disabled", true);
        if (loadStatus != "loading") {
            if (answerStatus == "Correct") {
                right++;
            }
            else if (answerStatus == "Incorrect") {
                wrong++;
            }
            else {
                console.log("No answer.");
            }
        }
        correct = questionList[page].answer;
        // Populate the quiz
        var output = "";
        output = "<h2>" + questionList[page].question + "</h2>";
        $("#questionOutput").html(output);
        $("#label1").html(questionList[page].option1);
        $("#label2").html(questionList[page].option2);
        $("#label3").html(questionList[page].option3);
        $("#label4").html(questionList[page].option4);

        $("#option1").val(questionList[page].option1);
        $("#option2").val(questionList[page].option2);
        $("#option3").val(questionList[page].option3);
        $("#option4").val(questionList[page].option4);
        
        var score = "";
        total = right + wrong;
        score = "<h3> Score: " + right + " / " + total + "</h3>";
        $("#scoreOutput").html(score);

        loadStatus = "loaded";
        page++;
    });

} );

function getQuestions() {
    var questionList = new Array();
    var quizQuestion = new Object();
    $.ajax({
        url: "index.php?/QuizController/fetch",
        type: "get",
        dataType: "json",
        success: function(list) {
            var i = 1;
            for (var question in list) {
                quizQuestion = {question: list[question]['question'], option1: list[question]['answer_a'], option2: list[question]['answer_b'], 
                option3: list[question]['answer_c'], option4: list[question]['answer_d'], answer: list[question]['correct_answer']};
                questionList.push(quizQuestion);
            }
        }
    });
    return questionList;
}

