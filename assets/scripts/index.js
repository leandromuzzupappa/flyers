

$(window).on('load', function() {

    $('#nombreEdit').val($('#nombre').html().trim());
    $('#nombreEdit').keyup(function (e) { 
        var nombre = $(this).val();
        $('#nombre').html(nombre);
    });

    $('#telEdit').val($('#tel').html().trim());
    $('#telEdit').keyup(function (e) { 
        var tel = $(this).val();
        $('#tel').html(tel);
    });

    $('#emailEdit').val($('#email').html().trim());
    $('#emailEdit').keyup(function (e) { 
        var email = $(this).val();
        $('#email').html(email);
    });



    
    function abrirFlyer() {
        $('#descargar').css('position', 'fixed');
        $('#mostrar, .overlay').fadeIn(400);
        $('#mostrar').css('left', '50%');
        $('#mostrar').css('overflow', 'scroll');
    }
    function cerrarFlyer() {
        $('#descargar').css('position', 'relative');
        $('#mostrar, .overlay').fadeOut(400);
    
        setTimeout(() => {
            $('#mostrar, .overlay').hide();
        }, 600);
    }
    $('.overlay').click(function() {
        cerrarFlyer();
    })
    function descargarFlyer() {
        html2canvas($("#descargar")[0]).then(function(canvas) {
            
            // Mostrar
            abrirFlyer();
            
            $('#mostrar').html('');
            $("#mostrar").append(canvas);
    
            $('#bajar').attr('href', canvas.toDataURL('image/png'));
            $('#bajar').attr('download', 'Flyer.png');
            $('#bajar')[0].click();
    
            
        });
    }
    $('#descargarBoton').click(()=>{
        window.scrollTo(0,0);
        descargarFlyer();
    })
})