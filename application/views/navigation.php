<!-- This file functions between the header and footer, there is no need for HTML or body tags. -->
<nav class="navbar" id="navbar">
    <ul>
        <li class="<?php if($this->uri->uri_string() == 'Home') { echo 'active'; } ?>"><a href="<?= base_url(); ?>index.php?/Home">Home</a></li>
        <li class="<?php if($this->uri->uri_string() == 'EditController') { echo 'active'; } ?>"><a href="<?= base_url(); ?>index.php?/EditController">Edit</a></li>
        <li class="<?php if($this->uri->uri_string() == 'QuizController') { echo 'active'; } ?>"><a href="<?= base_url(); ?>index.php?/QuizController">Quiz</a></li>
        <li class="<?php if($this->uri->uri_string() == 'AboutController') { echo 'active'; } ?>"><a href="<?= base_url(); ?>index.php?/AboutController">About</a></li>
    </ul>
</nav>
