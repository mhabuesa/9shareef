<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New Post Notification</title>
	<style>
		body {
			background: #f4f4f7;
			margin: 0;
			padding: 0;
			font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
		}
		.container {
			max-width: 600px;
			margin: 30px auto;
			background: #fff;
			border-radius: 8px;
			box-shadow: 0 2px 8px rgba(0,0,0,0.07);
			overflow: hidden;
		}
		.header {
			background: #0d6efd;
			color: #fff;
			padding: 24px 32px 16px 32px;
			text-align: center;
		}
		.header h1 {
			margin: 0;
			font-size: 2rem;
		}
		.content {
			padding: 24px 32px;
		}
		.post-image {
			width: 100%;
			max-height: 260px;
			object-fit: cover;
			border-radius: 6px;
			margin-bottom: 18px;
		}
		.title {
			font-size: 1.5rem;
			color: #222;
			margin-bottom: 8px;
		}
		.short-desc {
			font-size: 1.1rem;
			color: #555;
			margin-bottom: 16px;
		}
		.desc {
			font-size: 1rem;
			color: #333;
			margin-bottom: 24px;
		}
		.btn {
			display: inline-block;
			background: #0d6efd;
			color: #fff !important;
			padding: 12px 28px;
			border-radius: 5px;
			text-decoration: none;
			font-weight: 600;
			font-size: 1rem;
			transition: background 0.2s;
		}
		.btn:hover {
			background: #0b5ed7;
		}
		.footer {
			background: #f4f4f7;
			color: #888;
			text-align: center;
			font-size: 0.95rem;
			padding: 18px 32px;
		}
		@media (max-width: 600px) {
			.container, .content, .header, .footer {
				padding-left: 12px !important;
				padding-right: 12px !important;
			}
			.header h1 {
				font-size: 1.3rem;
			}
			.title {
				font-size: 1.1rem;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>নতুন পোস্ট প্রকাশিত হয়েছে!</h1>
		</div>
		<div class="content">
			@if(!empty($post['image']))
				<img src="{{ asset($post['image']) }}" alt="Post Image" class="post-image">
			@endif
			<div class="title">{{ $post['title'] ?? '' }}</div>
			<div class="short-desc">{{ $post['short_description'] ?? '' }}</div>
			<div class="desc">{!! $post['description'] ?? '' !!}</div>
			<a href="{{ $post['full_url'] }}" target="_blank"
			   style="display:inline-block;background:#0d6efd;color:#fff !important;padding:12px 28px;border-radius:5px;text-decoration:none;font-weight:600;font-size:1rem;line-height:1.5;">
				সম্পূর্ণ পোস্ট পড়ুন
			</a>
		</div>
		<div class="footer">
			&copy; {{ date('Y') }} 9Shareef. সকল স্বত্ব সংরক্ষিত।<br>
			আপনি এই ইমেইলটি সাবস্ক্রাইব করেছেন।
		</div>
	</div>
</body>
</html>
