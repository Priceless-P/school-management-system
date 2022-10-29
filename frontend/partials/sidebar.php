<div class="dlabnav">
    <div class="dlabnav-scroll">
        <?php
        if(!isset($_SESSION['admin_id'])){
     redirect('login');
     exit(); ?>
 }
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="schedule.html">schedule</a></li>
                    <li><a href="instructors.html">Instructors</a></li>
                    <li><a href="message.html">Message</a></li>
                    <li><a href="activity.html">Activity</a></li>
                    <li><a href="profile.html">Profile</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-book"></i>

                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="course-details-1.html">Course Details 1</a></li>
                    <li><a href="course-details-2.html">Course Details 2</a></li>

                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>

                    <span class="nav-text">Instructor</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="instructor-dashboard.html">Dashboard</a></li>
                    <li><a href="instructor-courses.html">Courses</a></li>
                    <li><a href="instructor-schedule.html">Schedule</a></li>
                    <li><a href="instructor-students.html">Students</a></li>
                    <li><a href="instructor-resources.html">Resources</a></li>
                    <li><a href="instructor-transactions.html">Transactions</a></li>
                    <li><a href="instructor-liveclass.html">Live class</a></li>

                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-info-circle"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a href="post-details.html">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
                </ul>

</div>
