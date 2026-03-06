<?php
include_once 'header.php';

include "./classes/dbh.classes.php";
include "./classes/profileinfo.classes.php";
include "./classes/profileinfo-view.classes.php";
$profileInfo = new ProfileInfoView();
?>

<section class="profile">
    <div class="profile-bg">
        <div class="wrapper">
            <div class="profile-info">
                <div class="profile-info-img">
                    <p>
                        <?php
                        echo $_SESSION["usersuid"];
                        ?>
                    </p>
                    <div class="break"></div>
                    <a href="profilesettings.php">PROFILE SETTINGS</a>
                </div>
                <div class="profile-info-about">
                    <h3>ABOUT</h3>
                    <p>
                        <?php
                        $profileInfo->fetchAbout($_SESSION["usersid"]);
                        ?>
                    </p>
                    <h3>FOLLOWER</h3>
                    <h3>FOLLOWING</h3>
                </div>
            </div>
            <div class="profile-content">
                <div class="profile-intro">
                    <h3>
                        <?php
                        $profileInfo->fetchTitle($_SESSION["usersid"]);
                        ?>
                    </h3>
                    <p>
                        <?php
                        $profileInfo->fetchText($_SESSION["usersid"]);
                        ?>
                    </p>
                </div>
                <div class="profile-posts">
                    <h3>POSTS</h3>
                    <div class="profile-post">
                        <h2>IT IS A BUSY DAY IN TOWN</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus possimus voluptas iure culpa, adipisci facere id officia, in dolores, inventore odio quo saepe totam? Alias sunt beatae itaque iure quisquam!</p>
                        <p>12:46 09/11/2022</p>
                    </div>
                    <div class="profile-post">
                        <h2>RE-USING ELECTRONICS IS A GOOD IDEA</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus possimus voluptas iure culpa, adipisci facere id officia, in dolores, inventore odio quo saepe totam? Alias sunt beatae itaque iure quisquam!</p>
                        <p>12:46 09/11/2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>