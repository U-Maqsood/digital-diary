$(document).ready(function(){

    // Subscription page
        // 
    $('.subs-plan-1').click(function(){
        
        $('.subs-collapse-1').toggle(500);
    });
    $('.subs-plan-2').click(function(){
        
        $('.subs-collapse-2').toggle(500);
    });
    $('.subs-plan-3').click(function(){
        
        $('.subs-collapse-3').toggle(500);
    });
    
    // New memory page:

    


    $('#formFileMultiple').change(function(){

        let files = $('input[type="file"]')[0].files;
        if(files) {
            let content = '<div class="owl-carousel loaded-carousel owl-theme" id="carousel">';
            for(let i = 0 ; i < files.length ; i++) {

                let src = URL.createObjectURL(files[i]);
                // $('#abc')[0].src = src;
                content += `<div><img class="shadow d-block mx-auto" src="${src}" alt="image" width='300px'></div>`
            //     content += `<div><video width="320" height="240" controls>
            //     <source src="${src}" type="video/mp4">
            //   </video> </div>`
            }

            content += '</div>';
            $('#carousel').html(content);
            $(".loaded-carousel").owlCarousel();
            $(".default-carousel").css('display','none');
        }
        // if (file) {
        //   blah.src = URL.createObjectURL(file)
        // }
    });

    $(".owl-carousel").owlCarousel();
   

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    // $('#formFileMultiple').change(function(){
    //     let formData = new FormData();
    //     let files = $('input[type="file"]')[0].files;
    //     console.log(files.length);
    //     for (let i = 0; i < files.length; i++) {
    //         formData.append('files[]',files[i])
    //     }
    //     // formData.append('files',files[0])
        
    //     $.ajax({
    //         url: '/media_objects',
    //         method: 'POST',
    //         data: formData,
    //         contentType: false,
    //         processData: false,
    //         dataType: 'json',
    //         success: function(){

    //         }
    
    //     });
    // });    
});