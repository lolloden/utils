


$(document).ready(function(){

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
    
    $('#replacer') .tooltip({
                         title: "<h5>Fill empty cells (if any) with this value</h5>", 
                         html: true,
                         placement : 'bottom'
    }); 
    
    $('#example1').click(function() {
    	 $('#columns').val("3");
       $('#mydata').val("header col. 1\r\nheader col. 2\r\nheader col. 3\r\ndata1\r\ndata2\r\ndata3\r\ndata4\r\ndata5\r\ndata6\r\ndata7\r\ndata8\r\ndata9");
    });
  
});