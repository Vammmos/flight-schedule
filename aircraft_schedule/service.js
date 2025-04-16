function validateForm() {
    const textFields = ['departure_location', 'destination'];
    const regex = /^[A-Za-z\s]+$/;
  
    for (let field of textFields) {
      let value = document.getElementById(field).value.trim();
      if (!regex.test(value)) {
        alert(`Please enter only letters in ${field.replace('_', ' ')}`);
        return false;
      }
    }
  
    const aircraft = document.getElementById("aircraft_name").value;
    if (!aircraft) {
      alert("Please select an aircraft.");
      return false;
    }
  
    return true;
  }
  