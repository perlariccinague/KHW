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
</script>
