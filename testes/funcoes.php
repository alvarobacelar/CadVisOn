<?php
	function formata_cep($valor){
		$novo = substr($valor,0,5)."-".substr($valor,5,3);
		return $novo;
	}

	function formataCNPJ($cnpj){
		$cnpj = somenteNumeros($cnpj);
		$tam = strlen($cnpj);
		if ($tam<14){
			for($i=0;$i<(14-$tam);$i++){
				$cnpj = '0'.$cnpj;
			}
		}
		$cnpj = substr($cnpj,0,2).'.'.substr($cnpj,2,3).'.'.substr($cnpj,5,3).'/'.substr($cnpj,8,4).'-'.substr($cnpj,12,2);
		return $cnpj;
	}
	
	function formata_fone($valor){
		$novo = "(".substr($valor,0,2).") ".substr($valor,2,4)."-".substr($valor,6,4);
		return $novo;
	}

	function Maiusculo($valor){
		$novo = strtoupper(strtr($valor ,"áéíóúâêôãõàèìòùç","ÁÉÍÓÚÂÊÔÃÕÀÈÌÒÙÇ"));
		return $novo;
	}

	function Minusculo($valor){
		$novo = strtoupper(strtr($valor ,"ÁÉÍÓÚÂÊÔÃÕÀÈÌÒÙÇ","áéíóúâêôãõàèìòùç"));
		return $novo;
	}
	
	function somenteNumeros($str) {
		return preg_replace("/[^0-9]/", "", $str);
	}
	
	function numero_real_db($valor){
		$novovalor = str_replace('.','',$valor);
		$novovalor = str_replace(',','.',$novovalor);
		return $novovalor;
	}

	function numero_real($valor){
		$novovalor = str_replace('.',',',$valor);
		return $novovalor;
	}
		
	function formata_data($data){
		list($ano,$mes,$dia) = explode("-",$data);
		return $dia."/".$mes."/".$ano;
	}

	function formata_data_db($data){
		list($dia,$mes,$ano) = explode("/",$data);
		return $ano."-".$mes."-".$dia;
	}

	function retorna_mes($mes){
		switch($mes){
			case "01":return "Janeiro";
			case "02":return "Fevereiro";
			case "03":return "Março";
			case "04":return "Abril";
			case "05":return "Maio";
			case "06":return "Junho";
			case "07":return "Julho";
			case "08":return "Agosto";
			case "09":return "Setembro";
			case "10":return "Outubro";
			case "11":return "Novembro";
			case "12":return "Dezembro";
		}
		$dataatual = date("d")." de ".retorna_mes(date("m"))." de ".date("Y");
		return $dataatual;
	}

	function data_extenso(){
		$datax = date("d")." de ".retorna_mes(date("m"))." de ".date("Y");
		return $datax;
	}
	
	function hora(){
		$horaatual = date("H:i:s");
		return $horaatual;
	}
	function enviar_mail($destinatario,$assunto,$mensagem){
		require("includes/mail/class.phpmailer.php");
 
		// conteúdo da mensagem
		//$mensagem = "Testando o envio de email através de aplicações locais";
		 
		// Estrutura HTML da mensagem
		$msg = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">";
		$msg .= "<html>";
		$msg .= "<head></head>";
		$msg .= "<body style=\"background-color:#fff;\" >";
		$msg .= "<strong>MENSAGEM:</strong><br /><br />";
		$msg .= $mensagem;
		$msg .= "</body>";
		$msg .= "</html>";
		 
		// Abaixo começaremos a utilizar o PHPMailer.
		 
		/*
		Aqui criamos uma nova instÃ¢ncia da classe como $mail.
		Todas as características, funções e métodos da classe
		poderão ser acessados através da variável (objeto) $mail.
		*/
		$mail = new PHPMailer(); //
		// Define o método de envio
		$mail->Mailer     = "smtp";
		// Define que a mensagem poderá ter formatação HTML
		$mail->IsHTML(true); //
		// Define que a codificação do conteúdo da mensagem será utf-8
		$mail->CharSet    = "utf-8";
		// Define que os emails enviadas utilizarão SMTP Seguro tls
		$mail->SMTPSecure = "tls";
		// Define que o Host que enviará a mensagem é o Gmail
		$mail->Host       = "smtp.gmail.com";
		//Define a porta utilizada pelo Gmail para o envio autenticado
		$mail->Port       = "587";                  
		// Deine que a mensagem utiliza método de envio autenticado
		$mail->SMTPAuth   = "true";
		// Define o usuário do gmail autenticado responsável pelo envio
		$mail->Username   = "marcos.msf@gmail.com";
		// Define a senha deste usuário citado acima
		$mail->Password   = "";
		// Defina o email e o nome que aparecerá como remetente no cabeçalho
		$mail->From       = "marcos.msf@gmail.com";
		$mail->FromName   = "Marcos";
		// Define o destinatário que receberá a mensagem
		$mail->AddAddress($destinatario);
		//$mail->AddAddress('marcos.msf@gmail.com');
		/*
		Define o email que receberá resposta desta
		mensagem, quando o destinatário responder
		*/
		$mail->AddReplyTo("marcos.msf@gmail.com", $mail->FromName);
		// Assunto da mensagem
		$mail->Subject    = $assunto;
		 
		// Toda a estrutura HTML e corpo da mensagem
		$mail->Body       = $msg;
		 
		// Controle de erro ou sucesso no envio
		if (!$mail->Send())
		{
			$valido = 'NAO';
			//echo "Erro de envio: " . $mail->ErrorInfo;		 
		}
		else{		 
			$valido = 'SIM';
			//	echo "Mensagem enviada com sucesso!";
		}
		return $valido;
	}
?>