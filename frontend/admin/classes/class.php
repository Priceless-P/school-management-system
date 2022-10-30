<?php
require_once "../partials/header.php";
require_once "../partials/navbar.php";
require_once "../partials/sidebar.php";
require_once "../../../functions/getClass.php";
?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-xxl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="course-content d-flex justify-content-between flex-wrap">
                            <div>
                                <h3><?php echo $class->name ?>></h3>

                            </div>
                            <div class="mt-2">
                                <svg width="20" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5 3.35248H18.3825V2.625C18.3825 2.00999 17.88 1.5 17.2575 1.5C16.635 1.5 16.1325 2.00999 16.1325 2.625V3.35248H13.125V2.625C13.125 2.00999 12.6225 1.5 12 1.5C11.3775 1.5 10.875 2.00999 10.875 2.625V3.35248H7.86749V2.625C7.86749 2.00999 7.36501 1.5 6.74249 1.5C6.11998 1.5 5.61749 2.00999 5.61749 2.625V3.35248H4.5C2.22748 3.35248 0.375 5.19749 0.375 7.47748V18.375C0.375 20.6475 2.22748 22.5 4.5 22.5H19.5C21.7725 22.5 23.625 20.6475 23.625 18.375V7.47748C23.625 5.19749 21.7725 3.35248 19.5 3.35248ZM21.375 8.715H2.625V7.47748C2.625 6.44248 3.465 5.60248 4.5 5.60248H5.61749V6.285C5.61749 6.90747 6.11998 7.41 6.74249 7.41C7.36501 7.41 7.86749 6.90747 7.86749 6.285V5.60248H10.875V6.285C10.875 6.90747 11.3775 7.41 12 7.41C12.6225 7.41 13.125 6.90747 13.125 6.285V5.60248H16.1325V6.285C16.1325 6.90747 16.635 7.41 17.2575 7.41C17.88 7.41 18.3825 6.90747 18.3825 6.285V5.60248H19.5C20.535 5.60248 21.375 6.44248 21.375 7.47748V8.715Z"
                                          fill="#c7c7c7"/>
                                </svg>

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.0005 5.25H6.00049C5.6028 5.25045 5.22154 5.40864 4.94033 5.68984C4.65912 5.97105 4.50094 6.35231 4.50049 6.75V21C4.50049 21.1378 4.53846 21.2729 4.61023 21.3906C4.682 21.5082 4.7848 21.6038 4.90733 21.6669C5.02986 21.7299 5.1674 21.758 5.30485 21.748C5.44229 21.738 5.57433 21.6904 5.68646 21.6103L10.4998 18.1717L15.3146 21.6103C15.4267 21.6904 15.5588 21.7381 15.6962 21.748C15.8336 21.758 15.9712 21.7299 16.0937 21.6669C16.2162 21.6038 16.319 21.5082 16.3908 21.3906C16.4625 21.2729 16.5005 21.1378 16.5005 21V6.75C16.5 6.35231 16.3419 5.97105 16.0606 5.68984C15.7794 5.40864 15.3982 5.25045 15.0005 5.25Z"
                                          fill="#c7c7c7"/>
                                    <path d="M18.0005 2.25H8.25049C8.05158 2.25 7.86081 2.32902 7.72016 2.46967C7.57951 2.61032 7.50049 2.80109 7.50049 3C7.50049 3.19891 7.57951 3.38968 7.72016 3.53033C7.86081 3.67098 8.05158 3.75 8.25049 3.75H18.0005V18C18.0005 18.1989 18.0795 18.3897 18.2202 18.5303C18.3608 18.671 18.5516 18.75 18.7505 18.75C18.9494 18.75 19.1402 18.671 19.2808 18.5303C19.4215 18.3897 19.5005 18.1989 19.5005 18V3.75C19.5 3.35231 19.3419 2.97105 19.0606 2.68984C18.7794 2.40864 18.3982 2.25045 18.0005 2.25Z"
                                          fill="#c7c7c7"/>
                                </svg>

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.7001 14.1C18.5001 14 18.2001 14 18.0001 14C16.8001 14 15.7001 14.5 14.9001 15.5L9.80011 13.2C10.0001 12.5 10.0001 11.7 9.80011 10.9L14.9001 8.6C16.3001 10.3 18.8001 10.5 20.5001 9.1C22.2001 7.7 22.4001 5.2 21.0001 3.5C19.6001 1.8 17.1001 1.6 15.4001 3C14.5001 3.7 14.0001 4.8 14.0001 6C14.0001 6.2 14.0001 6.5 14.1001 6.7L8.80011 9.1C7.20011 7.6 4.70011 7.6 3.10011 9.2C1.60011 10.8 1.60011 13.3 3.20011 14.9C4.80011 16.4 7.20011 16.4 8.80011 14.9L14.1001 17.3C13.7001 19.5 15.1001 21.6 17.3001 21.9C19.5001 22.3 21.6001 20.9 21.9001 18.7C22.3001 16.5 20.9001 14.5 18.7001 14.1Z"
                                          fill="#c7c7c7"/>
                                </svg>

                            </div>
                        </div>
                        <div class="video-img style-1">
                            <div class="view-demo">
                                <img src="../../images/courses/video-img.jpg" alt="">
                                <div class="play-button text-center">
                                    <a href="https://www.youtube.com/watch?v=e6MhFghdQps" class="popup-youtube">
                                        <svg width="96" height="96" viewBox="0 0 72 72" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M16.6154 0C7.41046 0 0 7.41043 0 16.6154V55.3846C0 64.5896 7.41046 72 16.6154 72H55.3846C64.5895 72 72 64.5896 72 55.3846V16.6154C72 7.41043 64.5895 0 55.3846 0H16.6154ZM26.259 19.3846C26.5876 19.3728 26.9098 19.4783 27.1677 19.6821L46.5523 34.9129C47.2551 35.4672 47.2551 36.5328 46.5523 37.0871C40.0921 42.1633 33.6278 47.2366 27.1677 52.3125C26.2575 53.034 24.9168 52.3814 24.9231 51.22V20.7692C24.9226 20.0233 25.5135 19.4141 26.259 19.3846Z"
                                                  fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-tab style-2 mt-4">
                            <nav>
                                <div class="nav nav-tabs tab-auto" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-about-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-about" type="button" role="tab"
                                            aria-controls="nav-about" aria-selected="true">About
                                    </button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-about" role="tabpanel"
                                     aria-labelledby="nav-about-tab">
                                    <div class="about-content">
                                        <h4>About This class</h4>
                                        <p><?php echo $class->details; ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-xxl-5 col-lg-3">
                <div class="card border-0 pb-0">
                    <div class="card-header border-0 pb-0">

                    </div>
                    <div class="card-body">

                        <ul class="timeline">
                            <div>
                                <h4 class="card-title">Teachers in this class</h4>
                                <div class="timeline-panel">
                                    <div class="media me-2">

                                    </div>
                                    <?php foreach ($teachers as $student):?>
                                    <li class="media-body">
                                        <h5 class="mb-1"><p><?php echo $teacher->full_name; ?> <small class="text-muted">
                                        </h5>
                                        <a href="#" class="btn btn-outline-danger btn-xxs">Remove from class</a>
                                    </li>
                                    <? endforeach; ?>
                                </div>

                            <div>
                                <h4 class="card-title">Students in this class</h4>
                                <div class="timeline-panel">
                                    <div class="media me-2">

                                    </div>
                                    <?php foreach ($students as $student):?>
                                    <li class="media-body">
                                        <h5 class="mb-1"><p>L<?php echo $student->full_name; ?> <small class="text-muted">29 July 2020</small></h5>


                                        <a href="#" class="btn btn-outline-danger btn-xxs">Remove from class</a>
                                    </li>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            </div>

                        </ul>
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
