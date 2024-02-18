//PHẦN ĐIỀU HƯỚNG PHÂN TRANG

const carsPerPage = 6;
let currentPage = 1;

function displayCars() {
    const startIndex = (currentPage - 1) * carsPerPage;
    const endIndex = startIndex + carsPerPage;
    const cars = document.querySelectorAll(".car");
    cars.forEach((car, index) => {
        if (index >= startIndex && index < endIndex) {
            car.style.display = "block";
        } else {
            car.style.display = "none";
        }
    });
}

function goToPrevPage() {
    if (currentPage > 1) {
        currentPage--;
        displayCars();
    }
}

function goToNextPage() {
    const cars = document.querySelectorAll(".car");
    const totalCars = cars.length;

    if (currentPage < Math.ceil(totalCars / carsPerPage)) {
        currentPage++;
        displayCars();
    }
}




// add event listeners to pagination buttons
document.getElementById("prev-btn").addEventListener("click", goToPrevPage);
document.getElementById("next-btn").addEventListener("click", goToNextPage);

// display the first page of cars on page load
displayCars();
