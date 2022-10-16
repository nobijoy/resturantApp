


var nav = document.querySelector('nav');



    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 1) {
        nav.classList.remove('py-md-4');
        nav.classList.add('bg-dark', 'shadow');
        
        
      } else {
        nav.classList.add('py-md-4');
        nav.classList.remove('bg-dark', 'shadow' );
      }
    });

