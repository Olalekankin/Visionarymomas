const navBtn = document.querySelector('.navbar-btn')
const closeBtn = document.querySelector('.close-btn')
const navBar = document.querySelector('.navbar')

navBtn.addEventListener('click', ()=>{
    navBar.classList.add('active')
});

closeBtn.addEventListener('click', ()=>{
    navBar.classList.remove('active')
});


const modal = document.querySelector("#modal");
const openModal = document.querySelector(".open-button");
const closeModal = document.querySelector(".close-button");
const exitModal = document.querySelectorAll(".exit");

openModal.addEventListener("click", () => {
  modal.showModal();
});

closeModal.addEventListener("click", () => {
  modal.close();
});

exitModal.forEach((exit) => {
    exit.addEventListener("click", () => {
        modal.close();
    });
});

// form slide control functionality.
 
// Get the necessary elements
const nextButton = document.getElementById('next');
const vendorElements = document.querySelectorAll('.vendor');
const productElements = document.querySelectorAll('.product');
const imageElements = document.querySelectorAll('.image');
const productPagButton = document.querySelector('.product-pag');
const imagePagButton = document.querySelector('.image-pag');
const slide = document.querySelector('.slide');
const doneSection = document.querySelector('.done');

let clickCount = 0; // Track the number of times the button is clicked

// Add event listener to the next button
nextButton.addEventListener('click', () => {
  clickCount++;

  if (clickCount === 1) {
    // Remove active class from vendor elements
    vendorElements.forEach((element) => {
      element.classList.remove('active');
    });

    // Add active class to product elements
    productElements.forEach((element) => {
      element.classList.add('active');
    });

    // Add active class to product-pag button
    productPagButton.classList.add('active');
  } else if (clickCount === 2) {
    // Remove active class from product elements
    productElements.forEach((element) => {
      element.classList.remove('active');
    });

    // Add active class to image elements
    imageElements.forEach((element) => {
      element.classList.add('active');
    });

    // Add active class to image-pag button
    imagePagButton.classList.add('active');
  } else if (clickCount === 3) {
    // Remove active class from slide
    slide.classList.remove('active');

    // Add active class to done section
    doneSection.classList.add('active');
  }
});


// Get the necessary elements
const uploadBtn = document.getElementById('upload-btn');
const fileInput = document.getElementById('file-input');
const imageUploads = document.querySelectorAll('.image-upload');
const uploadArea = document.querySelector('.upload-area');

// Prevent form default behavior on upload button click
uploadBtn.addEventListener('click', (event) => {
 console.log(fileInput)
  fileInput.click();
  event.preventDefault();
});

// Handle file input change event
fileInput.addEventListener('change', (event) => {
  const files = event.target.files;
  const maxImages = 4;

  // Display the selected images
  for (let i = 0; i < Math.min(files.length, maxImages); i++) {
    const file = files[i];
    const reader = new FileReader();

    reader.onload = (e) => {
      const imageURL = e.target.result;
      const imageUpload = imageUploads[i];

      imageUpload.style.backgroundImage = `url(${imageURL})`;
      imageUpload.classList.remove('hidden');
    };

    reader.readAsDataURL(file);
  }
});

// Handle drag and drop functionality
uploadArea.addEventListener('dragover', (event) => {
  event.preventDefault();
  uploadArea.classList.add('drag-over');
});

uploadArea.addEventListener('dragleave', () => {
  uploadArea.classList.remove('drag-over');
});

uploadArea.addEventListener('drop', (event) => {
  event.preventDefault();
  uploadArea.classList.remove('drag-over');

  const files = event.dataTransfer.files;
  fileInput.files = files;

  // Trigger file input change event to display the selected images
  const changeEvent = new Event('change');
  fileInput.dispatchEvent(changeEvent);
});

// Handle delete button click for each image upload
imageUploads.forEach((imageUpload) => {
    const deleteButton = imageUpload.querySelector('.del');

  deleteButton.addEventListener('click', () => {
    imageUpload.style.backgroundImage = '';
    imageUpload.classList.add('hidden');
  });
});
