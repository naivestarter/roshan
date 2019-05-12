<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>GRIID</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="{{ asset('datacollector/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('datacollector/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{ asset('datacollector/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('datacollector/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('datacollector/css/pages/dashboard.css') }}" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
@include('datacollector.includes.navbar')

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          @include($mainView)

        </div>
        <!-- /span12 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript /////////Later on put the js code here in such a way that the select fuction contains a data attribute which points to the input forms which are shifted in and out of the main form that is to be submitted. for now only sow and hide is done.
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="{{ asset('datacollector/js/jquery-1.7.2.min.js') }}"></script> 
<script src="{{ asset('datacollector/js/bootstrap.js') }}"></script>
 
<script src="{{ asset('datacollector/js/base.js') }}"></script> 
</body>
</html>
