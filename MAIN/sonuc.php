<?php  
header("Content-Type:text/html; charset=UTF-8");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

	function Filtrele($Deger) {
		$IslemBir = trim($Deger);
		$IslemIki = strip_tags($IslemBir);
		$IslemUc = htmlspecialchars($IslemIki, ENT_QUOTES);
		$Sonuc = $IslemUc;
		return $Sonuc;
	}
    $url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	$GelenIsımSoyisim = Filtrele($_POST['adsoyad']);
	$GelenEmailAdresi = Filtrele($_POST['email']);
    $GelenMesaj	 = Filtrele($_POST['mesaj']);
	

$MailGonder = new PHPMailer(true);


try {
	//Sunucu Ayarları

    $MailGonder->SMTPDebug = 0;                      //Debug Çıktısı
    $MailGonder->isSMTP();                                            //Send using SMTP
    $MailGonder->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $MailGonder->SMTPAuth   = true;                                   //Enable SMTP authentication

    $MailGonder->CharSet = "UTF-8";

    $MailGonder->Username   = 'keremuncesite@gmail.com';                     //SMTP username
    $MailGonder->Password   = 's1r1us12';                               //SMTP password
    $MailGonder->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $MailGonder->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $MailGonder->setFrom($GelenEmailAdresi, $GelenIsımSoyisim);
    $MailGonder->addAddress('keremuncesite@gmail.com', 'Kerem');     //Add a recipient
    //$MailGonder->addAddress('ellen@example.com');               //Name is optional
    $MailGonder->addReplyTo($GelenEmailAdresi, $GelenIsımSoyisim);
    //$MailGonder->addCC('cc@example.com');
    //$MailGonder->addBCC('bcc@example.com');

    //Attachments
    //$MailGonder->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$MailGonder->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $MailGonder->isHTML(true);                                  //Set email format to HTML
    $MailGonder->Subject = $GelenIsımSoyisim . " 'dan bir mesaj";
    $MailGonder->MsgHTML(
        "Mailin geldiği adres: ".$url."<br />
        E-mail : " . $GelenEmailAdresi . "<br /><br /> Mesajı : " . $GelenMesaj );

    //$MailGonder->Body = 'Mailin İçeriği';
    //$MailGonder->AltBody = 'Mailin İçeriği (HTML MAİL KABUL ETMEYEN)';

    $MailGonder->send();
        echo "";
    /*
    $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
    header("Refresh: 1; url=".$geldigi_sayfa."");
    echo "Yönlendiriliyorsunuz.."; 
    */

    
} catch (Exception $e) {
    echo "Mail gönderim hatası <br / > Hata açıklaması : {$MailGonder->ErrorInfo}";
}
?>