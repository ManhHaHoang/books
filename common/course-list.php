<?php
$course = [
    ["demo.png", "Phần Đại số tuyến tính - thầy Lê Bá Trần Phương", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Phần Giải tích 1 - Thầy Lê Bá Trần Phương", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Phần Giải tích 2 - Thầy Lê Bá Trần Phương", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Lý thuyết Xác suất và Thống kê toán - Thầy Nguyễn Thành Nam", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Luyện thi Toeic 450+ (Cô Hương Fiona)", "/khoa-hoc", "600000", "365", "Cô Hương Fiona", "javascript:;"],
    ["demo.png","PEN-M Ngữ văn - Thầy Phạm Hữu Cường", "/khoa-hoc", "600000", "365", "Cô Hương Fiona", "javascript:;"],
    ["demo.png", "Phần Đại số tuyến tính - thầy Lê Bá Trần Phương", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Phần Giải tích 1 - Thầy Lê Bá Trần Phương", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Phần Giải tích 2 - Thầy Lê Bá Trần Phương", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Lý thuyết Xác suất và Thống kê toán - Thầy Nguyễn Thành Nam", "/khoa-hoc", "500000", "120", "Thầy Lê Bá Trần Phương", "javascript:;"],
    ["demo.png","Luyện thi Toeic 450+ (Cô Hương Fiona)", "/khoa-hoc", "600000", "365", "Cô Hương Fiona", "javascript:;"],
    ["demo.png","PEN-M Ngữ văn - Thầy Phạm Hữu Cường", "/khoa-hoc", "600000", "365", "Cô Hương Fiona", "javascript:;"],
]
?>
<div class="category-subtitle">
    <img src="/images/guarantee.svg" alt="">Lorem ipsum dolor sit amet
</div>
<div class="list-course-box">
    <?php foreach ($course as $key => $value) {
        if ($key < 9) { ?>
            <div class="course-item">
                <a class="course-link-category" href="<?= $value[2] ?>">
                    <img src="/images/<?= $value[0] ?>" alt="">
                </a>
                <div class="course-title-category">
                    <?= $value[1] ?>
                </div>
                <div class="course-category-info">
                    <div class="course-row flex-box">
                        <span>Học phí khóa học:</span>
                        <span class="course-info"><?= number_format($value[3], 0, ",", ".") . '₫' ?></span>
                    </div>
                    <div class="course-row flex-box">
                        <span>Thời gian học:</span>
                        <span class="course-info"><?= $value[4] ?> ngày</span>
                    </div>
                    <div class="course-row flex-box">
                        <span>Giáo viên:</span>
                        <a class="course-info" href="<?= $value[6] ?>">
                            <?= $value[5] ?>
                        </a>
                    </div>
                    <a class="course-button-category" href="<?= $value[2] ?>">
                        Chi tiết khóa học
                    </a>
                </div>
            </div>
        <?php }
        ?>
    <?php }?>
</div>
<div class="pagination-box ">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"> <i class="icon-chevrons-right"></i> </a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item "><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#"> <i class="icon-chevrons-right"></i> </a></li>
    </ul>
</div>
