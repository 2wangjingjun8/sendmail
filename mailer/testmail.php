<?php

require 'PHPMailerAutoload.php';
require_once('class.phpmailer.php');
require_once("class.smtp.php");
$mail  = new PHPMailer();

$mail->CharSet    ="UTF-8";                 //�趨�ʼ����룬Ĭ��ISO-8859-1����������Ĵ����������Ϊ UTF-8
$mail->IsSMTP();                            // �趨ʹ��SMTP����
$mail->SMTPAuth   = true;                   // ���� SMTP ��֤����
$mail->SMTPSecure = "ssl";                  // ����SSL
$mail->SMTPDebug = 2;
$mail->Host       = "smtp.163.com";       // SMTP ������
$mail->Port       = 465;                    // SMTP�������Ķ˿ں�
$mail->Username   = "18813967628@163.com";  // SMTP�������û���
$mail->Password   = "Wjj224488123";        // SMTP����������
$mail->SetFrom('18813967628@163.com', 'СС');    // ���÷����˵�ַ������
$mail->AddReplyTo("18813967628@163.com","1748616485@qq.com");
                                            // �����ʼ��ظ��˵�ַ������
$mail->Subject    = '����';                     // �����ʼ�����
$mail->AltBody    = "Ϊ�˲鿴���ʼ������л���֧�� HTML ���ʼ��ͻ���";
                                            // ��ѡ����¼��ݿ���
$mail->MsgHTML('<html>helo</html>');                         // �����ʼ�����
$mail->AddAddress('18813967628@163.com', "18813967628@163.com");
//$mail->AddAttachment("images/phpmailer.gif"); // ����
if(!$mail->Send()) {
    echo "����ʧ�ܣ�" . $mail->ErrorInfo;
} else {
    echo "��ϲ���ʼ����ͳɹ���";
}

?>
