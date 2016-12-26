<!DOCTYPE html>
<html>
	<head>
		<title>Hello</title>

		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100">

		<style type="text/css">
			html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }			
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Hello, {{ $name }}, welcome to Laravel!</div>
			</div>
		</div>
	</body>
</html>