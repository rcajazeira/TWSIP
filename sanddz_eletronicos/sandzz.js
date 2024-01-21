// $(function () {
    
//     $('#userIcon').popover({
//       title: 'Título do Popover',
//       content: 'Texto de sua escolha.',
//       placement: 'bottom',
//       container: 'body',
//       trigger: 'click' 
//     });
//   });


// $(function () {
   
//     $('#userIcon').popover();

  
//     $('#userIcon').on('click', function () {
//       $(this).popover('toggle');
//     });

   
//     $('#userIcon').on('mouseenter', function () {
//       $(this).popover('show');
//     });

    
//     $('#userIcon').on('mouseleave', function () {
//       $(this).popover('hide');
//     });
//   });


$(function () {
    $('.userIcon').popover({
        title: 'Título do Popover',
        content: 'Texto de sua escolha.',
        placement: 'bottom',
        container: 'body',
        trigger: 'click'
    });
});