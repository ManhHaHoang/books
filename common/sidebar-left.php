<?php
$university = [
    ["Toán cao cấp","100"],
    ["Tiếng Anh Toeic","101"]
];
$help = [
    ["Khóa học bổ trợ","102"],
    ["Bồi dưỡng học sinh giỏi", "103"]
];
$universityCheck = [
    ["Luyện thi PEN-C","115"],
    ["Luyện thi PEN-I","116"],
    ["Luyện thi PEN-M","117"],
    ["Luyện thi Đại Học Bách Khoa","118"],
    ["Luyện thi ĐHQG - TP.HCM","119"],
    ["Luyện thi Compa","120"]
];



$courseList = [
    ["Tư duy thời đại số", "104"],
    ["Bồi dưỡng học sinh giỏi", "105"],
    ["Lớp học không khoảng cách", "106"],
    ["Ngữ Văn", "107"],
    ["Tiếng Việt", "108"],
    ["Toán", "109"],
    ["Tiếng Anh", "110"],
    ["Vật Lý", "111"],
    ["Hóa học", "112"],
    ["Sinh học", "113"],
    ["Phương pháp kỹ năng", "114"]
]
?>
<div class="widget">
    <div class="widget-content">
        <div class="widget-title">
            Đại học -  Cao đẳng
        </div>
        <div class="widget-body">
            <ul class="list-training">
                <?php foreach ($university as $value) { ?>
                    <li class="training-item">
                        <a class="training-link" href="#<?= $value[1]?>">
                            <img src="/images/graduated.svg" alt="">
                            <?= $value[0]?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="widget-content">
        <div class="widget-title">
            Bổ trợ & bồi dưỡng HSG
        </div>
        <div class="widget-body">
            <ul class="list-training">
                <?php foreach ($help as $value) { ?>
                    <li class="training-item has-children">
                        <a class="training-link" href="#<?= $value[1]?>">
                            <img src="/images/graduated.svg" alt="">
                            <?= $value[0]?>
                        </a>
                        <ul class="sub-training">
                            <?php foreach ($courseList as $value) { ?>
                                <li class="training-item">
                                    <a class="training-link" href="#<?= $value[1]?>">
                                        <?= $value[0]?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="widget-content">
        <div class="widget-title">
            Bổ trợ & bồi dưỡng HSG
        </div>
        <div class="widget-body">
            <ul class="list-training">
                <?php foreach ($universityCheck as $value) { ?>
                    <li class="training-item has-children">
                        <a class="training-link" href="#<?= $value[1]?>">
                            <img src="/images/graduated.svg" alt="">
                            <?= $value[0]?>
                        </a>
                        <ul class="sub-training">
                            <?php foreach ($courseList as $value) { ?>
                                <li class="training-item has-children">
                                    <a class="training-link" href="#<?= $value[1]?>">
                                        <?= $value[0]?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
