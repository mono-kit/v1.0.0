<div class="wrapper">
    <div class="content">
        <center>
            <img src="assets/images/monokit_logo.png">
        </center>
        <h1 class="title">Welcome to MonoKit</h1>
        <center>
            <p style="width: 50%">
                smart, fast and easy
                <br>
                From: <?= $_GET['from']?>
            </p>
            <button onclick="MonoKit.loadFragment('about_us');">About Us</button>
            <a href="https://github.com/Mono-Kit"><button>Github</button></a>
        </center>
    </div>
</div>

<script>
    <?php include "index.js.php" ?>
</script>