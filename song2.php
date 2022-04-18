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
                      background-color: white;
                      color: black;
                    }

                    .topnav a.active {
                      background-color:#CF9FFF;
                      color: black;
                    }

                </style>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto topnav">
                        <li class="nav-item"><a class="topnav" href="index.php">Song1</a></li>
                        <li class="nav-item"><a class="topnav active" href="song2.php">Song2</a></li>
                        <li class="nav-item"><a class="topnav" href="song3.php">Song3</a></li>
                         <li class="nav-item"><a class="topnav" href="song4.php">Song4</a></li>
                          <li class="nav-item"><a class="topnav" href="song5.php">Song5</a></li>
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

                        echo "<h2 class='title'>Binibini</h2>";
                        echo "<p class='author'>Zack Tabudlo</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Verse 1</p>";
                        echo "<p class='chords'> &nbsp;&nbsp; &nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Am7</p>";
                        echo "<p class='lyrics'> Binibini, alam mo ba kung pano nahulog sayo?</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F</p>";
                        echo "<p class='lyrics'> Naramdaman lang bigla ng puso</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gm7&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Am7</p>";
                        echo "<p class='lyrics'> Aking sinta ikaw lang nagparamdam nito</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bbmaj7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bbm6</p>";
                        echo "<p class='lyrics'> Kaya sabihin mo sakin</p>";
                        echo "<br/>";


                        echo "<p class='ly'>Pre-Chorus</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Dm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C &nbsp; &nbsp; &nbsp; &nbsp;Bbmaj7</p>";
                        echo "<p class='lyrics'> Ang tumatakbo sa isip mo</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dm7&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp;&nbsp;Bbm6</p>";
                        echo "<p class='lyrics'> Kung mahal mo na rin ba ako?</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Chorus</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F</p>";
                        echo "<p class='lyrics'> Isayaw mo ako</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Am7</p>";
                        echo "<p class='lyrics'> Sa gitna ng ulan mahal ko</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp;&nbsp;Bbmaj7&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F</p>";
                        echo "<p class='lyrics'> Kapalit man nito'y buhay ko</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Am7</p>";
                        echo "<p class='lyrics'> Gagawin ang lahat para sayo</p>";
                        echo "<p class='chords'> Bbm6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Alam kong mahal mo na rin ako</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Verse 2</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;Am7</p>";
                        echo "<p class='lyrics'> Binibini, sabi mo noon sakin, ayaw mo pa</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F</p>";
                        echo "<p class='lyrics'> Pero ang yakap ngayo'y kakaiba</p>";
                        echo "<p class='chords'> Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Am7&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Hindi ka ba nalilito? Totoo na bang gusto ako?</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;BBm6</p>";
                        echo "<p class='lyrics'> Handang labanan ang puso</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Pre-Chorus</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp; &nbsp; Dm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Bbmaj7</p>";
                        echo "<p class='lyrics'> Alam kong mahal mo na'ko</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Dm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Bbm6</p>";
                        echo "<p class='lyrics'> Kung ganon halika na't wag lumayo</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Chorus</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F</p>";
                        echo "<p class='lyrics'> Isayaw mo ako</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Am7</p>";
                        echo "<p class='lyrics'> Sa gitna ng ulan mahal ko</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp;&nbsp;Bbmaj7&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F</p>";
                        echo "<p class='lyrics'> Kapalit man nito'y buhay ko</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp;&nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Am7</p>";
                        echo "<p class='lyrics'> Gagawin ang lahat para sayo</p>";
                        echo "<p class='chords'> Bbm6&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Alam kong mahal mo na rin ako oh yeah</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Guitar Solo</p>";
                        echo "<p class='chords'> F - Gm7</p>";
                        echo "<p class='chords'> Am7 - BBmaj7</p>";
                        echo "<p class='chords'> F - Gm7</p>";
                        echo "<p class='chords'> Am7 - Bbm6</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Outro</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F</p>";
                        echo "<p class='lyrics'> Isayaw mo ako</p>";
                        echo "<p class='chords'> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Gm7&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Am7</p>";
                        echo "<p class='lyrics'> Sa gitna ng ulan mahal ko</p>";
                        echo "<p class='chords'> &nbsp;&nbsp; &nbsp; &nbsp;Bbma7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;F</p>";
                        echo "<p class='lyrics'> Kapalit man nito'y buhay ko</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp; &nbsp;Gm7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Am7</p>";
                        echo "<p class='lyrics'> Gagawin ang lahat para sayo</p>";
                        echo "<p class='chords'> Bbm6&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Alam kong mahal mo na rin ako</p>";
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
