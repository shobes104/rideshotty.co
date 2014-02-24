
 <?php 
 //echo 'yo';
 // reinitialize curl resource
$ch = curl_init();

                curl_setopt($ch, CURLOPT_URL,"https://api.sendhub.com/v1/messages/?username=4123036291&api_key=a2297bce8042c9e5b44b9d814735edecdf41002c");
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                if(LOCAL_MODE){
                  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, TRUE);
                  curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
                  curl_setopt($ch, CURLOPT_PROXY, FALSE);
                 }

                curl_setopt($ch, CURLOPT_POST, 1);

                $data = '{
                   "contacts": [
					  10796671
                   ],
                   "text": "Hey, You have a Rider.  Check it out: http://rideshottyapp.aws.af.cm/confirm.html"
                }';

                curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
                //echo $result=curl_exec ($ch);
				curl_exec ($ch);
                echo curl_error($ch);
 
 //curl -H "Content-Type: application/json" -X POST --data '{"contacts" : [10796671],"text" : "Do not ride bitch!"}' https://api.sendhub.com/v1/messages/?username=4123036291\&api_key=a2297bce8042c9e5b44b9d814735edecdf41002c
	

 ?> 
 
 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body  class="app_back">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="dashboard.html"><img width="100px" src="img/ShottyLogo.png" /></a>
        </div>

      </div>
    </div>

    
      <div class="container" id="lgnbtn_container" style="background-color: white;">
		<div class="row">
			<div class="span6 ridecontainer" style="text-align:center">
				<h1>Awesome</h1>
				<h2>We have notified the driver.  They will confirm ASAP!
				<br />
				Thank you for using RideShotty.co
				</h2>
			</div>
		</div>
        
      </div>

	

      <footer>

      </footer>
    </div> <!-- /container -->        
	
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
		
		<script type='application/javascript' src='../js/fastclick.js'></script>
		<script>
			window.addEventListener('load', function() {
			FastClick.attach(document.body);
			}, false);
		</script>

        <!--<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>-->
    </body>
</html>
