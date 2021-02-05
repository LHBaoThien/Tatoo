$(document).ready(function () {
  $('.lazy').lazy();
  var controlMenu = function () {
    var elementItem = '.hamburger-menu, html, #main-menu, #header'
    var header = $('#header, #main-menu-mobile')
    header.on('click', '.hamburger-menu', function(e) {
      const ele = e.currentTarget
      if ($(ele).hasClass('is-open-menu')) {
        $(elementItem).removeClass('is-open-menu')
      } else {
        $(elementItem).addClass('is-open-menu')
      }
    })

  }
  controlMenu()
})