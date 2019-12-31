<?php
header("Content-type: text/html; charset=utf-8"); 
require './mailer/PHPMailerAutoload.php';
require_once('./mailer/class.phpmailer.php');
require_once("./mailer/class.smtp.php");
$mail  = new PHPMailer();

$mail->CharSet    ="UTF-8";                 //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
$mail->IsSMTP();                            // 设定使用SMTP服务
$mail->SMTPAuth   = true;                   // 启用 SMTP 验证功能
$mail->SMTPSecure = "ssl";                  // 启用SSL
$mail->SMTPDebug = 0;
$mail->Host       = "smtp.163.com";       // SMTP 服务器
$mail->Port       = 465;                    // SMTP服务器的端口号
$mail->Username   = "18813967628@163.com";  // SMTP服务器用户名
$mail->Password   = "首字符大写";        // SMTP服务器密码

$mail->SetFrom('18813967628@163.com', '小小1');    // 设置发件人地址和名称
$mail->AddReplyTo("18813967628@163.com","毛毛"); // 设置邮件回复人地址和名称
$mail->Subject    = '小小2';                     // 设置邮件标题
$mail->AltBody    = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";// 可选项，向下兼容考虑
$mail->MsgHTML('<html>hello</html>');                         // 设置邮件内容
$mail->AddAddress('18813967628@163.com', "1748616485@163.com");
//$mail->AddAttachment("images/phpmailer.gif"); // 附件
//exit;
if(!$mail->Send()) {
    echo "发送失败：" . $mail->ErrorInfo;
} else {
    echo "恭喜，邮件发送成功！";
}

?>
