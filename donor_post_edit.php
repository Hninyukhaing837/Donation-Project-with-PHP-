<?php include 'template/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 pt-5 m-auto">
            <?php
            if(isset($_GET['donorId'])) {
            $id = $_GET['donorId'];
            $con = mysqli_connect("localhost", "root", "", "donation");
            $sql = "SELECT * FROM donor WHERE d_id='$id'";
            $query = mysqli_query($con, $sql);
            $data = mysqli_fetch_assoc($query);
                echo "<pre>";
//                print_r($data);
                echo "</pre>";
            }
            ?>

            <div class="form-test border border-primary rounded p-4">
                <form action="donor_edit_fun.php?donorId=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label class="text-uppercase font-weight-bold ">title</label>
                        <input type="text" name="d_title" value="<?php echo $data['d_title']; ?>" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase font-weight-bold ">Post Owner's Name</label>
                        <input type="text" name="d_owner" value="<?php echo $data['d_owner']; ?>" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase font-weight-bold ">Donate Money</label>
                        <input type="text" name="d_donate_money" value="<?php echo $data['d_donate_money']; ?>"
                               class="form-control ">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100" type="submit" name="post" value="post">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

