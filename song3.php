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
                        <li class="nav-item"><a class="topnav" href="song2.php">Song2</a></li>
                        <li class="nav-item"><a class="topnav active" href="song3.php">Song3</a></li>
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

                        echo "<h2 class='title'>214</h2>";
                        echo "<p class='author'>Rivermaya</p>";
                        echo "<br/>";

                        echo "<p class='ly'>Intro</p>";
                        echo "<p class='chords'> C - D - G - Em - Bm</p>";
                        echo "<p class='chords'> C - G - D - Em - D</p>";
                        echo "<p class='chords'> C - D</p>";
                        echo "<p class='chords'> E - Cmaj7 (2x)</p>";
                        echo "<p class='chords'> E </p>";
                        echo "<br/>"; 
                        


                        echo "<p class='ly'>Verse 1</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Am I real?</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Do the words I speak before you</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bm</p>";
                        echo "<p class='lyrics'> Make you feel, that the love</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> I have for you will see no ending?</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;Am</p>";
                        echo "<p class='lyrics'> Well, if you look into my eyes</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Then you should know</p>";
                        echo "<p class='chords'> &nbsp;Bm</p>";
                        echo "<p class='lyrics'> That there is nothing here to doubt</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E</p>";
                        echo "<p class='lyrics'> Nothing to fear</p>";
                        echo "<p class='chords'> Bm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> And you can lay your questions down</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A</p>";
                        echo "<p class='lyrics'> Cause if you'll hold me</p>";
                        echo "<p class='chords'> Am&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> We can fade into the night, and you'll know</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Chorus</p>";
                        echo "<p class='chords'> G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bm</p>";
                        echo "<p class='lyrics'> The world could die</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> And everything may lie</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D C D</p>";
                        echo "<p class='lyrics'> Still, you shan't cry</p>";
                        echo "<p class='chords'> G&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Em&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Bm</p>";
                        echo "<p class='lyrics'> Cause time may pass</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;C&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> But longer it'll last</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Em&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D</p>";
                        echo "<p class='lyrics'> I'll be by your side</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Interlude</p>";
                        echo "<p class='chords'> E - C - D</p>";
                        echo "<p class='chords'> E - C - D - E</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Verse 2</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;E&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Take my hand</p>";
                        echo "<p class='chords'> &nbsp; Bm&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> And gently close your eyes</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;E</p>";
                        echo "<p class='lyrics'> So you could understand</p>";
                        echo "<p class='chords'> Bm</p>";
                        echo "<p class='lyrics'> That there's no greater love tonight</p>";
                        echo "<p class='chords'> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A</p>";
                        echo "<p class='lyrics'> Than what I've for you</p>";
                        echo "<p class='chords'> Am&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Well, if you feel the same way for me</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;E</p>";
                        echo "<p class='lyrics'> Then let go</p>";
                        echo "<p class='chords'> Bm&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> We can journey to a garden</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E</p>";
                        echo "<p class='lyrics'> No one knows</p>";
                        echo "<p class='chords'> Bm&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Life is short, my darling</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A</p>";
                        echo "<p class='lyrics'> Tell me that you love me</p>";
                        echo "<p class='chords'> Am&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> So we can fade into the night, and you'll know</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Chorus </p>";
                        echo "<p class='chords'> G&nbsp;&nbsp; &nbsp; &nbsp;Em&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Bm</p>";
                        echo "<p class='lyrics'> The world could die</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;C&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D&nbsp;&nbsp; &nbsp;G</p>";
                        echo "<p class='lyrics'> And everything may lie</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Em&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;D C D</p>";
                        echo "<p class='lyrics'> Still, you shan't cry</p>";
                        echo "<p class='chords'> G&nbsp; &nbsp; &nbsp; &nbsp;Em&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Bm&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Cause time may pass</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp;C&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;G</p>";
                        echo "<p class='lyrics'> But longer it'll last</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Em&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D</p>";
                        echo "<p class='lyrics'> I'll be by your side</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;C&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D&nbsp;&nbsp;G&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Forever by your side</p>";
                        echo "<br/>";

                        echo "<p class='ly'> Guitar Solo </p>";
                        echo "<p class='chords'> G - Em - Bm - C - G - Em - D</p>";
                        echo "<p class='chords'> G - Em - Bm - C - G - Em - D</p>";
                        echo "<br/>";

                        echo "<p class='chords'> C&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D&nbsp;&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> I want you to know</p>";
                        echo "<br/>";


                        echo "<p class='ly'> Chorus </p>";
                         echo "<p class='chords'> G&nbsp; &nbsp;&nbsp; &nbsp;Em&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Bm</p>";
                        echo "<p class='lyrics'> The world could die</p>";
                        echo "<p class='chords'> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;C&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D&nbsp; &nbsp; &nbsp;G</p>";
                        echo "<p class='lyrics'> And everything may lie</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Em&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D C D</p>";
                        echo "<p class='lyrics'> Still, you shan't cry</p>";
                        echo "<p class='chords'> G&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Em&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Bm&nbsp;&nbsp;</p>";
                        echo "<p class='lyrics'> Cause time may pass</p>";
                        echo "<p class='chords'> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;C&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;G&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Em&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;D</p>";
                        echo "<p class='lyrics'> And everything won’t last, I’ll be by your side</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp; &nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;G Em Bm</p>";
                        echo "<p class='lyrics'> Forever by your side</p>";
                        echo "<p class='chords'> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;C&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;G Em D</p>";
                        echo "<p class='lyrics'> Forever by your side</p>";
                        echo "<p class='chords'> C&nbsp; &nbsp; &nbsp;D&nbsp;</p>";
                        echo "<p class='lyrics'> So you won't cry</p>";
                        echo "<br/>";

                        echo "<p class='chords'> G - Em - Bm - C - G - Em - D - C</p>";
                        echo "<p class='chords'> G - Em - Bm - C - G - Em - D - C - D </p>";
                        echo "<br/>";

                        echo "<p class='ly'> Outro </p>";
                        echo "<p class='chords'> E - Emaj7 (2x)</p>";
                        echo "<p class='chords'> D - E</p>";
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
