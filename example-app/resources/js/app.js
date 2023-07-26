import './bootstrap';
document.getElementById('selected_date').addEventListener('change', function() {
    const myLink = document.getElementById('myLink');
    myLink.href = document.URL + "/" + this.value +"/lessons";
});
