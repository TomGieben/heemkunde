<div>
    <div class="mb-4 d-flex justify-content-center">
        <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
        alt="example placeholder" style="width: 300px;" id="preview" class="rounded"/>
    </div>
    <div class="d-flex justify-content-center">
        <div class="btn btn-primary btn-rounded">
            <label class="form-label m-1" for="image">
                <i class="fas fa-upload"></i> Upload afbeelding
            </label>
            <input type="file" class="form-control d-none" id="image" name="image"/>
        </div>
    </div>
</div>
<script>
    window.addEventListener("load", (event) => {
        const uploader = new window.ImageUploader('{{ $url }}');
    });
</script>