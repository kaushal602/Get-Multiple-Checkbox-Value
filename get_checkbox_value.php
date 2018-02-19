$('#mydiv input').click(function(){
    updateTextArea();
});

function updateTextArea() {
    var allVals = [];
    $('#mydiv :checked').each(function () {
        allVals.push($(this).val());
    });
    //$('#txtValue').val(allVals)
    var facility = allVals;
}
