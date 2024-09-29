// Counter
$(document).ready(function() {
    $('.counter').each(function () {
      var $this = $(this);
      var countTo = $this.text().replace(/\D/g, ''); // Extract numeric value (removes non-numeric characters like +)
      
      $this.prop('Counter', 0).animate({
        Counter: countTo
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          var displayNumber = Math.ceil(now);
          if ($this.text().includes('+')) {
            $this.text(displayNumber + '+'); // Append '+' only if it was originally present
          } else {
            $this.text(displayNumber); // No '+' for others
          }
        }
      });
    });
  });
  
  