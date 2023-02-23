<?php include 'header.php'; ?>

<style>
a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
}

a,
a:hover {
    text-decoration: none !important;
}

.text-black {
    color: #000;
}

.content {
    padding: 7rem 0;
}

.heading {
    font-size: 2.5rem;
    font-weight: 900;
}

.form-control {
    border: none;
    border-bottom: 1px solid #ccc;
    padding-left: 0;
    padding-right: 0;
    border-radius: 0;
    background: none;
}

.form-control:active,
.form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000;
}

.col-form-label {
    color: #000;
    font-size: 13px;
}

.btn,
.form-control,
.custom-select {
    height: 45px;
    border-radius: 0;
}

.custom-select {
    border: none;
    border-bottom: 1px solid #ccc;
    padding-left: 0;
    padding-right: 0;
    border-radius: 0;
}

.custom-select:active,
.custom-select:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000;
}

.btn {
    border: none;
    border-radius: 0;
    font-size: 11px;
    letter-spacing: .2rem;
    text-transform: uppercase;
    border-radius: 30px !important;
}

.btn.btn-primary {
    border-radius: 30px;
    background: #ef4339;
    color: #fff;
    -webkit-box-shadow: 0 15px 30px 0 rgba(239, 67, 57, 0.2);
    box-shadow: 0 15px 30px 0 rgba(239, 67, 57, 0.2);
}

.btn:hover {
    color: #fff;
}

.btn:active,
.btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.contact-wrap {
    -webkit-box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.05);
    border: 1px solid #efefef;
}

.contact-wrap .col-form-label {
    font-size: 14px;
    color: #000000;
    /*color for label*/
    margin: 0 0 10px 0;
    display: inline-block;
    text-transform: uppercase;
    padding: 0;
}

.contact-wrap .form,
.contact-wrap .contact-info {
    padding: 40px;
}

.contact-wrap .contact-info {
    color: rgba(255, 255, 255, 0.5);
}

.contact-wrap .contact-info ul li {
    margin-bottom: 15px;
    color: rgba(255, 255, 255, 0.5);
}

.contact-wrap .contact-info ul li .wrap-icon {
    font-size: 20px;
    color: #fff;
    margin-top: 5px;
}

.contact-wrap .form {
    background: #fff;
}

.contact-wrap .form h3 {
    color: #000;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 30px;
}

.contact-wrap .contact-info {
    height: 100vh;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

.contact-wrap .contact-info a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}

.form-control::placeholder {
    color: #b3b3b3;
}

</style>

<body>
    <div class="content">
        <div class="container">
            <div class="row align-items-stretch no-gutters contact-wrap">
                <div class="col-md-12">
                    <div class="form h-100">
                        <h2 class="underline"><span>Application Form</span></h2><br>
                        <form class="mb-5" method="post" id="contactForm" name="contactForm">
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Name of Child *</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name of Child">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="gender" class="col-form-label">Gender</label>
                                    <select class="custom-select" id="gender" name="gender">
                                        <option selected>Choose...</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="gender" class="col-form-label">Admission sought for class</label>
                                    <select class="custom-select" id="admissionclass" name="admissionclass">
                                        <option selected>Choose...</option>
                                        <option value="playgroup">PlayGroup - Little Settler</option>
                                        <option value="nursery">Nursery - Little Growun Up</option>
                                        <option value="lkg">LKG - Little Junior</option>
                                        <option value="UKG">UKG - Little Senior</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Father's Name *</label>
                                    <input type="text" class="form-control" name="faname" id="faname"
                                        placeholder="Father's Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Mother's Name *</label>
                                    <input type="text" class="form-control" name="moname" id="moname"
                                        placeholder="Mother's Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Mobile Number *</label>
                                    <input type="text" class="form-control" name="monumber" id="monumber"
                                        placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Address *</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                        placeholder="Full Address"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>