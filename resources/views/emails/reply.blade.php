<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ $info['subject'] }}</title>
	<style>
		/* Gmail-compatible, minimal inline-friendly styles */
		body { margin:0; padding:0; background-color:#f5f7fa; }
		table { border-collapse:collapse; }
		img { border:0; display:block; }
		.btn { background-color:#1a73e8; color:#ffffff; text-decoration:none; padding:12px 20px; border-radius:4px; display:inline-block; }
		@media only screen and (max-width:600px){ .container{ width:100% !important; } .stack{ display:block !important; width:100% !important; }
		}
	</style>
</head>
<body style="font-family:Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
	<tr>
		<td align="center" style="padding:24px 12px;">
			<table class="container" width="600" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 2px 6px rgba(32,33,36,.08);">
				<!-- Header -->
				<tr>
					<td style="background:#1a73e8;padding:20px 24px;color:#ffffff;">
						<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
							<tr>
								<td style="vertical-align:middle;">
									<strong style="font-size:18px;">{{ config('app.name', 'Website') }}</strong>
								</td>
								<td style="text-align:right;vertical-align:middle;font-size:12px;opacity:.95;">{{

									\Carbon\Carbon::now()->format('M d, Y') }}</td>
							</tr>
						</table>
					</td>
				</tr>

				<!-- Body -->
				<tr>
					<td style="padding:28px 24px 20px; color:#222;">
						<h1 style="margin:0 0 12px;font-size:20px;font-weight:600;color:#111;">{{ $info['name'] }}</h1>
						<p style="margin:0 0 12px;color:#555;line-height:1.5;font-size:15px;">Subject: <strong>{{ $info['subject'] }}</strong></p>
						<p style="margin:0 0 16px;color:#555;line-height:1.5;font-size:15px;">Reply: {!! nl2br(e($info['message'])) !!}</p>
					</td>
				</tr>

				<!-- Divider -->
				<tr>
					<td style="padding:0 24px 20px;">
						<hr style="border:none;border-top:1px solid #eef0f3;margin:0;" />
					</td>
				</tr>

				<!-- Footer -->
				<tr>
					<td style="padding:16px 24px 28px;color:#70757a;font-size:13px;">
						<div style="margin-bottom:8px;color:#5f6368;font-size:13px;">Regards,<br>{{ config('app.name', 'Website') }} Team</div>
						<div style="color:#9aa0a6;font-size:12px;">If you didn't expect this email, you can ignore it.</div>

					</td>
				</tr>
			</table>
			<!-- Small footer under card -->
			<table width="600" cellpadding="0" cellspacing="0" role="presentation" style="max-width:600px;margin-top:12px;">
				<tr>
					<td style="text-align:center;color:#9aa0a6;font-size:12px;">{{ config('app.name') }} — {{ config('app.url') }}</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
