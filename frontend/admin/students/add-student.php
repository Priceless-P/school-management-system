<?php
require_once "../partials/header.php";
require_once "../partials/navbar.php";
require_once "../partials/sidebar.php";
?>
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <?php if (isset($_SESSION['message'])){
                echo $_SESSION['message'];
                }
                ?>
				<div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add new Student</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="/../../../functions/addStudent.php">

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" >Full Name</label>
                                                <input type="text" class="form-control" name="full-name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" >Username</label>
                                                <input type="text" class="form-control" name="username">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name='email'>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Temporary Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        <!--    <div class="mb-3 col-md-6">-->
                                        <!--        <label>City</label>-->
                                        <!--        <input type="text" class="form-control">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="row">-->
                                        <!--    <div class="mb-3 col-md-4">-->
                                        <!--        <label class="form-label">State</label>-->
                                        <!--        <select id="inputState" class="default-select form-control wide">-->
                                        <!--            <option selected>Choose...</option>-->
                                        <!--            <option>Option 1</option>-->
                                        <!--            <option>Option 2</option>-->
                                        <!--            <option>Option 3</option>-->
                                        <!--        </select>-->
                                        <!--    </div>-->
                                        <!--    <div class="mb-3 col-md-2">-->
                                        <!--        <label class="form-label">Zip</label>-->
                                        <!--        <input type="text" class="form-control">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="mb-3">-->
                                        <!--    <div class="form-check">-->
                                        <!--        <input class="form-check-input" type="checkbox">-->
                                        <!--        <label class="form-check-label">-->
                                        <!--            Check me out-->
                                        <!--        </label>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
<?php
require_once "../partials/footer.php";
require_once "../partials/scripts.php";
?>
