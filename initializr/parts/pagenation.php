<?php
//Pagenation 
if (function_exists("pagination")) {
	//pagination($additional_loop->max_num_pages);
	pagination($wp_query->max_num_pages);
}
