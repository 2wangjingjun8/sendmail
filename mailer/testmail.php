<?php

require 'PHPMailerAutoload.php';
require_once('class.phpmailer.php');
require_once("class.smtp.php");
$mail  = new PHPMailer();

$mail->CharSet    ="UTF-8";                 //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
$mail->IsSMTP();                            // 设定使用SMTP服务
$mail->SMTPAuth   = true;                   // 启用 SMTP 验证功能
$mail->SMTPSecure = "ssl";                  // 启用SSL
$mail->SMTPDebug = 2;
$mail->Host       = "smtp.163.com";       // SMTP 服务器
$mail->Port       = 465;                    // SMTP服务器的端口号
$mail->Username   = "18813967628@163.com";  // SMTP服务器用户名
$mail->Password   = "Wjj224488123";        // SMTP服务器密码
$mail->SetFrom('18813967628@163.com', '小小');    // 设置发件人地址和名称
$mail->AddReplyTo("18813967628@163.com","1748616485@qq.com");
                                            // 设置邮件回复人地址和名称
$mail->Subject    = '测试';                     // 设置邮件标题
$mail->AltBody    = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";
                                            // 可选项，向下兼容考虑
$mail->MsgHTML('<html>helo</html>');                         // 设置邮件内容
$mail->AddAddress('18813967628@163.com', "18813967628@163.com");
//$mail->AddAttachment("images/phpmailer.gif"); // 附件
if(!$mail->Send()) {
    echo "发送失败：" . $mail->ErrorInfo;
} else {
    echo "恭喜，邮件发送成功！";
}

?>
