$ = jQuery;
function domReady(){
    
    function queryUpdate(event = null){
        var fecha = $('#fechaFiltro').val();
        var hora = $('#horaFiltro').val();
        var id_paciente = $('#pacienteFiltro').val();
        
        var q = 'q='+id_paciente+'_'+fecha+'_'+hora;
        
        var searchArr = location.search.split('&');
        searchArr[1] = q;        
        location.search = searchArr.join('&');
    }
    $('#fechaFiltro').change(queryUpdate);
    $('#horaFiltro').change(queryUpdate);
    $('#pacienteFiltro').change(queryUpdate);
}
$(domReady);