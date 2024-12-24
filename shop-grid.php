<?php include 'header.php'; ?>


<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/categories/slider-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Ads</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>Ads</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between section-title">
                    <h2>
                        Ads
                    </h2>
                </div>
                <div class="product_single_content">
                    <div class="mbp_pagination_comments ProductSingleContent-pading mt30">

                        <div class="mbp_comment_form style2">

                            <form class="comments_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Product Name </label>
                                            <input type="text" class="form-control mb-2 " placeholder="Enter Product Name" name="name" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control mb-2 " placeholder="Enter Price" name="Price" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="tel" class="form-control mb-2 " placeholder="Enter Location" name="Location" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    


                                            <label>Product Image </label>
                                            <div class="form-group">
                                                <div class="fv-row mb-2">
                                                    <div class="dropzone dz-clickable" id="kt_ecommerce_add_product_media">
                                                        <div class="upload-box">
                                                            <input type="file" id="fileInput" multiple hidden accept="image/*" />
                                                            <label for="fileInput" class="upload-label" id="uploadLabel">
                                                                <span class="upload-icon" id="uploadIcon">
                                                                    <img src="/classfiledwepapp/src/media/icons/duotone/files/upload.svg" alt="upload">
                                                                </span>
                                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1" id="uploadText">
                                                                    Drop files here or click to upload.
                                                                </h3>
                                                                <span class="fs-7 fw-semibold text-gray-500" id="uploadSubText">
                                                                    Upload up to 10 files
                                                                </span>
                                                            </label>
                                                            <!-- Image Preview Container -->
                                                            <div id="imagePreviewContainer" style="display: flex; flex-wrap: wrap; gap: 10px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                            <div class="row">
                                            <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label>Product Categories</label>
                                            <select>
                                                    <option value="mobail">Mobail</option>
                                                    <option value="Laptop">Laptop</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label>Product Sub Categories</label>
                                            <select>
                                                    <option value="mobail">Mobail</option>
                                                    <option value="Laptop">Laptop</option>
                                                </select>
                                        </div>
                                    </div>
</div>
<div class="row">                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label>Select a product Availability</label>
                                            <select>
                                                    <option value="instock">In Stock</option>
                                                    <option value="out of stock">Out Of Stock</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label>Description</label>
                                           <textarea rows="6" class="form-control"  value=""></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="d-flex float-right">
                                <button type="submit" class="view_button_dasboard_page">Submit</button>
                               
                            </div>
                                    </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>



        </div>
</section>
<!-- Product Section End -->

<?php include 'footer.php'; ?>

<script>
    document.getElementById("fileInput").addEventListener("change", function(event) {
        const files = event.target.files; // Get selected files
        const previewContainer = document.getElementById("imagePreviewContainer");
        const uploadLabel = document.getElementById("uploadLabel");
        const uploadIcon = document.getElementById("uploadIcon");
        const uploadText = document.getElementById("uploadText");
        const uploadSubText = document.getElementById("uploadSubText");

        previewContainer.innerHTML = ""; // Clear previous previews

        if (files.length > 0) {
            // Hide upload label text and icon
            uploadIcon.style.display = "none";
            uploadText.style.display = "none";
            uploadSubText.style.display = "none";
        } else {
            // Show upload label text and icon if no files are selected
            uploadIcon.style.display = "block";
            uploadText.style.display = "block";
            uploadSubText.style.display = "block";
        }

        // Preview selected images
        Array.from(files).forEach((file) => {
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.style.width = "100px";
                    img.style.height = "100px";
                    img.style.objectFit = "cover";
                    img.style.border = "1px solid #ddd";
                    img.style.borderRadius = "5px";
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>