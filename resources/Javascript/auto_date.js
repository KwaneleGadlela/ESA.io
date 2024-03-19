// Set current date for date fields
var dateFields = document.querySelectorAll('.date-field');
dateFields.forEach(function(dateField) {
     dateField.valueAsDate = new Date();
});