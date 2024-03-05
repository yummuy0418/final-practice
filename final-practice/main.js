$("#menu-sp").click(function () {
  // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
  $("body").css({ height: "100%", overflow: "hidden" });
  $("#menu-sp").addClass("is-active");
  $("#nav-sp").addClass("is-active");
})

$("#close").click(function () {
  if ($("body").css("overflow") === "hidden") {

    // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
    $("body").css({ height: "", overflow: "" });

  }
  $("#menu-sp").removeClass("is-active");
  $("#nav-sp").removeClass("is-active");
})


