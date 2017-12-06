<? include 'views/view-stubs/header.php'; ?>
<section class="team all" id = "curr_pro">
    <h3 class="animated wow fadeInDown" data-wow-delay=".7s" data-wow-duration="1s">Our Team</h3>
    <div class="underline white"></div>
    <div class="inner-team">
    <?php
            for($i = 0; $i < 500; $i++ ) {
                $currentuser = $allUsers->singleUser($i);
        ?>
        <!--The current production is here-->
        
        <div class="col-3 animated wow fadeIn" data-wow-delay=".7s" data-wow-duration=".9s">
            <div class="inner-body">
                <div class="content"><img src="<?= $currentuser->picture ?>" alt="<?= $currentuser->name ?>"></div>
                <div class="c-footer"><span><?= $currentuser->name; ?></span><a href="view-profile.php?id=<?= $currentuser->index; ?>">read more</a></div>
            </div>
        </div>
       
        <?php
            };
        ?>
    </div>
</section>
<footer>
    <div class="container">
        <h3>Made With <span class="love">&hearts; </span> From Planet Nest</h3>
    </div>
</footer>

</body>
</html>