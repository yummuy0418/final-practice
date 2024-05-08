jQuery(".menu-sp").click(function () {
      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      jQuery("body").css({
        height: "100%",
        overflow: "hidden"
      });
      jQuery(".menu-sp").addClass("is-active");
      jQuery(".nav-sp").addClass("is-active");
    })

    jQuery(".close").click(function () {
      if (jQuery("body").css("overflow") === "hidden") {

        // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
        jQuery("body").css({
          height: "",
          overflow: ""
        });

      }
      jQuery(".menu-sp").removeClass("is-active");
      jQuery(".nav-sp").removeClass("is-active");
    })

    // #page-topをクリックした際の設定
    jQuery('#top-page').click(function () {
      jQuery('body,html').animate({
        scrollTop: 0 //ページトップまでスクロール
      }, 1500); //ページトップスクロールの速さ。数字が大きいほど遅くなる
      return false; //リンク自体の無効化
    });



    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 300) {
        console.log
        jQuery('#top-page').fadeIn();
      } else {
        jQuery('#top-page').fadeOut();
      };
    });
    
    jQuery(window).scroll(function () {	
      const scrollAmount = jQuery(window).scrollTop();	
      const windowHeight = jQuery(window).height();	
      jQuery('.fade-in').each(function () {	
          const position = jQuery(this).offset().top;	
          if (scrollAmount > position - windowHeight + 100) {	
              jQuery(this).addClass('is-visible');	
              console.log('ok');
          }	
      });	
  });
