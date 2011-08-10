jQuery(document).ready(function(){
	$('.filters ul li a').hover( function(){
		$(this).css('background-position','bottom left');
		$(this).parent().css('background-position','bottom right')
	}, function() {
		$(this).css('background-position','top left');
		$(this).parent().css('background-position','top right')
	});
	
	$('.filters ul li').click( function() {
		$(this).fadeOut();
	});
	
	$('.results ul li:nth-child(even), .options .results li:nth-child(even)').css('background-color','#F3F3F3');
	$('.results ul li .options').hide();
	$('.results ul li input:not(:checked)').hide();

	
	$('.results ul li').hover( function() {
		$(this).find('.options').fadeIn('fast');
		if($(this).find('input:checkbox').attr('checked') == false) {
			$(this).find('input:checkbox').fadeIn('fast');
		}		
	}, function() {
		$(this).find('.options').fadeOut('fast');
		if($(this).find('input:checkbox').attr('checked') == false) {
			$(this).find('input:checkbox').fadeOut('fast');
		}	
		
	});
	
	$('input:checked').parent().css('background-position','bottom center');
	
	$('.tools input:checkbox').click( function() {
		if($(this).attr('checked') == true) {
			$(".results ul li input:checkbox").attr('checked', true);
			$('input:checked').show();
		} else {
			$(".results ul li input:checkbox").attr('checked', false);
			$('.results ul li input:not(:checked)').fadeOut('fast');
		}
		$('input:checked').parent().css('background-position','bottom center');
		$('input:not(:checked)').parent().css('background-position','top center');
	});
	
	
	$('.results ul li input:checkbox').click( function() {
		$(".tools input:checkbox").attr('checked', false);
		$('input:checked').parent().css('background-position','bottom center');
		$('input:not(:checked)').parent().css('background-position','top center');
	});
	
	$('.box.tools li > ul').hide();
	$('.box.tools ul > li').click( function() {	
		if ( $(this).find('ul').css('display') == 'block') {
			$(this).find('ul').hide();
		} else {
			$('.box.tools li ul').hide();
			$(this).find('ul').show();
		}
	});
	
	$('.box.search li > ul').hide();
	$('.box.search ul > li').click( function() {	
		if ( $(this).find('ul').css('display') == 'block') {
			$(this).find('ul').hide();
		} else {
			$('.box.tools li ul').hide();
			$(this).find('ul').show();
		}
	});
	 
	
});

function closeSearchPopup(id_field, value, id){  
  if(window.opener != null){
	window.opener.document.getElementById(id_field).value = value;
	window.opener.document.getElementsByName('txtId').value = id;
  	window.close();
  }else{
	alert("Houve um erro ao tentar selecionar um item.\nFeche a janela de pequisa e tente selecionar novamente.\nCaso o erro persista entre em contato conosco!");
  }
  
}