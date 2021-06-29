// dom loaded
document.addEventListener("DOMContentLoaded", function(event) {

  // mobile menu
  // ---------------------------------------------------------------------------
  var MENU = {

    init: function() {
      var trigger = document.querySelector('.js-mobile-trigger');
      var menu = document.querySelector('.js-mobile-menu');

      trigger.addEventListener('click', function() {
        trigger.classList.toggle('open');
        menu.classList.toggle('open');
      });

    }

  }

  MENU.init();

  // collapsing element
  // ---------------------------------------------------------------------------
  var COLLAPSE = {

    init: function() {
      var collapseContainer = document.querySelectorAll('[data-collapse-container]');

      if( !collapseContainer ) return;

      for( var i = 0; i < collapseContainer.length; i++ ) {
        COLLAPSE.setup(collapseContainer[i]);
      }

    },

    setup: function(ele) {
      var trigger = ele.querySelector('[data-collapse-trigger]');
      var collapse = ele.querySelector('[data-collapse-collapse]');

      trigger.addEventListener('click', function(o) {
        COLLAPSE.open(this, collapse);
      });

      trigger.addEventListener('keyup', function(e) {

        if( e.keyCode == 13 ) {
          COLLAPSE.open(this, collapse);
        }

      });

    },

    open: function(ele1, ele2) {
      ele1.classList.toggle('open');
      ele2.classList.toggle('open');
    }

  }

  COLLAPSE.init();

});
