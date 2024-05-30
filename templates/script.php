<script>
    if(document.querySelectorAll('.mod_catalogUniversalView') && window.location.search) {
        const form = document.querySelector('.ce_catalogFilterForm');
        const centerLists = document.querySelectorAll('.mod_catalogUniversalView');
        centerLists.forEach(list => {
            list.style.display = "flex";
        });
        setTimeout(function(){
            form.scrollIntoView({behavior: 'smooth'});
        }, 300);
    }

    if(document.querySelector('.loewig-video')) {
      const video = document.querySelector('.loewig-video video');

      video.addEventListener('click', function() {
        console.log('clicked');
        if(video.paused) {
          console.log('paused');
          video.play();
          video.parentElement.parentElement.classList.add('playing');
        } else {
          console.log('playing');
          video.pause();
          video.parentElement.parentElement.classList.remove('playing');
        }
      })
    }

</script>
