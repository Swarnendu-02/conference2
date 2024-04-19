<div class="left-menu">
    <div class="nav-header">
        <a href="index.html" class="brand-logo">

        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <ul class="metismenu">
        <li>
            <a class=" active" href="index.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="detailed-routine-plan.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Detailed Routine / Plan</span>
            </a>
        </li>
        <li>
            <a href="learning.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Learning</span>
            </a>
        </li>
        <li>
            <a href="daily-practice-paper.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Daily Practice Paper</span>
            </a>
        </li>
        <li>
            <a class="has-arrow">
                <i class="fas fa-file"></i>
                <span class="nav-text">Test Arena</span>
            </a>
            <ul class="sub-ui">
                <li><a href="chapter-wise-test.php">Chapter-wise Test</a></li>
                <li><a href="subject-wise-test.php">Subject-wise Test</a></li>
                <li><a href="#">Full Course Mock Test</a></li>
            </ul>
        </li>
        <li>
            <a href="results.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Result</span>
            </a>
        </li>
        <li>
            <a href="all-india-test-series.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">All India Test Series</span>
            </a>
        </li>
        <li>
            <a href="webinar-schedule.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Webinar - Schedule</span>
            </a>
        </li>
        <li>
            <a href="libraryquestionbank.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Library – Question Bank</span>
            </a>
        </li>
        <li>
            <a href="video-gallery.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Video Gallery</span>
            </a>
        </li>
        <li>
            <a href="important-tips-tricks.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Important Tips & Tricks</span>
            </a>
        </li>
        <li>
            <a href="admission-counseling-support.php">
                <i class="fas fa-file"></i>
                <span class="nav-text">Admission & Counseling Support</span>
            </a>
        </li>
    </ul>
    <div class="copyright">
        <p><strong>NEET-O-METER</strong> © 2022 All Rights Reserved</p>
        <p class="fs-12">Made with <span class="heart"></span> by <a>Encoders</a></p>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.has-arrow').click(function() {
            if ($(this).hasClass("open-sub")) {
                $(".sub-ui").slideUp();
                $(".has-arrow").removeClass("active open-sub");
            } else {
                $(".sub-ui").slideUp();
                $(".has-arrow").removeClass("active open-sub");
                $(this).parent().find(".sub-ui").slideToggle();
                $(this).parent().find(".has-arrow").toggleClass("active open-sub");
            }
        });
    });
</script>