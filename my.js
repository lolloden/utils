

	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '352101694987379',
	      xfbml      : true,
	      version    : 'v2.8'
	    });
	    FB.AppEvents.logPageView();
	  };
	
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));


$(document).ready(function(){
	
	 $("#btc").keyup(function() {
         // satoshi
         var _num = parseFloat($(this).val());
         var num = _num.toFixed(8);
         var res = sb.toSatoshi(num);
         // euros
         var _euro = parseFloat($('#valore').val());
         console.log(res);
         var tot = parseFloat(_euro * _num).toFixed(2);
			$('#res').html(res);
			$('#res2').html(tot);
	});
	
	 $('.njmp').click(function(ev) {
					  ev.preventDefault();
					  return;
			 });

    $('#guide1').tooltip({
                         title: "<h5>Please insert one data per line. For empty cell leave a blank space in an empty line.</h5>", 
                         html: true,
                         placement : 'bottom'
    }); 
    
    $('#comparative') .tooltip({
                         title: "<h5>First cell of first column empty (like in a comparative table)</h5>", 
                         html: true,
                         placement : 'bottom'
    });  
    
    $('#repl') .tooltip({
                         title: "<h5>Fill empty cells (if any) with this value</h5>", 
                         html: true,
                         placement : 'bottom'
    }); 
    
    $('#example1').click(function() {
    	 $('#columns').val("3");
       $('#mydata').val("header col. 1\r\nheader col. 2\r\nheader col. 3\r\ndata1\r\ndata2\r\ndata3\r\ndata4\r\ndata5\r\ndata6\r\ndata7\r\ndata8\r\ndata9");
    });
  
});