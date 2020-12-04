

// for know active link in sidebar

$(document).ready(function(){

    $('.menu ul li a').filter(function(){
      return this.href==location.href
    }).parent().addClass('active').siblings().removeClass('active');

  

		// $('.menu ul li a').click(function(){
		// 	$(this).parent().addClass('active').siblings().removeClass('active')	
        // });
        
        //alert(location.href);]
       

});

