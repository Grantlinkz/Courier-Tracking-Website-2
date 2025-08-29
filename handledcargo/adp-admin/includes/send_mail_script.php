<?php

    function mailClient($name,$bank_name,$bank_address,$withdraw_amt,$country,$routing_no,$account_name,$account_no,$phone_no,$currency,$account_type,$email){
            require '../PHPMailer/PHPMailerAutoload.php';

            $to = "support@specprofit.com";
            $subject = 'Request for withdrawal via bank transfer';
            $msg = "$name with the email address $email is requesting to make withdraw of the amount  $withdraw_amt dollars, with the bank transfer details: Bank Name: $bank_name, Bank Address: $bank_address, Country $country, Routing Number: $routing_no, Client Name:  $name, Account Name:  $account_name, Account Number: $account_no, Client phone number  $phone_no, Type of Currency to recieve withdrawal payment is $currency, and the account type of your client is $account_type";
            $headers = "From: $email";

            $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email';
        $mail->SMTPAuth = true;
        $mail->Username = 'spec05264362_specprofit';
        $mail->Password = 'admin@2022';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('noreply@specprofit.com', 'noreply@specprofit.com');
        $mail->addReplyTo('support@specprofit.com', '');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Header = $headers;
        // $mail->Subject = 'WITHDRAWAL REQUEST APPROVAL';
        $mail->Subject = $subject;
        // $mail->Body =  "Hello $name;!
        $mail->Body =  "Hello $msg;!
                   <br>
                    <h1 style='color: #fff !important; background:  #FF9899; padding: 5px; text-align: center'>SpecProfit</h1>
                    <br>
                    Your request to withdrawal $$withdraw_amt from your $account_type Account with the following accounting details below have been received.
                    <br><br>
                    <p> Bank Name: $bank_name </p>
                    <p> Bank Address: $bank_address </p>
                    <p> Country: $country </p>
                    <p> Routing Number: $routing_no </p>
                    <p> Account Name: $account_name </p>
                    <p> Account Number: $account_no </p>
                    <p> Phone Number: $phone_no </p>
                    <p> Country: $country </p>
                    <p> Account Type: $account_name </p>
                    <p> Amount: $withdraw_amt </p>
                    <br>
                    If you didn't initiate the request please contact us on support@specprofit.com
                    <br>
                    Thank you for Trusting us with your  investment.
                    <br><br>
                    Regards,
                    <br>
                    SpecProfit.com
                    <br>
                    <br>
                    This is an automated response, please do not reply this message.
                     <br>
                    <hr>
                    <br>
                    <p style='text-align: center'>Email: support@specprofit.com</p>
                      
                    <br>";
                
                
        if(!$mail->send()){
            
            // $error=$mail->ErrorInfo;
            // echo $error;
            return "success";
        }  else {
            // echo 'success';
            return "success";
        }               
        
    }


?>