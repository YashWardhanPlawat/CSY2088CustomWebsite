<?php
    require "../Utility/Functions.php";

    if (session_status()!= 2){
        session_start();
    }

    $Title = basename(__FILE__, '.php');


    if(isset($_SESSION["currentAccountFreeLancer"])){
        if (isset($_POST['UploadFreelancerImage'])){
            $Query = 'SELECT * FROM freelancer_accounts WHERE Name = :name';
            $QueryValues = ['name' => $_SESSION["currentAccountFreeLancer"]];
            $pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
            $account = queryMysqlDatabase($pdo, $Query, $QueryValues)->fetch();
            $filetype = substr($_FILES['uploadFile']['type'], strrpos($_FILES['uploadFile']['type'], '/')+1);
            if ($_POST['ImageType'] == 'profileImage'){
                $target_file = "../public/images/0_". $account['ID'].".".$filetype;
            }else{
                $target_file = "../public/images/1_". $account['ID'].".".$filetype;
            }

            if(file_exists($target_file)) {
                unlink($target_file);
                echo "replased Image.";
                if(move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
                    echo "The file has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                // Move the uploaded file to the target directory
                if(move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
                    echo "The file has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        require "../templates/nonMain/Head.html.php";
        require "../templates/nonMain/Header.html.php";
        require "../templates/uploadPages/FreelancerImage.html.php";
        require "../templates/nonMain/Footer.html";
    }else{
        header('Location: ../Index.php');
    }
?>