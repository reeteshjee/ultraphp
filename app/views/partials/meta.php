<!DOCTYPE html> 
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script> 
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
      <!--<link rel="stylesheet" href="http://kheladi.com/assets/css/kheladi.css">--> 
      <link rel="stylesheet" type="text/css" href="https://sportsguff.com/kheladi/css/kheladi.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="https://kheladi.com/public/assets/images/favicon.ico">
      <title>Kheladi.com | Latest Nepal Sports News: Cricket, Football, Handball, Volleyball, Tennis and more</title>
      <meta name="description" content="Sports News, Scores, Players, Events From Around the Globe,Cricket,Football" />
      <!-- Facebook --> 
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Kheladi.com | Latest Nepal Sports News: Cricket, Football, Handball, Volleyball, Tennis and more" />
      <meta property="og:description" content="Latest Nepal Sports News: Cricket, Football, Handball, Volleyball, Tennis and more" />
      <meta property="og:url" content="http://kheladi.com/" />
      <meta property="og:site_name" content="kheladi" />
      <meta property="og:image" content="http://kheladi.com/public/assets/images/cover.jpg" />
      <!-- Twitter --> 
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:creator" content="@kheladi" />
      <meta name="twitter:site" content="@kheladi" />
      <meta name="twitter:title" content="Kheladi.com | Latest Nepal Sports News: Cricket, Football, Handball, Volleyball, Tennis and more" />
      <meta name="twitter:description" content="Latest Nepal Sports News: Cricket, Football, Handball, Volleyball, Tennis and more" />
      <meta name="twitter:image" content="http://kheladi.com/public/assets/images/cover.jpg" />
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


      <style type="text/css">
      	#video-preview {
			height: 100%;
			width: 100%;
		}

		.video-item {
			cursor: pointer;
			border: 1px solid #ddd;
			padding: 10px 20px;
		}

		.video-item.active:before {
			position: absolute;
			content: "\25BA";
			width: 0px;
			height: 0px;
			top: 25%;
			left: 0px;
		}

		.video-item:hover,
		.video-item.active {
			background: #084da2;
			color: #fff;
			position: relative;
		}

		.video-list {
			height: 350px;
			overflow: auto;
		}

		.share-wrap {
			position: fixed;
			left: 5px;
			top: 50%;
			box-shadow: 5px 5px 15px #888;
		}

		.social-share:hover {
			opacity: 0.9;
		}

		.social-share {
			border-bottom: 1px solid #ddd;
			color: #fff;
			padding: 12px;
			font-size: 17px;
			cursor: pointer;
			display: block;
		}

		.social-facebook {
			background: #1877f2;
		}

		.social-twitter {
			background: #1da1f2;
		}

		.social-messenger {
			background: #0084ff;
		}

		.social-viber {
			background: #8f5db7;
		}

		.social-whatsapp {
			background: #075e54;
		}

		.date-holder {
			border-top: 1px solid #f2f2f2;
			padding-top: 10px;
		}

		.story img {
			width: 100%;
		}

		img.image-style-align-right {
			padding-left: 20px;
			float: right;
		}

		img.image-style-align-left {
			padding-right: 20px;
			float: left;
		}

		.sub-menu {
			display: block;
			position: absolute;
			left: 0;
			top: 100%;
			height: 0;
			width: 100%;
			overflow: hidden;
			background: #084da2;
			transition: .2s;
			width: 200px;
			z-index: 99;
		}

		.featured-video iframe {
			width: 100%;
			min-height: 400px;
		}

		.saturday-row a {
			font-size: 1.1rem;
		}

		li:hover ul {
			height: auto;
		}

		.sub-menu li {
			display: block !important;
			padding: 0 !important;
		}

		.main-menu li {
			position: relative;
		}

		.saturday-special {
			background: #084da2;
		}

		.saturday-item-title {
			background: none;
		}

		.big-news-block figure {
			height: 100%;
		}

		.big-news-block figure img {
			height: 100%;
			object-fit: cover;
		}

		.story blockquote {
			background: darkslategray;
			color: #fff;
			padding: 20px;
			border-radius: 30px 10px 30px 10px;
		}

		.story blockquote p {
			margin-bottom: 0;
		}

		.search-container {
			display: flex;
			align-items: center;
		}

		.sponsored-wrap {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.sponsored-wrap img {
			border: 1px solid #ddd;
		}

		.search-box {
			width: 0;
			opacity: 0;
			border: none;
			outline: none;
			transition: width .5s ease, opacity .5s ease;
		}

		.searchbox {
			background: transparent;
			border-radius: 30px;
			padding: 0px 10px;
		}

		.searchbox.open {
			background: #fff;
		}

		.search-box.open {
			width: 200px;
			opacity: 1;
			height: 30px;
		}

		.search-icon {
			margin-left: 10px;
			cursor: pointer;
			font-size: 20px;
		}

		blockquote {
			border-radius: 30px 0 30px 0 !important;
		}

		blockquote p {
			margin-bottom: 0px !important;
		}

		.story-content figure img:hover {
			transform: scale(1);
		}

		figcaption {
			font-style: italic;
		}

		.category-tag {
			cursor: pointer;
		}

		@media only screen and (max-width: 768px) {
			#video-preview {
				height: 210px;
			}

			.video-list {
				height: auto !important;
			}

			.taja-card .card-body {
				height: auto !important;
			}

			.saturday-item-title ul {
				height: auto !important;
			}

			.tab-news-list {
				padding-bottom: 20px;
			}

			.box ul {
				height: auto !important;
			}

			.share-wrap {
				position: relative;
				width: 100%;
				box-shadow: none;
			}

			.social-share {
				display: inline-block;
				padding: 6px 22px;
				font-size: 18px;
			}
		}

		.not-found {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 45vh;
			background-color: #f2f2f2;
		}

		.video-item {
			margin-bottom: 0;
			border-bottom: none;
		}

		.menu-bar.fixed-menu {
			z-index: 888;
		}

		.page-progressbar {
			z-index: 888;
		}

		.story-content figure {
			margin-bottom: 30px;
		}

		.story-content .image-style-align-right {
			float: right;
			margin: 20px 0 20px 30px;
		}

		.story-content .image-style-align-left {
			float: left;
			margin: 20px 30px 20px 0;
		}

		.special-news {
			background: #cedfee;
		}

		.table>:not(caption)>*>* {
			border-bottom: none;
		}

		figure img {
			height: 100%;
			object-fit: cover;
		}
		.slider-news {
			background: #f52158;
			margin-bottom: 20px;
		}

		.slider-news .container {
			display: flex;
		}

		marquee a:hover {
			color: #ddd;
			text-decoration: none;
		}

		marquee a {
			color: #fff;
			padding-right: 35px;
			font-size: 16px;
			text-decoration: none;
		}

		.menu-bar {
			margin-bottom: 0px;
		}

		.menu-bar ul li a {
			padding: 14px 18px;
		}
		.video-title{ font-size:16px; } 

		.video-container {
			overflow: hidden;
			position: relative;
			width: 100%;
		}

		.video-container::after {
			padding-top: 44.25%;
			display: block;
			content: '';
		}

		.video-container iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

		.author-name {
			text-align: center;
			display: block;
			margin-top: -10px;
			margin-bottom: 15px;
			font-weight: bold;
			font-size: 16px;
			text-decoration: none;
		}
		.read-all {
			text-align: center;
			text-decoration: none;
			display: flex;
			justify-content: center;
		}

		#myTab {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		#myTab li {
			width: 33%;
		}

		#myTab .nav-link.active {
			background: #084da2;
			color: #fff;
		}

		#myTab li button {
			width: 100%;
		}

		.tab-news-list:last-child {
			border: none;
			margin-bottom: 0;
		}

		.tab-news-list a {
			color: #000;
			text-decoration: none;
		}

		.tab-news-list {
			border-bottom: 1px solid #ddd;
			margin-bottom: 10px;
		}
  </style>
</head>