<?php

require ("../model/model.php");
$error = postComment();
$nbTotalComments = countComments();
$reponse = displayComments();
require ("../view/commentsView.php");