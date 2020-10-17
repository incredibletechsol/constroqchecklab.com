<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php include('title.php'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" />	<link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    <script src="email/validation.js" type="text/javascript"></script>
	<SCRIPT LANGUAGE="JavaScript">


<!--

function setColor(el, bg) 
{
  if (el.style) el.style.backgroundColor = bg;
}

function checkInput(form) 
{
  var bgBad = "pink";
  var bgGood = "white";
  var valid = true;
  if (form.UserName.value == "") {
    valid = false;
    setColor(form.UserName, bgBad);
  
  } else {
    setColor(form.UserName, bgGood);
  }
  if (form.name.value == "") {
    valid = false;
    setColor(form.name, bgBad);
  
  } else {
    setColor(form.name, bgGood);
  }
  
 if (form.contact.value == "") {
    valid = false;
    setColor(form.contact, bgBad);
  
  } else {
    setColor(form.contact, bgGood);
  }


  if (form.message.value == "") {
    valid = false;
    setColor(form.message, bgBad);
  
  } else {
    setColor(form.message, bgGood);
  }

  
  if(document.login.UserName.value=="")
	{
		alert("Please Enter a valid E-mail Address");
		document.login.UserName.focus();
		return false;
	}
	//E-mail field should accept valid characters only.
	if (document.login.UserName.value != " ")
	{
		var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
		var checkStr = document.login.UserName.value;
		var allValid = 'true';
		for (i = 0;  i < checkStr.length+1;  i++)
		{

		ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length+1;  j++)
			{
				if (ch == checkOK.charAt(j))
				break;
				if (j == checkOK.length)
				{
					allValid = 'false';
					break;
				}
			}
		}
	}
	//E-mail id must have '@'
	if(document.login.UserName.value != "")
	{
		var val=document.login.UserName.value ;
		var pass1=val.indexOf('@',0);
		if(pass1==-1)
		{
			alert("Not a valid E-Mail Address");
			document.login.UserName.value="";
			document.login.UserName.focus();
			return false;
		}
	}
	//E-mail id must have '.'
	if(document.login.UserName.value != "")
	{
		var val=document.login.UserName.value ;
		var pass2=val.indexOf('.',0);
		if(pass2==-1)
		{
			alert("Not a valid E-Mail Address");
			document.login.UserName.value="";
			document.login.UserName.focus();
			return false;
		}
		if((pass2 - pass1)== 1)
		{
			alert("Not a valid E-Mail Address");
			document.login.UserName.value="";
			document.login.UserName.focus();
			return false;
		}
	}
	//E-mail id should have only @,.,_ and - with the letters and digits
	if (!allValid)
	{
		alert("Please enter only letters, digits,and \"@\"  \"_\"  \".\"  \"-\"  characters in the \"EMail\" field.");
		document.login.UserName.focus();
		return false;
	}
  
  
  if (!valid) alert("Please fill out all the fields.");
  return valid;
}
// --> 


function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
       
       function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }


</SCRIPT>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

        <?php include('header.php'); ?>   
        
        <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
              <a href="#">Contact Us</a>
            </div>
            	
            <div class="row-fluid">
                <div class="span8" id="divMain">
					<br>
                   	<h5 style="color:#FF6633;"><img src="images/tick.png" border=0>We will get back to you soon.</h5>
					<hr>
												 
                </div>
				
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Our Location</h3>
                    <p>
                        <address>
                        	<p>Plot No.A-45,MIDC</p>
							<p>Baramati-413133</p>
							<p>Phone : +2112 243851</p>
							<p>Email : <a href="mailto:info@example.com">constroqcheck@gmail.com</a></p>
                        </address>  
                    </p>     
                         					
                    </div>
					
					
                    
                </div>
			<!--/End Sidebar Content-->
				
				
            </div>			

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

     <?php include('footer.php'); ?>
</div>
<br />
<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>


</body>
</html>