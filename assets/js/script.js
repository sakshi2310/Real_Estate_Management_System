 // pre-loader
//  $(document).ready(function(){
//   setTimeout(function(){
//     $('.pre-loader').fadeOut();
//   },3000);
// });

   // Pre-loader functionality
   $(document).ready(function() {
    setTimeout(function() {
        $('.pre-loader').fadeOut('slow'); // Added 'slow' to smooth the fade out transition
    }, 3000); // 3-second delay before hiding the preloader
});

