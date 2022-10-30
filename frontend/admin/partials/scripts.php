<script src="../../vendor/global/global.min.js"></script>
<script src="../../vendor/chart.js/Chart.bundle.min.js"></script>
<script src="../../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="../../vendor/apexchart/apexchart.js"></script>

<script src="../../vendor/bootstrap-datetimepicker/js/moment.js"></script>
<script src="../../vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<!-- Chart piety plugin files -->
<script src="../../vendor/day-fullcalendar/main.min.js"></script>
<script src="../../vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="../../js/dashboard/instructor-dashboard.js"></script>

<script src="../../js/custom.js"></script>
<script src="../../js/dlabnav-init.js"></script>
<script src="../../js/demo.js"></script>
<script src="../../js/styleSwitcher.js"></script>
<script>
    $(function () {
        $('#datetimepicker').datetimepicker({
            inline: true,
        });
    });

    $(document).ready(function(){
        $(".booking-calender .fa.fa-clock-o").removeClass(this);
        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
    });
</script>

</body>

</html>
