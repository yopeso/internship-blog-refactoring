<?php
require('../model/model.php');

$posts = getPosts();

require('../template/indexView.php');
