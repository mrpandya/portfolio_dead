<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sub=$_POST['subject'];
        $msg=$_POST['message'];
        $to ="mrpandya2017@gmail.com";
        $subject="$name has sent an email";
        $message="
            <html>
                <body>
                    <table style='width:600px;'>
                        <tbody>
                            <tr>
                                <td style='width:150px;'><strong>NAME:</strong></td>
                                <td style='width:400px;'>$name</td>                                
                            </tr>
                            <tr>
                                <td style='width:150px;'><strong>EMAIL:</strong></td>
                                <td style='width:400px;'>$email</td>                                
                            </tr>
                            <tr>
                                <td style='width:150px;'><strong>SUBJECT:</strong></td>
                                <td style='width:400px;'>$sub</td>                                
                            </tr>
                            <tr>
                                <td style='width:150px;'><strong>MESSAGE:</strong></td>
                                <td style='width:400px;'>$msg</td>                                
                            </tr>
                        </tbody>
                    </table>
                </body>
            </html>
        ";
        $headers="MIME=Version: 1.0" . "\r\n";
        $headers .="Content-type:text/html:charset=UTF-8" . "\r\n"; 
        $headers .='From : admin <mrpandya2017@gmail.com>' . "\r\n";
        $headers .='Cc : manan.rp@somaiya.edu' . "\r\n";
        if(mail($to,$subject,$message,$headers)){
            echo"
               <script>
                alert('mail has been  sent successfully')
                </script>  
            ";
        }
        else{
            echo"
            <script>
             alert('mail failed')
             </script>  
         ";
        }

    }
?>