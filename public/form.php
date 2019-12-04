<?php include("templates/head.php"); ?>
<?php include("templates/navbar.php"); ?>

<div class="container">
    
    
    <div class="columns">
        <div class="column">
        </div>
        <div class="column is-8">
        <?php 

            if ($_SERVER['QUERY_STRING'] != "") {
                echo "<article class='message is-danger'><div class='message-header'><p>";
                echo implode(" ", explode("_", $_SERVER['QUERY_STRING']));
                echo "</p><button class='delete' aria-label='delete'></button></div>";
                echo "<div class='message-body'>Try again.</div></article>";
            }

        ?>
            <div class="box">
            <form method="post" action="login.php">
                <div class="field has-addons">
                    <p class="control">
                        <a class="button is-dark">
                            <i class="fal fa-user"></i> &nbsp; Username
                        </a>
                    </p>
                    <p class="control is-expanded">
                        <input class="input" type="text" name="username" placeholder="username">
                    </p>
                </div>

                <div class="field has-addons">
                    <p class="control">
                        <a class="button is-dark">
                            <i class="fal fa-unlock-alt"></i> &nbsp; Password
                        </a>
                    </p>
                    <p class="control is-expanded">
                        <input class="input" type="password" name="password" placeholder="password">
                    </p>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-primary">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancel</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="column">
        </div>
    </div>
</div>
<?php include("templates/foot.php"); ?>