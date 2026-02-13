<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ $info['subject'] }}</title>
	<style>
		body { margin:0; padding:0; background-color:#f5f7fa; }
		table { border-collapse:collapse; }
		.container { background:#fff; border-radius:8px; box-shadow:0 2px 6px rgba(32,33,36,.08); max-width:600px; margin:32px auto; overflow:hidden; }
		.header { background:#1a73e8; color:#fff; padding:20px 24px; font-size:18px; font-weight:600; }
		.content { padding:28px 24px 20px; color:#222; }
		.label { color:#888; font-size:13px; width:90px; display:inline-block; }
		.value { color:#222; font-size:15px; }
		.divider { border:none; border-top:1px solid #eef0f3; margin:24px 0 16px; }
		.footer { color:#70757a; font-size:13px; padding:16px 24px 28px; background:#f8fafc; }
		@media only screen and (max-width:600px){ .container{ width:100% !important; } }
	</style>
</head>
<body style="font-family:Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
	<tr>
		<td>
			<table class="container" width="100%" cellpadding="0" cellspacing="0" role="presentation">
				<tr><td class="header">New Message Received</td></tr>
				<tr><td class="content">
					<div style="margin-bottom:18px;">
						<span class="label">Subject:</span> <span class="value">{{ $info['subject'] }}</span>
					</div>
					<hr class="divider">
					<div style="margin-bottom:8px; color:#888; font-size:13px;">Message:</div>
					<div style="color:#222; font-size:15px; white-space:pre-wrap;">{!! nl2br(e($info['message'])) !!}</div>
				</td></tr>
				<tr><td class="footer">
					This message was sent from your website contact form.<br>
					<span style="color:#9aa0a6; font-size:12px;">{{ config('app.name') }} — {{ config('app.url') }}</span>
				</td></tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
