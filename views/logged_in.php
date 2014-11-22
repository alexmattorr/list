<?php include('_header.php'); ?>
<?php 

    $connection = mysqli_connect('localhost', 'root', 'root', 'class');
    if (!$connection) {
        die("Database connection failed: " . mysql_error());
    }

    $user_id = $_SESSION['user_id'];

    $sqlGroups = "SELECT * FROM items WHERE user_id = $user_id";     
    $resultGroups = $connection->query($sqlGroups);
?>


<div class="container">
    <div class="col-md-4"></div>

    <div class="col-md-4">

        <div class="containe text-center">
            <?php
            // if you need the user's information, just put them into the $_SESSION variable and output them here
            echo "Welcome, " . $_SESSION['user_name'] . "!<br />";
            //echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->user_gravatar_image_url . '" />;
            //echo WORDING_PROFILE_PICTURE . '<br/>' . $login->user_gravatar_image_tag;
            ?>
        </div>
        <div>
            <a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
        </div>


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-line-chart"></span> Your grocery basket</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                <?php while ($row = mysqli_fetch_assoc($resultGroups)) { ?>

                    <li class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="<?php  print_r($row['item_id']); ?>"> <?php  print_r($row['name']); ?>
                            </label>
                        </div>
                    </li>

                <?php } ?>
                </ul>
            </div>
            <div class="panel-footer text-center">
                <form class="form-group">
                    <input id="grocery" class="form-control input-sm" name="grocery" placeholder="What do you need?" autocomplete="off" required />
                    <br>
                    <button type="submit" class="btn btn-primary btn-block btn-sm add_item">Add item to cart</button>
                </form>

            </div>
        </div>
    </div>
</div>



<script>

    $('.add_item').on("click", function(e) {
        e.preventDefault();

        var name = $('#grocery').val();

        $.ajax({
          url: '/views/includes/functions.php',
          type: 'POST',
          data: {task: "add_item", name: name},
          success: function(data) {
                $(".list-group").append('<li class="list-group-item"> <div class="checkbox"> <label> <input type="checkbox" value="">' + data + '</label> </div> </li>')
            }
        });
    });



    $('.add_item').on("click", function(e) {
        e.preventDefault();

        var name = $('#grocery').val();

        $.ajax({
          url: '/views/includes/functions.php',
          type: 'POST',
          data: {task: "add_item", name: name},
          success: function(data) {
                $(".list-group").append('<li class="list-group-item"> <div class="checkbox"> <label> <input type="checkbox" value="">' + data + '</label> </div> </li>')
            }
        });
    });

    $( "input[type=checkbox]" ).on( "click", function() {
        console.log($(this).val());
    });
</script>

<style>
    body {
        margin-top: 20px;
    }

    .panel-body:not(.two-col) {
        padding: 0px;
    }

    .glyphicon {
        margin-right: 5px;
    }

    .glyphicon-new-window {
        margin-left: 5px;
    }

    .panel-body .radio, .panel-body .checkbox {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .panel-body .list-group {
        margin-bottom: 0;
    }

    .margin-bottom-none {
        margin-bottom: 0;
    }

    .panel-body .radio label, .panel-body .checkbox label {
        display: block;
    }
</style>



<?php include('_footer.php'); ?>
