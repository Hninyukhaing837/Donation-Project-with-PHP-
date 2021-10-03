<?php include 'template/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 m-auto">
                <div class="form-test border border-success  rounded p-4">
                    <?php
//                       print_r($_POST);
                    $d_title_error = 0;
                    $d_title_error_stmt = "";
                    $d_title = "";

                    $d_description_error = 0;
                    $d_description_error_stmt = "";
                    $d_description = "";

                    $d_owner_error = 0;
                    $d_owner_error_stmt = "";
                    $d_owner= "";

                    $d_donate_money_error = 0;
                    $d_donate_money_error_stmt = "";
                    $d_donate_money= "";

                    $d_file_error = 0;
                    $d_file_error_stmt = "";
                    $d_file = "";

                    if(isset($_POST["post"])) {
                        if (empty($_POST['d_title'])) {
                            $d_title_error = 1;
                            $d_title_error_stmt = "Title is empty.";
                        } else {
                            $d_title = $_POST["d_title"];
                            if (!preg_match("/^[a-zA-Z ]*$/", $d_title)) {
                                $d_title_error = 1;
                                $d_title_error_stmt = "Only allow Characters and Space.";
                                $d_title = "";
                            } else {
                                $d_title = $_POST["userName"];
                            }
                        }

                        if (empty($_POST['d_description'])) {
                            $d_description_error = 1;
                            $d_description_error_stmt = "Description is empty.";
                        } else {
                            $d_description = $_POST["d_description"];
                        }

                        if (empty($_POST['d_owner'])) {
                            $d_owner_error = 1;
                            $d_owner_error_stmt = "Name is empty.";
                        } else {
                            $d_owner = $_POST["d_owner"];
                            if (!preg_match("/^[a-zA-Z ]*$/", $d_owner)) {
                                $d_owner_error = 1;
                                $d_owner_error_stmt = "Only allow Characters and Space.";
                                $d_owner = "";
                            } else {
                                $d_owner = $_POST["d_owner"];
                            }
                        }

                        if (empty($_POST['d_donate_money'])) {
                            $d_donate_money_error = 1;
                            $d_donate_money_stmt = "Money amount is empty.";
                        } else {
                            $d_donate_money = $_POST["d_donate_money"];
                            if (!preg_match("/^[$0-9KsS ]*$/", $d_donate_money)) {
                                $d_donate_money_error = 1;
                                $d_donate_money_error_stmt = "Only allow Characters and Space.";
                                $d_donate_money = "";
                            } else {
                                $d_donate_money = $_POST["d_donate_money"];
                            }
                        }

                    }
                    ?>

                    <form action="add_fun.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="text-uppercase font-weight-bold ">Title</label>
                            <input type="text" name="d_title" class="form-control  <?php echo $d_title_error?'is-invalid':''; ?>" value="<?php echo $d_title?$d_title:''; ?>">
                            <?php
                            if($d_title_error){
                                echo "<small class='form-text font-weight-bold text-uppercase text-danger'> $d_title_error_stmt </small>";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase font-weight-bold ">Description</label>
                            <textarea  class="form-control" name="d_description" <?php echo $d_description_error?'is-invalid':''; ?>" value="<?php echo $d_description?$d_description:''; ?>"></textarea>
                            <?php
                            if($d_description_error){
                                echo "<small class='form-text font-weight-bold text-uppercase text-danger'> $d_description_error_stmt </small>";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase font-weight-bold ">Post owner's Name</label>
                            <input type="text" name="d_owner" class="form-control  <?php echo $d_owner_error?'is-invalid':''; ?>" value="<?php echo $d_owner?$d_owner:''; ?>">
                            <?php
                            if($d_owner_error){
                                echo "<small class='form-text font-weight-bold text-uppercase text-danger'> $d_owner_error_stmt </small>";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase font-weight-bold ">Donate Money</label>
                            <input type="text" name="d_donate_money" class="form-control  <?php echo $d_donate_money_error?'is-invalid':''; ?>" value="<?php echo $d_donate_money?$d_donate_money:''; ?>">
                            <?php
                            if($d_donate_money_error){
                                echo "<small class='form-text font-weight-bold text-uppercase text-danger'> $d_donate_money_error_stmt </small>";
                            }
                            ?>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary w-100" type="submit" name="post" value="post">Post</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>