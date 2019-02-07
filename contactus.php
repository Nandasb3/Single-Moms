<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style >
		body {
    margin:0;
    padding:0;
    font-family:sans-serif;
    background:#002b38;
}
.container {
    width:900px;
    margin:250px auto 0;
    display:flex;
}
.container .box {
    position:relative;
    width: 300px;
    height:100px;
    box-sizing:border-box;
    text-align:center;
    margin:0 10px;
    background:#00171d;
    overflow:hidden;
    border-radius:4px;
    box-shadow:0 0 0 2px rgba(0,7,10,1);
}
.container .box .icon {
    width:100%;
    height:100%;
    background:#00171d;
    transition: 0.5s;
}
.container .box .icon .fa {
    font-size: 4em;
    line-height:100px;
    color: #0ff;
}
.container .box:hover .icon {
    transform:scale(0);
}
.container .box .details {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:#03a9f4;
    transition:0.5s;
    transform:scale(2);
    opacity:0;
}
.container .box:hover .details {
    transform:scale(1);
    opacity:1;
}
.container .box .details h3 {
    margin:0;
    padding:0;
    line-height:100px;
    font-size:24px;
    color:#fff;
}
.container .box .details:nth-child(2) .details {
    background:#e91e63;
}
.container .box .details:nth-child(2) .details {
    background:#607d8b;
}
	</style>
</head>
<body>


<div class="container">
	<div class="box">
		<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
		<div class='details'><h3>Bangalore</h3></div>
	</div>
	
	<div class="box">
		<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
		<div class='details'><h3>+91 9901147437</h3></div>
	</div>
	
	<div class="box">
		<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
		<div class='details'><h3>singlemoms@gmail.com</h3></div>
	</div>
</div>
</body>
</html>