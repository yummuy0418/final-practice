 $(".menu-sp").click(function () {
      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({
        height: "100%",
        overflow: "hidden"
      });
      $(".menu-sp").addClass("is-active");
      $(".nav-sp").addClass("is-active");
    })

    $(".close").click(function () {
      if ($("body").css("overflow") === "hidden") {

        // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
        $("body").css({
          height: "",
          overflow: ""
        });

      }
      $(".menu-sp").removeClass("is-active");
      $(".nav-sp").removeClass("is-active");
    })

    // #page-topをクリックした際の設定
    $('#top-page').click(function () {
      $('body,html').animate({
        scrollTop: 0 //ページトップまでスクロール
      }, 700); //ページトップスクロールの速さ。数字が大きいほど遅くなる
      return false; //リンク自体の無効化
    });



    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $('#top-page').fadeIn();
      } else {
        $('#top-page').fadeOut();
      };
    });
    $(window).scroll(function () {
      const scrollAmount = $(window).scrollTop();
      const windowHeight = $(window).height();
      $('section').each(function () {
        const position = $(this).offset().top;
        if (scrollAmount > position - windowHeight + 100) {
          console.log('click');
          $(this).addClass('fade-in');
        }
      });
    });
