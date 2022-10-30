<?php
require_once "../partials/header.php";
require_once "../partials/navbar.php";
require_once "../partials/sidebar.php";
require_once "../../../functions/getStudents.php";
?>
<div class="content-body">
            <div class="container-fluid">
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Students</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:50px;">
													<div class="form-check custom-checkbox checkbox-success check-lg me-3">
														<input type="checkbox" class="form-check-input" id="checkAll" required="">
														<label class="form-check-label" for="checkAll"></label>
													</div>
												</th>
                                                <th><strong>#</strong></th>
                                                <th><strong>Full name</strong></th>
                                                <th><strong>Username</strong></th>
                                                <th><strong>Email</strong></th>
                                                
                                                <th><strong></strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($students as $student):?>
                                            <tr>
                                                <td>
													
														<p><?php echo $student->id ?></p>
												</td>
                                                <td><strong>	<p><?php $student->full-name ?></p></strong></td>
                                                <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""/> <span class="w-space-no"><?php echo $student->username ?></span></div></td>
                                                <td>example@example.com	</td>
                                                <td><?php echo $student->email ?></td>
                                                
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
											<?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
<?php
require_once "../partials/footer.php";
require_once "../partials/scripts.php";
?>
