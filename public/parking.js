document.addEventListener('DOMContentLoaded', function () {
    const parkingLot = document.getElementById('parkingLot');

    // Generate buildings
    for (let i = 1; i <= 10; i++) {
        const building = document.createElement('div');
        building.classList.add('building');
        parkingLot.appendChild(building);
    }

    // Generate parking sections
    const parkingSections = ['A', 'B', 'C'];
    parkingSections.forEach(section => {
        const sectionHeader = document.createElement('div');
        sectionHeader.classList.add('parking-section');
        sectionHeader.textContent = `Section ${section}`;
        parkingLot.appendChild(sectionHeader);

        // Generate parking spaces for each section
        for (let i = 1; i <= 10; i++) {
            const parkingSpace = document.createElement('div');
            parkingSpace.classList.add('parking-space');
            parkingSpace.textContent = `${section}-${i}`;

            parkingSpace.addEventListener('click', function () {
                toggleParkedStatus(parkingSpace);
            });

            parkingLot.appendChild(parkingSpace);
        }
    });

    // Function to toggle parked status
    function toggleParkedStatus(space) {
        space.classList.toggle('parked-car');
    }
});
