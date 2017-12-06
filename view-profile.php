<?php include 'views/view-stubs/header.php'; ?>
<?php $user = $allUsers->singleUser($_GET['id']); ?>
<section class="view-profile">
    <div class="inner-profile">
        <div class="col-vp-12">
            <div class="col-vp-1">
                <div class="sidebar">
                    <div class="profile-pic">
                        <img src="<?= $user->picture ?>" alt="<?= $user->name ?>">
                    </div>
                    <div class="basic-info">
                        <h3>Basic Info</h3>
                        <ul>
                            <li><i class="fa fa-user"></i> Name: <?= $user->name; ?></li>
                            <li><i class="fa fa-male"></i> Gender: <?= $user->gender; ?></li>
                            <li><i class = "fa fa-envelope-o"></i> Email: <?= $user->email; ?></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-vp-2">
                <div class = "other-content">
                   <h3>More Details About <?= $user->name; ?></h3>
                    <div class = "col-v-1">
                       <div class = "about">
                           <h4>About</h4>
                        <span><?= $user->about; ?></span>
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include 'views/view-stubs/footer.php'; ?>
