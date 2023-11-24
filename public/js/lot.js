document.addEventListener('DOMContentLoaded', () => {
  const parkingSpaces = document.querySelectorAll('.ParkingSpace');
  const countDisplay = document.getElementById('count');
  const totalDisplay = document.getElementById('total');

  let selectedSpaceId = null; 
  let ticketPrice = 500; // Set your ticket price here

  

  // Assign IDs to parking spaces and add click event listeners
  parkingSpaces.forEach((parkingSpace, index) => {
    parkingSpace.setAttribute('data-space-id', index + 1);

    parkingSpace.addEventListener('click', () => {
      if (!parkingSpace.classList.contains('Occupied') &&
          !parkingSpace.classList.contains('Reserved')) {
        parkingSpace.classList.toggle('selected');

        if (selectedSpaceId !== null) {
          alert('Please select only one parking space.');
          return; // Prevent further selection
        }

        parkingSpace.classList.add('selected');
        selectedSpaceId = parkingSpace.getAttribute('data-space-id');

        updateSelectedCount();
      }
    });
  });

  // Function to update count and total based on selected spaces
  function updateSelectedCount() {
    const selectedSpaceCount = selectedSpaceIds.length;
    countDisplay.textContent = selectedSpaceCount;
    totalDisplay.textContent = selectedSpaceCount * ticketPrice;

    // Update the hidden input fields with selected space IDs and total price
    document.getElementById('selectedSpacesIds').value = selectedSpaceIds.join(',');
    document.getElementById('totalprice').value = selectedSpaceCount * ticketPrice;
  }
});
