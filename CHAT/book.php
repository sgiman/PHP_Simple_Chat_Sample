<?php

$file = "book.txt";
$data = date('d-m-Y H:i:s');
$text = $_REQUEST['text'];
$name = $_REQUEST['name'];

if (@$_REQUEST['add']) {
  $f = fopen($file, "a");
  if (@$_REQUEST['text'] && @$_REQUEST['name']) 
	  fputs($f, '<span class="date-mess">' . $name . ' | ' . $data . " </span><br>" . " <span class='message'>" . $text . "</span>"."\n");
  fclose($f);

  //$random = time();    // случайный параметр, чтоб не кешировалось
  //Header("Location: http://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}?$random#form");

  header("Location: {$_SERVER['PHP_SELF']}"); // редирект на текущую страницу для автообновления и очиcтки $_POST
  exit();

}

$gb = @file($file);
if (!$gb) $gb = [];
