// Function to display all available crops
// Function to display all available crops
function displayAllCrops() {
    fetch('api/display_crops.php?show=true', {
        method: 'GET'
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch crops');
            }
            return response.json();
        })
        .then(data => { 
            const cropList = document.getElementById('cropList');
            cropList.innerHTML = '';
            data.forEach(crop => {
                const listItem = document.createElement('li');
                listItem.textContent = crop.crop_name;
                cropList.appendChild(listItem);
            });
        })
        .catch(error => console.error('Error fetching crops:', error));
}


// Function to get details for a specific crop
function getCropDetails() {
    const cropId = document.getElementById('cropId').value;
    fetch('api/display_crop_action.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ crop_id: cropId })
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch crop details');
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
            const cropDetails = document.getElementById('cropDetails');
            cropDetails.innerHTML = ''; // Clear previous details
            cropDetails.innerHTML = `
                <p>Crop ID: ${data[0].crop_name}</p>
                <p>Quantity: ${data[0].quantity}</p>
                <p>Planting Date: ${data[0].planting_date}</p>
                <p>Harvesting Date: ${data[0].harvesting_date}</p>
            `;
        })
        .catch(error => {
            const cropDetails = document.getElementById('cropDetails');
            cropDetails.innerHTML = 'Error fetching crop details';
            console.error('Error fetching crop details:', error);
        });
}

// Call displayAllCrops when the page loads
document.addEventListener('DOMContentLoaded', displayAllCrops);
