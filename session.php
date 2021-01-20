<?php


				session_start();
				$database_name = 'dvkm';
				$connect = mysqli_connect('localhost', 'root',  '', $database_name) or die("Unable to connect");
				
				?>