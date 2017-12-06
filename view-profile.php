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
                            <li><i class="fa fa-user"></i> Name:
                                <?= $user->name; ?>
                            </li>
                            <li><i class="fa fa-male"></i> Gender:
                                <?= $user->gender; ?>
                            </li>
                            <li><i class="fa fa-envelope-o"></i> Email:
                                <?= $user->email; ?>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-vp-2">
                <div class="other-content">
                    <h3>More Details About
                        <?= $user->name; ?>
                    </h3>
                    <div class="col-v-1">
                        <div class="about">
                            <h4>About</h4>
                            <span><?= $user->about; ?></span>
                        </div>

                    </div>
                    <div class="col-v-1">
                        <div class="about">
                            <h4>Contact Information</h4>
                            <span>
                            <ul><li><i class = "fa fa-phone"></i> <?= $user->phone; ?></li>
                            <li><i class ="fa fa-envelope"></i> <?= $user->email; ?></li>
                            <!--<li></li>
                            <li></li>-->
                            </ul>
                        </span>


                        </div>
                    </div>
                    <div class="col-v-1">
                        <div class="about">
                            <h4>Work Information</h4>
                            <span>
                            <ul><li><i class = "fa fa-home"></i> : <?= $user->company; ?></li>
                            <li><i class ="fa fa-money"></i> : <?= $user->balance; ?></li>
                            <!--<li></li>
                            <li></li>-->
                            </ul>
                        </span>
                        </div>

                    </div>
                    <div class="col-v-1">
                        <div class="about">
                            <h4>Other Information</h4>
                            <span>
                            <ul><li>Eye Color : <?= $user->eyeColor; ?></li>
                            <li>Favourite Fruit : <?= $user->favoriteFruit; ?></li>
                            <!--<li></li>
                            <li></li>-->
                            </ul>
                            <ul>
                                <li>Message: <?= $user->greeting; ?></li>
                            </ul>
                        </span>
                        </div>

                    </div>
                    <div class="col-v-1">
                        <div class="about">
                            <h4>Mutual Friends</h4>
                            <span>
                           Mutual fiends
                        </span>
                        </div>

                    </div>
                    <div class="col-v-1">
                        <div class="about">
                            <h4>Tags</h4>
                            <span>
                           <ul><li>1. <?//= //$user->tags; ?></li></ul>
                        </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include 'views/view-stubs/footer.php'; ?>
