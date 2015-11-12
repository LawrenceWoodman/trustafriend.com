<?php

switch ($_GET[object_id]) {
	case 4:  $post = "dragon-house-fishponds-bristol";
	         break;
	case 5:  $post = "the-curry-house-brislington-bristol";
	         break;
	case 8:  $post = "the-dog-toby-carvery-over-gloucester"; 
	         break;
	case 11: $post = "lin-nam-kingswood-bristol"; 
	         break;
	case 23: $post = "dragon-king-shrewsbury-shropshire";
	         break;
	case 26: $post = "newent-tandoori-newent-gloucestershire";
	         break;
	case 27: $post = "pic-a-color-gloucester";
	         break;
	case 30: $post = "j.george-plastering-newent-gloucestershire";
	         break;
	case 39: $post = "marhaba-bistro-fishponds-bristol";
	         break;
	case 43: $post = "portishead-third";
	         break;
	case 51: $post = "china-chef-fishponds-bristol";
	         break;
	case 54: $post = "peter-berg-hancock";
	         break;
	case 55: $post = "ash-villa-malvern-worcestershire";
	         break;
	case 56: $post = "better-life-healthcare";
	         break;
	case 59: $post = "curry-night-bangladeshi-takeaway-hanham-bristol";
	         break;
	case 63: $post = "saracens-head-ross-on-wye-herefordshire";
	         break;
	case 64: $post = "gas-servwell-ltd-downend-bristol";
	         break;
	case 68: $post = "la-passione-kingswood-bristol";
	         break;
}

if ($post != "") {
	// Redirect to new post page
	header("Location: http://trustafriend.com/reviews/".$post."/");
} else {
	// Redirect to front page
	header("Location: http://trustafriend.com/");
}
exit;

?>

