<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div class="ft_wrap">
        <div id="ft_wr">
            <div id="ft_link">
                <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>
                <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            </div>
            <div id="ft_company" class="ft_cnt">
                <h2>고객센터 1599-9186 (평일 오전 9시 ~ 오후 6시)</h2>
                    <ul>
                    <li>대표이사 사장 김대환</li>
                    <li>서울 중구 세종대로 67</li>
                    <li>대표전화 1588-8700</li>
                    <li>사업자등록번호 202-81-45602</li>
                </ul>
                <ul>
                    <li>통신판매업 신고번호 2009-서울중구-1449</li>
                    <li>monimo@samsung.com</li>
                </ul>
                </div>
            </div>
            <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
        <div id="ft_copy">(주)삼성카드 &copy; SAMSUNG CARD CO., LTD. All rights reserved.</div>
    </div>
    
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");