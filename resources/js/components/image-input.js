window.ImageUploader = class ImageUploader {
    constructor(imageUrl) {
        this.imageInput = document.getElementById('image');
        this.previewImage = document.getElementById('preview');

        this.imageInput.addEventListener('change', this.handleImageSelect.bind(this));

        if (imageUrl) {
            this.setImage(imageUrl);
        }
    }

    handleImageSelect(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                this.setImage(e.target.result);
            };
            reader.readAsDataURL(file);
        }
    }

    setImage(imageUrl) {
        this.previewImage.src = imageUrl;
    }
}