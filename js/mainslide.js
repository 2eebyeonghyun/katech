$(document).ready(function() {
        /* *********************** 메인 비주얼 ************************ */
    
        // 메인 비주얼 슬라이드
        var $mainVisualItem = $(".main-visual-con");
        var visualPausePlay = true; // Pause, play 사용시 변경

        $mainVisualItem.on('init', function(event, slick, currentSlide) {
            $(".main-visual-item").eq(0).addClass("active-item first");
            if ($.exists('.main-visual-conuter')) {
                $(".main-visual-conuter .total-num").text("0" + slick.slideCount);
            }
        });
        $mainVisualItem.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            $(".main-visual-item").removeClass("active-item");
            $(".main-visual-item").eq(0).removeClass("first");
            $(this).find(".main-visual-item").eq(nextSlide).addClass("active-item");
            if ($.exists('.main-visual-conuter')) {
                $(".main-visual-conuter .cur-num").text("0" + (nextSlide + 1));
            }
        });

        // 메인 비주얼 슬라이드
        $mainVisualItem.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            dots: false,
            autoplay: true,
            speed: 1000,
            infinite: true,
            autoplaySpeed: 1000,
            easing: 'easeInOutQuint',
            pauseOnHover: false,
            zIndex: 1,
            appendArrows: '.main-visual-arrow-counter',
        });


        // 일시정지, 재생버튼 사용시
        if (visualPausePlay) {
            $(".main-visual-control").children().append("<span class='slick-control-btns'><button class='slick-pause-btn' title='일시정지'><i class='xi-pause'></i></button><button class='slick-play-btn' title='재생'><i class='xi-play'></i></button></span>");

            $(document).on("click", ".slick-pause-btn", function() {
                $mainVisualItem.slick("slickPause");
                $(this).hide();
                $(".slick-play-btn").show();
            });
            $(document).on("click", ".slick-play-btn", function() {
                $mainVisualItem.slick("slickPlay");
                $(this).hide();
                $(".slick-pause-btn").show();
            });
        }
    });