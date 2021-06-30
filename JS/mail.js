function kontrol(){

	$("label>span").text("");

	var kontrol = true;

	if (!$("#isim").val()){
		$("#isim-uyari").text("Lütfen isim yazınız");
		$("#isim").css("border","1px solid red");
        $("#isim-uyari").css("color","red");
		kontrol = false;
	}

	if (($("#isim").val()) && ($("#isim").val().length <=2)){
		$("#isim-uyari").text("İsim çok kısa");
		$("#isim").css("border","1px solid red");
        $("#isim-uyari").css("color","red");
		kontrol = false;
	}

	if (!$("#eposta").val()){
		$("#eposta-uyari").text("Mail adresi yazınız");
		$("#eposta").css("border","1px solid red");
        $("#eposta-uyari").css("color","red");
		kontrol = false;
	}

	if (!$("#eposta").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)){
		$("#eposta-uyari").text("Hatalı mail adresi");
		$("#eposta").css("border","1px solid red");
        $("#eposta-uyari").css("color","red");
		kontrol = false;
	}

	if (!$("#mesaj").val()){
		$("#mesaj-uyari").text("Mesaj yazınız");
		$("#mesaj").css("border","1px solid red");
        $("#mesaj-uyari").css("color","red");
		kontrol = false;
	}

	if (kontrol==true){
		$("label>span").text("");
        $("#isim").css("border","1px solid green");	
        $("#eposta").css("border","1px solid green");	
        $("#mesaj").css("border","1px solid green");	   
		$('#sonuc').css("color", "green");
        $('#sonuc').html('<span>Lütfen bekleyin..</span>');
        $('#sonuc').show(300);
    
        $.ajax( {
            type: "POST",
            url: "assets/PHPMailer/mail.php",
            data:$('#form').serialize(),
            success: function(cevap) {
                $('#sonuc').show();
                if(cevap==''){
                    $('#sonuc').html('<b>Mesajınız başarıyla gönderildi.</b>');
                    $("#eposta").val("");
                    $("#isim").val("");
                    $("#mesaj").val("");
                    setTimeout(function(){
                        $('#sonuc').html('');
                    },1000);
                    
                }else{
                    $('#sonuc').html('<span style="color:red">Bir hata oluştur.</span><br />');
                    setTimeout(function(){
                        $('#sonuc').html('');
                    },1000);
                }
            }
        });
    }
    }

$("#button").on("click",function(){
	kontrol();
});


