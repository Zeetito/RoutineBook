$(document).ready(function(){

 // Hide Session Messages after 5 Seconds

    // Find the popMessage element using jQuery
    var popMessageElement = $('.PopMessage');

    // Hide the popMessage element after 5 seconds (5000 milliseconds)
    setTimeout(function() {
        popMessageElement.slideUp(500);
    }, 5000);

    // Data Tables printable
    $('.datatable_print').DataTable( {
        dom:'Bfrtip',
        buttons: [
            // 'copy', 'pdf','print','excel',
            'print','excel',
        ]

    });

    // Data tables Non printable
    $('.datatable').DataTable( {

    });

    // Modal 
    $('#myModal').on('shown.bs.modal', handleModalShown);
    $('#myModal2').on('shown.bs.modal', handleModalShown);
    $('#myLargeModal').on('shown.bs.modal', handleModalShown);
    function handleModalShown(event) {
        // $('#myModal').modal('show');
        var url = $(event.relatedTarget).data('url');
            
        console.log(url);
        var data;
        var formData = $('#myForm').serialize();
        console.log(formData);

        $.ajax({
            type: "GET",
            url: url,
            data: data,
            cache: false,
            success: function (data) {
                
                // console.log(data);
                $('.modal-content').html(data);
            },
            error: function(err) {
                console.log(err);
            }
            });
        
    };

});