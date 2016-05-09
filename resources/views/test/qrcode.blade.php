<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<img src="data:image/png;base64,{!! base64_encode(QrCode::format('png')->encoding("utf-8")->size(399)->merge('/public/admin/images/pig.png', 0.1)->color(40,40,40)->generate('傻瓜真的是你吗!')) !!}" alt="">
</body>
</html>