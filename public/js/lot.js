document.addEventListener('DOMContentLoaded', () => {
    const parkingSpaces = document.querySelectorAll('.ParkingSpace');
    const countDisplay = document.getElementById('count');
    const totalDisplay = document.getElementById('total');
  
    let ticketPrice = 500; // Set your ticket price here
  
    // Function to update count and total based on selected spaces
    function updateSelectedCount() {
      const selectedSpaces = document.querySelectorAll('.ParkingSpace.selected');
      const selectedSpacesCount = selectedSpaces.length;
      countDisplay.textContent = selectedSpacesCount;
      totalDisplay.textContent = selectedSpacesCount * ticketPrice;
    }
  
    // Event listeners for parking space selection
    parkingSpaces.forEach(parkingSpace => {
      parkingSpace.addEventListener('click', () => {
        if (
          !parkingSpace.classList.contains('Occupied') &&
          !parkingSpace.classList.contains('Reserved')
        ) {
          parkingSpace.classList.toggle('selected');
          updateSelectedCount();
        }
      });
    });
  
    // Event listener for parking lot change if needed
    const parkingLotSelect = document.getElementById('ParkingLot');
    parkingLotSelect.addEventListener('change', e => {
      // Handle parking lot change event if necessary
      // You can fetch data from the server based on the selected parking lot
      // Update ticketPrice or perform other actions accordingly
    });
  });
  