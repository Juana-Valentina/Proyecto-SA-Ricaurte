document.querySelector('form').addEventListener('submit', function (event) {
    var fromDate = document.getElementById('from_date').value;
    var toDate = document.getElementById('to_date').value;

    if (fromDate.trim() === '' || toDate.trim() === '') {
        alert('Por favor, seleccione fechas válidas.');
        event.preventDefault();
    }
});