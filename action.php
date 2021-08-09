<?php
if(isset($_POST['submit']))
{
    if(isset($_POST['email']) AND isset($_POST['name']) AND isset($_POST['select']) AND isset($_POST['dated']) AND isset($_POST['heured']) AND isset($_POST['datea'])AND isset($_POST['heurea']) AND isset($_POST['phone']) AND isset($_POST['daten']) AND isset($_POST['message1'])AND isset($_POST['message2']))
    {
        if(!empty($_POST['email']) AND !empty($_POST['name']) AND !empty($_POST['select']) AND !empty($_POST['dated']) AND !empty($_POST['heured']) AND !empty($_POST['datea'])AND !empty($_POST['heurea']) AND !empty($_POST['phone']) AND !empty($_POST['daten']) AND !empty($_POST['message1'])AND !empty($_POST['message2']))
        {
            $email=$_POST['email'];
            $name=$_POST['name'];
            $select=$_POST['select'];
            $dated=$_POST['dated'];
            $heured=$_POST['heured'];
            $datea=$_POST['datea'];
            $heurea=$_POST['heurea'];
            $phone=$_POST['phone'];
            $daten=$_POST['daten'];
            $message1=$_POST['message1'];
            $message2=$_POST['message2'];



            echo " Bonjour ";
        }
    }
}



?>