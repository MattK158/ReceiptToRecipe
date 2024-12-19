document.getElementById('image-input').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        // Create a URL for the image file
        const imgUrl = URL.createObjectURL(file);

        // Display the selected image in the browser (optional)
		/*
        const img = new Image();
        img.src = imgUrl;
        document.body.appendChild(img);
		*/
        // Run OCR with Tesseract.js
        Tesseract.recognize(
            imgUrl,
            'eng', // Specify language (English here)
            {
                logger: (m) => {
                    console.log(m); // Log progress for debugging
                }
            }
        ).then(({ data: { text } }) => {
            // Show the OCR result in the `ocr-result` div
            document.getElementById('ocr-result').innerText = text;
        }).catch(error => {
            console.error(error);
            alert('Error during OCR process.');
        });
    }
});