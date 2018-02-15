<?php

$mysqli=mysqli_connect('localhost','root','','ask');

if(mysqli_connect_errno($mysqli))
{
		echo 'Failed to connect';
}