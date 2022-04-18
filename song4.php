<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>G-Strum</title>
        <link rel="icon" type="image/x-icon" href="assets/guitar.png" />
      
        <link href="css/styles.css" rel="stylesheet" />

<style>
body {
    background: #cfccd1;}

.navcolor{
  background-color: #13001a;}

.navtext{
 font-family: "Courier New", monospace;
 font-size: 18pt;
 font-weight: 700;}

 .navtextsong{
 font-family: "Courier New", monospace;
 font-size: 14pt;
 font-weight: 500;}

 }

</style>


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navcolor fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand navtext" href="#page-top"> G-Strum </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <style>
                    .topnav {
                      overflow: hidden;
                      background-color: #2a1930;
                      font-family: "Courier New", monospace;
                      font-weight: 600;
                    }

                    .topnav a {
                      float: left;
                      color: #f2f2f2;
                      text-align: center;
                      padding: 14px 16px;
                      text-decoration: none;
                      font-size: 17px;
                    }

                    .topnav a:hover {
                      background-color: #D3D3D3;
                      color: black;
                    }

                    .topnav a.active {
                      background-color:#CF9FFF;
                      color: black;
                    }

                </style>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto topnav">
                        <li class="nav-item"><a class="topnav" href="index.php">Synesthesia</a></li>
                        <li class="nav-item"><a class="topnav" href="song2.php">&nbsp;&nbsp;Binibini&nbsp;&nbsp;</a></li>
                        <li class="nav-item"><a class="topnav" href="song3.php">&nbsp; &nbsp; 214 &nbsp; &nbsp;&nbsp;</a></li>
                         <li class="nav-item"><a class="topnav active" href="song4.php">&nbsp; &nbsp;Buwan&nbsp; &nbsp;</a></li>
                          <li class="nav-item"><a class="topnav" href="song5.php">&nbsp; &nbsp;&nbsp; 14 &nbsp; &nbsp; </a></li>
                    </ul>
                </div>
            </div>
        </nav>



        <style>
            .bgdes{
                font-style: italic;
                font-size: 16pt;}
            .head1{
                padding-top: 6rem;
                padding-bottom: 1.5rem;}
            .section{
                margin-top: -4rem;
            }
            

            
        </style>
        <!-- Header-->
        <header class=" bg-dark bg-gradient text-white head1">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to G-Strum</h1>
                <p class="bgdes">Where you let your fingers strum for your guitar to sing. </p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center section">

                        <style >
                            .ly{
                            color: darkgreen;
                            line-height: normal;
                            font-family:"Lucida Console", monospace;
                            font-weight: 600;
                            font-size: 14pt;
                            }

                            .chords{
                            color: dimgray;
                            line-height: 0.1;
                            font-family:"Lucida Console", monospace;
                            font-weight: 300;
                            font-size: 10pt;
                            }


                            .lyrics{
                            color: black;
                            line-height: 0.1;
                            font-family:"Lucida Console", monospace;
                            font-weight: 300;
                            font-size: 12pt;}

                            .title{
                            color: #2F4F4F;
                            line-height:0.5;
                            font-family:"Courier New", monospace;
                            font-weight: 600;
                            font-size: 34pt;
                            }

                            .author{
                            color: #000066;
                            font-family:"Monaco", monospace;
                            font-weight: 400;
                            font-size: 18pt;
                            font-style: italic;
                            }                            
                        </style>
                        
                        <?php

                        echo "<h2 class='title'>Buwan</h2>";
                        echo "<p class='author'>Juan Karlos Labajo</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Intro</p>";
                        echo "<p class='chords'> Am Em Em</p>";
                        echo "<p class='chords'> Am Em Am</p>";
                        echo "<p class='chords'> Am C</p>";
                        echo "<br/>"; 
                        


                        echo "<p class='ly'>Verse 1</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;C&nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Ako'y sayo ikaw ay akin</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Ganda mo sa paningin</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;G7&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C D7</p>";
                        echo "<p class='lyrics'> Ako ngayo'y nag-iisa</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;G G7</p>";
                        echo "<p class='lyrics'> Sana ay tabihan na</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Chorus</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;D7</p>";
                        echo "<p class='lyrics'> Sa ilalim ng puting ilaw</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;C&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Pakinggan mo ang aking sigaw</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<br/>";


                        echo "<p class='ly'> Verse 2</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;D7</p>";
                        echo "<p class='lyrics'> Ayokong mabuhay ng malungkot</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Ikaw ang nagpapasaya</p>";
                        echo "<p class='chords'> G7&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;D7</p>";
                        echo "<p class='lyrics'> At makakasama hanggang sa pagtanda</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G G7</p>";
                        echo "<p class='lyrics'> Halina't tayo'y humiga</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Chorus</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;D7</p>";
                        echo "<p class='lyrics'> Sa ilalim ng puting ilaw</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;C&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Pakinggan mo ang aking sigaw</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Guitar Solo </p>";
                        echo "<p class='chords'> C D G Em</p>";
                        echo "<p class='chords'> C D G G7</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Bridge </p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;D7&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;G&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Em7</p>";
                        echo "<p class='lyrics'> Ang iyong ganda'y umaabot sa buwan</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;C&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;D7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Em7</p>";
                        echo "<p class='lyrics'> Ang tibok ng puso'y rinig sa kalawakan</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D</p>";
                        echo "<p class='lyrics'> At bumabalik dito sa akin</p>";
                        echo "<p class='chords'> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;G&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Ikaw ang mahal, ikaw lang ang mamahalin</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Pakinggan ang puso't damdamin</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;G7</p>";
                        echo "<p class='lyrics'> Damdamin aking damdamin</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Chorus</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;D7</p>";
                        echo "<p class='lyrics'> Sa ilalim ng puting ilaw</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;C&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Pakinggan mo ang aking sigaw</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<br/>";
                        echo "<p class='chords'> C&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Ta Taaaaa</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> Sa ilalim ng puting ilaw</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;G Em7</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;G&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;D7</p>";
                        echo "<p class='lyrics'> Pakinggan mo ang aking sigaw</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G Em7</p>";
                        echo "<p class='lyrics'> Sa dilaw na buwan</p>";
                        echo "<p class='chords'> G&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;C&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> La Laaaa ohhh</p>";
                        echo "<p class='chords'> D&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> La Laaaa</p>";
                        echo "<br/>";

                       

                       
                        ?>


                    </div>
                </div>
            </div>
        </section>
<style>
.bgfooter{
    background-color: darkslateblue;
    padding-top: 3%;
    padding-bottom: 3%;
}
}
</style>
        <footer class="bgfooter">
            <div><p class="m-0 text-center text-white">Copyright &copy; 2022. Dindin Pastrana de Belen</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
