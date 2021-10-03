<?php include 'template/header.php'; ?>
<div class="container">
    <div class="row">

        <?php
        $con = mysqli_connect("localhost", "root", "", "donation");
        $sql = "SELECT * FROM donor";
        $query = mysqli_query($con, $sql);
        $row = mysqli_num_rows($query);
        if ($row) {
            while ($data = mysqli_fetch_assoc($query)) {
                ?>
                <div class="col-12 col-md-6 ">
                    <div class="card">
                        <h5 class="card-text m-auto text-primary pt-3"><?php
                            echo $data["d_title"];
                            ?>
                        </h5>
                        <hr class="">
                        <div class="card-body">
                            <p class="card-title" style="text-indent: 10%;"><?php echo $data["d_description"];?></p>
                            <p class="card-text" style="text-indent: 25%;">
                                Donor's Name:
                                "<?php echo $data["d_owner"]; ?>".<br></p>
                            <p class="card-text" style="text-indent: 10%;">
                                I would like to donate
                                "<?php echo $data["d_donate_money"]; ?>
                                ".
                            </p>
                            <div class="mx-4" style="display: inline; ">
                            <a href="donor_post_edit.php?donorId=<?php echo $data["d_id"];?>" class="btn btn-outline-success  " style="width: 200px;">Edit</a>
                            <a onclick="return confirm('Are you sure to delete....')" href="donor_post_delete.php?donorId=<?php echo $data["d_id"]; ?>" class="btn btn-danger" style="width: 200px;"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>

    </div>
</div>

