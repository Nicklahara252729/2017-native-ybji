<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1, maximum-scale=2,  minimum-scale=1">
        <title>Yayasan Bangga Jadi Indonesia</title>
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./material-icon/material-icon.css" rel="stylesheet">
        <link href="./css/g_default.css" rel="stylesheet">
        <link href="./css/g_costum.css" rel="stylesheet">
        <link href="./css/g_update.css" rel="stylesheet">
        <link href="./css/g_frames.css" rel="stylesheet">
        <link href="./css/g_slide_down.css" rel="stylesheet">
        <link href="./g_pic/assets/logo.ico" rel="icon" type="image/x-icon">
        <link href="./g_pic/assets/logo.ico" rel="shortcut icon" type="image/x-icon">
        <script type="text/javascript">
            var i=1;
            function slide(){
                if(i==1){
                    document.getElementById('slide-down').style.top="0px";
                    document.getElementById('in-slide-down').style.opacity="1";
                    document.getElementById('btn-slide-down').style.display="none";
                    document.getElementById('btn-slide-up').style.display="block";
                    i=2;
                }else{
                    document.getElementById('slide-down').style.top="-480px";
                    document.getElementById('in-slide-down').style.opacity="0";
                    document.getElementById('btn-slide-up').style.display="none";
                    document.getElementById('btn-slide-down').style.display="block";
                    i=1;
                }
            }
            
        </script>
    </head>
    <body>
        <div class="backtotop title-three cursor-pointer"><span class="glyphicon glyphicon-chevron-up"></span></div>
        <?php
        include"G_L4213N39/config_jum_top.php";
        include"G_L4213N39/config_top.php";
        include"G_L4213N39/config_slide_down.php";
        include"G_L4213N39/config_content_st.php";
        include"G_L4213N39/config_content_rd.php";
        include"G_L4213N39/config_content_4th.php";
        include"G_L4213N39/config_content_5th.php";
        include"G_L4213N39/config_content_nd.php";
        include"G_L4213N39/config_content_6th.php";
        include"G_L4213N39/config_basic_footer.php";
        ?>
        <script src="./js/bootstrap.js" type="text/javascript"></script>
        <script src="./js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="./js/jquery-ui.js" type="text/javascript"></script>
        <script src="./js/g_default.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('#accordion').accordion();
            
             $(document).ready(function(){	
	var first = 0;
	var speed = 700;
	var pause = 3500;
	
		function removeFirst(){
			first = $('.flip li:first').html();
			$('.flip li:first')
			.animate({opacity: 0}, speed)
			.fadeOut('slow', function() {$(this).remove();});
			addLast(first);
		}
		
		function addLast(first){
			last = '<li style="display:none">'+first+'</li>';
			$('.flip').append(last)
			$('.flip li:last')
			.animate({opacity: 1}, speed)
			.fadeIn('slow')
		}
	
	interval = setInterval(removeFirst, pause);
    });
            
            $(function() {
		    $("#playlist li").on("click", function() {
		        $("#my-video").attr({
		            "src": $(this).attr("movieurl"),
		            "poster": $(this).attr("moviesposter")
		        })
		    })
		    $("#my-video").attr({
		        "src": $("#playlist li").eq(0).attr("movieurl"),
		        "poster": $("#playlist li").eq(0).attr("moviesposter")
		    })
		  })
        </script>
    </body>
</html>