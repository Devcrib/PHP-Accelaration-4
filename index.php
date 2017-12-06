<? include 'views/view-stubs/header.php'; ?>

    <section class = "landing">
        <div class="inner-section">
            <h3>Welcome Home!</h3>
        </div>
    </section>

<?php //var_dump($allUsers) ?>

<section class="team" id = "curr_pro">
    <h3 class="animated wow fadeInDown" data-wow-delay=".7s" data-wow-duration="1s">Our Team</h3>
    <div class="underline white"></div>
    <div class="inner-team">

        <?php
            for($i = 0; $i < 4; $i++ ) {
                $currentuser = $allUsers->singleUser($i);
        ?>
        <!--The current production is here-->
        <div class="col-3 animated wow fadeIn" data-wow-delay=".7s" data-wow-duration=".9s">
            <div class="inner-body">
                <div class="content"><img src="<?php echo $currentuser->picture; ?>" alt="<?php echo $currentuser->name; ?>"></div>
                <div class="c-footer"><span><?php echo $currentuser->name; ?></span><a href="view-profile.php">View Profile</a></div>
            </div>
        </div>

        <?php
            };
        ?>

        <div class = "text-center more">
            <a href = "allteams.php" class = "btn btn-view">View More</a>
        </div>
    </div>
</section>


<? include 'views/view-stubs/footer.php'; ?>
