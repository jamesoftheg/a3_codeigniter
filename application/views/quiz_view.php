<script src="<?= assetUrl(); ?>js/script.js"></script>

<body>
 
    <div class="container">
        <h1>Quizzing with Codeigniter</h1>
        <div id="scoreOutput">

        </div>

        <a href="javascript: void(0);" id="submitQuestion" class="btn btn-primary btn-lg active" role="button">Start Quiz</a>

        <div id="questionOutput">

        </div>
    </div>

    <div class="container" id="quizBlock" style="display:none;">        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th id="label1">Option 1</th>
                    <th id="label2">Option 2</th>
                    <th id="label3">Option 3</th>
                    <th id="label4">Option 4</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><input type="radio" name="optradio" id="option1"></th>
                    <th><input type="radio" name="optradio" id="option2"></th>
                    <th><input type="radio" name="optradio" id="option3"></th>
                    <th><input type="radio" name="optradio" id="option4"></th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <p>StAuth10065: I James Gelfand, 000275852 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.</p>
    </div>

</body>