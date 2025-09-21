<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>〖 GENOPALS 〗</title>
    <meta name="description" content="Raise a virtual angel pet in your own web browser.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://file.garden/ZrIPgCGn9kADc89z/Genopals/favicon.png">

    <!-- header -->
    <?= view('components/header') ?>

    <!-- start of landing page -->

    <section id="hero">
        <h1>
            Create and take care of your own virtual angel pet!
        </h1>
        <button class="secondary cta"><a href=""> SIGN UP</a></button>
    </section>


    <section id="section1">
        <div class="container">
            <h2>Choose from 3 diffferent species</h2>

            <div id="features1">


                <div class="feat-item">
                    <div>
                        <img src="https://i.pinimg.com/736x/10/bc/bd/10bcbdc51fdacda178fbf70267e19251.jpg" alt="PET1"
                            height="250" width="90">
                    </div>

                    <div class="stat-container">
                        <h4>Affection:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="affection"></div>
                        </div>
                    </div>
                    <div class="stat-container">
                        <h4>Energy:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="energy"></div>
                        </div>
                    </div>

                    <div class="stat-container">
                        <h4>Hunger:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="hunger"></div>
                        </div>
                    </div>



                </div>



            </div>

    </section>

    <section id="section2">

        <div class="container">
            <h2>Feed, play, and care for your new pet!</h2>
            <img src="" alt="section2 feature" height="100" width="40">
        </div>

    </section>

    <section id="section3">

        <div class="container">
            <h2>Game Features</h2>
            <!-- carousel here -->
        </div>

    </section>

    <section id="section4">

        <h2>Join Us Now!</h2>
        <p> Adopt a virtual pet and raise them with us at Genopals! </p>
        <button class="primary cta"> <a href="/"> SIGN UP </a></button>

    </section>

    </body>

    <!-- footer -->
    <?= view('components/footer') ?>

</html>