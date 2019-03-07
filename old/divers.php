<?php foreach ($this->tabImage as $image):
    $typImage=$image->getType();
    $nameImage=$image->getName();
            if($typImage=="nb"):?>
            <a class='images' href="bigImage.php?action=name=<?$nameImage?>" target='blank'>
            <img src="$image->getSource()." alt="$image->getAlt()" ></a>
<?php
            $c1= new ColorPicture ("1c","1532px","img/1c.jpg","bigImage.php","jeune fille en bleu ecrivant sur un mur", "couleur");
$c1->Get();

$c2= new ColorPicture ("2c","1944px","img/2c.jpg","bigImage.php","vieille homme en Chine", "couleur");
$c2->Get();

$c3= new ColorPicture ("3c","2995px","img/3c.jpg","bigImage.php","vieille homme au Maroc", "couleur");
$c3->Get();

$c4= new ColorPicture ("4c","1806px","img/4c.jpg","bigImage.php","femme voilée marchant dans une ruelle", "couleur");
$c4->Get();

$c5= new ColorPicture ("5c","2356px","img/5c.jpg","bigImage.php","enfants courant dans l'eau au Sénégal", "couleur");
$c5->Get();

$c6= new ColorPicture ("6c","2368px","img/6c.jpg","bigImage.php","petite fille en Roumanie", "couleur");
$c6->Get();

$c7= new ColorPicture ("7c","1043px","img/7c.jpg","bigImage.php","petite fille de Turquie", "couleur");
$c7->Get();

$nb1= new ColorPicture ("1nb", "1949px","img/1nb.jpg","bigImage.php","vieil homme","nb");
$nb1->Get();

$nb2= new ColorPicture ("2nb", "2628px","img/2nb.jpg","bigImage.php","troupeau de vaches","nb");
$nb2->Get();

$nb3= new ColorPicture ("3nb", "2448px","img/3nb.jpg","bigImage.php","ronde d'enfants","nb");
$nb3->Get();

$nb4= new ColorPicture ("4nb", "1959px","img/4nb.jpg","bigImage.php","maison en ruine","nb");
$nb4->Get();

$nb5= new ColorPicture ("5nb", "2619px","img/5nb.jpg","bigImage.php","rassemblement d'hommes armés","nb");
$nb5->Get();

$nb6= new ColorPicture ("6nb", "1835px","img/6nb.jpg","bigImage.php","homme assis et armé","nb");
$nb6->Get();

$nb7= new ColorPicture ("7nb", "2666px","img/7nb.jpg","bigImage.php","Enfants assis sur une jeep","nb");
$nb7->Get();

$nb8= new ColorPicture ("8nb", "2846px","img/8nb.jpg","bigImage.php","enfants jouant avec un pneu","nb");
$nb8->Get();

$nb9= new ColorPicture ("9nb", "2526px","img/9nb.jpg","bigImage.php","enfants dans une ruelle","nb");
$nb9->Get();

$nb10= new ColorPicture ("10nb", "2567px","img/10nb.jpg","bigImage.php","hommes regardant un enfant avec un fusil","nb");
$nb10->Get();

$PictureList= new PageImage();
$PictureList->addPicture($c1);
$PictureList->addPicture($c2);
$PictureList->addPicture($c3);
$PictureList->addPicture($c4);$PictureList->addPicture($c5);$PictureList->addPicture($c6);
$PictureList->addPicture($c7);

$PictureList->addPicture($nb1);
$PictureList->addPicture($nb2);
$PictureList->addPicture($nb3);
$PictureList->addPicture($nb4);
$PictureList->addPicture($nb5);
$PictureList->addPicture($nb6);
$PictureList->addPicture($nb7);
$PictureList->addPicture($nb8);
$PictureList->addPicture($nb9);
$PictureList->addPicture($nb10);
 ?>

$PictureList->DisplayPictureListColor();


mainImages.php?action=addContact