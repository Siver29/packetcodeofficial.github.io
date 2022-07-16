<?php
$url= "https://api.telegram.org/bot5530162842:AAEl3lnNam1vxFLzhoIINSuLmrVNrEyOYU4/";
$chat_id = '5491809641';
if (isset($_POST['hi'])){
 $name=$_POST['your-name'];
 $email=$_POST['your-email'];	
 $phone=$_POST['your-subject'];
 $servics=$_POST['menu-528'];
 $det= $_POST['your-message'];

$message = urlencode(" اسم المسنخدم : ".$name."\n \n البريد الالكتروني : ".$email."\n \n رقم الهاتف :".$phone ."\n \n    نوع الخدمة :" .$servics ."\n \nالتفاصيل : ".$det) ;
	$tel= $url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML";
}
?>
<head>
	<style>
		body {
			min-width: 92%;
			min-height: 95%;
			background: rgb(7, 138,94);
			color: white;
		}
		div {
			font-size: 3em;
			margin: auto;
			position: absolute;
			left: 30%;
			top:20%
			
		}
		button{
			border-radius: 30px;
			width: 10%;
			height: 5%;
			color: rgb(7, 138,94);
			background: rgb(232, 232,232);
			font-size: 20px;
			position: absolute;
			top: 10px
		}
		#mass {
			visibility: hidden;
			margin-left: -500px;
		}
		#sec{
			position: absolute;
			top: 50%;
			min-width: 650px;
			margin: auto;
				
		}
		#ver {
			width: 100%;
			height: 50px;
			font-size: 30px;
			color: rgb(7,138,94);
			border-radius: 30px;
		}
		@media only screen and (max-width: 600px) {
			#sec{
			position: absolute;
			top: 90%;
            
			
			}
			#ver {
				width: 50%;
                height:100px;
			}
			div {
				font-size: 1em;
			}
}
	</style>
</head>
<body>
<a href="index.html"><button>رجوع</button></a>
<div><h1> تم ارسال الرسالة </h1>	</div>
<div id="sec"><form  target="mass" action="<?php echo $tel; ?>" method="post">
	<input type="submit" value="تأكيد الطلب" id="ver">
 	</form></div>
<iframe id="mass" name="mass"></iframe>	
</body>
