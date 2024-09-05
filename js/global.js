function find_cominfo(a)
{                       
    if (a == "mem") {		// 회원가입,수정
	  window.open("/member/find_cominfo.asp?Sec=mem", "find_cominfo", "resizable=no,x=150,y=50,width=430,height=300,scrollbars=yes");
	}
	else if (a == "app") { // 시험분석신청서
	  window.open("/member/find_cominfo.asp?Sec=app", "find_cominfo", "resizable=no,x=150,y=50,width=430,height=300,scrollbars=yes");
	}
	else if (a == "apr") { // 시험분석신청서 성적서발급업체
	  window.open("/member/find_cominfo.asp?Sec=apr", "find_cominfo", "resizable=no,x=150,y=50,width=430,height=300,scrollbars=yes");
	}
}

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = -600;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);


$OBJ = {
	'win' : $(window),
	'doc' : $(document),
	'html' : $('html')
}

function winW(){//창 너비
	return $OBJ.win.width();
}

function winH(){// 창 높이
	return $OBJ.win.height();
}

function winSh(){// 스크롤 값
	return $OBJ.win.scrollTop();
}

function ajaxLink(href,type,idx){//a:주소, b:type, c:넘길 값
	$.ajax({
		type: type,
		url: href,
		data : idx,
		success : function(data) {
			$('body').find('._pop-ajax').remove().end().append(data).find('._pop-ajax').fadeIn(500);
		}
	});
}

function ajaxClose(a){
	$(a).fadeOut(500,function(){$(this).remove()});
}

var head = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#header');
		var gnb = a.find('.gnb');
		var mnu = a.find('.mnu');

		gnb.on('mouseenter',function(){
			$OBJ.html.addClass('gnbOn');
		}).on('mouseleave',function(){
			$OBJ.html.removeClass('gnbOn');
		}).on('click','> li > a',function(){
			if(winW() <= 1024 && $(this).next('ul').length > 0){
				$(this).closest('li').toggleClass('active').siblings().removeClass('active');
				return false;
			}
		});

		mnu.on('click',function(){
			$OBJ.html.toggleClass('gnbOn');
			$OBJ.html.toggleClass('navOn');
		});
	}
};

var foot = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#footer');
		var fam = a.find('.fam');

		fam.on('click','button',function(){
			$(this).closest('.fam').toggleClass('active');
		});
	}
};


var trend = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#trend');

		var trendSwiper = new Swiper('#trend .swiper-container', {
			loop: true,
			spaceBetween: 55,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			pagination: {
				el: '#trend .page',
				type: 'fraction',
			},
			navigation: {
				nextEl: '#trend .next',
				prevEl: '#trend .prev',
			},
			breakpoints: {
				1024: {
					spaceBetween: 15,
				}
			}
		});

	}
};

var maps = {
	init : function(){
		this.action();
	},
	action : function(){
		var loc = $('#loc');
		var btn = loc.find('a');

		btn.on('mouseenter',function(){
			var i = $(this).index();
			loc.attr('class','loc'+(i+1));
		});

	}
};

var rowHeight = {
	init : function(){
		if($('._row').length > 0){
			this.action();
		}
	},
	action : function(){

		$('._row').matchHeight();
		$OBJ.win.on('load',function(){
			$.fn.matchHeight._update();
		});

	}
}


var site = {
	init : function(){
		this.action();
	},
	action : function(){
		var siteSwiper = new Swiper('#site .swiper-container', {
			loop: true,
			slidesPerView: 4,
			spaceBetween: 10,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: '#site .next',
				prevEl: '#site .prev',
			},
			breakpoints: {
				768: {
					slidesPerView: 3,
				},
				640: {
					slidesPerView: 2,
				}
			}
		});

	}
};


var snb = {
	init : function(){
		if($('#snb').length > 0){
			this.action();
		}
	},
	action : function(){
		var a = $('#snb');
		var ov = a.find('.ov');

		ov.on('click',function(){
			$(this).closest('li').toggleClass('active').siblings().removeClass('active');
		});
	}
};



$OBJ.doc.ready(function(){
	head.init();
	foot.init();
	rowHeight.init();
	snb.init();
});

$OBJ.win.on('load',function(){
	AOS.init({
		duration:1000,
		offset: 20
	});
});


function goSearch(){
	$("form[name=searchform]>input[name=pn]").val(1);
	searchform.submit();
}
function goPage(page){
	$("form[name=searchform]>input[name=pn]").val(page);
	searchform.submit();
}
