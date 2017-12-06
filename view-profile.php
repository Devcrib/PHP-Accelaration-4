<? include 'views/view-stubs/header.php'; ?>
    <section class = "view-profile">
        <div class = "inner-profile">
        <?php $user = $allUsers->singleUser($_GET['id']); ?>
            <div class="sidebar">
                <div class="profile-pic">
                <img src="<?= $user->picture ?>" alt="<?= $user->name ?>">
                </div>
                <div class="info">
                    <ul>
                        <li>Name: <?= $user->name; ?></li>
                        <li>Age: <?= $user->age; ?></li>
                        <li>Gender: <?= $user->gender; ?></li>
                        <li>Email: <?= $user->email; ?></li>
                    </ul>
                </div>
            </div>
            <div class = "content">

            </div>
        </div>
      <!--  <div class="body">
            <div class="sidebar">

                <div class="profile-pic"></div>

                <div class="info">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>

                    </ul>

                </div>
            </div>
            <div class="bodies">

                <div class="basic-info"></div>
                <div class="basic-info"></div>
                <div class="basic-info"></div>
                <div class="friends">

                    <div class="friend"></div>
                    <div class="friend"></div>
                    <div class="friend"></div>
                    <div class="friend"></div>

                </div>


            </div>
        </div>-->
    </section>
<? include 'views/view-stubs/footer.php'; ?>
