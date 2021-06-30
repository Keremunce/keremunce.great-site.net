function kapat() {
    	$('#info').fadeOut(500);
    }
    function gonder() {
        var onay = document.querySelector("#onay");
    	
	      if ( onay.checked ) { 
	      	$('#info').html('<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Gönderiliyor!</strong> Lütfen bekleyin... <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');

		    	$('#info').show(300);

		    	$.ajax( {
		    		type: "POST",
		    		url: "sonuc.php",
		    		data:$('#form').serialize(),
		    		success: function(cevap) {
		    			$('#info').show();
		    			if(cevap==''){
		    				$('#info').html('<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Başarılı!</strong> Mesajınız başarıyla iletilmiştir. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		            togglePopup();
		            document.getElementById('form').reset();
		            }
	    		    else{
	    				$('#info').html(
	                        '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Hata!</strong> Bir hata var. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
	    			}
	    		}
	    	});
	    }
	    else {
	        $('#info').html(
	                        '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Hata!</strong> Bir hata var. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
	    }
}