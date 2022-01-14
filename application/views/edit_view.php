<html>
      <script>
         if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
         }
      </script>

      <?php if ($success) { ?>
         <div class="container" id="successBlock"> 
            <h5>Question submitted successfully</h5>
         </div>
      <?php }
            if ($error) { ?>
               <div class="container" id="errorBlock"> 
                     <?php 
                        echo validation_errors('<p class="errors">','</p>'); 
                     ?>
               </div>
      <?php } ?>

      <div class="container" id="formBlock">
         <?php if ($update) { ?>
            <?= form_open("EditController/updateentry/" . $entry['id']) ?>
            <?= form_fieldset("Update Entry"); ?>
               <h5>Question</h5>
               <input type="text" name="question" id="question" value="<?php echo $entry['question'] ?>" size="50" />

               <h5>First Answer</h5>
               <input type="text" name="answer_a" id="answer_a" value="<?php echo $entry['answer_a'] ?>" size="50" />

               <h5>Second Answer</h5>
               <input type="text" name="answer_b" id="answer_b" value="<?php echo $entry['answer_b'] ?>" size="50" />

               <h5>Third Answer</h5>
               <input type="text" name="answer_c" id="answer_c" value="<?php echo $entry['answer_c'] ?>" size="50" />

               <h5>Fourth Answer</h5>
               <input type="text" name="answer_d" id="answer_d" value="<?php echo $entry['answer_d'] ?>" size="50" />

               <h5>Correct Answer</h5>
               <input type="text" name="correct_answer" id="correct_answer" value="<?php echo $entry['correct_answer'] ?>" size="50" />

               <div><input type="submit" name="quizsubmit" id="quizsubmit" value="Submit" /></div>
            </form>
         <?php } 
          else if ($newentry) { ?>
            <?= form_open('EditController/newentry') ?>
            <?= form_fieldset("New Entry"); ?>
               <h5>Question</h5>
               <input type="text" name="question" id="question" value="<?php echo set_value('question'); ?>" size="50" />

               <h5>First Answer</h5>
               <input type="text" name="answer_a" id="answer_a" value="<?php echo set_value('answer_a'); ?>" size="50" />

               <h5>Second Answer</h5>
               <input type="text" name="answer_b" id="answer_b" value="<?php echo set_value('answer_b'); ?>" size="50" />

               <h5>Third Answer</h5>
               <input type="text" name="answer_c" id="answer_c" value="<?php echo set_value('answer_c'); ?>" size="50" />

               <h5>Fourth Answer</h5>
               <input type="text" name="answer_d" id="answer_d" value="<?php echo set_value('answer_d'); ?>" size="50" />

               <h5>Correct Answer</h5>
               <input type="text" name="correct_answer" id="correct_answer" value="<?php echo set_value('correct_answer'); ?>" size="50" />

               <div><input type="submit" name="quizsubmit" id="quizsubmit" value="Submit" /></div>

            </form>
         <?php } 
         
         else { ?>
         <p><a href="<?= base_url() ?>index.php?/EditController/addnew">Add new entry</a></p>
         <?php } ?>
      </div>

      <div class="container" id="questionBlock">
        <h2>Quiz Questions</h2> 
        <p>You can click on the links in each row to edit or delete a question as you see fit.</p>      
        <table class="table table-hover">
           <thead>
               <tr>
                  <th>D</th>
                  <th>U</th>
                  <th>ID</th>
                  <th>Question</th>
                  <th>Answer A</th>
                  <th>Answer B</th>
                  <th>Answer C</th>
                  <th>Answer D</th>
                  <th>Correct Answer</th>
               </tr>
            </thead>
         <?php foreach ($listing as $row) { ?>
            <tbody>
               <tr>
                  <td><a href="<?= base_url() ?>index.php?/EditController/delete/<?= $row['id']?>">D</a></td>
                  <td><a href="<?= base_url() ?>index.php?/EditController/update/<?= $row['id']?>">U</a></td>
                  <td><?= $row['id']?></td>
                  <td><?= $row['question']?></td>
                  <td><?= $row['answer_a']?></td>
                  <td><?= $row['answer_b']?></td>
                  <td><?= $row['answer_c']?></td>
                  <td><?= $row['answer_d']?></td>
                  <td><?= $row['correct_answer']?></td>
               </tr>
            </tbody>
         <?php } ?>
         </table>
      </div>
      <div class="container">
        <p>StAuth10065: I James Gelfand, 000275852 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.</p>
      </div>
</html>