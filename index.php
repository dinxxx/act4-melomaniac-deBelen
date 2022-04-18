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
 font-size: 16pt;
 font-weight: 500;}

 .navtextsong{
 font-family: "Courier New", monospace;
 font-size: 14pt;
 font-weight: 500;}

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
                    }

                    .topnav a {
                      float: left;
                      color: #f2f2f2;0
                      text-align: center;
                      padding: 14px 16px;
                      text-decoration: none;
                      font-size: 17px;
                    }

                    .topnav a:hover {
                      background-color: #ddd;
                      color: black;
                    }

                    .topnav a.active {
                      background-color: #04AA6D;
                      color: white;
                    }
                    
                </style>
      
                <div class="topnav">
                    <a class="active" href="index.php">Song1</a>
                    <a href="song2.php">Song2</a>
                    <a href="song3.php">Song3</a>
                    <a href="song4.php">Song4</a>
                    <a href="song5.php">Song5</a>
                </div>
            </div>
        </nav>

        <style>
            .bgdes{
                font-style: italic;
                font-size: 16pt;}
            .head1{
                padding-top: 0rem;
                padding-bottom: 0rem;
            }

            
        </style>
        <!-- Header-->
        <header class=" bg-dark bg-gradient text-white ">
            <div class="container px-4 text-center head1">
                <h1 class="fw-bolder">Welcome to G-Strum</h1>
                <p class="bgdes">Where you let your fingers strum for your guitar to sing. </p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">

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
                            font-size: 26pt;}

                            .author{
                            color: #000066;
                            font-family:"Monaco", monospace;
                            font-weight: 400;
                            font-size: 18pt;
                            font-style: italic;
                            }                            
                        </style>
                        
                        <?php

                        echo "<h2 class='title'>Synesthesia</h2>";
                        echo "<p class='author'>Mayonnaise</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Intro</p>";
                        echo "<p class='chords'>G - D/F# - Em - Cadd9 (4x)</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Verse 1</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> Save your smile</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> Everything fades through time</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> I'm lost for words</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> Endlessly waiting for you</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;Em&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> Stay with me</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> Yes, I know, this can't be</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;Em&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> As morning comes</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> I'll say goodbye to you when I'm done</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Through the sun</p>";
                        echo "<br/>";


                        echo "<p class='ly'>Chorus</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D/F#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Because I'm waiting for you waiting for this</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Dream to come true, just to be with you</p>";
                        echo "<p class='chords'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D/F#&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&Em&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> And if I die, remember these lines</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Cadd9&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G D/F#</p>";
                        echo "<p class='lyrics'> I'm always here, guarding your life</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em D Cadd9</p>";
                        echo "<p class='lyrics'> Guarding your life</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Verse 2</p>";
                        echo "<p class='chords'> Em&nbsp;D&nbsp;&nbsp;Cadd9&nbsp;</p>";
                        echo "<p class='lyrics'> I am yours</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> I'm completely trapped in your soul</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9</p>";
                        echo "<p class='lyrics'> Dazed and confused</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Swept away with your whole world</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> You're my star</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Invincible, haunting and far</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Grace under fire</p>";
                        echo "<p class='chords'> Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Something is deep in my heart</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D</p>";
                        echo "<p class='lyrics'> In my heart</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Chorus</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D/F#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em</p>";
                        echo "<p class='lyrics'> Because I'm waiting for you waiting for this </p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> Dream to come true, just to be with you</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D/F#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em</p>";
                        echo "<p class='lyrics'> And if I die remember these lines</p>";
                        echo "<p class='chords'> Cadd9&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> I'm always here, guarding you</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Bridge</p>";
                        echo "<p class='chords'> Am&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C</p>";
                        echo "<p class='lyrics'> Slowly falling into you</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bm</p>";
                        echo "<p class='lyrics'> I'm obsessed with the fact that I'm with you</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Am&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C</p>";
                        echo "<p class='lyrics'> And I can't breathe without you</p>";
                        echo "<p class='chords'> Cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Ooh, ooh, ooh, ooh, ooh-ooh</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Chorus</p>";
                        echo "<p class='chords'> G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D/F#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em</p>";
                        echo "<p class='lyrics'> I'm waiting for you waiting for this </ >";
                        echo "<p class='chords'> Cadd9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Dream to come true, just to be with you</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D/F#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em</p>";
                        echo "<p class='lyrics'> And if I die remember this line</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadd9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G - D/F# - Em - Cadd9</p>";
                        echo "<p class='lyrics'> I'm always here, guarding your life</p>";
                        echo "<p class='chords'> G D/F# Em Cadd9</p>";
                        echo "<p class='lyrics'> Oh, oh-oh, oh</p>";
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
