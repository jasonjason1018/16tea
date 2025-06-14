(function () {
  $(window).on('resize.vh', function () {
    var vh = window.innerHeight * 0.01;
    $('html').css('--vh', vh + 'px');
  }).trigger('resize.vh');

  // loading
  var imgLoaded = false;
  var bgImgLoaded = false;
  $(window).on('load', function () {
    // 偵測所有 <img> 元素已載入完成
    $('img').imagesLoaded(function () {
      imgLoaded = true;
      allImgLoaded();
    });

    // 偵測所有包含背景圖的元素是否載入完成
    $('body').imagesLoaded({
      background: true
    }, function () {
      bgImgLoaded = true;
      allImgLoaded();
    });
  });
  function allImgLoaded() {
    if (imgLoaded && bgImgLoaded) {
      $(window).trigger('allLoaded');
      setTimeout(function () {
        $('.loading').fadeOut(300, function () {
          $('body').addClass('-loaded');
        });
      }, 300);
    }
  }

  // 判斷是否為手機裝置
  let isMobile = false;
  const userAgent = navigator.userAgent;
  if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(userAgent.substr(0, 4))) {
    isMobile = true;
  }
  if (!isMobile) {
    $('body').addClass('-isPc');
  }
  function getMobileOperatingSystem() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // 檢查是否為 iOS
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return 'iOS';
    }

    // 檢查是否為 Android
    if (/android/i.test(userAgent)) {
      return 'Android';
    }
    return;
  }
  function getPcBrowser() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/Edg/i.test(userAgent)) {
      return 'Edge';
    } else if (/Chrome/i.test(userAgent)) {
      return 'Chrome';
    } else {
      return;
    }
  }

  // 複製
  const url = window.document.location.href;
  var clipboard = new ClipboardJS('[data-copy]', {
    text: function text() {
      return url;
    }
  });
  clipboard.on('success', function () {
    setTimeout(() => {
      $('[data-copy]').attr('disabled', true).find('span').text('複製成功');
    }, 500);
  });
  clipboard.on('error', function () {
    alert('錯誤，請再試一次');
  });
  const os = isMobile ? getMobileOperatingSystem() : getPcBrowser();
  if (os) {
    $('body').addClass(`is-${os}`);
  }
  if (isMobile) {
    // 判斷是否為Chrome 或Safari 瀏覽器
    var result = new UAParser().getBrowser().name;
    if (result.indexOf('Chrome') === -1 && result.indexOf('Safari') === -1) {
      $('body').addClass('-isPopupOpen -wrongBrowser');
      $('[data-popup="browser"]').addClass('-show').find('.-browserText').text('建議使用 Chrome 或 Safari 瀏覽器');
      return;
    }
  } else if (!getPcBrowser()) {
    $('body').addClass('-isPopupOpen -wrongBrowser');
    $('[data-popup="browser"]').addClass('-show').find('.-browserText').text('建議使用 Chrome 或 Edge 瀏覽器');
    return;
  }

  // 選單
  $('[data-burger]').on('click', function (e) {
    e.preventDefault();
    $('body').toggleClass('-menuOpen');
  });

  // popup
  $(document).on('click.closePop', '[data-popup-close]', function (e) {
    e.preventDefault();
    $('body').removeClass('-isPopupOpen');
    $(this).closest('[data-popup]').removeClass('-show');
  });
  $(document).on('click.pop', '[data-popup-btn]', function (e) {
    e.preventDefault();
    $('body').addClass('-isPopupOpen');
    $(`[data-popup="${$(this).data('popupBtn')}"]`).addClass('-show');
  });
  $('[data-scrollbar]').overlayScrollbars({});
})();