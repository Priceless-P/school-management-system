<?php
require_once "../partials/header.php";
require_once "../partials/navbar.php";
require_once "../../../functions/createClass.php";
?>
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Class</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form  method="POST" action ="../../../functions/createClass.php" class="form-valide-with-icon needs-validation" novalidate>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Class name</label>
                                            <div class="input-group">
												<span class="input-group-text">  </span>
                                                <input type="text" name="name" class="form-control" id="validationCustomUsername" placeholder="Enter a username.." required>
												<div class="invalid-feedback">
													Enter class Name
												  </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="dlab-password">Class Details *</label>
                                            <div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                <textarea name="details" class="form-control" id="dlab-password" required></textarea>
												<span class="input-group-text show-pass"> 
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
                                                <div class="invalid-feedback">
													Please Enter details.
												</div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-light">cencel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
require_once "../partials/footer.php";
require_once "../partials/scripts.php";
?>
