<?php 


print_r($_POST);

    if(isset($_POST['sent']))
    {
       $nom = $_POST['nom'];
       $prenom = $_POST['prenom'];
       $email = $_POST['email'];
       $telephone = $_POST['telephone'];
       $adressse = $_POST['address'];
       $selectedfile = $_POST['selectedfile'];

       if(empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($adressse) || empty($selectedfile))
       {
           header('location:../rejoindre.php?error');
           echo "test1";
       }
       else
       {
           $to = "lasridouae250@gmail.com";

         $m = mail($to,"chihaja","chihajaakhra");
           if($m)
           {
               header("location:../rejoindre.php?success");
               echo "sed9at";
               
           }else{
               echo $m;
               echo "njerbo w safi";
           }
       }
    }
    else
    {
        header("location:../rejoindre.php");
        echo "chihaja";
    }
?>


