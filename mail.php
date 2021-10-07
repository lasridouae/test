
<?php 

    if(isset($_POST['submit']))
    {
       $Nom = $_POST['nom'];
       $Prenom =$_POST['prenom'];
       $Email =$_POST['email'];
       $Subject =$_POST['subject'];
       $Message =$_POST['message'];
      

       if(empty($Nom) || empty($Prenom) || empty($Email) || empty($Subject) || empty($Message))
       {
           header('location:../contact.php?error');
       }
       else
       {
           $to = "lasridouae250@gmail.com";

           if(mail($to,$Subject,$Message))
           {
               header("location:../contact.php?success");
           }
       }
    }
    else
    {
        header("location:../contact.php");
    }
?>

