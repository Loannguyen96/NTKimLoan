
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title> Cửa hàng Trung Lộc Phát</title>
	<link href="<?php echo public_url() ?>/css/bootstrap.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'><link href="<?php echo public_url() ?>/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo public_url() ?>/css/flexslider.css" type="text/css" media="screen" />
    <link href="<?php echo public_url() ?>/css/sequence-looptheme.css" rel="stylesheet" media="all" />
  	<link rel="stylesheet" type="text/css" href="<?php echo public_url() ?>/css/Style.css">
    <script type="text/javascript" src="<?php echo public_url() ?>/js/modernizr-2.6.2.js"></script>

    <script type="text/javascript" src="<?php echo public_url() ?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url() ?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo public_url() ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url() ?>/js/jquery.sequence-min.js"></script>
    <script type="text/javascript" src="<?php echo public_url() ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script defer src="<?php echo public_url() ?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo public_url() ?>/js/script.min.js"></script>

    <script type="text/javascript">
        function ktmail()
        {
            var flag = true;
            var em=$.trim($('#email').val());
            if(em.indexOf("@")==-1 || em.indexOf(".")==-1 || em.indexOf("@")!=em.lastIndexOf("@")|| em.lastIndexOf(".")==em.length-1
                || em.indexOf(".")==-1||em.lastIndexOf(".")<em.indexOf("@"))
            {
                $('#email').focus();
                $('#email_error').text('Email sai định dạng');
                flag=false;
            }
            else
                $('#email_error').text(" ");
            return flag;
        }
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if(charCode == 59 || charCode == 46)
            return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>