<?php
require_once 'config.php';


//    Formlardan gelen requestleri burada topladım...



if (isset($_POST['introUpdate'])) {
    if ($_FILES['img']["size"] > 0) {


        $eskiAd = $introQuery['image'];


        ////resim yükleme scripti
        $uploads_dir = '../assets/img';
        @$tmp_name = $_FILES['img']["tmp_name"];
        @$name = $_FILES['img']["name"];
        $benzersizsayi1 = rand(20000, 55000);
        $benzersizsayi2 = rand(20000, 55000);
        $benzersizad = $benzersizsayi1 . $benzersizsayi2 ;
        $refimgyol = substr($uploads_dir, 3) . "/" . $benzersizad . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


        $id = 1 ;
        $text = safe($_POST['text']);
        $image = $refimgyol;

        $duzenle = $db->prepare("UPDATE intro SET
            text=?,
            image=?
            WHERE id=?");
        $update = $duzenle->execute([
            $text,
            $image,
            $id
        ]);

 

        if ($update) {

            unlink("../$eskiAd");

            Header("Location:../dashboard/intro.php?durum=ok");
        } else {

            Header("Location:../dashboard/intro.php?durum=no");
        }
    } else {

        $text = safe($_POST['text']);

        $duzenle = $db->prepare("UPDATE intro SET
        text=?
        ");
        $update = $duzenle->execute([
            $text
        ]);



        if ($update) {


            Header("Location:../dashboard/intro.php?durum=ok");
        } else {

            Header("Location:../dashboard/intro.php?durum=no");
        }
    }

}

    ////*********************** */





    if (isset($_POST['aboutUpdate'])) {
        if ($_FILES['img']["size"] > 0
        ) {


            $eskiAd = $aboutQuery['image'];


            ////resim yükleme scripti
            $uploads_dir = '../assets/img';
            @$tmp_name = $_FILES['img']["tmp_name"];
            @$name = $_FILES['img']["name"];
            $benzersizsayi1 = rand(20000, 55000);
            $benzersizsayi2 = rand(20000, 55000);
            $benzersizad = $benzersizsayi1 . $benzersizsayi2;
            $refimgyol = substr($uploads_dir, 3) . "/" . $benzersizad . $name;
            @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


            $id = 1;
            $text = safe($_POST['text']);
            $SmallText = safe($_POST['SmallText']);
            $header1 = safe($_POST['header1']);
            $header2 = safe($_POST['header2']);
            $header3 = safe($_POST['header3']);
            $text1 = safe($_POST['text1']);
            $text2 = safe($_POST['text2']);
            $text3 = safe($_POST['text3']);
        
            $image = $refimgyol;

            $duzenle = $db->prepare("UPDATE about SET
            text=?,
            image=?,
            SmallText=?,
            header1=?,
            header2=?,
            header3=?,
            text1=?,
            text2=?,
            text3=?
            WHERE id=?");
            $update = $duzenle->execute([
                $text,
                $image,
                $SmallText,
                $header1,
                $header2,
                $header3,
                $text1,
                $text2,
                $text3,
                $id
            ]);



            if ($update) {

                unlink("../$eskiAd");

                Header("Location:../dashboard/about.php?durum=ok");
            } else {

                Header("Location:../dashboard/about.php?durum=no");
            }
        } else {

            $id = 1;
            $text = safe($_POST['text']);
            $SmallText = safe($_POST['SmallText']);
            $header1 = safe($_POST['header1']);
            $header2 = safe($_POST['header2']);
            $header3 = safe($_POST['header3']);
            $text1 = safe($_POST['text1']);
            $text2 = safe($_POST['text2']);
            $text3 = safe($_POST['text3']);

            $duzenle = $db->prepare("UPDATE about SET
            text=?,
            SmallText=?,
            header1=?,
            header2=?,
            header3=?,
            text1=?,
            text2=?,
            text3=?
        WHERE id=?");

            $update = $duzenle->execute([
                $text,
                $SmallText,
                $header1,
                $header2,
                $header3,
                $text1,
                $text2,
                $text3,
                $id
                ]);



            if ($update) {


                Header("Location:../dashboard/about.php?durum=ok");
            } else {

                Header("Location:../dashboard/about.php?durum=no");
            }
        }
    }


////*********************** */

if (isset($_POST['servicesUpdate'])) {
   


        $id = 1;
        $SmallText = safe($_POST['SmallText']);
        $header1 = safe($_POST['header1']);
        $header2 = safe($_POST['header2']);
        $header3 = safe($_POST['header3']);
        $header4 = safe($_POST['header4']);
        $header5 = safe($_POST['header5']);
        $header6 = safe($_POST['header6']);
        $text1 = safe($_POST['text1']);
        $text2 = safe($_POST['text2']);
        $text3 = safe($_POST['text3']);
        $text4 = safe($_POST['text4']);
        $text5 = safe($_POST['text5']);
        $text6 = safe($_POST['text6']);


        $duzenle = $db->prepare("UPDATE services SET
            SmallText=?,
            header1=?,
            header2=?,
            header3=?,
            header4=?,
            header5=?,
            header6=?,
            text1=?,
            text2=?,
            text3=?,
            text4=?,
            text5=?,
            text6=?
            WHERE id=?");
        $update = $duzenle->execute([
            $SmallText,
            $header1,
            $header2,
            $header3,
            $header4,
            $header5,
            $header6,
            $text1,
            $text2,
            $text3,
            $text4,
            $text5,
            $text6,
            $id
        ]);



        if ($update) {


            Header("Location:../dashboard/services.php?durum=ok");
        } else {

            Header("Location:../dashboard/services.php?durum=no");
        }
     
   
 }




////*********************** */



if (isset($_POST['projectsUpdate'])) {
    if ($_FILES['img']["size"] > 0) {

        ///resim eski yolu

        $id = safe($_GET['id']);

        $query  =    $db->prepare("SELECT * FROM projects WHERE id=? ");
        $query->execute([$id]);
        $project = $query->fetch(PDO::FETCH_ASSOC);
        $eskiAd = $project['image'];


        ////resim yükleme scripti
        $uploads_dir = '../assets/img/portfolio';
        @$tmp_name = $_FILES['img']["tmp_name"];
        @$name = $_FILES['img']["name"];
        $benzersizsayi1 = rand(20000, 55000);
        $benzersizsayi2 = rand(20000, 55000);
        $benzersizad = $benzersizsayi1 . $benzersizsayi2;
        $refimgyol = substr($uploads_dir, 3) . "/" . $benzersizad . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


        $id = safe($_GET['id']);
        $text = safe($_POST['text']);
        $title = safe($_POST['title']);
        $link = safe($_POST['link']);
        $filter = safe($_POST['filter']);
        

        $image = $refimgyol;

        $duzenle = $db->prepare("UPDATE projects SET
            text=?,
            title=?,
            link=?,
            filter=?,
            image=?
            WHERE id=?");
        $update = $duzenle->execute([
            $text,
            $title,
            $link,
            $filter,
            $image,
            $id
        ]);



        if ($update) {

            unlink("../$eskiAd");

            Header("Location:../dashboard/projects.php?durum=ok");
        } else {

            Header("Location:../dashboard/projects.php?durum=no");
        }
    } else {

        $id = safe($_GET['id']);
        $text = safe($_POST['text']);
        $title = safe($_POST['title']);
        $link = safe($_POST['link']);
        $filter = safe($_POST['filter']);

        $duzenle = $db->prepare("UPDATE projects SET
            text=?,
            title=?,
            link=?,
            filter=?
        WHERE id=?");

        $update = $duzenle->execute([
            $text,
            $title,
            $link,
            $filter,
            $id
        ]);



        if ($update) {


            Header("Location:../dashboard/projects.php?durum=ok");
        } else {

            Header("Location:../dashboard/projects.php?durum=no");
        }
    }
}


////*********************** */

if (isset($_POST['projectsStore'])) {
    if ($_FILES['img']["size"] > 0) {

        ///resim eski yolu



        ////resim yükleme scripti
        $uploads_dir = '../assets/img/portfolio';
        @$tmp_name = $_FILES['img']["tmp_name"];
        @$name = $_FILES['img']["name"];
        $benzersizsayi1 = rand(20000, 55000);
        $benzersizsayi2 = rand(20000, 55000);
        $benzersizad = $benzersizsayi1 . $benzersizsayi2;
        $refimgyol = substr($uploads_dir, 3) . "/" . $benzersizad . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


        $text = safe($_POST['text']);
        $title = safe($_POST['title']);
        $link = safe($_POST['link']);
        $filter = safe($_POST['filter']);


        $image = $refimgyol;

        $duzenle = $db->prepare("INSERT INTO projects SET
            text=?,
            title=?,
            link=?,
            filter=?,
            image=?
            ");
        $update = $duzenle->execute([
            $text,
            $title,
            $link,
            $filter,
            $image,
        ]);



        if ($update) {


            Header("Location:../dashboard/projects.php?durum=ok");
        } else {

            Header("Location:../dashboard/projects.php?durum=no");
        }
    } else {

        $text = safe($_POST['text']);
        $title = safe($_POST['title']);
        $link = safe($_POST['link']);
        $filter = safe($_POST['filter']);

        $duzenle = $db->prepare("INSERT INTO projects SET
            text=?,
            title=?,
            link=?,
            filter=?
        ");

        $update = $duzenle->execute([
            $text,
            $title,
            $link,
            $filter,
        ]);



        if ($update) {


            Header("Location:../dashboard/projects.php?durum=ok");
        } else {

            Header("Location:../dashboard/projects.php?durum=no");
        }
    }
}


////*********************** */

if (isset($_GET['projectsDelete'])) {


    $id = safe($_GET['id']);


    $query  =    $db->prepare("SELECT * FROM projects WHERE id=? ");
    $query->execute([$id]);
    $project = $query->fetch(PDO::FETCH_ASSOC);
    $eskiAd = $project['image'];

    
        $sil = $db->prepare("DELETE from projects where id=?");
        $kontrol = $sil->execute([$id]);


     

    if ($kontrol) {

        unlink("../$eskiAd");

        Header("Location:../dashboard/projects.php?durum=ok");
    } else {

        Header("Location:../dashboard/projects.php?durum=no");
    }
}


////*********************** */

////*********************** */

if (isset($_POST['clientsStore'])) {
    if ($_FILES['img']["size"] > 0) {

        ///resim eski yolu



        ////resim yükleme scripti
        $uploads_dir = '../assets/img/clients';
        @$tmp_name = $_FILES['img']["tmp_name"];
        @$name = $_FILES['img']["name"];
        $benzersizsayi1 = rand(20000, 55000);
        $benzersizsayi2 = rand(20000, 55000);
        $benzersizad = $benzersizsayi1 . $benzersizsayi2;
        $refimgyol = substr($uploads_dir, 3) . "/" . $benzersizad . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


        $alt = safe($_POST['alt']);

        $image = $refimgyol;

        $duzenle = $db->prepare("INSERT INTO clients SET
            alt=?,
            image=?
            ");
        $update = $duzenle->execute([
            $alt,
            $image
        ]);



        if ($update) {


            Header("Location:../dashboard/clients.php?durum=ok");
        } else {

            Header("Location:../dashboard/clients.php?durum=no");
        }
    } else {

        $alt = safe($_POST['alt']);

        $duzenle = $db->prepare("INSERT INTO projects SET
            alt=?,
        ");

        $update = $duzenle->execute([
            $alt
        ]);



        if ($update) {


            Header("Location:../dashboard/clients.php?durum=ok");
        } else {

            Header("Location:../dashboard/clients.php?durum=no");
        }
    }
}


////*********************** */
////*********************** */

if (isset($_GET['clientsDelete'])) {


    $id = safe($_GET['id']);


    $query  =    $db->prepare("SELECT * FROM clients WHERE id=? ");
    $query->execute([$id]);
    $project = $query->fetch(PDO::FETCH_ASSOC);
    $eskiAd = $project['image'];


    $sil = $db->prepare("DELETE from clients where id=?");
    $kontrol = $sil->execute([$id]);




    if ($kontrol) {

        unlink("../$eskiAd");

        Header("Location:../dashboard/clients.php?durum=ok");
    } else {

        Header("Location:../dashboard/clients.php?durum=no");
    }
}

////*********************** */
////*********************** */

if (isset($_GET['messagesDelete'])) {


    $id = safe($_GET['id']);

    $sil = $db->prepare("DELETE from messages where id=?");
    $kontrol = $sil->execute([$id]);




    if ($kontrol) {


        Header("Location:../dashboard/messages.php?durum=ok");
    } else {

        Header("Location:../dashboard/messages.php?durum=no");
    }
}



////*********************** */
if (isset($_POST['settingsUpdate'])) {
    if ($_FILES['img']["size"] > 0) {


        $eskiAd = $settingsQuery['image'];


        ////resim yükleme scripti
        $uploads_dir = '../assets/img';
        @$tmp_name = $_FILES['img']["tmp_name"];
        @$name = $_FILES['img']["name"];
        $benzersizsayi1 = rand(20000, 55000);
        $benzersizsayi2 = rand(20000, 55000);
        $benzersizad = $benzersizsayi1 . $benzersizsayi2;
        $refimgyol = substr($uploads_dir, 3) . "/" . $benzersizad . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


        $id = 1;
        $sitename = safe($_POST['sitename']);
        $mail = safe($_POST['mail']);
        $phone = safe($_POST['phone']);
        $address = safe($_POST['address']);
        $smtphost = safe($_POST['smtphost']);
        $smtpuser = safe($_POST['smtpuser']);
        $smtppassword = safe($_POST['smtppassword']);
        $smtpport = safe($_POST['smtpport']);
        $facebook = safe($_POST['facebook']);
        $twitter = safe($_POST['twitter']);
        $instagram = safe($_POST['instagram']);
        $youtube = safe($_POST['youtube']);
        $durum = safe($_POST['durum']);

        $image = $refimgyol;

        $duzenle = $db->prepare("UPDATE settings SET
            sitename=?,
            mail=?,
            phone=?,
            address=?,
            smtphost=?,
            smtpuser=?,
            smtppassword=?,
            smtpport=?,
            facebook=?,
            twitter=?,
            instagram=?,
            youtube=?,
            durum=?,
            sitelogo=?
            WHERE id=?");
        $update = $duzenle->execute([
            $sitename,
            $mail,
            $phone,
            $address,
            $smtphost,
            $smtpuser,
            $smtppassword,
            $smtpport,
            $facebook,
            $twitter,
            $instagram,
            $youtube,
            $durum,
            $image,
            $id
        ]);



        if ($update) {

            unlink("../$eskiAd");

            Header("Location:../dashboard/settings.php?durum=ok");
        } else {

            Header("Location:../dashboard/settings.php?durum=no");
        }
    } else {

        $sitename = safe($_POST['sitename']);
        $mail = safe($_POST['mail']);
        $phone = safe($_POST['phone']);
        $address = safe($_POST['address']);
        $smtphost = safe($_POST['smtphost']);
        $smtpuser = safe($_POST['smtpuser']);
        $smtppassword = safe($_POST['smtppassword']);
        $smtpport = safe($_POST['smtpport']);
        $facebook = safe($_POST['facebook']);
        $twitter = safe($_POST['twitter']);
        $instagram = safe($_POST['instagram']);
        $youtube = safe($_POST['youtube']);
        $durum = safe($_POST['durum']);

        $duzenle = $db->prepare("UPDATE settings SET
            sitename=?,
            mail=?,
            phone=?,
            address=?,
            smtphost=?,
            smtpuser=?,
            smtppassword=?,
            smtpport=?,
            facebook=?,
            twitter=?,
            instagram=?,
            youtube=?,
            durum=?
        ");
        $update = $duzenle->execute([$sitename,
            $mail,
            $phone,
            $address,
            $smtphost,
            $smtpuser,
            $smtppassword,
            $smtpport,
            $facebook,
            $twitter,
            $instagram,
            $youtube,
            $durum,
        ]);



        if ($update) {


            Header("Location:../dashboard/settings.php?durum=ok");
        } else {

            Header("Location:../dashboard/settings.php?durum=no");
        }
    }
}

////*********************** */
////*********************** */

// if (isset($_POST['messages'])) {
    

//         $name = safe($_POST['name']);
//         $mail = safe($_POST['mail']);
//         $title = safe($_POST['title']);
//         $text = safe($_POST['text']);

//         $duzenle = $db->prepare("INSERT INTO messages SET
//             name=?,
//             mail=?,
//             title=?,
//             text=?
//         ");

//         $update = $duzenle->execute([
//             $name,
//             $mail,
//             $title,
//             $text,
//         ]);



//         if ($update) {


//             Header("Location:../index.php?durum=ok");
//         } else {

//             Header("Location:../index.php?durum=no");
//         }
    
// }


?>
